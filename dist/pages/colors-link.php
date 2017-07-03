<h1>Links Colors Support</h1>
<div><a href="#">NORMAL Link</a></div>
<?php
foreach($colors as $color) {
    ?>
    <div><a href="#" class="color-<?php echo $color; ?>"><?php echo mb_strtoupper($color); ?> Link</a></div>
    <?php
}
?>
<h2>Inside</h2>
<?php
foreach($colors as $color) {
    ?>
    <div class="color-<?php echo $color; ?>">
        <div><a href="#"><?php echo mb_strtoupper($color); ?> Link</a></div>
    </div>
    <?php
}
?>
<h1>Links Background Colors Support</h1>
<?php
foreach($colors as $bgColor) {
    ?>
    <div class="bg-<?php echo $bgColor; ?> bg-test-padding">
        <div><a href="#"><?php echo mb_strtoupper($bgColor); ?> Link</a></div>
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
            <div><a href="#" class="color-<?php echo $color; ?>"><?php echo mb_strtoupper($color); ?> Link</a></div>
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
                <div><a href="#"><?php echo mb_strtoupper($color); ?> Link</a></div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
