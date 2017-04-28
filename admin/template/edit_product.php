<div class="col-xs-12 padding-0 margin-bottom-10">
    <a class="btn btn-default pull-left" href="<?= BASE_URL_ADMIN ?>"><span class="glyphicon glyphicon-chevron-left"></span> Back to products list</a>
</div>
<div class="col-xs-12 col-sm-7 margin-auto"><?php
    if (isset($aResult['success']) && $aResult['success']) { ?>
        <div class="col-xs-12 padding-0 ">
            <div class="alert alert-success text-center">Saved !</div>
        </div><?php
    } else if (isset($aResult['success']) && !$aResult['success']) { ?>
        <div class="col-xs-12 padding-0 ">
            <div class="alert alert-danger text-center"><?= $aResult['error'] ?></div>
        </div><?php
    } ?>
    <div class="col-xs-12 padding-0">
        <div class="bold font-size-20 margin-bottom-20 pull-left">Product <span class="id_product"><?= ($oProduct ? 'ID: '.$oProduct->id: '') ?></span></div><?php
        if ($oProduct) { ?>
            <a href="<?= BASE_URL_ADMIN.'delete?id_product='.$oProduct->id ?>" class="pull-right btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a><?php
        } ?>
    </div>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_product" value="<?= ($oProduct ? $oProduct->id: '') ?>">
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="title">Title</span>
            <input type="text" class="form-control" name="title" value="<?= ($oProduct && $oProduct->title ? $oProduct->title : '') ?>" autocomplete="off">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="url">URL</span>
            <input type="text" class="form-control" name="url" value="<?= ($oProduct && $oProduct->url ? $oProduct->url : '') ?>" autocomplete="off">
        </div>
        <div class="col-xs-12 padding-0">
            <div class="col-xs-12 col-sm-2 padding-0">
                <label>Picture</label>
            </div>
            <div class="col-xs-12 col-sm-2 padding-0">
                <div class="btn btn-default btn-file"><span class="glyphicon glyphicon-upload"></span> Upload
                    <input type="file" name="files" data-id="1">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 padding-top-10 file-name-1"></div><?php
            if ($oProduct && $oProduct->picture) { ?>
                <div class="col-xs-12 col-sm-6 col-sm-offset-2 padding-0 thumbnail margin-top-20">
                    <img src="<?= IMG_PRODUCTS_DIR.$oProduct->picture ?>" alt="" title="" />
                </div><?php
            }   ?>
        <div class="col-xs-12 padding-0">
            <div class="col-xs-12 padding-0 font-size-15 bold margin-bottom-20 margin-top-20">Choose the websites where to display the product</div><?php
            foreach ($aWebsites as $oWebsite) { ?>
                <div class="col-sm-6">
                    <label class="cursor-pointer"><input type="checkbox" name="website_<?= $oWebsite->id ?>" <?= ($oProduct && $oProduct->isDisplayedOnWebsite($oWebsite->id) ? 'checked' : '') ?>/> <?= $oWebsite->name.' (ID: '.$oWebsite->id.')' ?></label>
                </div><?php
            } ?>
        </div>
        <div class="col-xs-12 padding-0 margin-top-20 margin-bottom-20">
            <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
            <button type="submit" name="save_and_quit" class="btn btn-info pull-right margin-right-20"><span class="glyphicon glyphicon-floppy-save"></span> Save and quit</button>
        </div>
    </form>
</div>