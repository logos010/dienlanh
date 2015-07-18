<?php
$this->breadcrumbs = array(
    'S?n ph?m'
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
                    <h3>Các hoạt động</h3>
                    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 300px; height: 150px;">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                 background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                                 top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 255px; height: 300px;
                             overflow: hidden;">
                             <?php
                             $dir = webroot() . "/upload/slider/mini_slider/";
                             $file = scandir($dir);
                             for ($i = 2, $n = count($file); $i < $n; $i++):
                                 ?>
                                <div><img u="image" src="<?php echo BASE_URL . "/upload/slider/mini_slider/" . $file[$i]; ?>" /></div>
                            <?php endfor; ?>
                        </div>

                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora08l" style="top: 8px; left: 90px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora08r" style="bottom: -145px; left: 90px;">
                        </span>
                    </div>
                </div>	                
            </div>

            <!-- content product grid -->
            <div class="content-bottom-right">
                <h3>Thông Tin Sản Phẩm</h3>
                <div id="cbp-pgcontainer" class="cbp-pgcontainer">
                    <ul class="cbp-pggrid">
                        <?php foreach ($products as $k => $v): ?>
                            <li>
                                <div class="cbp-pgcontent">
                                    <div class="cbp-pgitem">
                                        <div class="cbp-pgitem-flip">
                                            <a href="<?php echo App()->controller->createUrl('product/detail/', array('pid' => $v->id)); ?>">
                                                <img src="<?php echo $v->image ?>" alt="<?php echo $v->alias; ?>" />
                                            </a>
                                        </div>
                                    </div><!-- /cbp-pgitem -->                                
                                </div><!-- cbp-pgcontent -->
                                <div class="cbp-pginfo">
                                    <div><?php echo $v->name; ?></div>
                                    <span class="cbp-pgprice"><?php echo number_format($v->price, 0, '', ',') ?><sup>đ</sup></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul><!-- /cbp-pggrid -->
                </div><!-- /cbp-pgcontainer -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var options = {
            $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $PlayOrientation: 2, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 2, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
    });

    var shop = new cbpShop(document.getElementById('cbp-pgcontainer'));
</script>