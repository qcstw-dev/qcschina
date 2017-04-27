<div class="col-xs-12 padding-0 margin-bottom-10">
    <a class="btn btn-default pull-left" href="<?= BASE_URL_ADMIN.'list-website' ?>"><span class="glyphicon glyphicon-chevron-left"></span> Back to websites list</a>
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
        <div class="bold font-size-20 margin-bottom-20 pull-left">Website <span class="id_product"><?= ($oWebsite ? 'ID: '.$oWebsite->id: '') ?></span></div><?php
        if ($oWebsite) { ?>
            <a href="<?= BASE_URL_ADMIN.'delete?id_website='.$oWebsite->id ?>" class="pull-right btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a><?php
        } ?>
    </div>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_website" value="<?= ($oWebsite ? $oWebsite->id: '') ?>">
        <div class="col-xs-12 col-sm-2 padding-0">
            <label>Logo</label>
        </div>
        <div class="col-xs-12 col-sm-2 padding-0 margin-bottom-20">
            <div class="btn btn-default btn-file"><span class="glyphicon glyphicon-upload"></span> Upload
                <input type="file" name="files" data-id="1">
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 padding-top-10 file-name-1"></div><?php
        if ($oWebsite && $oWebsite->logo) { ?>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 padding-0 thumbnail margin-top-20">
                <img src="<?= IMG_LOGO_DIR.$oWebsite->logo ?>" alt="" title="" />
            </div><?php
        }   ?>
        <div class="clearfix"></div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="name">Name</span>
            <input type="text" class="form-control" name="name" value="<?= ($oWebsite && $oWebsite->name ? $oWebsite->name : '') ?>" autocomplete="off">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="title">Title</span>
            <input type="text" class="form-control" name="title" value="<?= ($oWebsite && $oWebsite->title ? $oWebsite->title : '') ?>" autocomplete="off">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="motto">Motto</span>
            <input type="text" class="form-control" name="motto" value="<?= ($oWebsite && $oWebsite->motto ? $oWebsite->motto : '') ?>" autocomplete="off">
        </div>
        <div class="col-xs-12 padding-0">
            <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
        </div>
    </form>
</div>