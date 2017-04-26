<?php

//phpinfo();die;
define('SITE_TITLE', 'Qcschina');
define('SITE_EMAIL', 'maxime.lefevre89@gmail.com');
define('SITE_EMAIL_BCC', 'mlefevre0789@gmail.com');
define('RECAPTCHA_SITE_KEY', '6LecpxwUAAAAAG7ZSDy38lhkFMOZmHUrG3bHpKHH');
define('RECAPTCHA_SECRET', '6LecpxwUAAAAAEaHnpzskXbRqgrFBdwhrQXjRmMH');
define('ID_WEBSITE', null);
define('ADMIN_LOGIN', 'qcsasia');
define('ADMIN_PASSWORD', 'ab119955CD');
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
