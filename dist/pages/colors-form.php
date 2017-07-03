<h1>Forms Colors Support</h1>
<?php
foreach($colors as $color) {
    ?>
    <form class="color-<?php echo $color; ?>">
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
}
?>
<h1>Forms Background Colors Support</h1>
<?php
foreach($colors as $bgColor) {
    ?>
    <form class="bg-<?php echo $bgColor; ?>">
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
}
?>
<h2>Class</h2>
<?php
foreach($colors as $bgColor) {
    ?>
    <form class="bg-<?php echo $bgColor; ?>">
        <?php
        foreach($colors as $color) {
            if($bgColor === $color) {
                continue;
            }
            ?>
            <div class="color-<?php echo $color; ?>">
                <?php
                @include './inc/forms-text-inputs.php';
                @include './inc/forms-checkboxes-and-radio.php';
                @include './inc/forms-selects.php';
                @include './inc/forms-ranges.php';
                @include './inc/forms-file-inputs.php';
                @include './inc/forms-decorators.php';
                ?>
            </div>
            <?php
        }
        ?>
    </form>
    <?php
}
