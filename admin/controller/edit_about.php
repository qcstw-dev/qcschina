<?php

include 'admin/controller/checking_connection.php';
include 'admin/template/header.php';
$aWebsites = Website::getAll();
$aPage = [];
$aResult = [];

if (isset($_GET['id_page']) && $_GET['id_page']) {
    $db = Db::getInstance();
    $db->where('id', $_GET['id_page']);
    $aPage = $db->getOne('page_about_us');
}

if (isset($_POST) && $_POST) {
    if ($_POST['id_website']) {
        $aData = [
            'video' => $_POST['video'],
            'text' => $_POST['text'],
            'id_website' => $_POST['id_website']
        ];

        $db = Db::getInstance();
        if ($_POST['id_page']) {
            $db->where('id', $_POST['id_page']);
            if ($db->update('page_about_us', $aData)) {
                $aResult['success'] = true;
            }
        } else {
            $iPageId = $db->insert('page_about_us', $aData);
            if ($iPageId) {
                $aResult['success'] = true;
            }
        }
        
        $db->where('id', (isset($_POST['id_page']) && $_POST['id_page'] ? $_POST['id_page'] : $iPageId));
        $aPage = $db->getOne('page_about_us');
        if (isset($_FILES) && $_FILES) {
            foreach ($_FILES as $key => $file) {
                if ($file['error'] == 0) {
                    $allowed = array('gif', 'png', 'jpg');
                    $filename = $file['name'];
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if (in_array($ext, $allowed)) {
                        $sName = time() . '_' . $_POST['id_website'] . '_' . $key . '.' . $ext;
                        if (move_uploaded_file($file['tmp_name'], IMG_ABOUT_US_RELATIVE_DIR . basename($sName))) {
                            if ($aPage[$key] && file_exists(IMG_ABOUT_US_RELATIVE_DIR . $aPage[$key])) {
                                unlink(IMG_ABOUT_US_RELATIVE_DIR . $aPage[$key]);
                            }
                            $sImageTitle = str_replace(['.jpg', '.png', '.gif'], '', $file['name']);
                            $db = Db::getInstance();
                            $db->where('id', $aPage['id']);
                            $db->update('page_about_us', [$key => $sName]);
                            $aPage[$key] = $sName;
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
        }
    } else {
        $aResult['success'] = false;
        $aResult['error'] = 'You have to choose a website';
    }
}

include 'admin/template/edit_about.php';

include 'admin/template/footer.php';
