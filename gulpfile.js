var gulp = require('gulp');
var gutil = require('gulp-util');
var gulpSass = require('gulp-sass');
var gulpCssMin = require('gulp-cssmin');
var gulpStripCssComments = require('gulp-strip-css-comments');
var gulpRename = require('gulp-rename');
var gulpConcat = require('gulp-concat');
var gulpUglify = require('gulp-uglify');

function isDev() {
    return gutil.env.type === 'dev' ? true : false;
}

gulp.task('default', function() {
    if(isDev()) {
        gulp.src('./src/gridi-dev.scss')
            .pipe(gulpSass().on('error', gulpSass.logError))
            .pipe(gulpRename('gridi.css'))
            .pipe(gulp.dest('./dist/css'));
    } else {
        gulp.src('./src/gridi.scss')
            .pipe(gulpSass().on('error', gulpSass.logError))
            .pipe(gulp.dest('./dist/css'));
    }

    //JS
    if(isDev()) {
        gulp.src([
            './../gridi-jquery-plugins/gridi-jquery-plugins-navigation/navigation.js',
            './../gridi-jquery-plugins/gridi-jquery-plugins-to-top-scroller/to-top-scroller.js',
            './../gridi-jquery-plugins/gridi-jquery-plugins-navigation-scroller/navigation-scroller.js'
            //'./../../gridi-jquery/gridi-jquery-hide-header-on-scroll/hide-header-on-scroll.js'
        ])
            .pipe(gulpConcat('gridi-js.js'))
            /*.pipe(gulpUglify().on('error', function(err) {
                console.error(err.toString());
            }))*/
            .pipe(gulp.dest('./dist/js'));
    }
});

gulp.task('watch', function() {
    if(isDev()) {
        gulp.watch('./../**/*.scss', ['default']);
    }
});
