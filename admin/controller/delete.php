<?php

$sMessage = '';
if (isset($_GET['id_product']) && $_GET['id_product']) {
    $oProduct = new Product($_GET['id_product']);
    if ($oProduct->delete()) {
        $sMessage = 'Product successfully deleted!';
    } else {
        $sMessage = 'An error occured when deleting product';
    }
} else {
    $sMessage = 'Error this product does not exist';
}
header('location: ' . BASE_URL_ADMIN . '?message=' . urlencode($sMessage));
