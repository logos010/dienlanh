<?php
$this->breadcrumbs = array(
    'Sản phẩm'
);
?>
<link href='<?php echo App()->theme->baseUrl ?>/css/product-grid-style.css' rel='stylesheet' type='text/css'>

<div class="content_top">
    <div class="wrap">
        <section>
            <!--Products grid -->
            <div class="col-m-on">
                <div class="in-line">
                    <?php if (count($products)): ?>
                        <div class="para-all">
                            <h3>ĐỢT HÀNG MỚI NHẤT</h3>
                            <p>Thỏa sức xem hàng tại gian hàng này.!!!</p>
                        </div>

                        <div class="prods-cnt">
                            <?php foreach ($products as $k => $v): $img = str_replace('original', 'medium', $v->image); ?>
                                <div class="prod-box shadow">
                                    <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>">
                                        <img src="<?php echo $img; ?>" height="150" alt="<?php echo $v->name; ?>" />
                                    </a>
                                    <h4>
                                        <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>"><?php echo $v->name ?></a>
                                    </h4>
                                    <div class="price-cnt">
                                        <div class="price"><?php echo number_format($v->price, 0, '', ',') ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="para-all" style="min-height: 450px">
                            <div style="text-align: center">
                                <h3>Hiện tại danh mục chưa có sản phẩm hiển thị, quý khách vui lòng quay lại lần sau. Xin cám ơn.</h3>
                                <img src="<?php echo App()->theme->baseUrl ?>/images/comingsoon.png" alt="Coming soon" />
                            </div>
                        </div>	
                    <?php endif; ?>
                </div>
            </div> <!-- WRAPPER PRODUCTS-->
            <!-- END PRODUCT GRID-->
        </section>
    </div>
</div>
