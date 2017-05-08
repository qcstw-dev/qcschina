<div class="container">
    <h1 class="col-xs-12 font-size-30 margin-top-0"><strong>About us</strong></h1><?php
    $aAboutPage = AboutUsPage::getAboutUsPageByWebsiteId(ID_WEBSITE);
    if ($aAboutPage) { ?>
        <div class="col-xs-12"><?php
            if ($aAboutPage['video']) { ?>
                <div class="pull-left margin-right-20">
                    <?= $aAboutPage['video'] ?>
                </div><?php
            } ?>
            <?= $aAboutPage['text'] ?>
        </div>
        <div class="col-xs-12 padding-0 margin-top-20"><?php
            for ($i = 1; $i <= 4; $i++) {
                $sVarName = 'photo_'.$i;?>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="<?= $aAboutPage[$sVarName] ? : IMG_ABOUT_US_DIR.'default/'.$i.'.jpg' ?>" alt="about us" title="about us" />
                        </div>
                    </div><?php
            } ?>
        </div><?php
    } ?>
</div>