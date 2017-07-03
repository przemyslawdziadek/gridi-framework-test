(function ( $ ) {
    'use strict';

    var Navigation = function(navElement, options) {
        var navigationElement = $(navElement);
        var switchButton;

        var settings = $.extend(true, {
            supportSwitch: true,
            supportOpenSubNav: true,
            supportLinkFocus: true,
            supportMobileSwitchRules: true,
            elements: {
                switchButton: false
            },
            selectors: {
                navSwitcher: '.nav-switcher',
                element: '.nav-item',
                link: 'a',
                subNav: '.nav-item-sub-nav'

            },
            classes: {
                openNav: 'open-nav',
                linkFocus: 'link-focus',
                openSubNav: 'open-sub-nav'
            },
            elementsClasses: {
                onOpenNav: {}, //make { className: [element, element, ...], secondClassName: [element, ...]}
                onFocusLink: {},
                onOpenSubNav: {}
            },
            rules: {
                canOpenNav: function() { return true; },
                canFocusLink: function() { return true; },
                canOpenSubNav: function() { return true; }
            }

        }, options);

        var linksElements = navigationElement.find(settings.selectors.element + ' ' + settings.selectors.link);

        //Support switch initialized
        if(isSupportSwitch()) {
            if($.type(settings.elements.switchButton) === 'object') {
                switchButton = $(settings.elements.switchButton);
            } else {
                switchButton = navigationElement.find(settings.selectors.navSwitcher);
            }

            if(switchButton.length > 0) {
                settings.elementsClasses.onOpenNav = makeJQueryElements(settings.elementsClasses.onOpenNav);

                switchButton.on('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    if(!isNavOpen() && settings.rules.canOpenNav()) {
                        openNav();
                    } else {
                        closeNav();
                    }
                });
            } else {
                settings.supportSwitch = false;
            }
        }

        //Support links focus initialized
        if(isSupportLinkFocus()) {
            settings.elementsClasses.onFocusLink = makeJQueryElements(settings.elementsClasses.onFocusLink);

            linksElements.on('focusin', function() {
                if(canAddLinkFocusClasses()) {
                    linkFocusIn($(this));
                } else {
                    linkFocusOut($(this));
                }
            });

            linksElements.on('focusout', function() {
                linkFocusOut($(this));
            });
        }

        if(isOpenSupportSubNav()) {
            settings.elementsClasses.onOpenSubNav = makeJQueryElements(settings.elementsClasses.onOpenSubNav);

            linksElements.on('click', function(event) {
                var linkElement = $(this);
                if(canOpenSubNav()) {
                    if(hasSubNav(linkElement)) {
                        event.preventDefault();
                        event.stopPropagation();
                        if(isSubNavOpen(linkElement)) {
                            closeSubNav(linkElement);
                        } else {
                            openSubNav(linkElement);
                        }
                    }
                } else {
                    if(hasSubNav(linkElement)) {
                        closeSubNav(linkElement);
                    }
                }
            });
        }

        //Support mobile switch rules initialized
        if(isSupportMobileSwitchRules()) {
            jQuery(window).resize(function() {
                if(!isSwitchButtonVisible()) {
                    if(isOpenSupportSubNav()) {
                        linksElements.each(function() {
                            closeSubNav($(this));
                        });
                    }

                    closeNav();
                } else if(isSupportLinkFocus()) {
                    linksElements.each(function() {
                        linkFocusOut($(this));
                    });
                }
            });
        }

        //API

        this.isNavOpen = function() {
            return isNavOpen();
        };

        this.openNav = function() {
            openNav();
        };

        this.closeNav = function() {
            closeNav();
        };

        //Helpers

        function isNavOpen() {
            return navigationElement.hasClass(settings.classes.openNav);
        }

        function openNav() {
            if(!isNavOpen()) {
                navigationElement.addClass(settings.classes.openNav);
                addElementsClasses(settings.elementsClasses.onOpenNav);
                navigationElement.trigger('open-nav');
                switchButton.attr('aria-expanded', 'true');
            }
        }

        function closeNav() {
            if(isNavOpen()) {
                navigationElement.removeClass(settings.classes.openNav);
                removeElementsClasses(settings.elementsClasses.onOpenNav);
                navigationElement.trigger('close-nav');
                switchButton.attr('aria-expanded', 'false');
            }
        }

        function linkFocusIn(linkElement) {
            linkElement.parents(settings.selectors.element).addClass(settings.classes.linkFocus);
            addElementsClasses(settings.elementsClasses.onFocusLink);
            navigationElement.trigger('link-focusin', [linkElement]);
        }

        function linkFocusOut(linkElement) {
            linkElement.parents(settings.selectors.element).removeClass(settings.classes.linkFocus);
            removeElementsClasses(settings.elementsClasses.onFocusLink);
            navigationElement.trigger('link-focusout', [linkElement]);
        }

        function hasSubNav(linkElement) {
            return linkElement.parents(settings.selectors.element).first().find(settings.selectors.subNav).length > 0;
        }

        function isSubNavOpen(linkElement) {
            return linkElement.parents(settings.selectors.element).first().hasClass(settings.classes.openSubNav);
        }

        function openSubNav(linkElement) {
            linkElement.parents(settings.selectors.element).first().addClass(settings.classes.openSubNav);
            addElementsClasses(settings.elementsClasses.onOpenSubNav);
            navigationElement.trigger('open-sub-nav', [linkElement]);
        }

        function closeSubNav(linkElement) {
            linkElement.parents(settings.selectors.element).first().removeClass(settings.classes.openSubNav);
            removeElementsClasses(settings.elementsClasses.onOpenSubNav);
            navigationElement.trigger('close-sub-nav', [linkElement]);
        }

        function canAddLinkFocusClasses() {
            return isSupportLinkFocus() === true && settings.rules.canFocusLink() === true && (isSupportMobileSwitchRules() === false || (isSupportMobileSwitchRules() === true && !isSwitchButtonVisible()));
        }

        function canOpenSubNav() {
            return isOpenSupportSubNav() === true && settings.rules.canOpenSubNav() === true && (isSupportMobileSwitchRules() === false || (isSupportMobileSwitchRules() === true && isSwitchButtonVisible()));
        }

        function isSupportSwitch() {
            return settings.supportSwitch === true;
        }

        function isSupportMobileSwitchRules() {
            return isSupportSwitch() && settings.supportMobileSwitchRules === true;
        }

        function isSupportLinkFocus() {
            return settings.supportLinkFocus === true;
        }

        function isOpenSupportSubNav() {
            return settings.supportOpenSubNav === true;
        }

        function isSwitchButtonVisible() {
            return switchButton.is(':visible');
        }

        function makeJQueryElements(elements) {
            $.each(elements, function(index, insideElements) {
                $.each(insideElements, function(elementIndex, element) {
                    elements[index][elementIndex] = $(element);
                });
            });

            return elements;
        }

        function addElementsClasses(elements) {
            $.each(elements, function(cssClass, classElements) {
                $.each(classElements, function(elementIndex, element) {
                    element.addClass(cssClass);
                });
            });
        }

        function removeElementsClasses(elements) {
            $.each(elements, function(cssClass, classElements) {
                $.each(classElements, function(elementIndex, element) {
                    element.removeClass(cssClass);
                });
            });
        }
    };

    $.fn.navigation = function() {
        var navigationElements = this;
        var i, returnValue;

        for (i = 0; i < navigationElements.length; i++) {
            var navigationElement = navigationElements[i];

            if(navigationElement.navigation instanceof Navigation) {
                if(typeof navigationElement.navigation[arguments[0]] === 'function') {
                    returnValue = navigationElement.navigation[arguments[0]].apply(Array.prototype.slice.call(arguments, 1));
                } else {
                    throw 'Function: "' + arguments[0] + '" no exist';
                }
            } else {
                navigationElement.navigation = new Navigation(navigationElement, arguments[0]);
            }
        }

        if (typeof returnValue !== 'undefined') {
            return returnValue;
        }

        return navigationElements;
    };

}( jQuery ));

(function ( $ ) {
    'use strict';

    var ToTopScroller = function(element, options) {
        var documentElement = $(document);
        var bodyElement = $('body');
        var toTopScrollerElement = $(element);
        var topLimiterElement = false,
            bottomLimiterElement = false;
        var toTopScrollerElementHeight, toTopScrollerElementTop, windowHeight;
        var isScrollerLimitedOnTop = false,
            isScrollerLimitedOnBottom = false;

        var settings = $.extend(true, {
            animateDuration: 400,
            animateFunction: 'linear',
            changeScrollerPositionWhenLimitedOnTop: true,
            changeScrollerPositionWhenLimitedOnBottom: true,
            elements: {
                topLimiter: false,
                bottomLimiter: false
            },
            classes: {
                initialized: 'scroller-initialized',
                windowIsTop: 'window-is-top',
                windowIsBottom: 'window-is-bottom',
                scrollerLimitedOnTop: 'scroller-limited-on-top',
                scrollerLimitedOnBottom: 'scroller-limited-on-bottom'
            },
            elementsClasses: {
                onScrollerLimitedOnTop: {}, //make { className: [element, element, ...], secondClassName: [element, ...]}
                onScrollerLimitedOnBottom: {}
            }
        }, options);

        if($.type(settings.elements.topLimiter) === 'string' || $.type(settings.elements.topLimiter) === 'object') {
            topLimiterElement = $(settings.elements.topLimiter);
            settings.elementsClasses.onScrollerLimitedOnTop = makeJQueryElements(settings.elementsClasses.onScrollerLimitedOnTop);
        }

        if($.type(settings.elements.bottomLimiter) === 'string' || $.type(settings.elements.bottomLimiter) === 'object') {
            bottomLimiterElement = $(settings.elements.bottomLimiter);
            settings.elementsClasses.onScrollerLimitedOnBottom = makeJQueryElements(settings.elementsClasses.onScrollerLimitedOnBottom);
        }


        toTopScrollerElement.addClass(settings.classes.initialized);
        toTopScrollerElement.on('click', eventScrollToTop);

        refresh();
        $(window).on('resize', refresh);
        $(window).on('scroll', chackWindowPositionPosition);

        function eventScrollToTop(event) {
            event.preventDefault();
            event.stopPropagation();
            scrollToTop();
        }

        function scrollToTop() {
            toTopScrollerElement.trigger('start-scrolling');
            bodyElement.animate({
                scrollTop: 0
            }, settings.animateDuration, settings.animateFunction, function() {
                toTopScrollerElement.trigger('end-scrolling');
            } );
        }

        function refresh() {
            windowHeight = $(window).height();
            toTopScrollerElement.removeClass(settings.classes.windowIsTop);
            toTopScrollerElement.removeClass(settings.classes.windowIsBottom);

            if(topLimiterElement.length > 0 || bottomLimiterElement.length > 0) {
                $(window).off('scroll', chackScrollerPosition);
                toTopScrollerElement.removeClass(settings.classes.scrollerLimitedOnTop);
                toTopScrollerElement.removeClass(settings.classes.scrollerLimitedOnBottom);

                if(isFixedScroller()) {
                    if(settings.changeScrollerPositionWhenLimitedOnTop === true || settings.changeScrollerPositionWhenLimitedOnBottom === true) {
                        toTopScrollerElement.css({
                            top: '',
                            bottom: ''
                        });
                    }
                    toTopScrollerElementHeight = toTopScrollerElement.outerHeight(true);
                    toTopScrollerElementTop = parseInt(toTopScrollerElement.position().top);
                    if(settings.changeScrollerPositionWhenLimitedOnTop === true || settings.changeScrollerPositionWhenLimitedOnBottom === true) {
                        toTopScrollerElement.css({
                            top: toTopScrollerElementTop,
                            bottom: 'auto'
                        });
                    }
                    isScrollerLimitedOnTop = false;
                    isScrollerLimitedOnBottom = false;

                    chackScrollerPosition();
                    $(window).on('scroll', chackScrollerPosition);
                }
            }

            chackWindowPositionPosition();
        }

        function chackWindowPositionPosition() {
            var currentScrollTop = documentElement.scrollTop();

            if(currentScrollTop <= 0) {
                if(!toTopScrollerElement.hasClass(settings.classes.windowIsTop)) {
                    toTopScrollerElement.addClass(settings.classes.windowIsTop);
                }
            } else if(toTopScrollerElement.hasClass(settings.classes.windowIsTop)) {
                toTopScrollerElement.removeClass(settings.classes.windowIsTop);
            }

            if((currentScrollTop + windowHeight) >= $(document).outerHeight(true)) {
                if(!toTopScrollerElement.hasClass(settings.classes.windowIsBottom)) {
                    toTopScrollerElement.addClass(settings.classes.windowIsBottom);
                }
            } else if(toTopScrollerElement.hasClass(settings.classes.windowIsBottom)) {
                toTopScrollerElement.removeClass(settings.classes.windowIsBottom);
            }
        }

        function isFixedScroller() {
            return (toTopScrollerElement.css('position') == 'fixed');
        }

        function chackScrollerPosition() {
            var currentScrollTop = documentElement.scrollTop();
            var limitOffsetTop, newToTopScrollerElementTop;

            //check limit by top limiter
            if(topLimiterElement.length > 0) {
                limitOffsetTop = topLimiterElement.offset().top + topLimiterElement.outerHeight();
                newToTopScrollerElementTop = limitOffsetTop - currentScrollTop;

                if(newToTopScrollerElementTop > toTopScrollerElementTop) {
                    if(settings.changeScrollerPositionWhenLimitedOnTop === true) {
                        toTopScrollerElement.css('top', newToTopScrollerElementTop);
                    }
                    if(isScrollerLimitedOnTop === false) {
                        isScrollerLimitedOnTop = true;
                        toTopScrollerElement.addClass(settings.classes.scrollerLimitedOnTop);
                        addElementsClasses(settings.elementsClasses.onScrollerLimitedOnTop);
                        toTopScrollerElement.trigger('scroller-start-limited-on-top');
                    }
                } else if(isScrollerLimitedOnTop === true) {
                    if(settings.changeScrollerPositionWhenLimitedOnTop === true) {
                        toTopScrollerElement.css('top', toTopScrollerElementTop);
                    }
                    isScrollerLimitedOnTop = false;
                    toTopScrollerElement.removeClass(settings.classes.scrollerLimitedOnTop);
                    removeElementsClasses(settings.elementsClasses.onScrollerLimitedOnTop);
                    toTopScrollerElement.trigger('scroller-stop-limited-on-top');
                }
            }

            //check limit by bottom limiter
            if(bottomLimiterElement.length > 0) {
                limitOffsetTop = bottomLimiterElement.offset().top;
                newToTopScrollerElementTop = (limitOffsetTop - currentScrollTop) - toTopScrollerElementHeight;

                if(newToTopScrollerElementTop < toTopScrollerElementTop && isScrollerLimitedOnTop === false) {
                    if(settings.changeScrollerPositionWhenLimitedOnBottom === true) {
                        toTopScrollerElement.css('top', newToTopScrollerElementTop);
                    }
                    if(isScrollerLimitedOnBottom === false) {
                        isScrollerLimitedOnBottom = true;
                        toTopScrollerElement.addClass(settings.classes.scrollerLimitedOnBottom);
                        addElementsClasses(settings.elementsClasses.onScrollerLimitedOnBottom);
                        toTopScrollerElement.trigger('scroller-start-limited-on-bottom');
                    }
                } else {
                    if(isScrollerLimitedOnTop === false && isScrollerLimitedOnBottom === true && settings.changeScrollerPositionWhenLimitedOnBottom === true) {
                        toTopScrollerElement.css('top', toTopScrollerElementTop);
                    }

                    if(isScrollerLimitedOnTop === true || isScrollerLimitedOnBottom === true) {
                        isScrollerLimitedOnBottom = false;
                        toTopScrollerElement.removeClass(settings.classes.scrollerLimitedOnBottom);
                        removeElementsClasses(settings.elementsClasses.onScrollerLimitedOnBottom);
                        toTopScrollerElement.trigger('scroller-stop-limited-on-bottom');
                    }
                }
            }
        }

        function makeJQueryElements(elements) {
            $.each(elements, function(index, insideElements) {
                $.each(insideElements, function(elementIndex, element) {
                    elements[index][elementIndex] = $(element);
                });
            });

            return elements;
        }

        function addElementsClasses(elements) {
            $.each(elements, function(cssClass, classElements) {
                $.each(classElements, function(elementIndex, element) {
                    element.addClass(cssClass);
                });
            });
        }

        function removeElementsClasses(elements) {
            $.each(elements, function(cssClass, classElements) {
                $.each(classElements, function(elementIndex, element) {
                    element.removeClass(cssClass);
                });
            });
        }
    };

    //Initialize jQuery function
    $.fn.toTopScroller = function() {
        var toTopScrollerElements = this;
        var i, returnValue;

        for (i = 0; i < toTopScrollerElements.length; i++) {
            var toTopScrollerElement = toTopScrollerElements[i];

            if(toTopScrollerElement.toTopScroller instanceof ToTopScroller) {
                if(typeof toTopScrollerElement.toTopScroller[arguments[0]] === 'function') {
                    returnValue = toTopScrollerElement.toTopScroller[arguments[0]].apply(Array.prototype.slice.call(arguments, 1));
                } else {
                    throw 'Function: "' + arguments[0] + '" no exist';
                }
            } else {
                toTopScrollerElement.toTopScroller = new ToTopScroller(toTopScrollerElement, arguments[0]);
            }
        }

        if (typeof returnValue !== 'undefined') {
            return returnValue;
        }

        return toTopScrollerElements;
    };

}( jQuery ));

(function ( $ ) {
    'use strict';

    var NavScroller = function(element, options) {
        var windowElement = $(window);
        var documentElement = $(document);
        var htmlBodyElement = $('html, body');
        var navScrollerElement = $(element);
        var targetElement, targetAttributeValue, attributeForFindTargetElement;

        var settings = $.extend(true, {
            attributeForFindTargetElement: 'href',
            targetElementAttribute: 'id',
            updateHistory: true,
            topSpace: 0, // int topSpace: value | function topSpace: function() { return (int) topSpace }
            animateDuration: 400,
            animateFunction: 'linear',
            elements: {
                targetElement: false,
            },
            classes: {
                targetIsOnScrollPosition: 'target-is-on-scroll-position'
            }
        }, options);

        if($.type(settings.elements.targetElement) === 'string' || $.type(settings.elements.targetElement) === 'object') {
            targetElement = $(settings.elements.targetElement);
        } else {
            attributeForFindTargetElement = navScrollerElement.attr(settings.attributeForFindTargetElement);

            if ( attributeForFindTargetElement !== null && attributeForFindTargetElement !== '' ) {
                attributeForFindTargetElement = attributeForFindTargetElement.replace( /^#/, '' );
                targetElement = $('[' + settings.targetElementAttribute + '="' + attributeForFindTargetElement + '"]');
            }
        }

        if($.type(targetElement) === 'object' && targetElement.length > 0) {
            targetElement = targetElement.first();
            if(settings.updateHistory === true) {
                targetAttributeValue = targetElement.attr(settings.targetElementAttribute);
                if ( attributeForFindTargetElement !== null && attributeForFindTargetElement !== '' ) {
                    targetAttributeValue = targetAttributeValue.replace( /^#/, '' );
                    navScrollerElement.on('end-scrolling', eventUpdateHistory);
                }
            }

            navScrollerElement.on('click', eventScroll);
            $(window).on('scroll', eventUpdateClass);

        }

        function getTopSpace() {
            if($.type(settings.topSpace) === 'function') {
                return settings.topSpace();
            }

            return settings.topSpace;
        }

        function eventScroll(event) {
            event.preventDefault();
            event.stopPropagation();
            navScrollerElement.trigger('start-scrolling');

            htmlBodyElement.animate({
                scrollTop: targetElement.offset().top - getTopSpace()
            }, settings.animateDuration, settings.animateFunction, function() {
                navScrollerElement.trigger('end-scrolling');
            } );
        }

        function eventUpdateHistory() {
            location.hash = targetAttributeValue;
        }

        function eventUpdateClass() {
            var currentScrollTop = documentElement.scrollTop();
            var targetOffsetTop = targetElement.offset().top;

            if( currentScrollTop >= (targetOffsetTop - getTopSpace()) && currentScrollTop <= (targetOffsetTop + targetElement.outerHeight())) {
                if(!navScrollerElement.hasClass(settings.classes.targetIsOnScrollPosition)) {
                    navScrollerElement.addClass(settings.classes.targetIsOnScrollPosition);
                }
            } else {
                if(navScrollerElement.hasClass(settings.classes.targetIsOnScrollPosition)) {
                    navScrollerElement.removeClass(settings.classes.targetIsOnScrollPosition);
                }
            }
        }
    };

    //Initialize jQuery function
    $.fn.navigationScroller = function() {
        var navScrollerElements = this;
        var i;

        for (i = 0; i < navScrollerElements.length; i++) {
            var navScrollerElement = navScrollerElements[i];

            if(!(navScrollerElement.navScroller instanceof NavScroller)) {
                navScrollerElement.navScroller = new NavScroller(navScrollerElement, arguments[0]);
            }
        }

        return navScrollerElements;
    };

}( jQuery ));
