<?php
$this->breadcrumbs = array(
    'Sản phẩm'
);

$this->menu = array(
    array('label' => 'Create Product', 'url' => array('create')),
    array('label' => 'Manage Product', 'url' => array('admin')),
);

//Multiple Select Dropdown -->
//scriptFile(themeUrl() . "/js/jquery-ui-1.8.23.custom.min.js", CClientScript::POS_BEGIN);
//scriptFile(themeUrl() . "/js/mainnav-smoothScrolling.js", CClientScript::POS_BEGIN);
//scriptFile(themeUrl() . "/js/jQuery.equalHeights.js", CClientScript::POS_BEGIN);
?>

<div class="women-in">
    <div class="col-md-9 col-d">
        <?php $promotion_one = UtiService::getPromotion(1); ?>
        <div class="banner">
            <a href="<?php echo App()->controller->createUrl($promotion_one->url); ?>">
                <img src="<?php echo $promotion_one->image ?>" alt="<?php echo $promotion_one->alias ?>" />
            </a>
        </div>
        <!---->
        <div class="in-line">
            <div class="para-an">
                <h3>LATEST  ARRIVALS</h3>
                <p>Check our all latest products in this section.</p>
            </div>
            <div class="lady-in">
                <?php
                $i = 1;
                $last = null;
                foreach ($products as $k => $v):
                    if ($i % 3 == 0) {
                        $last = ' para-grid';
                    }
                    ?>
                    <div class="col-md-4 you-para <?php echo $last; ?>">
                        <a href="<?php echo App()->createUrl('product/detail', array('pid' => $v->id)); ?>">
                            <img class="img-responsive pic-in" src="<?php echo $v->image; ?>" alt=" " >
                        </a>
                        <?php if ($v->discount != 0): ?>
                            <div class="you-in">
                                <span>15<label>%</label></span>
                                <small>off</small>
                            </div>
                        <?php endif; ?>
                        <p><?php echo $v->name; ?></p>
                        <span><?php echo number_format($v->price, 0, '', ',') ?> <sup>đ</sup>| <label class="cat-in"> </label> 
                            <a href="javascript:void(0)" class="add-to-cart" id="<?php echo $v->id; ?>">Mua ngay</a>
                        </span>
                    </div>
                    <?php
                    $last = ($i == 3) ? null : $last;
                    $i++;
                endforeach;
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-m-left">
        <?php
        //get promotion products
        $promotion_two = UtiService::getPromotion(2);
        ?>
        <div class="in-left">	
            <a href="<?php echo App()->controller->createUrl($promotion_two->url); ?>">
                <img src="<?php echo $promotion_two->image ?>" alt="<?php echo $promotion_two->alias ?>" />
            </a>
        </div>
        <?php foreach ($promote as $k => $v): ?>
            <div class="discount">
                <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)) ?>">
                    <img class="img-responsive pic-in" src="<?php echo $v->image ?>" alt="" >
                </a>		
                <p class="no-more">Exclusive <b>discount</b> <span>Womens wear</span></p>					
                <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)) ?>" class="know-more">know more</a>
            </div>
        <?php endforeach; ?>

        <div class="twitter-in">
            <h5>TWITTER  UPDATES</h5>
            <span class="twitter-ic"></span>
            <div class="up-date">
                <p>@suniljoshi Looks like nice and dicent design</p>
                <a href="#">http://bit.ly/sun</a>
                <p class="ago">About 1 hour ago via twitterfeed</p>
            </div>
            <div class="up-date">
                <p>@suniljoshi Looks like nice and dicent design</p>
                <a href="#">http://bit.ly/sun</a>
                <p class="ago">About 1 hour ago via twitterfeed</p>
            </div>
            <a href="#" class="tweets">More Tweets</a>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>

<div class="lady-in-on">
    <div class="buy-an">
        <h3>OTHER PRODUCTS</h3>
        <p>Check our all latest products in this section.</p>
    </div>
    <ul id="flexiselDemo1">
        <?php foreach ($others as $k => $v): ?>
            <li>
                <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>">
                    <img class="img-responsive women" src="<?php echo $v->image; ?>" alt="<?php echo $v->name ?>" width="200">
                </a>
                <div class="hide-in">
                    <p><?php echo $v->name ?></p>
                    <span><?php echo number_format($v->price, 0, '', ',') ?> <sup>đ</sup>  |  <a href="#">Shop ngay </a></span>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
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

        $("a.add-to-cart").on('click', function () {
            $.ajax({
                url: "<?php echo App()->controller->createUrl('/order/addToCart'); ?>",
                type: 'post',
                data: "pid="+$(this).attr('id')+"&quantity=1&size=L",
                success: function (items) {
                    //$("#shopping-item").html("(" + items + ")");
                    console.log(items);
                },
                complete: function () {
                    //bootbox.alert("'<strong>Sản phẩm</strong>' của bạn đã được đưa vào giỏ hàng.");
                }
            });
        });
    </script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jquery.flexisel.js"></script>
</div>