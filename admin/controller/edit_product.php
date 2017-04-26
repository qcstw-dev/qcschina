<?php

include 'admin/controller/checking_connection.php';
include 'admin/template/header.php';
$aWebsites = Website::getAll();
$oProduct = null;
if (isset($_POST) && $_POST) {
    $aResult = ['success' => true];
    $oProduct = new Product((isset($_POST['id_product']) && $_POST['id_product'] ? $_POST['id_product'] : null));
    $oProduct->update($_POST);
    $oProduct->save();
    
    // WEBSITES
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'website_') !== false) {
            $oProduct->updateStatusWebsite(str_replace('website_', '', $key), ($value == 'on' ? 1 : 0 ));
        }
    }
    if (isset($_FILES) && $_FILES) {
        foreach ($_FILES as $file) {
            if ($file['error'] == 0) {
                $allowed = array('gif', 'png', 'jpg');
                $filename = $file['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if (in_array($ext, $allowed)) {
                    $sName = time() . '_' . $oProduct->id.'.'.$ext;
                    if (move_uploaded_file($file['tmp_name'], IMG_PRODUCTS_RELATIVE_DIR . basename($sName))) {
                        if ($oProduct->picture && file_exists(IMG_PRODUCTS_RELATIVE_DIR . $oProduct->picture)) {
                            unlink(IMG_PRODUCTS_RELATIVE_DIR . $oProduct->picture);
                        }
                        $sImageTitle = str_replace(['.jpg', '.png', '.gif'], '', $file['name']);
                        $oProduct->picture = $sName;
                    } else {
                        $aResult['success'] = false;
                        $aResult['error'] = 'Upload file failed';
                    }
                } else {
                    $aResult['success'] = false;
                    $aResult['error'] = 'This format is not allowed';
                }
            }
        }
        $oProduct->save();
    }
} else {
    if (isset($_GET['id_product']) && $_GET['id_product']) {
        $oProduct = new Product($_GET['id_product']);
        if (!$oProduct->id) {
            $sMessage = 'This product doesn\'t exist anymore';
            header('location: '.BASE_URL_ADMIN.'?message='.$sMessage);
        }
    }
}

include 'admin/template/edit_product.php';

include 'admin/template/footer.php';
