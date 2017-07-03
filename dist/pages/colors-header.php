<h1>Headers Colors Support</h1>
<?php
for($i=1; $i <= 6; $i++) {
    ?>
    <h<?php echo $i; ?>>Header <?php echo $i; ?> Color Normal</h<?php echo $i; ?>>
    <?php
    foreach($colors as $color) {
        ?>
        <h<?php echo $i; ?> class="color-<?php echo $color; ?>"><?php echo 'Header ' . $i . ' ' . mb_strtoupper($color); ?></h<?php echo $i; ?>>
        <div class="color-<?php echo $color; ?>">
            <h<?php echo $i; ?>><?php echo 'Inside Header ' . $i . ' ' . mb_strtoupper($color); ?></h<?php echo $i; ?>>
        </div>
        <?php
    }
    ?><hr /><?php
}
?>
<h1>Headers Background Colors Support</h1>
<?php
for($i=1; $i <= 6; $i++) {
    foreach($colors as $bgColor) {
        ?>
        <div class="bg-<?php echo $bgColor; ?>">
            <h<?php echo $i; ?>>Header <?php echo $i; ?> Color Normal</h<?php echo $i; ?>>
            <?php
            foreach($colors as $color) {
                if($bgColor === $color) {
                    continue;
                }
                ?>
                <h<?php echo $i; ?> class="color-<?php echo $color; ?>"><?php echo 'Header ' . $i . ' ' . mb_strtoupper($color); ?></h<?php echo $i; ?>>
                <div class="color-<?php echo $color; ?>">
                    <h<?php echo $i; ?>><?php echo 'Inside Header ' . $i . ' ' . mb_strtoupper($color); ?></h<?php echo $i; ?>>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
    }
    ?><hr /><?php
}
?>
