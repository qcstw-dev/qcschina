<?php

$xml = new SimpleXMLElement('<xml/>');

if (isset($_GET['website']) && $_GET['website']) {
    $db = Db::getInstance();
    $db->where('id_website', $_GET['website']);
    if ($aPage = $db->getOne('page_about_us')) {
        $post = $xml->addChild('page');
        $post->addChild('id', $aPage['id']);
        $post->addChild('video', htmlentities($aPage['video']));
        $post->addChild('text', str_replace('&rsquo;', '&#8217;', htmlentities($aPage['text'])));
        for ($i = 1; $i <= 4; $i++) {
            if ($aPage['photo_' . $i]) {
                $post->addChild('photo_' . $i, ($_SERVER['HTTP_HOST'] == 'localhost' ? IMG_ABOUT_US_DIR : 'http://www.qcschina.com/' . IMG_ABOUT_US_RELATIVE_DIR) . $aPage['photo_' . $i]);
            }
        }
    }
}

header('Content-Type: text/xml; charset=UTF-8');
print($xml->asXML());
