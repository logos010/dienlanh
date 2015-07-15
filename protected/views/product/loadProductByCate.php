<?php
$this->breadcrumbs = array(
    'Sản phẩm'
);
?>
<div class="wrap">
    <section>
        <!--Products grid -->
        <div class="col-m-on">
            <div class="in-line">
                <div class="para-all">
                    <h3>ĐỢT HÀNG MỚI NHẤT</h3>
                    <p>Thỏa sức xem hàng tại gian hàng này.</p>
                </div>

                <!-- START LOAD PRODUCTS -->
                <div class="lady-on">
                    <?php foreach ($products as $k => $v): $img = str_replace('original', 'medium', $v->image); ?>
                        <div class="col-md-4 you-men">
                            <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>"><img class="img-responsive pic-in" src="<?php echo $img; ?>" height="280" alt="<?php echo $v->name; ?>" ></a>
                            <?php if ($v->discount != 0): ?>
                                <div class=" you-onto">
                                    <span>15<label>%</label></span>
                                    <small>off</small>
                                </div>
                            <?php endif; ?>
                            <p><?php echo $v->name; ?></p>
                            <span><?php echo number_format($v->price, 0, '', ',') ?> <sup>đ</sup>  | <label class="cat-in"> </label> <a href="#">Đặt mua</a></span>
                        </div>
                    <?php endforeach; ?>
                    <div class="clearfix"> </div>
                </div>
                <!-- END LOAD PRODUCTS-->

                <!-- START OTHER PRODUCTS-->
                <div class="lady-in-on">
                    <div class="buy-an">
                        <h3>OTHER PRODUCTS</h3>
                        <p>Check our all latest products in this section.</p>
                    </div>
                    <ul id="flexiselDemo1">	
                        <?php foreach ($otherProducts as $k => $v): ?>
                            <li><a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>">
                                    <img class="img-responsive women" src="<?php echo $v->image; ?>" width="240" alt="<?php echo $v->name ?>"></a>
                                <div class="hide-in">
                                    <p><?php echo $v->name ?></p>
                                    <span><?php echo number_format($v->price, 0, '', ',') ?>  |  <a href="#">Mua ngay</a></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <!-- SCRIPT OTHER PRODUCTS -->
                    <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 4,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jquery.flexisel.js"></script>                    
                    <!-- END SCRIPT OTHER PRODUCTS-->
                </div>
                <!-- END OTHER PRODUCTS-->
            </div>
        </div> <!-- WRAPPER PRODUCTS-->
        <!-- END PRODUCT GRID-->
    </section>
</div>