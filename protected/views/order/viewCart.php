<?php
$this->pageTitle = 'Xem đơn hàng';
$this->breadcrumbs = array(
    'Đơn hàng - Xem đơn hàng'
);
?>

<style>
    #msg{display:  none}    
</style>
<?php scriptFile(themeUrl() . "/js/jquery.number.js", CClientScript::POS_BEGIN); ?>

<br/>
<h2>Thông tin đơn hàng</h2>
<br/>

<div class="row">
    <section id="cart_items">
        <div class="table-responsive cart_info">
            <form id="editForm" name="shoppingBagView" > 
                <table class="table table-striped">
                    <thead>
                        <tr class="cart_menu">
                            <th class="image">Sản phẩm</th>
                            <th class="description"></th>
                            <th class="price">Giá thành</th>
                            <th class="quantity">Số lượng</th>
                            <th class="total">Tổng</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item): ?>
                            <tr id="itemRow-<?php echo $item->id ?>">
                                <td class="cart_product">
                                    <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $item->id)); ?>">
                                        <img src="<?php echo $item->image; ?>" width="80" alt="<?php echo $item->name ?>"></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href=""><?php echo $item->name ?></a></h4>
                                    <p>Web ID: 1089772</p>
                                </td>
                                <td class="cart_price">
                                    <p id="price-<?php echo $item->id ?>"><?php echo number_format($item->price, 0, '.', ','); ?></p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="javascript:void(0)" id="add-<?php echo $item->id ?>"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $item->getQuantity(); ?>" id="quantity-<?php echo $item->id ?>" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href="javascript:void(0)" id="sub-<?php echo $item->id ?>"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price" id="total-<?php echo $item->id ?>"><?php echo number_format($item->getSumPrice(), 0, '.', ','); ?></p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="javascript:void(0)" id="remove-<?php echo $item->id ?>"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>                        
                        <?php endforeach; ?>                                    
                        <tr>
                            <td colspan="4">&nbsp;</td>
                            <td colspan="2">
                                <table class="table table-condensed total-result">
                                    <tr>
                                        <td>Tổng đơn hàng</td>
                                        <td id="total-without-tax"><?php echo number_format($totalPrice, 0, '.', ','); ?> <sup>đ</sup></td>
                                    </tr>
                                    <tr>
                                        <td>Thuế</td>
                                        <td>$0</td>
                                    </tr>
                                    <tr class="shipping-cost">
                                        <td>Phí vận chuyển</td>
                                        <td>Free</td>										
                                    </tr>
                                    <tr>
                                        <td>Tổng</td>
                                        <td id="final-total"><strong><span><?php echo number_format($totalPrice, 0, '.', ','); ?> <sup>đ</sup></span></strong></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>                    
                    </tbody>
                </table>
            </form>
        </div>

        <?php if (App()->shoppingCart->getCount()): ?>
            <input name="button" class="btn btn-primary pull-right" id="checkout" value="Xác nhận" type="submit">
        <?php endif; ?>

        <div id="msg">
            <div class="alert alert-info" role="alert">                
                <strong>Giỏ hàng</strong> của bạn đang trống.
            </div>                                                
        </div>    
    </section>
</div>
<script type="text/javascript">
    $().ready(function () {
        //no menu bar
        $("div.header-bottom-bottom").addClass('hidden');

        //screen height
        var screenHeight = $( document ).height();
        $(".row").css('height', screenHeight - 330);
    });

    var itemInCart = <?php echo App()->shoppingCart->getCount(); ?>;
    if (itemInCart === 0) {
        $("#msg").show();
        $(".cart_info").hide();
    }

    //add product
    $("a.cart_quantity_up").on('click', function () {
        var itemID = $(this).attr('id').substring(4, 5);
        var newQuantity = parseInt($("#quantity-" + itemID).val()) + 1;
        if (newQuantity > 20)
            newQuantity--;
        var newTotalPrice = priceFormat($("#price-" + itemID).text()) * newQuantity;

//        console.log(parseFloat($("#price-" + itemID).text()) + " * " + newQuantity);
//        console.log(newTotalPrice);

        //set new quanity and total price
        $("#quantity-" + itemID).val(newQuantity);
        $("#total-" + itemID).text($.number(newTotalPrice));
        reCalculateTotalPrice();
        updateProductQuantity(itemID, newQuantity);
    });

    //reduce product
    $("a.cart_quantity_down").on('click', function () {
        var itemID = $(this).attr('id').substring(4, 5);
        var newQuantity = parseInt($("#quantity-" + itemID).val()) - 1;
        if (newQuantity == 0)
            newQuantity++;
        var newTotalPrice = priceFormat($("#price-" + itemID).text()) * newQuantity;
        $("#quantity-" + itemID).val(newQuantity);
        $("#total-" + itemID).text($.number(newTotalPrice));
        reCalculateTotalPrice();
        updateProductQuantity(itemID, newQuantity);
    });

    //update product's quantity in shopping cart
    function updateProductQuantity(pid, qty) {
        var url = "<?php echo App()->controller->createUrl('order/ajaxUpdateProductCartQty'); ?>/pid/" + pid + "/qty/" + qty;
        $.ajax({
            url: url,
            type: "post",
            success: function () {
            }
        });
    }

    $(".cart_quantity_input").keyup(function () {
        var itemID = $(this).attr('id').substring(9, 10);
        var newQuantity = parseInt($("#quantity-" + itemID).val());
        if (newQuantity > 20) {
            $("#quantity-" + itemID).val(20);
            newQuantity = 20;
        } else if (newQuantity < 0) {
            $("#quantity-" + itemID).val(1);
            newQuantity = 1;
        }
        var newTotalPrice = parseFloat($("#price-" + itemID).text()) * newQuantity;
        $("#total-" + itemID).text($.number(newTotalPrice));

        reCalculateTotalPrice();
    });

    //remove product
    $("a.cart_quantity_delete").on('click', function () {
        var itemID = $(this).attr('id').substring(7, 8);
        $("table tr#itemRow-" + itemID).remove();
        $.ajax({
            url: "<?php echo App()->controller->createUrl('/order/removeItem'); ?>",
            type: 'POST',
            data: "pid=" + itemID,
            success: function () {
                if ($("p.cart_total_price").length) {
                    reCalculateTotalPrice();
                } else {
                    $('div.cart_info').fadeToggle('slow');
                    $('div#msg').fadeToggle({duration: 2500})
                }

            }
        });
    });

    //check out
    $("#checkout").on('click', function () {
        Cookies.set('returnUrl', $(location).attr('href'));
        $(location).attr('href', "<?php echo App()->controller->createUrl("/order/checkOut"); ?>");
    })


    //remove all commas form number
    function priceFormat(price) {
        var p = parseFloat(price.replace(/\,/g, ''));
        return p;
    }

    function reCalculateTotalPrice() {
        var prices = $("p.cart_total_price");
//        console.log(prices);
        var total = 0;
        prices.each(function () {
            total += priceFormat($(this).text());
        });

        $("#total-without-tax").html($.number(total) + "<sup>đ</sup>");
        $("#final-total span").html("<strong>" + $.number(total) + "<sup>đ</sup></strong>");
    }
</script>