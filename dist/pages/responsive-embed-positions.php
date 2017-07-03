<?php
$embedsPositions = ['x-center', 'x-right', 'y-center', 'y-bottom', 'x-center responsive-embed-item-y-center', 'center'];
?>
<div class="grid-system-sample">
    <h1>Responsive Embed Positions</h1>
    <h2>Image</h2>
    <div class="row">
        <?php foreach($embedsPositions as $embedPosition) {
            ?>
            <div class="column column-2">
                <h3><?php echo mb_strlen($embedPosition) > 0 ? $embedPosition : 'Normal'; ?></h3>
                <div class="responsive-embed">
                    <img <?php echo mb_strlen($embedPosition) > 0 ? 'class="responsive-embed-item-' . $embedPosition . '"' : ''; ?> src="img/css3.jpg" style="width: 50%; height: 50%;"/>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <h2>Video</h2>
    <div class="row">
        <?php foreach($embedsPositions as $embedPosition) {
            ?>
            <div class="column column-2">
                <h3><?php echo mb_strlen($embedPosition) > 0 ? $embedPosition : 'Normal'; ?></h3>
                <div class="responsive-embed">
                    <video <?php echo mb_strlen($embedPosition) > 0 ? 'class="responsive-embed-item-' . $embedPosition . '"' : ''; ?> controls style="background: red; width: 50%; height: 50%;">
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
        <?php foreach($embedsPositions as $embedPosition) {
            ?>
            <div class="column column-2">
                <h3><?php echo mb_strlen($embedPosition) > 0 ? $embedPosition : 'Normal'; ?></h3>
                <p>
                    IFrame have width and height set in HTML tag - remembera about check is CSS set width and height to 100%
                </p>
                <div class="responsive-embed">
                    <iframe <?php echo mb_strlen($embedPosition) > 0 ? 'class="responsive-embed-item-' . $embedPosition . '"' : ''; ?> src="https://www.youtube.com/embed/qPTfXwPf_HM" frameborder="0" allowfullscreen style="width: 50%; height: 50%;"></iframe>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <h2>Embed</h2>
    <div class="row">
        <?php foreach($embedsPositions as $embedPosition) {
            ?>
            <div class="column column-2">
                <h3><?php echo mb_strlen($embedPosition) > 0 ? $embedPosition : 'Normal'; ?></h3>
                <p>
                    Embed have width and height set in HTML tag - remembera about check is CSS set width and height to 100%
                </p>
                <div class="responsive-embed">
                    <embed <?php echo mb_strlen($embedPosition) > 0 ? 'class="responsive-embed-item-' . $embedPosition . '"' : ''; ?> src="https://www.youtube.com/embed/qPTfXwPf_HM" style="width: 50%; height: 50%;">
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <h2>Object</h2>
    <div class="row">
        <?php foreach($embedsPositions as $embedPosition) {
            ?>
            <div class="column column-2">
                <h3><?php echo mb_strlen($embedPosition) > 0 ? $embedPosition : 'Normal'; ?></h3>
                <p>
                    Object have width and height set in HTML tag - remembera about check is CSS set width and height to 100%
                </p>
                <div class="responsive-embed">
                    <object <?php echo mb_strlen($embedPosition) > 0 ? 'class="responsive-embed-item-' . $embedPosition . '"' : ''; ?> data="https://www.youtube.com/embed/qPTfXwPf_HM" style="width: 50%; height: 50%;"></object>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
