<?php

include 'admin/template/header.php';

$oProduct = null;
if (isset($_POST) && $_POST) {
    $oProduct = new Product((isset($_POST['id_product']) && $_POST['id_product'] ? $_POST['id_product'] : null));
    if (isset($_FILES) && $_FILES) {
        foreach ($_FILES as $file) {
            $sName = time() . '_' . $oProduct->id;
            $sFolder = 'img/products/';
            if (move_uploaded_file($file['tmp_name'], $sFolder . basename($sName))) {
                if ($oProduct->picture) {
                    unlink($sFolder . $oProduct->picture);
                }
                $sImageTitle = str_replace(['.jpg', '.png', '.gif'], '', $file['name']);
                $aResult['image_name'] = $sName;
                $oProduct->picture = $sName;
            } else {
                $aResult['success'] = false;
            }
        }
    }

    $oProduct->update($_POST);
    $oProduct->save();
} else {
    if (isset($_GET['id_product']) && $_GET['id_product']) {
        $oProduct = new Product($_GET['id_product']);
    }
}

include 'admin/template/edit_product.php';

include 'admin/template/footer.php';
