<h1>Preformatted Colors Support</h1>
<pre>NORMAL Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, fuga voluptate odio vero, nam ad! Voluptas cupiditate impedit libero mollitia nostrum dolorum ullam deleniti magnam. Culpa id ex quasi deleniti iusto animi, ipsa nam aut, libero. Commodi odio dolorem debitis et. Suscipit culpa incidunt quidem enim deserunt rerum nobis placeat inventore possimus atque. Qui cum itaque incidunt molestiae voluptatum dolor debitis saepe cumque accusantium optio laborum ducimus quaerat quidem aut magnam velit, asperiores dolorem eius porro unde rerum distinctio. Soluta dolorem consequatur nostrum porro? Saepe nihil ipsum vitae beatae, harum voluptatibus eos, accusantium blanditiis eveniet cumque eaque deserunt sit tempore eum, delectus, quaerat esse atque nulla illum voluptatem consequuntur nostrum provident! Eligendi nobis quo porro, corporis totam at aliquid voluptas consequuntur eum quia modi dolor temporibus beatae pariatur iste, facere animi. Tempora esse velit id commodi. Et impedit, ab, vero rem tenetur corporis aut ipsum laudantium, assumenda esse tempore dolores.</pre>
<?php
foreach($colors as $color) {
    ?>
    <pre class="color-<?php echo $color; ?>"><?php echo mb_strtoupper($color); ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, fuga voluptate odio vero, nam ad! Voluptas cupiditate impedit libero mollitia nostrum dolorum ullam deleniti magnam. Culpa id ex quasi deleniti iusto animi, ipsa nam aut, libero. Commodi odio dolorem debitis et. Suscipit culpa incidunt quidem enim deserunt rerum nobis placeat inventore possimus atque. Qui cum itaque incidunt molestiae voluptatum dolor debitis saepe cumque accusantium optio laborum ducimus quaerat quidem aut magnam velit, asperiores dolorem eius porro unde rerum distinctio. Soluta dolorem consequatur nostrum porro? Saepe nihil ipsum vitae beatae, harum voluptatibus eos, accusantium blanditiis eveniet cumque eaque deserunt sit tempore eum, delectus, quaerat esse atque nulla illum voluptatem consequuntur nostrum provident! Eligendi nobis quo porro, corporis totam at aliquid voluptas consequuntur eum quia modi dolor temporibus beatae pariatur iste, facere animi. Tempora esse velit id commodi. Et impedit, ab, vero rem tenetur corporis aut ipsum laudantium, assumenda esse tempore dolores.</pre>
    <?php
}
?>
<h2>Inside</h2>
<?php
foreach($colors as $color) {
    ?>
    <div class="color-<?php echo $color; ?>">
        <pre><?php echo mb_strtoupper($color); ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, fuga voluptate odio vero, nam ad! Voluptas cupiditate impedit libero mollitia nostrum dolorum ullam deleniti magnam. Culpa id ex quasi deleniti iusto animi, ipsa nam aut, libero. Commodi odio dolorem debitis et. Suscipit culpa incidunt quidem enim deserunt rerum nobis placeat inventore possimus atque. Qui cum itaque incidunt molestiae voluptatum dolor debitis saepe cumque accusantium optio laborum ducimus quaerat quidem aut magnam velit, asperiores dolorem eius porro unde rerum distinctio. Soluta dolorem consequatur nostrum porro? Saepe nihil ipsum vitae beatae, harum voluptatibus eos, accusantium blanditiis eveniet cumque eaque deserunt sit tempore eum, delectus, quaerat esse atque nulla illum voluptatem consequuntur nostrum provident! Eligendi nobis quo porro, corporis totam at aliquid voluptas consequuntur eum quia modi dolor temporibus beatae pariatur iste, facere animi. Tempora esse velit id commodi. Et impedit, ab, vero rem tenetur corporis aut ipsum laudantium, assumenda esse tempore dolores.</pre>
    </div>
    <?php
}
?>
<h1>Preformatted Background Colors Support</h1>
<?php
foreach($colors as $bgColor) {
    ?>
    <div class="bg-<?php echo $bgColor; ?> bg-test-padding">
        <pre><?php echo mb_strtoupper($bgColor); ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, fuga voluptate odio vero, nam ad! Voluptas cupiditate impedit libero mollitia nostrum dolorum ullam deleniti magnam. Culpa id ex quasi deleniti iusto animi, ipsa nam aut, libero. Commodi odio dolorem debitis et. Suscipit culpa incidunt quidem enim deserunt rerum nobis placeat inventore possimus atque. Qui cum itaque incidunt molestiae voluptatum dolor debitis saepe cumque accusantium optio laborum ducimus quaerat quidem aut magnam velit, asperiores dolorem eius porro unde rerum distinctio. Soluta dolorem consequatur nostrum porro? Saepe nihil ipsum vitae beatae, harum voluptatibus eos, accusantium blanditiis eveniet cumque eaque deserunt sit tempore eum, delectus, quaerat esse atque nulla illum voluptatem consequuntur nostrum provident! Eligendi nobis quo porro, corporis totam at aliquid voluptas consequuntur eum quia modi dolor temporibus beatae pariatur iste, facere animi. Tempora esse velit id commodi. Et impedit, ab, vero rem tenetur corporis aut ipsum laudantium, assumenda esse tempore dolores.</pre>
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
            <pre class="color-<?php echo $color; ?>"><?php echo mb_strtoupper($color); ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, fuga voluptate odio vero, nam ad! Voluptas cupiditate impedit libero mollitia nostrum dolorum ullam deleniti magnam. Culpa id ex quasi deleniti iusto animi, ipsa nam aut, libero. Commodi odio dolorem debitis et. Suscipit culpa incidunt quidem enim deserunt rerum nobis placeat inventore possimus atque. Qui cum itaque incidunt molestiae voluptatum dolor debitis saepe cumque accusantium optio laborum ducimus quaerat quidem aut magnam velit, asperiores dolorem eius porro unde rerum distinctio. Soluta dolorem consequatur nostrum porro? Saepe nihil ipsum vitae beatae, harum voluptatibus eos, accusantium blanditiis eveniet cumque eaque deserunt sit tempore eum, delectus, quaerat esse atque nulla illum voluptatem consequuntur nostrum provident! Eligendi nobis quo porro, corporis totam at aliquid voluptas consequuntur eum quia modi dolor temporibus beatae pariatur iste, facere animi. Tempora esse velit id commodi. Et impedit, ab, vero rem tenetur corporis aut ipsum laudantium, assumenda esse tempore dolores.</pre>
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
                <pre><?php echo mb_strtoupper($color); ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, fuga voluptate odio vero, nam ad! Voluptas cupiditate impedit libero mollitia nostrum dolorum ullam deleniti magnam. Culpa id ex quasi deleniti iusto animi, ipsa nam aut, libero. Commodi odio dolorem debitis et. Suscipit culpa incidunt quidem enim deserunt rerum nobis placeat inventore possimus atque. Qui cum itaque incidunt molestiae voluptatum dolor debitis saepe cumque accusantium optio laborum ducimus quaerat quidem aut magnam velit, asperiores dolorem eius porro unde rerum distinctio. Soluta dolorem consequatur nostrum porro? Saepe nihil ipsum vitae beatae, harum voluptatibus eos, accusantium blanditiis eveniet cumque eaque deserunt sit tempore eum, delectus, quaerat esse atque nulla illum voluptatem consequuntur nostrum provident! Eligendi nobis quo porro, corporis totam at aliquid voluptas consequuntur eum quia modi dolor temporibus beatae pariatur iste, facere animi. Tempora esse velit id commodi. Et impedit, ab, vero rem tenetur corporis aut ipsum laudantium, assumenda esse tempore dolores.</pre>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
