<?php
// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
//defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

define('BASE_URL', 'http://localhost/dienlanh');
//define('BASE_URL', 'http://dienlanhbariavungtau.com');
define('DB_CONNECTION', 'mysql:host=127.0.0.1;dbname=dienlanh');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_CHARSET', 'utf8');
define('DB_TABLE_PREFIX', 'tbl_');
define('SITE_NAME', 'Dien Lanh Admin Board');
define('LOCALE', 'en');
define('THEME', 'default');
define('ADMIN_THEME', 'admin');
define('PATH_UPLOAD', 'upload');

//product image resize
define("MAIN_PROD_ORIGINAL_W", "500");
define("MAIN_PROD_ORIGINAL_H", "708");
define("MAIN_PROD_MEDIUM_W", "300");
define("MAIN_PROD_MEDIUM_H", "425");
define('PRODUCT_SMALL_W', "120");
define('PRODUCT_SMALL_H', '120');


//Note!!!
//Change webroot() to BASE_URL when the project is released on real hosting