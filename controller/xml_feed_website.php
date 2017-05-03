<?php

$xml = new SimpleXMLElement('<xml/>');

$aWebsites = Website::getAll((isset($_GET['website']) && $_GET['website'] ? $_GET['website'] : null));

if ($aWebsites) {
    foreach ($aWebsites as $oWebsite) {
        $post = $xml->addChild('website');
        $post->addChild('id', $oWebsite->id);
        $post->addChild('name', $oWebsite->name);
        $post->addChild('color', $oWebsite->color);
        $post->addChild('title', $oWebsite->title);
        $post->addChild('motto', $oWebsite->motto);
    }
}
header('Content-Type: text/xml; charset=UTF-8');
print($xml->asXML());
