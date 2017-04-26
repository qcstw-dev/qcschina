<?php

$xml = new SimpleXMLElement('<xml/>');

$aProducts = Product::getAll((isset($_GET['website']) && $_GET['website'] ? $_GET['website'] : null));

if ($aProducts) {
    foreach ($aProducts as $oProduct) {
        $post = $xml->addChild('product');
        $post->addChild('id', $oProduct->id);
        $post->addChild('title', $oProduct->title);
        $post->addChild('picture', ($_SERVER['HTTP_HOST'] == 'localhost' ? IMG_PRODUCTS_DIR : 'http://www.qcschina.com/'.IMG_PRODUCTS_RELATIVE_DIR).$oProduct->picture);
        $post->addChild('url', $oProduct->url);
    }
}
header('Content-Type: text/xml; charset=UTF-8');
print($xml->asXML());
