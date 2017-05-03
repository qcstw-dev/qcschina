<?php

if (!isset($_POST['action']) || !$_POST['action']) {
    echo json_encode(['error' => 'Error ajax, action not defined']);
} else {
    $aResult = [];
    switch ($_POST['action']) {
        case 'deleteaboutphoto':
            if (isset($_POST['id_photo'], $_POST['id_page']) && $_POST['id_photo'] && $_POST['id_page']) {
                $db = Db::getInstance();

                $db->where('id', $_POST['id_page']);
                $sPhotoName = $db->getValue('page_about_us', 'photo_' . $_POST['id_photo']);
                unlink(IMG_ABOUT_US_RELATIVE_DIR . $sPhotoName);

                $db->where('id', $_POST['id_page']);
                $db->update('page_about_us', ['photo_' . $_POST['id_photo'] => ''], 1);

                $aResult['success'] = true;
                $aResult['id_photo'] = $_POST['id_photo'];
            } else {
                $aResult['error'] = 'Error: information missing';
            }

            break;
        case 'sortproducts':
            if (isset($_POST['order']) && $_POST['order']) {
                foreach ($_POST['order'] as $sProductId => $sOrderNumber) {
                    $oProduct = new Product($sProductId);
                    if ($oProduct) {
                        $oProduct->order_number = $sOrderNumber;
                        $oProduct->save();
                    }
                }

                $aResult['success'] = true;
            } else {
                $aResult['error'] = 'Error: information missing';
            }
            break;
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
                            $oProduct->picture = $sName;
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
        case 'selectwebsite':
            if (isset($_POST['id_product'], $_POST['id_website'], $_POST['select']) && $_POST['id_product'] && $_POST['id_website']) {
                $oProduct = new Product($_POST['id_product']);
                $oProduct->updateStatusWebsite($_POST['id_website'], $_POST['select']);
            } else {
                $aResult['error'] = 'Error: information missing';
            }

            break;

        default:
            $aResult['error'] = 'Error ajax';
            break;
    }
    echo json_encode($aResult);
}