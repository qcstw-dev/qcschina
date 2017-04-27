<?php

$xml = new SimpleXMLElement('<xml/>');

$aWebsites = Website::getAll((isset($_GET['website']) && $_GET['website'] ? $_GET['website'] : null));

if ($aWebsites) {
    foreach ($aWebsites as $oWebsite) {
        $post = $xml->addChild('website');
        $post->addChild('id', $oWebsite->id);
        $post->addChild('logo', ($_SERVER['HTTP_HOST'] == 'localhost' ? IMG_LOGO_DIR : 'http://www.qcschina.com/'.IMG_LOGO_RELATIVE_DIR).$oWebsite->logo);
        $post->addChild('title', $oWebsite->title);
        $post->addChild('motto', $oWebsite->motto);
    }
}
header('Content-Type: text/xml; charset=UTF-8');
print($xml->asXML());
