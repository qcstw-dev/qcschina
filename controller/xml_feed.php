<?php

$xml = new SimpleXMLElement('<xml/>');

$aProducts = Product::getAll((isset($_GET['website']) && $_GET['website'] ? $_GET['website'] : null)
//    , (isset($_GET['search']) && $_GET['search'] ? $_GET['search'] : null)
    );

if ($aProducts) {
    foreach ($aProducts as $oProduct) {
        $post = $xml->addChild('product');
        $post->addChild('id', $oProduct->id);
        $post->addChild('title', htmlspecialchars($oProduct->title));
        $post->addChild('picture', ($oProduct->picture ? ($_SERVER['HTTP_HOST'] == 'localhost' ? IMG_PRODUCTS_DIR : 'http://www.qcschina.com/'.IMG_PRODUCTS_RELATIVE_DIR).$oProduct->picture : ''));
        $post->addChild('url', $oProduct->url);
    }
}
if (count($aProducts) == 1) {
    $post = $xml->addChild('product');
}
else {
    $post = $xml->addChild('no_product');
    $post->addChild('no_product', 'no_product');
}
header('Content-Type: text/xml; charset=UTF-8');
print($xml->asXML());
