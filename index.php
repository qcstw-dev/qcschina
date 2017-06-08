<?php
session_start();

$ip = '';
if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR']) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
if ($_SERVER["HTTP_HOST"] == 'localhost') {
//        $ip = "61.220.251.250";
//    $ip = "121.247.253.51";
    // test china
            $ip = "113.100.99.221";
}

// we delete the session about checking IP location if older than 1 hour
if (isset($_SESSION['timeout_country']) && $_SESSION['timeout_country'] + 60 * 60 < time()) {
    unset($_SESSION['country']);
}
if (!isset($_SESSION['country']) || !$_SESSION['country']) {
    $_SESSION['timeout_country'] = time();

//            test china
//            $url = "http://ip2c.org/113.100.99.221";
    $url = "http://ip2c.org/" . $ip;

    set_time_limit(10);

    $data = file_get_contents($url);
    $reply = explode(';', $data);

    if (isset($reply[1]) && $reply[1]) {
        $_SESSION['country'] = $reply[1];
    } else {
        $_SESSION['country'] = '';
    }
}
if (in_array($_SESSION['country'], ['CN', 'KR', 'KP', 'IN']) && $ip != '121.247.253.51') {
    echo 'This website is not available in your country';
    exit;
}

include_once 'config.php';

include_once 'retrieve_website_info.php'; 

include_once 'routing.php';
