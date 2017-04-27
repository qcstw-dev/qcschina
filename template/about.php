<?php
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
    <div class="col-xs-12"><?php
        for ($i = 1; $i <= 4; $i++) {
            $sVarName = 'photo_'.$i;
            if ($oXmlObject->page->{$sVarName}) {?>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="<?= $oXmlObject->page->{$sVarName} ?>" alt="about us" title="about us" />
                    </div>
                </div><?php
            }
        } ?>
    </div><?php
} ?>