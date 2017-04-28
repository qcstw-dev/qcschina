<div class="col-xs-12 padding-0 margin-bottom-10">
    <a class="btn btn-default pull-left" href="<?= BASE_URL_ADMIN.'list-about' ?>">
        <span class="glyphicon glyphicon-chevron-left"></span> Back to page list
    </a>
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
        <div class="bold font-size-20 margin-bottom-20 pull-left">About us - <span class="id_product"><?= ($aPage ? 'Website ID: '.$aPage['id_website'] : '') ?></span></div>
    </div>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_page" value="<?= ($aPage ? $aPage['id'] : '') ?>">
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="video">Video</span>
            <textarea class="form-control" name="video"><?= (isset($_POST['video']) && $_POST['video'] ? $_POST['video'] : ($aPage ? $aPage['video'] : '')) ?></textarea>
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="text">Text</span>
            <textarea class="form-control height-150" name="text"><?= (isset($_POST['text']) && $_POST['text'] ? $_POST['text'] : ($aPage ? $aPage['text'] : '')) ?></textarea>
        </div><?php
        for ($i = 1; $i<=4; $i++) { ?>
            <div class="col-sm-1 padding-0">
                <label>Photo <?= $i ?></label>
            </div>
            <div class="col-sm-11 margin-bottom-20">
                <div class="col-sm-2 padding-0">
                    <div class="btn btn-default btn-file"><span class="glyphicon glyphicon-upload"></span> Upload
                        <input type="file" name="photo_<?= $i ?>" data-id="<?= $i ?>">
                    </div>
                </div>
                <div class="col-sm-10 padding-top-10 file-name-<?= $i ?>"></div>
                <div class="col-xs-12 padding-0 photo-<?= $i ?>">
                    <?php
                    if (isset($aPage['photo_'.$i]) && $aPage['photo_'.$i]) { ?>
                        <div class="col-xs-10 thumbnail margin-bottom-10 margin-top-20">
                            <img src="<?= IMG_ABOUT_US_DIR.$aPage['photo_'.$i] ?>" title="" />
                        </div>
                        <div class="col-xs-2 padding-top-20">
                            <div class="btn btn-danger delete-photo" data-id-photo="<?= $i ?>" data-id-page="<?= $aPage['id'] ?>"><span class="glyphicon glyphicon-trash"></span> Delete</div>
                        </div><?php
                    } ?>
                </div>
            </div><?php
        } ?>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="website">Website</span>
            <select class="form-control" name="id_website">
                <option value="0" >Choose website</option><?php
                 foreach ($aWebsites as $oWebsite) { ?>
                    <option value="<?= $oWebsite->id ?>" <?= ($aPage && $aPage['id_website'] == $oWebsite->id ? 'selected' : '') ?>><?= $oWebsite->name ?></option><?php
                } ?>
            </select>
        </div>
        <div class="col-xs-12 padding-0 margin-bottom-20">
            <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
            <button type="submit" name="save_and_quit" class="btn btn-info pull-right margin-right-20"><span class="glyphicon glyphicon-floppy-save"></span> Save and quit</button>
        </div>
    </form>
</div>