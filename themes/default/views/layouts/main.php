<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
    <title>Free Ecomm Template Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href="<?php echo App()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo App()->theme->baseUrl; ?>/css/category-menu-styles.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='<?php echo App()->theme->baseUrl; ?>/css/jquery.bxslider.css' rel='stylesheet' type='text/css'>    
    <!--<link href='<?php echo App()->theme->baseUrl; ?>/css/default.css' rel='stylesheet' type='text/css'>-->
    <link href='<?php echo App()->theme->baseUrl; ?>/css/component.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jquery.js"></script> 
    <script src="<?php echo App()->theme->baseUrl; ?>/js/jquery.openCarousel.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/easing.js"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/category-menu-styles.js"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jssor.js"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jssor.slider.js"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/cbpShop.min.js"></script>    
</head>
<body>
    <div class="header">
        <div class="wrap">
            <div class="header_top">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo App()->theme->baseUrl; ?>/images/logo.png" alt="" /></a>
                </div>
                <div class="header_top_right">
                    <div class="search_box">
                        <span>Search</span>
                        <form id="search">
                            <input type="text" id="kw" value="">
                            <input type="submit" value="">
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>     

            <!-- menu -->
            <div class="navigation">
                <a class="toggleMenu" href="#">Menu</a>
                <?php
                $this->widget('application.components.MenuFrontPage', array(
                    'menuCate' => isset($_GET['tid']) ? $_GET['tid'] : null,
                ));
                ?>                
                <span class="left-ribbon"> </span> 
                <span class="right-ribbon"> </span>    
            </div>
            <!-- end of menu -->

            <?php
            $sliderPage = App()->request->url;
            if ($sliderPage == '/dienlanh/' || $sliderPage == '/dienlanh/product/'):
                ?>                
                <!--  Header -->
                <div class="header_bottom">
                    <?php
                    $dir = webroot() . "/upload/slider/banner/";
                    $file = scandir($dir);
                    ?>
                    <ul class="bxslider">
                        <?php
                        for ($i = 2, $n = count($file); $i < $n; $i++):
                            ?>
                            <li>
                                <img width="1275" src="<?php echo BASE_URL . "/upload/slider/banner/" . $file[$i]; ?>" />
                            </li>
                    <?php endfor; ?>
                    </ul>
                </div>
                <!-- end of header-->
            <?php endif; ?>
        </div>
    </div>
    <!------------End Header ------------>
    <div class="main">
        <div class="content main_content">
            <?php echo $content; ?>
        </div>
    </div>

    <div class="footer">
        <div class="wrap">	
            <div class="copy_right">
                <p>Copy rights (c). All rights Reseverd | Template by  <a href="http://w3layouts.com" target="_blank">W3Layouts</a> </p>
            </div>	
            <div class="footer-nav">
                <ul>
                    <li><a href="#">Terms of Use</a> : </li>
                    <li><a href="#">Privacy Policy</a> : </li>
                    <li><a href="contact.html">Contact Us</a> : </li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>		
        </div>
    </div>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jquery.bxslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $().UItoTop({easingType: 'easeOutQuart'});

             $('.bxslider').bxSlider({
                 auto: true
             });
        });

        $("form#search").submit(function () {
            var kw = $("input#kw").val();
            var url = "<?php echo App()->controller->createUrl('search/searchInBasic'); ?>";
            $.ajax({
                url: url,
                type: "post",
                data: "keyword=" + kw,
                success: function (data) {
                    $(".main_content").html(data);
                }
            });
            return false;
        });
    </script>
    <a href="#" id="toTop"></a>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jquery.etalage.min.js"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jquery.matchHeight.js"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/navigation.js"></script>    
</body>
</html>