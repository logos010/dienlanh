<?php
$this->breadcrumbs = array(
    'Sản phẩm'
);

$original = str_replace('medium', 'original', $product->image);
?>

<!-- PRODUCT DETAIL-->
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
                        <ul id="etalage">
                            <li>
                                <a href="#">
                                    <img class="etalage_thumb_image" src="<?php echo $product->image; ?>" />
                                    <img class="etalage_source_image" src="<?php echo str_replace('medium', 'original', $product->image) ?>" alt="<?php echo $product->alias ?>" title="<?php echo $product->name; ?>" alt="<?php echo $product->alias ?>" />
                                </a>
                            </li>
                            <!--<li>
                                       <img class="etalage_thumb_image" src="web/images/preview-small-img2.png"  />
                                       <img class="etalage_source_image" src="web/images/preview-large-img2.jpg" title="" />
                                   </li>
                                   <li>
                                       <img class="etalage_thumb_image" src="web/images/preview-small-img3.png"  />
                                       <img class="etalage_source_image" src="web/images/preview-large-img3.jpg" />
                                   </li>
                                   <li>
                                       <img class="etalage_thumb_image" src="web/images/preview-small-img4.png" />
                                       <img class="etalage_source_image" src="web/images/preview-large-img4.jpg" />
                                   </li>-->
                        </ul>
                    </div>
                    <div class="desc span_3_of_2">
                        <h2><?php echo $product->name; ?></h2>
                        <p><?php echo $product->description; ?></p>					
                        <div class="price">
                            <p>Giá: <span><?php echo number_format($product->price, 0, ' ', ',') ?><sup>đ</sup></span></p>
                        </div>
                        <div class="available">
                            <ul>
                                <li><span>Model:</span> &nbsp; Model 1</li>
                                <li><span>Shipping Weight:</span>&nbsp; 75.58 kg</li>
                                <li><span>Units in Stock:</span>&nbsp; 566</li>
                            </ul>
                        </div>


                        <div class="colors-share">                            
                            <div class="social-share">
                                <h4>Share Product</h4>
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
                                <ul>
                                    <li>
                                        <span class="specification-heading">Body type</span> 
                                        <span>Metal</span>
                                        <div class="clear"></div>
                                    </li>
                                    <li><span class="specification-heading">Spin Speed (rpm)</span> <span>0/400/800/1000/1200</span><div class="clear"></div></li>
                                    <li><span class="specification-heading">Machine weight (kg)</span> <span>75</span><div class="clear"></div></li>
                                    <li><span class="specification-heading">Wash System</span> <span>Tumble wash</span><div class="clear"></div></li>
                                    <li><span class="specification-heading">Door diameter (mm)</span> <span>300</span><div class="clear"></div></li>
                                    <li><span class="specification-heading">Dimensions (w*d*h) without packing</span> <span>595x595x850</span><div class="clear"></div></li>
                                    <li><span class="specification-heading">Power Supply</span> <span>230V, 50Hz, 16Amps</span><div class="clear"></div></li>
                                    <li><span class="specification-heading">Motor (Watts)</span> <span>440 for Wash/490 for Spin</span><div class="clear"></div></li>
                                    <li><span class="specification-heading">Drum basket</span> <span>stainless steel</span><div class="clear"></div></li>
                                    <li><span class="specification-heading">Adjustable Feet</span> <span>4 </span><div class="clear"></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rightsidebar span_3_of_1 sidebar">
                <h3>Popular Products</h3>
                <ul class="popular-products">
                    <?php foreach ($other as $k => $v): ?>
                    <li>
                        <h4><a href="preview.html"><?php echo $v->name; ?></a></h4>
                        <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>">
                            <img src="<?php echo $v->image  ?>" alt="<?php echo $v->alias; ?>" /></a>
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
