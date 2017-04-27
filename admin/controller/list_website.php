<?php
include 'admin/controller/checking_connection.php';
include 'admin/template/header.php'; 

$aWebsites = Website::getAll();

include 'admin/template/list_website.php';

include 'admin/template/footer.php';