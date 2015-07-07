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
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jquery.js"></script> 
    <script src="<?php echo App()->theme->baseUrl; ?>/js/jquery.openCarousel.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/easing.js"></script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/move-top.js"></script>
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
                <!--
                <ul class="nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li  class="test">
                        <a href="#">Appliances</a>
                        <ul>
                            <li>
                                <a href="#">Cookware</a>
                                <ul>
                                    <li><a href="#">Pots & Pans</a></li>
                                    <li><a href="#">Pressure Cookers</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Storage</a>
                                <ul>
                                    <li><a href="#">Bottles & Sippers</a></li>
                                    <li><a href="#">Containers & Jars</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Cutlery & Tableware</a>
                                <ul>
                                    <li><a href="#">Cutlery</a></li>
                                    <li><a href="#">Condiment Sets</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Bar Accessories</a>
                                <ul>
                                    <li><a href="#">Bottle Openers</a></li>
                                    <li><a href="#">Flasks</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Computers</a>
                        <ul>
                            <li>
                                <a href="#">Laptops</a>
                                <ul>
                                    <li><a href="#">HP</a></li>
                                    <li><a href="#">Lenova</a></li>
                                    <li><a href="#">Dell</a></li>
                                    <li><a href="#">All Brands</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Computer Accessories</a>
                                <ul>
                                    <li><a href="#">External Hard Disks</a></li>
                                    <li><a href="#">Pendrives</a></li>
                                    <li><a href="#">PC Components</a></li>
                                    <li><a href="#">Computer Peripherals</a></li>
                                    <li><a href="#">Datacards & Routers</a></li>
                                    <li><a href="#">Mouse</a></li>
                                    <li><a href="#">Laptop Skins & Decals</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Health & Beauty</a>
                        <ul>
                            <li><a href="#">Bath & Skin Care</a></li>
                            <li><a href="#">Health & Safety</a></li>
                            <li><a href="#">Maternity Care</a></li>
                            <li><a href="#">Body Care Combos</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Home & Garden</a>
                        <ul>
                            <li>
                                <a href="#">Home Furnishing</a>
                                <ul>
                                    <li><a href="#">Bed</a></li>
                                    <li><a href="#">Bath</a></li>
                                    <li><a href="#">Kitchen</a></li>
                                    <li><a href="#">Living</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Home Decor</a>
                                <ul>
                                    <li><a href="#">Flowers & Plants</a></li>
                                    <li><a href="#">Home Fragrances</a></li>
                                    <li><a href="#">Spiritual Decor</a></li>
                                    <li><a href="#">Wall Decor</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Gardening Tools</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Office Supplies</a>
                        <ul>
                            <li>
                                <a href="#">Books</a>
                                <ul>
                                    <li><a href="#">Academic & Professional</a></li>
                                    <li><a href="#">Entrance Exam</a></li>
                                    <li><a href="#">Literature & Fiction</a></li>
                                    <li><a href="#">Children & Teens</a></li>
                                    <li><a href="#">Indian Writing</a></li>
                                    <li><a href="#">New Releases</a></li>
                                    <li><a href="#">Bestsellers</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Stationery</a>
                                <ul>
                                    <li><a href="#">Pens</a></li>
                                    <li><a href="#">Calculators</a></li>
                                    <li><a href="#">College Supplies</a></li>
                                    <li><a href="#">Art Supplies</a></li>
                                    <li><a href="#">Diaries & Notebooks</a></li>
                                    <li><a href="#">Gifting</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Sports Equipment</a>
                        <ul>
                            <li>
                                <a href="#">Fitness</a>
                                <ul>
                                    <li><a href="#">Yoga Mats</a></li>
                                    <li><a href="#">Gym Gloves</a></li>
                                    <li><a href="#">Ab Exercisers</a></li>
                                    <li><a href="#">Gym Balls</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Indoor Sports</a>
                                <ul>
                                    <li><a href="#">Chess</a></li>
                                    <li><a href="#">Darts</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Team Sports</a>
                                <ul>
                                    <li><a href="#">Basketball</a></li>
                                    <li><a href="#">Cricket</a></li>
                                    <li><a href="#">Football</a></li>
                                    <li><a href="#">VolleyBall</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Racquet Sports</a>
                                <ul>
                                    <li><a href="#">Badminton</a></li>
                                    <li><a href="#">Squash</a></li>
                                    <li><a href="#">Table Tennis</a></li>
                                    <li><a href="#">Tennis</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul> -->
                <span class="left-ribbon"> </span> 
                <span class="right-ribbon"> </span>    
            </div>
            <!-- end of menu -->

            <!--  Header -->
            <!--            <div class="header_bottom">
                            <div class="slider-text">
                                <h2>Lorem Ipsum Placerat <br/>Elementum Quistue Tunulla Maris</h2>
                                <p>Vivamus vitae augue at quam frigilla tristique sit amet<br/> acin ante sikumpre tisdin.</p>
                                <a href="#">Sitamet Tortorions</a>
                            </div>
                            <div class="slider-img">
                                <img src="<?php echo App()->theme->baseUrl; ?>/images/slider-img.png" alt="" />
                            </div>
                            <div class="clear"></div>
                        </div>-->
            <!-- end of header-->
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
    <script type="text/javascript">
        $(document).ready(function () {
            $().UItoTop({easingType: 'easeOutQuart'});
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

