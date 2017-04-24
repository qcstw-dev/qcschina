<?php

if (!isset($_POST['action']) || !$_POST['action']) {
    echo json_encode(['error' => 'Error ajax, action not defined']);
} else {
    $aResult = [];
    switch ($_POST['action']) {
        case 'uploadpicture':
            if (isset($_FILES) && $_FILES) {
                $oProduct = null;
                if (isset($_POST['id_product']) && $_POST['id_product']) {
                    $oProduct = new Product($_POST['id_product']);
                }
                foreach ($_FILES as $file) {
                    $sName = time() . '_' . $oProduct->getId();
                    $sFolder = 'img/products/';
                    if (move_uploaded_file($file['tmp_name'], $sFolder . basename($sName))) {
                        if ($oProduct && $oProduct->picture) {
                            unlink($sFolder . $oProduct->picture);
                        }
                        $sImageTitle = str_replace(['.jpg', '.png', '.gif'], '', $file['name']);
                        $aResult['image_name'] = $sName;
                        if ($oProduct) {
                            $oProduct->setPicture($sName);
                        } else {
                            $oProduct = new Product(null, ['picture' => $sName]);
                        }
                        if (!$oProduct->save()) {
                            $aResult['success'] = false;
                            $aResult['error'] = 'Fail saving picture';
                        } else {
                            $aResult['success'] = true;
                            $aResult['id_product'] = $oProduct->getId();
                        }
                    } else {
                        $aResult['success'] = false;
                    }
                }
            } else {
                $aResult['error'] = 'Error: information missing';
            }
            break;
        case 'deletepicture':


            break;

        default:
            $aResult['error'] = 'Error ajax';
            break;
    }
    echo json_encode($aResult);
}