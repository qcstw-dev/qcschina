<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.0, initial-scale=1.0" /> 
    <link rel="icon" type="image/vnd.microsoft.icon" href="">
    <link rel="stylesheet" href="<?= CSS_DIR ?>bootstrap.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>tool-custom-bootstrap.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>global.css" media="all">
<!--    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-85358221-1', 'auto');
        ga('send', 'pageview');
    </script>-->
    <meta property="og:title" content="" />
    <meta property="og:description" content=""/>
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta name="description" content=""/>
    <title>Qcschina</title>
</head>
<body>
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="<?= BASE_URL ?>" class="navbar-brand"><?= SITE_TITLE ?></a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= BASE_URL ?>"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li><?php
                    $response_xml_data = file_get_contents(($_SERVER['HTTP_HOST'] == 'localhost' ? BASE_URL : "http://qcschina.com/").'xml_feed_about_us?website='.(ID_WEBSITE ?: 1));
                    $oXmlObject = simplexml_load_string($response_xml_data);
                    if ($oXmlObject->page) { ?>
                        <li>
                            <a href="<?= BASE_URL.'about-us' ?>"><span class="glyphicon glyphicon-info-sign"></span> About us</a>
                        </li><?php
                    } ?>
                    <li>
                        <a href="<?= BASE_URL.'contact-us' ?>"><span class="glyphicon glyphicon-envelope"></span> Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">

