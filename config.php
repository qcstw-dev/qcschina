<?php

//phpinfo();die;
define('ID_WEBSITE', 1);
define('SITE_EMAIL', 'maxime.lefevre89@gmail.com');
define('SITE_EMAIL_BCC', 'mlefevre0789@gmail.com');
define('WEBSITE_ANALYTICS_CODE', 'UA-85358221-1');
define('RECAPTCHA_SITE_KEY', '6LecpxwUAAAAAG7ZSDy38lhkFMOZmHUrG3bHpKHH');
define('RECAPTCHA_SECRET', '6LecpxwUAAAAAEaHnpzskXbRqgrFBdwhrQXjRmMH');
define('ADMIN_LOGIN', 'qcsasia');
define('ADMIN_PASSWORD', 'ab119955CD');
define('BASE_PATH', ($_SERVER['HTTP_HOST'] == 'localhost' ? '/qcschina' : ''));
define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . BASE_PATH . '/');
define('BASE_URL_ADMIN', BASE_URL.'admin/');
define('CSS_DIR', BASE_URL . 'template/css/');
define('JS_DIR', BASE_URL . 'template/js/');
define('ADMIN_CSS_DIR', BASE_URL_ADMIN . 'template/css/');
define('ADMIN_JS_DIR', BASE_URL_ADMIN . 'template/js/');
define('IMG_DIR', BASE_URL . 'img/');
define('IMG_LOGO_DIR', IMG_DIR.'logo/');
define('IMG_PRODUCTS_DIR', IMG_DIR.'products/');
define('IMG_ABOUT_US_DIR', IMG_DIR.'about-us/');
define('IMG_LOGO_RELATIVE_DIR', 'img/logo/');
define('IMG_PRODUCTS_RELATIVE_DIR', 'img/products/');
define('IMG_ABOUT_US_RELATIVE_DIR', 'img/about-us/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'qcschina');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

define('HOME_TITLE', 'Promotional products – QCS china factory');
define('HOME_DESCRIPTION', 'Custom Gifts & premium for promotional products supplier & distributor. China direct factory promotional products with 100pcs MOQ & rush delivery up to 1000pcs.');

define('ABOUT_TITLE', 'Promotional products – About QCS china factory');
define('ABOUT_DESCRIPTION', 'Everything about QCS China factory, custom Gifts & premium for promotional products supplier & distributor.');

define('CONTACT_TITLE', 'Promotional products – Contact QCS china factory');
define('CONTACT_DESCRIPTION', 'Contact QCS China factory, custom Gifts & premium for promotional products supplier & distributor. ');


require_once('classes/MysqliDb.php');
require_once('classes/Db.php');
require_once('classes/Product.php');
require_once('classes/Website.php');
