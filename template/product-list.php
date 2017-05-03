<?php
    $response_xml_data = file_get_contents(($_SERVER['HTTP_HOST'] == 'localhost' ? BASE_URL : "http://qcschina.com/").'xml_feed'.(ID_WEBSITE ? '?website='.ID_WEBSITE : ''));
    $oXmlObject = simplexml_load_string($response_xml_data);
    if ($oXmlObject->product) {
        $aXmlObject = (array)$oXmlObject;
        $aProducts = (array) $aXmlObject['product'];
        foreach ($aProducts as $key => $oProduct) {
            if ($key != 0 && $key % 12 == 0) { ?>
                <div class="col-xs-12">
                    <div class="col-xs-12 btn btn-default margin-bottom-10 btn-lg btn-more-products-<?= $key ?> btn-more-products <?= ($key != 12 ? 'hidden' : '') ?>" data-id="<?= $key ?>">
                        <span class="glyphicon glyphicon-plus-sign"></span> Load more products
                    </div>
                </div>
                <div class="block-more-products-<?= $key ?> hidden-products"><?php
            } ?>
                <div class="col-xs-12 col-sm-3">
                    <a href="<?= $oProduct->url ?>?utm_campaign=qcschina_websites&utm_source=<?= WEBSITE_NAME ?>&utm_medium=product_<?= $oProduct->id ?>" title="<?= $oProduct->title. ' by '.WEBSITE_TITLE ?>">
                        <div class="col-xs-12 thumbnail">
                            <div class="col-xs-12 thumbnail margin-bottom-0">
                                <img src="<?= $oProduct->picture ?>" alt="<?= $oProduct->title. ' by '.WEBSITE_TITLE ?>" title="<?= $oProduct->title. ' by '.WEBSITE_TITLE ?>" />
                            </div>
                            <div class="col-xs-12 font-size-15 text-center subtitle"><strong><?= $oProduct->title ?></strong></div>
                        </div>
                    </a>
                </div><?php
            if ((($key+1) % 12 == 0 && $key != 0) || !isset($aProducts[$key+1])) { ?>
                </div><?php
            }
        }
    } else { ?>
        <div class="col-xs-12">
            <div class="alert alert-warning text-center">
                No Products
            </div>
        </div><?php
    } ?>