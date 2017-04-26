<?php

//include 'admin/controller/checking_connection.php';
include 'admin/template/header.php'; 

$sMessage = '';

if (isset($_POST['login'], $_POST['password']) && $_POST['login'] && $_POST['password']) {
    if (
        $_POST['login'] == ADMIN_LOGIN 
        && $_POST['password'] == ADMIN_PASSWORD
    ) {
        setcookie('connected', true, time()+60*60*24);
        header('location: '.BASE_URL_ADMIN);
    } else if ($_POST['login'] != ADMIN_LOGIN) {
        $sMessage = 'Error: Wrong login';
    } else if ($_POST['password'] != ADMIN_PASSWORD) {
        $sMessage = 'Error: Wrong password';
    }
}


include 'admin/template/connect.php';

include 'admin/template/footer.php';