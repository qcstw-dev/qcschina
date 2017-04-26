<?php
if(isset($_GET['disconnect'])) {
    setcookie('connected', false, time()+60*60*24);
    header('location: '.BASE_URL_ADMIN.'connect');
}
if ((!isset($_COOKIE['connected']) || !$_COOKIE['connected']) && $_SERVER['REQUEST_URI'] != BASE_URL_ADMIN.'connect') {
    header('location: '.BASE_URL_ADMIN.'connect');
}