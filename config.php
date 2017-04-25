<?php

//phpinfo();die;
define('SITE_TITLE', 'Qcschina');
define('BASE_PATH', ($_SERVER['HTTP_HOST'] == 'localhost' ? '/qcschina' : '/'));
define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . BASE_PATH . '/');
define('BASE_URL_ADMIN', BASE_URL.'admin/');
define('CSS_DIR', BASE_URL . 'template/css/');
define('JS_DIR', BASE_URL . 'template/js/');
define('IMG_DIR', BASE_URL . 'img/');
define('IMG_PRODUCTS_DIR', IMG_DIR.'products/');
define('IMG_PRODUCTS_RELATIVE_DIR', 'img/products/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'qcschina');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

require_once('classes/MysqliDb.php');
require_once('classes/Db.php');
require_once('classes/Product.php');
require_once('classes/Website.php');

// ROUTING
include 'dispatcher.php';
$parsed_url = parse_url($_SERVER['REQUEST_URI']);
foreach ($aRoutes as $aRoute) {
    if (BASE_PATH . $aRoute['rule'] == rtrim($parsed_url['path'], '/')) {
        include $aRoute['controller'] . '.php';
    }
}