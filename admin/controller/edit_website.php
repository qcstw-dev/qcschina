<?php

include 'admin/controller/checking_connection.php';
$oWebsite = null;
if (isset($_POST) && $_POST) {
    $aResult = ['success' => true];
    $oWebsite = new Website((isset($_POST['id_website']) && $_POST['id_website'] ? $_POST['id_website'] : null));
    $oWebsite->update($_POST);
    $oWebsite->save();
    if (isset($_POST['save_and_quit'])) {
        $sMessage = 'Website saved !';
        header('location: '.BASE_URL_ADMIN.'list-website?message='.$sMessage);
    }
} else {
    if (isset($_GET['id_website']) && $_GET['id_website']) {
        $oWebsite = new Website($_GET['id_website']);
        if (!$oWebsite->id) {
            $sMessage = 'This product doesn\'t exist anymore';
            header('location: ' . BASE_URL_ADMIN . '?message=' . $sMessage);
        }
    }
}
include 'admin/template/header.php';

include 'admin/template/edit_website.php';

include 'admin/template/footer.php';
