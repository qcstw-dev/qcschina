<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.0, initial-scale=1.0" /> 
    <link rel="icon" type="image/vnd.microsoft.icon" href="">
    <link rel="stylesheet" href="<?= CSS_DIR ?>bootstrap.min.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>tool-custom-bootstrap.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>magnific-popup.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>icon-factory.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>global.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>back.css" media="all">
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?= IMG_DIR ?>favicon.ico">
    <meta name="description" content=""/>
    <title>Qcschina Admin</title>
</head>
<body>
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="<?= BASE_URL_ADMIN ?>" class="navbar-brand">Qcschina Admin</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= BASE_URL_ADMIN.'list-website' ?>" title="Edit website">Edit websites</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL_ADMIN ?>" title="Edit products">Edit products</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL_ADMIN.'list-about' ?>" title="Edit about us pages">Edit about us</a>
                    </li>
                </ul>
                <div class="nav navbar-nav navbar-right">
                    <a href="<?= BASE_URL ?>" class="btn btn-default margin-top-5"><span class="glyphicon glyphicon-globe"></span> qcschina.com</a><?php
                    if (isset($_COOKIE['connected']) && $_COOKIE['connected']) { ?>
                        <a href="<?= BASE_URL_ADMIN.'?disconnect' ?>" class="btn btn-danger margin-top-5"><span class="glyphicon glyphicon-log-out"></span> Log out</a><?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default col-md-2 vertical-center shadow loading-ajax" style="display: none;">
        <div class="thumbnail border-none margin-0 loader">
            <img src="<?= BASE_URL ?>/img/loader.gif" title="Loading" alt="Loading"/> 
        </div>
        <span class="text">Saving</span>
    </div>
    <div class="panel panel-success col-md-2 vertical-center shadow confirm" style="display: none;">
        <span class="glyphicon glyphicon-ok font-size-30 color-green"></span> <span class="text">Saved</span>
    </div>
    <div class="container">

