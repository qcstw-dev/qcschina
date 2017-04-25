<?php
include 'template/header.php'; 

$aProducts = Product::getAll();
$aWebsites = Website::getAll();

include 'template/main.php';

include 'template/footer.php';