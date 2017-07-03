<?php
foreach($colors as $color) {
    ?>
    <div class="color-<?php echo $color; ?>">
        <?php
        @include './inc/headers.php';
        @include './inc/paragraphs.php';
        @include './inc/thematic-break-line.php';
        @include './inc/formating.php';
        @include './inc/addresses.php';
        @include './inc/blockquotes.php';
        @include './inc/preformatted.php';
        @include './inc/links.php';
        @include './inc/lists.php';
        @include './inc/description-lists.php';
        @include './inc/tables.php';
        @include './inc/images.php';
        @include './inc/audio.php';
        @include './inc/video.php';
        @include './inc/iframe.php';
        ?>
        <form>
            <?php
            @include './inc/forms-text-inputs.php';
            @include './inc/forms-checkboxes-and-radio.php';
            @include './inc/forms-selects.php';
            @include './inc/forms-ranges.php';
            @include './inc/forms-file-inputs.php';
            @include './inc/forms-decorators.php';
            ?>
        </form>
        <?php
        @include './inc/buttons.php';
        @include './inc/progress-bars.php';
        ?>
    </div>
    <?php
}
