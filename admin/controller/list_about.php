<?php

include 'admin/controller/checking_connection.php';
include 'admin/template/header.php';

$aAboutUsPages = Db::getInstance()->get('page_about_us');

include 'admin/template/list_about.php';

include 'admin/template/footer.php';