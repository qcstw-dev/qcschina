<?php
include 'template/header.php'; 

echo 'controller admin main !';

//$oProduct = new Product(1);
//var_dump($oProduct);

$aProducts = Product::getAll();
var_dump($aProducts);
include 'template/main.php';

include 'template/footer.php';