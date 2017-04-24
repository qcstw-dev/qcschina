<?php
include 'template/header.php'; 

$aProducts = Product::getAll();

include 'template/main.php';

include 'template/footer.php';