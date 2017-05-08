<?php 
$oWebsite = new Website(ID_WEBSITE);
if ($oWebsite) {
    define('WEBSITE_NAME', $oWebsite->name); 
    define('WEBSITE_COLOR', $oWebsite->color); 
    define('WEBSITE_TITLE', $oWebsite->title); 
    define('WEBSITE_MOTTO', $oWebsite->motto); 
} else { 
    define('WEBSITE_NAME', $_SERVER['HTTP_HOST']); 
    define('WEBSITE_COLOR', '#ffc107'); 
    define('WEBSITE_TITLE', 'Factory'); 
    define('WEBSITE_MOTTO', 'QCS Factory'); 
} ?>