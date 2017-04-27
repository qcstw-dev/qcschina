<?php
include 'admin/controller/checking_connection.php';
$sMessage = '';
if (isset($_GET['id_product']) && $_GET['id_product']) {
    $oProduct = new Product($_GET['id_product']);
    if ($oProduct->delete()) {
        $sMessage = 'Product successfully deleted!';
    } else {
        $sMessage = 'An error occured when deleting product';
    }
} else if (isset($_GET['id_website']) && $_GET['id_website']) {
    $oWebsite = new Website($_GET['id_website']);
    if ($oWebsite->delete()) {
        $sMessage = 'Website successfully deleted!';
    } else {
        $sMessage = 'An error occured when deleting website';
    }
} 
header('location: ' . BASE_URL_ADMIN. (isset($_GET['id_website']) && $_GET['id_website'] ? 'list-website' : '') . '?message=' . urlencode($sMessage));
