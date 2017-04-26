<div class="home">
    <h1 class="col-xs-12 font-size-30 margin-top-0"><?= SITE_TITLE ?> products</h1><?php
    $response_xml_data = file_get_contents(($_SERVER['HTTP_HOST'] == 'localhost' ? BASE_URL : "http://www.qcschina.com/").'xml_feed'.(ID_WEBSITE ? '?website='.ID_WEBSITE : ''));
    $oXmlObject = simplexml_load_string($response_xml_data);
    if ($oXmlObject->product) { 
        foreach ($oXmlObject->product as $oProduct) { ?>
            <div class="col-xs-12 col-sm-3">
                <a href="<?= $oProduct->url ?>" title="<?= $oProduct->title ?>">
                    <div class="col-xs-12 thumbnail">
                        <div class="col-xs-12 thumbnail margin-bottom-0">
                            <img src="<?= $oProduct->picture ?>" alt="<?= $oProduct->title ?>" title="<?= $oProduct->title ?>" />
                        </div>
                        <div class="col-xs-12 font-size-13 text-center subtitle-pic"><strong><?= $oProduct->title ?></strong></div>
                    </div>
                </a>
            </div><?php
        }
    } else { ?>
        <div class="alert alert-warning text-center">
            No Products
        </div><?php
    } ?>
</div>