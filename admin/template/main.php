<?php if (isset($_GET['message']) && $_GET['message']) { ?>
<div class="alert alert-warning text-center">
    <?= $_GET['message'] ?>
</div><?php
} ?>
<div class="col-xs-12 bold font-size-24 margin-bottom-20">
    Products list
    <a href="<?= BASE_URL_ADMIN.'edit-product' ?>" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Add new product</a>
</div>
<div class="col-xs-12">
    <table class="table">
        <tr><?php
        foreach ($aProducts as $oProduct) {
            /*if ($aProduct->picture) { ?>
                <div class="pull-left margin-right-20">
                    <img  class="thumbnail margin-bottom-0" src="<?= IMG_PRODUCTS_DIR.$aProduct->picture ?>" width="75px" />
                </div><?php
            } */?>
            <td class="padding-top-10 text-center">(ID: <?= $oProduct->id ?>)</td>
            <td class="padding-top-10">
                <a href="<?= BASE_URL_ADMIN.'edit-product?id_product='.$oProduct->id ?>"><?= $oProduct->title ?></a>
            </td>
            <!--<td class="text-center">-->
<!--                <div class="button-group">
                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-cog"></span> Websites <span class="caret"></span></button>
                    <ul class="dropdown-menu">-->
                      <?php
//                        foreach ($aWebsites as $oWebsite) { ?>
                            <!--<li><a href="#" class="small" data-value="option1" tabIndex="-1"><input class="select-website" type="checkbox" data-id-product="<?= $oProduct->id ?>" data-id-website="<?= $oWebsite->id ?>" <?= ($oProduct->isDisplayedOnWebsite($oWebsite->id) ? 'checked' : '') ?>/>&nbsp;<?= $oWebsite->name ?></a></li>-->
                            <!--<label class="cursor-pointer font-size-10"><input type="checkbox" class="select-website" data-id-product="<?= $oProduct->id ?>" data-id-website="<?= $oWebsite->id ?>" <?= ($oProduct->isDisplayedOnWebsite($oWebsite->id) ? 'checked' : '') ?>> <?= $oWebsite->name ?></label>-->
                        <?php
//                        } ?>
<!--                    </ul>
                </div>-->
            <!--</td>-->
            <td class="text-right"><?php 
                if ($oProduct->url) { ?>
                <a href="<?= $oProduct->url ?>" target="_blank" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-eye-open"></span> URL</a><?php 
                } ?>
                <a href="<?= BASE_URL_ADMIN.'edit-product?id_product='.$oProduct->id ?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit"></span> Modify</a>
                <a class="btn btn-danger btn-sm" href="<?= BASE_URL_ADMIN.'delete?id_product='.$oProduct->id ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
            </td>
            </tr><?php 
        } ?>
    </table>
</div>