<ul>
    <h3>Danh Mục Sản Phẩm</h3>
    <?php
    foreach ($menu as $k => $v):
        $submenu = $v->hasChild($v->id);
        ?>
        <li>
            <a href="<?php echo App()->controller->createUrl($sv->url) ?>"><span><?php echo $v->name; ?></span></a>
                <?php if ($submenu != null): ?>
                <ul>
                <?php foreach ($submenu as $sk => $sv): ?>
                    <li>
                        <a href="<?php echo App()->controller->createUrl($sv->url) ?>"><span><?php echo $sv->name ?></span></a>
                    </li>
                <?php endforeach; ?>
                </ul>
                <?php endif; ?>
        </li>
<?php endforeach; ?>
</ul>
