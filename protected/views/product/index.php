<?php
$this->breadcrumbs = array(
    'Sản phẩm'
);

$this->menu = array(
    array('label' => 'Create Product', 'url' => array('create')),
    array('label' => 'Manage Product', 'url' => array('admin')),
);
?>

<div class="content_top">
    <div class="wrap">
        <h3>Sản Phẩm Mới Nhất</h3>
    </div>
    <div class="line"> </div>
    <div class="wrap">
        <div class="ocarousel_slider">  
            <div class="ocarousel example_photos" data-ocarousel-perscroll="3">
                <div class="ocarousel_window">
                    <?php foreach ($lastProduct as $k => $v): ?>
                        <a href="#" title="img1">
                            <img src="<?php echo $v->image; ?>" alt="<?php echo $v->alias; ?>" width="100" /><br/>
                            <p><?php echo $v->name; ?></p>
                        </a>                    
                    <?php endforeach; ?>
                </div>
                <span>           
                    <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
                    <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
                </span>
            </div>
        </div>  
    </div>

    <div class="content_bottom">
        <div class="wrap">
            <div class="content-bottom-left">
                <div id='cssmenu' class="categories">
                    <?php
                    $this->widget('application.components.MenuVerticalWidget', array(
                        'menuCate' => isset($_GET['tid']) ? $_GET['tid'] : null,
                    ));
                    ?>
                </div>
                	
                <div class="buters-guide">
                    <h3>Buyers Guide</h3>
                    <p><span>We want you to be happy with your purchase.</span></p>	
                    <p>So we're committed to giving you all the tools to make the right decision with minimum fuss. </p>
                </div>	
                <div class="add-banner">
                    <img src="web/images/camera.png" alt="" />
                    <div class="banner-desc">
                        <h4>Electronics</h4>
                        <a href="#">More Info</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="add-banner add-banner2">
                    <img src="web/images/computer.png" alt="" />
                    <div class="banner-desc">
                        <h4>Computers</h4>
                        <a href="#">More Info</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <!-- content product grid -->
            <div class="content-bottom-right">
                <h3>Thông Tin Sản Phẩm</h3>
                <?php
                $i = 1;
                foreach ($products as $k => $v):
                    if ($i % 3 == 0):
                        ?>
                        <div class="section group">
                        <?php endif; ?>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="<?php echo App()->controller->createUrl('product/detail/', array('pid' => $v->id)); ?>"><?php echo $v->name; ?></a></h4>
                            <a href="<?php echo App()->controller->createUrl('product/detail/', array('pid' => $v->id)); ?>"><img src="<?php echo $v->image ?>" alt="<?php echo $v->alias; ?>" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="<?php echo App()->controller->createUrl('product/detail/', array('pid' => $v->id)); ?>">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>					 
                        </div>
                        <?php if (($i % 3) == 0): ?>
                        </div>
                    <?php endif; ?>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>