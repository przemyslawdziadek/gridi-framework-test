<?php
$embedsRatios = ['', '1by1', '4by4', '16by9', '21by9'];
?>
<h1>Responsive Embed</h1>
<h2>Image</h2>
<div class="row">
    <?php foreach($embedsRatios as $embedsRatio) {
        ?>
        <div class="column column-2">
            <h3><?php echo mb_strlen($embedsRatio) > 0 ? $embedsRatio : 'Normal'; ?></h3>
            <div class="responsive-embed <?php echo mb_strlen($embedsRatio) > 0 ? 'responsive-embed-' . $embedsRatio : ''; ?>">
                <img src="img/css3.jpg" />
            </div>
        </div>
        <?php
    }
    ?>
</div>
<h2>Video</h2>
<div class="row">
    <?php foreach($embedsRatios as $embedsRatio) {
        ?>
        <div class="column column-2">
            <h3><?php echo mb_strlen($embedsRatio) > 0 ? $embedsRatio : 'Normal'; ?></h3>
            <div class="responsive-embed <?php echo mb_strlen($embedsRatio) > 0 ? 'responsive-embed-' . $embedsRatio : ''; ?>">
                <video controls style="background: red">
                    <source src="assets/test.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<h2>IFrame</h2>
<div class="row">
    <?php foreach($embedsRatios as $embedsRatio) {
        ?>
        <div class="column column-2">
            <h3><?php echo mb_strlen($embedsRatio) > 0 ? $embedsRatio : 'Normal'; ?></h3>
            <p>
                IFrame have width and height set in HTML tag - remembera about check is CSS set width and height to 100%
            </p>
            <div class="responsive-embed <?php echo mb_strlen($embedsRatio) > 0 ? 'responsive-embed-' . $embedsRatio : ''; ?>">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qPTfXwPf_HM" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<h2>Embed</h2>
<div class="row">
    <?php foreach($embedsRatios as $embedsRatio) {
        ?>
        <div class="column column-2">
            <h3><?php echo mb_strlen($embedsRatio) > 0 ? $embedsRatio : 'Normal'; ?></h3>
            <p>
                Embed have width and height set in HTML tag - remembera about check is CSS set width and height to 100%
            </p>
            <div class="responsive-embed <?php echo mb_strlen($embedsRatio) > 0 ? 'responsive-embed-' . $embedsRatio : ''; ?>">
                <embed width="420" height="315" src="https://www.youtube.com/embed/qPTfXwPf_HM">
            </div>
        </div>
        <?php
    }
    ?>
</div>
<h2>Object</h2>
<div class="row">
    <?php foreach($embedsRatios as $embedsRatio) {
        ?>
        <div class="column column-2">
            <h3><?php echo mb_strlen($embedsRatio) > 0 ? $embedsRatio : 'Normal'; ?></h3>
            <p>
                Object have width and height set in HTML tag - remembera about check is CSS set width and height to 100%
            </p>
            <div class="responsive-embed <?php echo mb_strlen($embedsRatio) > 0 ? 'responsive-embed-' . $embedsRatio : ''; ?>">
                <object width="420" height="315" data="https://www.youtube.com/embed/qPTfXwPf_HM"></object>
            </div>
        </div>
        <?php
    }
    ?>
</div>
