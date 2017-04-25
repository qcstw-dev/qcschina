<?php if (isset($_GET['message']) && $_GET['message']) { ?>
<div class="alert alert-warning text-center">
    <?= $_GET['message'] ?>
</div><?php
} ?>
<div class="col-xs-12 bold font-size-24 margin-bottom-20">
    Product list
    <a href="<?= BASE_URL_ADMIN.'edit-product' ?>" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Add new product</a>
</div>
<div class="col-xs-12">
    <div class="list-group">
        <?php foreach ($aProducts as $aProduct) { ?>
            <li class="list-group-item"><?php
                /*if ($aProduct['picture']) { ?>
                    <div class="pull-left margin-right-20">
                        <img  class="thumbnail margin-bottom-0" src="<?= IMG_PRODUCTS_DIR.$aProduct['picture'] ?>" width="75px" />
                    </div><?php
                } */?>
                <div class="margin-top-5 pull-left">
                    <a href="<?= BASE_URL_ADMIN.'edit-product?id_product='.$aProduct['id'] ?>"><?= $aProduct['title'] ?></a> (ID: <?= $aProduct['id'] ?>)
                </div>
                <div class="pull-right"><?php 
                    if ($aProduct['url']) { ?>
                    <a href="<?= $aProduct['url'] ?>" target="_blank" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-eye-open"></span> URL</a><?php 
                    } ?>
                    <a href="<?= BASE_URL_ADMIN.'edit-product?id_product='.$aProduct['id'] ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span> Modify</a>
                    <a class="btn btn-danger btn-sm" href="<?= BASE_URL_ADMIN.'delete?id_product='.$aProduct['id'] ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
                <div class="clearfix"></div>
            </li>
        <?php }
        ?>
    </div>
</div>