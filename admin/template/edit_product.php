<div class="col-xs-12 col-sm-7 margin-auto">
    <div class="bold font-size-20 margin-bottom-20">Product <span class="id_product"><?= ($oProduct ? 'ID: '.$oProduct->id: '') ?></span></div>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_product" value="<?= ($oProduct ? $oProduct->id: '') ?>">
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="title">Title</span>
            <input type="text" class="form-control" name="title" aria-describedby="title" value="<?= ($oProduct && $oProduct->title ? $oProduct->title : '') ?>">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="title">URL</span>
            <input type="text" class="form-control" name="url" aria-describedby="url" value="<?= ($oProduct && $oProduct->url ? $oProduct->url : '') ?>">
        </div>
        <div class="col-xs-12 col-sm-2 padding-0">
            <label>Picture</label>
        </div>
        <div class="col-xs-12 col-sm-2 padding-0">
            <div class="btn btn-default btn-file"><span class="glyphicon glyphicon-upload"></span> Upload
                <input type="file" name="files">
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 padding-top-10 file-name"></div><?php
        if ($oProduct && $oProduct->picture) { ?>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 padding-0 thumbnail margin-top-20">
                <img src="<?= IMG_PRODUCTS_DIR.$oProduct->picture ?>" alt="" title="" />
            </div><?php
        }   ?>
        <div class="col-xs-12 padding-0">
            <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
        </div>
    </form>
</div>