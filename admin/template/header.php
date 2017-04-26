<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.0, initial-scale=1.0" /> 
    <link rel="icon" type="image/vnd.microsoft.icon" href="">
    <link rel="stylesheet" href="<?= CSS_DIR ?>bootstrap.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>tool-custom-bootstrap.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>magnific-popup.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>global.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>back.css" media="all">
    <meta name="description" content=""/>
    <title>Qcschina</title>
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
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= BASE_URL_ADMIN ?>" title="Edit products">Edit products</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL_ADMIN.'list-about' ?>" title="Edit about us pages">Edit about us pages</a>
                    </li>
                </ul>
            </div><?php
            if (isset($_COOKIE['connected']) && $_COOKIE['connected']) { ?>
                <div class="nav navbar-nav navbar-right">
                    <a href="<?= BASE_URL_ADMIN.'?disconnect' ?>" class="btn btn-danger margin-top-5"><span class="glyphicon glyphicon-log-out"></span> Log out</a>
                </div><?php
            } ?>
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

