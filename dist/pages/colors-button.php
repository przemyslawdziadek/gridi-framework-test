<h1>Buttons Colors Support</h1>
<h2>Class</h2>
<?php
foreach($colors as $color) {
    ?>
    <button class="color-<?php echo $color; ?>">Button</button>
    <div class="btn color-<?php echo $color; ?>">Class Button</div>
    <a class="btn color-<?php echo $color; ?>" href="#">Link button</a>
    <h2>Form buttons</h2>
    <form>
        <fieldset>
            <input class="color-<?php echo $color; ?>" type="button" name="button" value="Button" />
            <input class="color-<?php echo $color; ?>" type="reset" name="reset" value="Reset" />
            <input class="color-<?php echo $color; ?>" type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
    <h1>Disabled Buttons</h1>
    <button class="color-<?php echo $color; ?>">Button Normal</button>
    <button class="color-<?php echo $color; ?>" disabled>Button</button>
    <div class="btn color-<?php echo $color; ?> btn-disabled">Class Button</div>
    <a class="btn color-<?php echo $color; ?> btn-disabled" href="#">Link button</a>
    <h2>Disabled Form buttons</h2>
    <form>
        <fieldset>
            <input class="color-<?php echo $color; ?>" type="button" name="button" value="Button" disabled/>
            <input class="color-<?php echo $color; ?>" type="reset" name="reset" value="Reset" disabled/>
            <input class="color-<?php echo $color; ?>" type="submit" name="submit" value="Submit" disabled/>
        </fieldset>
    </form>
    <?php
}
?>
<h2>Inside</h2>
<?php
foreach($colors as $color) {
    ?>
    <div class="color-<?php echo $color; ?>">
        <?php
        @include './inc/buttons.php';
        ?>
    </div>
    <?php
}
?>
<h1>Buttons Background Colors Support</h1>
<?php
foreach($colors as $bgColor) {
    ?>
    <div class="bg-<?php echo $bgColor; ?>">
        <?php
        @include './inc/buttons.php';
        ?>
    </div>
    <?php
}
?>
<h2>Class</h2>
<?php
foreach($colors as $bgColor) {
    ?>
    <div class="bg-<?php echo $bgColor; ?>">
        <?php
        foreach($colors as $color) {
            if($bgColor === $color) {
                continue;
            }
            ?>
            <button class="color-<?php echo $color; ?>">Button</button>
            <div class="btn color-<?php echo $color; ?>">Class Button</div>
            <a class="btn color-<?php echo $color; ?>" href="#">Link button</a>
            <h2>Form buttons</h2>
            <form>
                <fieldset>
                    <input class="color-<?php echo $color; ?>" type="button" name="button" value="Button" />
                    <input class="color-<?php echo $color; ?>" type="reset" name="reset" value="Reset" />
                    <input class="color-<?php echo $color; ?>" type="submit" name="submit" value="Submit" />
                </fieldset>
            </form>
            <h1>Disabled Buttons</h1>
            <button class="color-<?php echo $color; ?>">Button Normal</button>
            <button class="color-<?php echo $color; ?>" disabled>Button</button>
            <div class="btn color-<?php echo $color; ?> btn-disabled">Class Button</div>
            <a class="btn color-<?php echo $color; ?> btn-disabled" href="#">Link button</a>
            <h2>Disabled Form buttons</h2>
            <form>
                <fieldset>
                    <input class="color-<?php echo $color; ?>" type="button" name="button" value="Button" disabled/>
                    <input class="color-<?php echo $color; ?>" type="reset" name="reset" value="Reset" disabled/>
                    <input class="color-<?php echo $color; ?>" type="submit" name="submit" value="Submit" disabled/>
                </fieldset>
            </form>
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
    <div class="bg-<?php echo $bgColor; ?>">
        <?php
        foreach($colors as $color) {
            if($bgColor === $color) {
                continue;
            }
            ?>
            <div class="color-<?php echo $color; ?>">
                <?php
                @include './inc/buttons.php';
                ?>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
