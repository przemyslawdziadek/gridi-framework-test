<?php
$embedsSizes = ['auto', 'contain', 'cover'];
?>
<h1>Responsive Embed Sizes</h1>
<h2>Image</h2>
<div class="row">
    <?php foreach($embedsSizes as $embedSize) {
        ?>
        <div class="column column-4">
            <h3><?php echo mb_strlen($embedSize) > 0 ? $embedSize : 'Normal'; ?></h3>
            <div class="responsive-embed">
                <img <?php echo mb_strlen($embedSize) > 0 ? 'class="responsive-embed-item-' . $embedSize . '"' : ''; ?> src="img/css3.jpg" />
            </div>
        </div>
        <?php
    }
    ?>
</div>
<h2>Video</h2>
<div class="row">
    <?php foreach($embedsSizes as $embedSize) {
        ?>
        <div class="column column-4">
            <h3><?php echo mb_strlen($embedSize) > 0 ? $embedSize : 'Normal'; ?></h3>
            <div class="responsive-embed">
                <video <?php echo mb_strlen($embedSize) > 0 ? 'class="responsive-embed-item-' . $embedSize . '"' : ''; ?> controls style="background: red">
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
    <?php foreach($embedsSizes as $embedSize) {
        ?>
        <div class="column column-4">
            <h3><?php echo mb_strlen($embedSize) > 0 ? $embedSize : 'Normal'; ?></h3>
            <p>
                IFrame have width and height set in HTML tag - remembera about check is CSS set width and height to 100%
            </p>
            <div class="responsive-embed">
                <iframe <?php echo mb_strlen($embedSize) > 0 ? 'class="responsive-embed-item-' . $embedSize . '"' : ''; ?> width="560" height="315" src="https://www.youtube.com/embed/qPTfXwPf_HM" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<h2>Embed</h2>
<div class="row">
    <?php foreach($embedsSizes as $embedSize) {
        ?>
        <div class="column column-4">
            <h3><?php echo mb_strlen($embedSize) > 0 ? $embedSize : 'Normal'; ?></h3>
            <p>
                Embed have width and height set in HTML tag - remembera about check is CSS set width and height to 100%
            </p>
            <div class="responsive-embed">
                <embed <?php echo mb_strlen($embedSize) > 0 ? 'class="responsive-embed-item-' . $embedSize . '"' : ''; ?> width="420" height="315" src="https://www.youtube.com/embed/qPTfXwPf_HM">
            </div>
        </div>
        <?php
    }
    ?>
</div>
<h2>Object</h2>
<div class="row">
    <?php foreach($embedsSizes as $embedSize) {
        ?>
        <div class="column column-4">
            <h3><?php echo mb_strlen($embedSize) > 0 ? $embedSize : 'Normal'; ?></h3>
            <p>
                Object have width and height set in HTML tag - remembera about check is CSS set width and height to 100%
            </p>
            <div class="responsive-embed">
                <object <?php echo mb_strlen($embedSize) > 0 ? 'class="responsive-embed-item-' . $embedSize . '"' : ''; ?> width="420" height="315" data="https://www.youtube.com/embed/qPTfXwPf_HM"></object>
            </div>
        </div>
        <?php
    }
    ?>
</div>
