<div class="col-xs-12 bold font-size-24 margin-bottom-20">Product list</div>
<div class="col-xs-12">
    <div class="list-group">
        <?php foreach ($aProducts as $aProduct) { ?>
            <li class="list-group-item">
                <div class="margin-top-5 pull-left">
                    <a href="<?= BASE_URL_ADMIN.'edit-product?id_product='.$aProduct['id'] ?>"><?= $aProduct['title'] ?></a> (<?= $aProduct['id'] ?>)
                </div>
                <div class="pull-right"><?php 
                    if ($aProduct['url']) { ?>
                    <a href="<?= $aProduct['url'] ?>" target="_blank" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Product page</a><?php 
                    } ?>
                    <a href="<?= BASE_URL_ADMIN.'edit-product?id_product='.$aProduct['id'] ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span> Modify</a>
                    <div class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</div>
                </div>
                <div class="clearfix"></div>
            </li>
        <?php }
        ?>
    </div>
</div>