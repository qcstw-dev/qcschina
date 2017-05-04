<div class="container">
    <h1 class="col-xs-12 font-size-30 margin-top-0"><strong>About us</strong></h1><?php
    $response_xml_data = file_get_contents(($_SERVER['HTTP_HOST'] == 'localhost' ? BASE_URL : "http://qcschina.com/").'xml_feed_about_us?website='.(ID_WEBSITE ?: 1));
    $oXmlObject = simplexml_load_string($response_xml_data);
    if ($oXmlObject->page) { ?>
        <div class="col-xs-12"><?php
            if ($oXmlObject->page->video) { ?>
                <div class="pull-left margin-right-20">
                    <?= $oXmlObject->page->video ?>
                </div><?php
            } ?>
            <?= $oXmlObject->page->text ?>
        </div>
        <div class="col-xs-12 padding-0 margin-top-20"><?php
            for ($i = 1; $i <= 4; $i++) {
                $sVarName = 'photo_'.$i;?>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="<?= $oXmlObject->page->{$sVarName} ? : IMG_ABOUT_US_DIR.'default/'.$i.'.jpg' ?>" alt="about us" title="about us" />
                        </div>
                    </div><?php
            } ?>
        </div><?php
    } ?>
</div>