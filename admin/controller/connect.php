<?php

//include 'admin/controller/checking_connection.php';

$sMessage = '';

if (isset($_POST['login'], $_POST['password']) && $_POST['login'] && $_POST['password']) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        'response' => $_POST['g-recaptcha-response'],
        'secret' => RECAPTCHA_SECRET
    )));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = json_decode(curl_exec($ch));
    curl_close($ch);

    $whitelist = array(
        '127.0.0.1',
        '::1'
    );
    $bIsLocal = true;
    if (!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
        $bIsLocal = false;
    }
    if (!$bIsLocal && (!$server_output || !$server_output->success)) {
        $sMessage = 'Error: Wrong reCAPTCHA';
    } else {
        if (
                $_POST['login'] == ADMIN_LOGIN && $_POST['password'] == ADMIN_PASSWORD
        ) {
            setcookie('connected', true, time() + 60 * 60 * 24);
            header('location: ' . BASE_URL_ADMIN);
        } else if ($_POST['login'] != ADMIN_LOGIN) {
            $sMessage = 'Error: Wrong login';
        } else if ($_POST['password'] != ADMIN_PASSWORD) {
            $sMessage = 'Error: Wrong password';
        }
    }
}
include 'admin/template/header.php';


include 'admin/template/connect.php';

include 'admin/template/footer.php';
