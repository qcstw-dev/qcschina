<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.0, initial-scale=1.0" /> 
    <link rel="stylesheet" href="<?= CSS_DIR ?>bootstrap.min.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>tool-custom-bootstrap.css" media="all">
    <link rel="stylesheet" href="<?= MAIN_URL.CSS_RELATIVE_DIR ?>global.css" media="all">
    <link rel="stylesheet" href="<?= CSS_DIR ?>icon-factory.css" media="all">
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?= IMG_DIR ?>favicon.ico">
    <style>
        .logo, .motto, a .thumbnail,
        .navbar-default .navbar-nav>li>a>.glyphicon {
            color: <?= WEBSITE_COLOR ? : '#fff' ?>;
        }
    </style><?php
        if ($_SERVER['HTTP_HOST'] != 'localhost') { ?>
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', '<?= WEBSITE_ANALYTICS_CODE ?>', 'auto');
              ga('send', 'pageview');

            </script><?php
        }
        $sPageId = 'HOME';
        switch ($_SERVER['REQUEST_URI']) {
            case '/about-us':
                $sPageId = 'ABOUT';
                break;
            case '/contact-us':
                $sPageId = 'CONTACT';
                break;
            default:
                break;
        } ?>
    <meta property="og:title" content="<?= constant($sPageId.'_TITLE') ?>" />
    <meta property="og:description" content="<?= constant($sPageId.'_DESCRIPTION') ?>"/>
    <meta property="og:image" content="<?= IMG_DIR ?>" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta name="description" content="<?= constant($sPageId.'_DESCRIPTION') ?>"/>
    <title><?= constant($sPageId.'_TITLE') ?></title>
</head>
<body <?= ($_SERVER['HTTP_HOST'] != 'localhost' ? 'oncontextmenu="return false"' : '') ?>>
    <div class="container">
        <div class="col-xs-12 padding-0">
            <div class="col-sm-2 padding-0">
                <a class="logo-link" href="<?= BASE_URL ?>" title="<?= WEBSITE_TITLE ?>"><div class="logo font-size-150 text-center icon-factory"></div></a>
            </div>
            <div class="motto col-sm-10 font-size-30 padding-top-60 hidden-xs"><?= WEBSITE_MOTTO ?></div>
            <div class="motto col-sm-10 text-center font-size-30 visible-xs"><?= WEBSITE_MOTTO ?></div>
        </div>
    </div>
    <div class="navbar navbar-default">
        <div class="container">
            <div class="col-xs-12">
                <div class="navbar-header">
                    <a href="<?= BASE_URL ?>" class="navbar-brand"><?= WEBSITE_TITLE ?></a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse padding-0" id="navbar-main">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?= BASE_URL ?>"><span class="glyphicon glyphicon-home"></span> Home</a>
                        </li><?php
                        $aAboutPage = AboutUsPage::getAboutUsPageByWebsiteId(ID_WEBSITE);
                        if ($aAboutPage) { ?>
                            <li>
                                <a href="<?= BASE_URL.'about-us' ?>"><span class="glyphicon glyphicon-info-sign"></span> About us</a>
                            </li><?php
                        } ?>
                        <li>
                            <a href="<?= BASE_URL.'contact-us' ?>"><span class="glyphicon glyphicon-envelope"></span> Contact us</a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right margin-top-5" method="GET" action="<?= BASE_URL.'search' ?>" autocomplete="off">
                        <div class="form-group">
                            <input type="text" class="form-control" name="search" placeholder="Search" value="<?= isset($_GET['search']) && $_GET['search'] ? $_GET['search'] : '' ?>">
                        </div>
                        <button type="submit" class="btn btn-default" style="background: <?= WEBSITE_COLOR ?>"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
