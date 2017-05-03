<?php 
$response_xml_data_site = file_get_contents(($_SERVER['HTTP_HOST'] == 'localhost' ? BASE_URL : "http://qcschina.com/").'xml_feed_website?website='.(ID_WEBSITE ?: 1));
$oXmlObjectSite = simplexml_load_string($response_xml_data_site);
if ($oXmlObjectSite) {
    define('WEBSITE_NAME', $oXmlObjectSite->website->name); 
    define('WEBSITE_COLOR', $oXmlObjectSite->website->color); 
    define('WEBSITE_TITLE', $oXmlObjectSite->website->title); 
    define('WEBSITE_MOTTO', $oXmlObjectSite->website->motto); 
} else { 
    define('WEBSITE_NAME', $_SERVER['HTTP_HOST']); 
    define('WEBSITE_COLOR', '#ffc107'); 
    define('WEBSITE_TITLE', 'Factory'); 
    define('WEBSITE_MOTTO', 'QCS Factory'); 
} ?>