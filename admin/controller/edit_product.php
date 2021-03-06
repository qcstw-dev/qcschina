<?php
include 'admin/controller/checking_connection.php';

$aWebsites = Website::getAll();
$oProduct = null;
if ((isset($_POST['title']) && $_POST['title']) || (isset($_FILES) && $_FILES && $_FILES['files']['error'] != 4)) {
    $aResult = ['success' => true];
    $oProduct = new Product((isset($_POST['id_product']) && $_POST['id_product'] ? $_POST['id_product'] : null));
    $oProduct->update($_POST);
    $oProduct->save();
    // WEBSITES
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'website_') !== false) {
            $oProduct->updateStatusWebsite(str_replace('website_', '', $key), $value);
        }
    }
    if (isset($_FILES) && $_FILES && $_FILES['files']['error'] != 4) {
        foreach ($_FILES as $file) {
            if ($file['error'] == 0) {
                $allowed = array('gif', 'png', 'jpg');
                $filename = $file['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if (in_array($ext, $allowed)) {
                    $sName = time() . '_' . $oProduct->id . '.' . $ext;
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
    $oProduct->save();
    if (isset($_POST['save_and_quit']) && $aResult['success']) {
        $sMessage = 'Product saved !';
        header('location: '.BASE_URL_ADMIN.'?message='.$sMessage);
    }
} else {
    if (isset($_GET['id_product']) && $_GET['id_product']) {
        $oProduct = new Product($_GET['id_product']);
        if (!$oProduct->id) {
            $sMessage = 'This product doesn\'t exist anymore';
            header('location: ' . BASE_URL_ADMIN . '?message=' . $sMessage);
        }
    }
}

include 'admin/template/header.php';

include 'admin/template/edit_product.php';

include 'admin/template/footer.php';
