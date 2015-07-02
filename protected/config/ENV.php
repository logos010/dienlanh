<?php
// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
//defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

define('BASE_URL', 'http://localhost/TsanShop');
//define('BASE_URL', 'D://htdocs/TsanShop/');
define('DB_CONNECTION', 'mysql:host=127.0.0.1;dbname=tsanshop');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_CHARSET', 'utf8');
define('DB_TABLE_PREFIX', 'tbl_');
define('SITE_NAME', 'TsanShop Admin Board');
define('LOCALE', 'en');
define('THEME', 'default');
define('ADMIN_THEME', 'admin');
define('PATH_UPLOAD', 'upload');


//Note!!!
//Change webroot() to BASE_URL when the project is released on real hosting