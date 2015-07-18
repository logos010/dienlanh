<?php
$this->breadcrumbs = array(
    'Sản phẩm'
);

$original = str_replace('medium', 'original', $product->image);
?>
<script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jquery.elevateZoom-3.0.8.min.js"></script>
<!-- PRODUCT DETAIL-->
<div class="content_top">
    <div class="wrap">
        <div class="preview-page">
            <div class="section group">
                <div class="cont-desc span_1_of_2">
                    <!-- breadcrume -->
                    <ul class="back-links">
                        <li><a href="<?php echo BASE_URL; ?>">Trang chủ</a> ::</li>
                        <li><a href="#">Sản Phẩm</a> ::</li>
                        <li><?php echo $product->name; ?></li>
                        <div class="clear"> </div>
                    </ul>

                    <div class="product-details">                        
                        <div class="grid images_3_of_2">
                            <?php $zoom = str_replace('medium', 'original', $product->image); ?>
                            <img id="zoom_01" src='<?php echo $product->image; ?>' data-zoom-image="<?php echo $zoom; ?>" width="450"/>
                            <script>
                                $('#zoom_01').elevateZoom({scrollZoom : true});
                            </script>
                            <!--                            <ul id="etalage">
                                                            <li>
                                                                <a href="#">
                                                                    <img class="etalage_thumb_image" src="<?php echo $product->image; ?>" />
                                                                    <img class="etalage_source_image" src="<?php echo str_replace('medium', 'original', $product->image) ?>" alt="<?php echo $product->alias ?>" title="<?php echo $product->name; ?>" alt="<?php echo $product->alias ?>" />
                                                                </a>
                                                            </li>
                                                        </ul>-->
                        </div>
                        <div class="desc span_3_of_2">
                            <h2><?php echo $product->name; ?></h2>
                            <p><?php echo $product->description; ?></p>					
                            <div class="price">
                                <p>Giá: <span><?php echo number_format($product->price, 0, ' ', ',') ?><sup>đ</sup></span></p>
                            </div>
                            <div class="available">
                                <ul>
                                    <li><span>Phân Loại:</span> &nbsp; Model 1</li>
                                    <li><span>Xuất xứ</span>&nbsp; Vietnam</li>
                                    <li><span>Thời gian bảo hành</span>&nbsp; 2 năm</li>
                                    <li><span>Tính năng</span>&nbsp; <?php echo $product->description; ?></li>
                                </ul>
                            </div>


                            <div class="colors-share">                            
                                <div class="social-share">
                                    <h4>Chia sẽ</h4>
                                    <ul>
                                        <li><a class="share-face" href="#"> </a></li>
                                        <li><a class="share-twitter" href="#"> </a></li>
                                        <li><a class="share-google" href="#"> </a></li>
                                        <li><a class="share-rss" href="#"> </a></li>
                                        <div class="clear"> </div>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="product_desc">	
                        <div id="horizontalTab">
                            <ul class="resp-tabs-list">
                                <li>Thông tin chi tiết</li>                            
                                <div class="clear"></div>
                            </ul>
                            <div class="resp-tabs-container">
                                <div class="product-specifications">
                                    <?php echo $product->detail; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rightsidebar span_3_of_1 sidebar">
                    <h3>Tham Khảo</h3>
                    <ul class="popular-products">
                        <?php foreach ($other as $k => $v): ?>
                            <li>
                                <h4><a href="preview.html"><?php echo $v->name; ?></a></h4>
                                <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>">
                                    <img src="<?php echo $v->image ?>" alt="<?php echo $v->alias; ?>" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees"><?php echo number_format($v->price, 0, '', ',') ?> <sup>đ<sup></span></p>
                                                        </div>
                                                        <div class="add-cart">								
                                                            <h4><a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>">Xem</a></h4>
                                                        </div>
                                                        <div class="clear"></div>
                                                        </div>					 
                                                        </li>
                                                    <?php endforeach; ?>
                                                    </ul>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>

                                                    <script type="text/javascript">
                                                        $(document).ready(function () {
                                                            $('#horizontalTab').easyResponsiveTabs({
                                                                type: 'default', //Types: default, vertical, accordion           
                                                                width: 'auto', //auto or any width like 600px
                                                                fit: true   // 100% fit in a container
                                                            });

                                                            $('#etalage').etalage({
                                                                thumb_image_width: 300,
                                                                thumb_image_height: 400,
                                                                source_image_width: 900,
                                                                source_image_height: 1200,
                                                                show_hint: true,
                                                                click_callback: function (image_anchor, instance_id) {
                                                                    alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                                                                }
                                                            });
                                                        });
                                                    </script>
