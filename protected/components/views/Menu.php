<?php
$requestUrl = App()->request->url;
$active = '';
foreach ($menu as $k => $v):
if(stripos($requestUrl, $v->url) !== FALSE):
?>    
<li class="active" id="<?php echo $v->id; ?>">
    <?php else: ?>
<li id="<?php echo $v->id; ?>">    
    <?php endif; ?>
    <a href="<?php echo App()->controller->createUrl($v->url); ?>"><?php echo $v->name; ?></a>
</li>
<?php
endforeach; ?>





