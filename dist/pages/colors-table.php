<h1>Tables Colors Support</h1>
<table>
    <caption>
        This is table caption
    </caption>
    <thead>
        <tr>
            <th>Column 1 header</th>
            <th>Column 2 header</th>
            <th>Column 3 header</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Column 1 Contant</td>
            <td>Column 2 Contant</td>
            <td>Column 3 Contant</td>
        </tr>
        <tr>
            <td>Column 1 Contant</td>
            <td>Column 2 Contant</td>
            <td>Column 3 Contant</td>
        </tr>
        <tr>
            <td>Column 1 Contant</td>
            <td>Column 2 Contant</td>
            <td>Column 3 Contant</td>
        </tr>
        <tr>
            <td>Column 1 Contant</td>
            <td>Column 2 Contant</td>
            <td>Column 3 Contant</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td>Tfoot column 1</td>
            <td>Tfoot column 2</td>
            <td>Tfoot column 3</td>
        </tr>
    </tfoot>
</table>
<?php
foreach($colors as $color) {
    ?>
    <table class="color-<?php echo $color; ?>">
        <caption>
            This is table caption
        </caption>
        <thead>
            <tr>
                <th>Column 1 header</th>
                <th>Column 2 header</th>
                <th>Column 3 header</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Column 1 Contant</td>
                <td>Column 2 Contant</td>
                <td>Column 3 Contant</td>
            </tr>
            <tr>
                <td>Column 1 Contant</td>
                <td>Column 2 Contant</td>
                <td>Column 3 Contant</td>
            </tr>
            <tr>
                <td>Column 1 Contant</td>
                <td>Column 2 Contant</td>
                <td>Column 3 Contant</td>
            </tr>
            <tr>
                <td>Column 1 Contant</td>
                <td>Column 2 Contant</td>
                <td>Column 3 Contant</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>Tfoot column 1</td>
                <td>Tfoot column 2</td>
                <td>Tfoot column 3</td>
            </tr>
        </tfoot>
    </table>
    <?php
}
?>
<h2>Inside</h2>
<?php
foreach($colors as $color) {
    ?>
    <div class="color-<?php echo $color; ?>">
        <table>
            <caption>
                This is table caption
            </caption>
            <thead>
                <tr>
                    <th>Column 1 header</th>
                    <th>Column 2 header</th>
                    <th>Column 3 header</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Column 1 Contant</td>
                    <td>Column 2 Contant</td>
                    <td>Column 3 Contant</td>
                </tr>
                <tr>
                    <td>Column 1 Contant</td>
                    <td>Column 2 Contant</td>
                    <td>Column 3 Contant</td>
                </tr>
                <tr>
                    <td>Column 1 Contant</td>
                    <td>Column 2 Contant</td>
                    <td>Column 3 Contant</td>
                </tr>
                <tr>
                    <td>Column 1 Contant</td>
                    <td>Column 2 Contant</td>
                    <td>Column 3 Contant</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Tfoot column 1</td>
                    <td>Tfoot column 2</td>
                    <td>Tfoot column 3</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <?php
}
?>
<h1>Tables Background Colors Support</h1>
<?php
foreach($colors as $bgColor) {
    ?>
    <div class="bg-<?php echo $bgColor; ?> bg-test-padding">
        <table>
            <caption>
                This is table caption
            </caption>
            <thead>
                <tr>
                    <th>Column 1 header</th>
                    <th>Column 2 header</th>
                    <th>Column 3 header</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Column 1 Contant</td>
                    <td>Column 2 Contant</td>
                    <td>Column 3 Contant</td>
                </tr>
                <tr>
                    <td>Column 1 Contant</td>
                    <td>Column 2 Contant</td>
                    <td>Column 3 Contant</td>
                </tr>
                <tr>
                    <td>Column 1 Contant</td>
                    <td>Column 2 Contant</td>
                    <td>Column 3 Contant</td>
                </tr>
                <tr>
                    <td>Column 1 Contant</td>
                    <td>Column 2 Contant</td>
                    <td>Column 3 Contant</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Tfoot column 1</td>
                    <td>Tfoot column 2</td>
                    <td>Tfoot column 3</td>
                </tr>
            </tfoot>
        </table>
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
            <table class="color-<?php echo $color; ?>">
                <caption>
                    This is table caption
                </caption>
                <thead>
                    <tr>
                        <th>Column 1 header</th>
                        <th>Column 2 header</th>
                        <th>Column 3 header</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Column 1 Contant</td>
                        <td>Column 2 Contant</td>
                        <td>Column 3 Contant</td>
                    </tr>
                    <tr>
                        <td>Column 1 Contant</td>
                        <td>Column 2 Contant</td>
                        <td>Column 3 Contant</td>
                    </tr>
                    <tr>
                        <td>Column 1 Contant</td>
                        <td>Column 2 Contant</td>
                        <td>Column 3 Contant</td>
                    </tr>
                    <tr>
                        <td>Column 1 Contant</td>
                        <td>Column 2 Contant</td>
                        <td>Column 3 Contant</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Tfoot column 1</td>
                        <td>Tfoot column 2</td>
                        <td>Tfoot column 3</td>
                    </tr>
                </tfoot>
            </table>
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
                <table>
                    <caption>
                        This is table caption
                    </caption>
                    <thead>
                        <tr>
                            <th>Column 1 header</th>
                            <th>Column 2 header</th>
                            <th>Column 3 header</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Column 1 Contant</td>
                            <td>Column 2 Contant</td>
                            <td>Column 3 Contant</td>
                        </tr>
                        <tr>
                            <td>Column 1 Contant</td>
                            <td>Column 2 Contant</td>
                            <td>Column 3 Contant</td>
                        </tr>
                        <tr>
                            <td>Column 1 Contant</td>
                            <td>Column 2 Contant</td>
                            <td>Column 3 Contant</td>
                        </tr>
                        <tr>
                            <td>Column 1 Contant</td>
                            <td>Column 2 Contant</td>
                            <td>Column 3 Contant</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Tfoot column 1</td>
                            <td>Tfoot column 2</td>
                            <td>Tfoot column 3</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
