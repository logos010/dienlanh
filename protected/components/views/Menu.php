<?php
$requestUrl = App()->request->url;
?>
<ul class="nav">
    <?php
    foreach ($menu as $k => $v):
        $submenu = $v->hasChild($v->id);
        ?>
        <li>
            <?php if ($v->url == "//"): ?>
                <a href="/"><?php echo $v->name; ?></a>
            <?php else: ?>
                <a href="<?php echo App()->controller->createUrl($v->url); ?>"><?php echo $v->name; ?></a>
            <?php endif; ?>
            <?php if ($submenu != null): ?>
                <ul>
                    <?php foreach ($submenu as $sk => $sv): ?>
                        <li>
                            <a href="<?php echo App()->controller->createUrl($sv->url) ?>"><?php echo $sv->name ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>