<?php

include 'admin/controller/checking_connection.php';
include 'admin/template/header.php';
$oWebsite = null;
if (isset($_POST) && $_POST) {
    $aResult = ['success' => true];
    $oWebsite = new Website((isset($_POST['id_website']) && $_POST['id_website'] ? $_POST['id_website'] : null));
    $oWebsite->update($_POST);
    $oWebsite->save();
    
//    if (isset($_FILES) && $_FILES) {
//        foreach ($_FILES as $file) {
//            if ($file['error'] == 0) {
//                $allowed = array('gif', 'png', 'jpg');
//                $filename = $file['name'];
//                $ext = pathinfo($filename, PATHINFO_EXTENSION);
//                if (in_array($ext, $allowed)) {
//                    $sName = time() . '_' . $oWebsite->id.'.'.$ext;
//                    if (move_uploaded_file($file['tmp_name'], IMG_LOGO_RELATIVE_DIR . basename($sName))) {
//                        if ($oWebsite->logo && file_exists(IMG_LOGO_RELATIVE_DIR . $oWebsite->logo)) {
//                            unlink(IMG_LOGO_RELATIVE_DIR . $oWebsite->logo);
//                        }
//                        $sImageTitle = str_replace(['.jpg', '.png', '.gif'], '', $file['name']);
//                        $oWebsite->logo = $sName;
//                    } else {
//                        $aResult['success'] = false;
//                        $aResult['error'] = 'Upload file failed';
//                    }
//                } else {
//                    $aResult['success'] = false;
//                    $aResult['error'] = 'This format is not allowed';
//                }
//            }
//        }
//        $oWebsite->save();
//    }
} else {
    if (isset($_GET['id_website']) && $_GET['id_website']) {
        $oWebsite = new Website($_GET['id_website']);
        if (!$oWebsite->id) {
            $sMessage = 'This product doesn\'t exist anymore';
            header('location: '.BASE_URL_ADMIN.'?message='.$sMessage);
        }
    }
}

include 'admin/template/edit_website.php';

include 'admin/template/footer.php';
