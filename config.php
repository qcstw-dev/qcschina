<?php

//phpinfo();die;
define('BASE_PATH', ($_SERVER['HTTP_HOST'] == 'localhost' ? '/qcschina' : '/'));
define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . BASE_PATH . '/');
define('CSS_DIR', BASE_URL . 'template/css/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'qcschina');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

require_once('classes/Db.php');
require_once('classes/Product.php');


// ROUTING
include 'dispatcher.php';
foreach ($aRoutes as $aRoute) {
    if (BASE_PATH . $aRoute['rule'] == rtrim($_SERVER['REQUEST_URI'], '/')) {
        include $aRoute['controller'] . '.php';
    }
}