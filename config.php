<?php
//phpinfo();die;
define('BASE_PATH', ($_SERVER['HTTP_HOST'] == 'localhost' ? '/qcschina' : '/'));
define('BASE_URL', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].BASE_PATH.'/');
define('CSS_DIR', BASE_URL.'template/css/');

include './dispatcher.php';

foreach ($aRoutes as $aRoute) {
//    var_dump(BASE_PATH.$aRoute['rule']);
//    var_dump($_SERVER['REQUEST_URI']);
    if (BASE_PATH.$aRoute['rule'] == $_SERVER['REQUEST_URI']) {
        include 'controller/'.$aRoute['controller'].'.php';
    }
//     else {
//        var_dump(str_replace(BASE_PATH, '', $_SERVER['REQUEST_URI']).'.php');
//        include str_replace(BASE_PATH, '', $_SERVER['REQUEST_URI']).'.php';
//    }
}