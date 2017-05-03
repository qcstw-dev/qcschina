<?php

include 'template/header.php';

$aMessage = [];
if (isset($_POST['subject'], $_POST['email'], $_POST['message']) && $_POST['subject'] && $_POST['email'] && $_POST['message']) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $bIsLocal = true;
        $whitelist = array(
            '127.0.0.1',
            '::1'
        );
        if (!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
            $bIsLocal = false;
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
        }
        if (!$bIsLocal && (!$server_output || !$server_output->success)) {
            $aMessage['type'] = 'danger';
            $aMessage['text'] = 'Error: Wrong reCAPTCHA';
        } else if (mail(SITE_EMAIL.(SITE_EMAIL_BCC ? ', ' . SITE_EMAIL_BCC : ''), WEBSITE_NAME . ' - ' . $_POST['subject'], $_POST['message'], 'From: ' . $_POST['email'])) {
            $aMessage['type'] = 'success';
            $aMessage['text'] = 'Email Successfully sent, we will reply you soon';
        }
    } else {
        $aMessage['type'] = 'danger';
        $aMessage['text'] = 'Error: invalid email';
    }
}

include 'template/contact_us.php';

include 'template/footer.php';
