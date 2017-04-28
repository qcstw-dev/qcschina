<?php
include '../admin/controller/checking_connection.php';
include 'template/header.php'; 

$aProducts = Product::getAll();
$aWebsites = Website::getAll();

include 'template/list_product.php';

include 'template/footer.php';