<?php
$requestUrl = App()->request->url;
?>
<ul class="nav">
    <?php foreach ($menu as $k => $v): ?>
    <li>
        <a href=""><?php echo $v->name; ?></a>
    </li>
    <?php endforeach; ?>
</ul>




