<h1>Progress Bars Colors Support</h1>
<h2>Class</h2>
<?php
foreach($colors as $color) {
    ?>
    <div class="progress color-<?php echo $color; ?>" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
        <span class="progress-meter" style="width: 25%">
            <p class="progress-meter-text">25%</p>
        </span>
    </div>
    <progress class="color-<?php echo $color; ?>" max="100" value="75"></progress>
    <meter class="color-<?php echo $color; ?>" value="30" min="0" low="33" high="66" optimum="100" max="100"></meter>
    <?php
}
?>
<h2>Inside</h2>
<?php
foreach($colors as $color) {
    ?>
    <div class="color-<?php echo $color; ?>">
        <div class="progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
            <span class="progress-meter" style="width: 25%">
                <p class="progress-meter-text">25%</p>
            </span>
        </div>
        <progress max="100" value="75"></progress>
        <meter value="30" min="0" low="33" high="66" optimum="100" max="100"></meter>
    </div>
    <?php
}
?>
<h1>Progress Bars Background Colors Support</h1>
<?php
foreach($colors as $bgColor) {
    ?>
    <div class="bg-<?php echo $bgColor; ?> bg-test-padding">
        <div class="progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
            <span class="progress-meter" style="width: 25%">
                <p class="progress-meter-text">25%</p>
            </span>
        </div>
        <progress max="100" value="75"></progress>
        <meter value="30" min="0" low="33" high="66" optimum="100" max="100"></meter>
    </div>
    <?php
}
?>
<h2>Class</h2>
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
            <div class="progress color-<?php echo $color; ?>" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
                <span class="progress-meter" style="width: 25%">
                    <p class="progress-meter-text">25%</p>
                </span>
            </div>
            <progress class="color-<?php echo $color; ?>" max="100" value="75"></progress>
            <meter class="color-<?php echo $color; ?>" value="30" min="0" low="33" high="66" optimum="100" max="100"></meter>
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
                <div class="progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
                    <span class="progress-meter" style="width: 25%">
                        <p class="progress-meter-text">25%</p>
                    </span>
                </div>
                <progress max="100" value="75"></progress>
                <meter value="30" min="0" low="33" high="66" optimum="100" max="100"></meter>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
