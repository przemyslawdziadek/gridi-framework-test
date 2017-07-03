<h1>Thematic Break Line Colors Support</h1>
<hr>
<?php
foreach($colors as $color) {
    ?>
    <hr class="color-<?php echo $color; ?>">
    <?php
}
?>
<h2>Inside</h2>
<?php
foreach($colors as $color) {
    ?>
    <div class="color-<?php echo $color; ?>">
        <hr>
    </div>
    <?php
}
?>
<h1>Thematic Break Line Background Colors Support</h1>
<?php
foreach($colors as $bgColor) {
    ?>
    <div class="bg-<?php echo $bgColor; ?> bg-test-padding">
        <hr>
    </div>
    <?php
}
?>
<h2>Classes</h2>
<?php
foreach($colors as $bgColor) {
    ?>
    <div class="bg-<?php echo $bgColor; ?> bg-test-padding">
        <?php
        foreach($colors as $color) {
            if($bgColor === $color) {
                continue;
            }
            ?>
            <hr class="color-<?php echo $color; ?>">
            <?php
        }
        ?>
    </div>
    <?php
}
?>
<h2>Inside</h2>
<?php
foreach($colors as $bgColor) {
    ?>
    <div class="bg-<?php echo $bgColor; ?> bg-test-padding">
        <?php
        foreach($colors as $color) {
            if($bgColor === $color) {
                continue;
            }
            ?>
            <div class="color-<?php echo $color; ?>">
                <hr>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
