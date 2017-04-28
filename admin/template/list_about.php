<?php if (isset($_GET['message']) && $_GET['message']) { ?>
<div class="alert alert-info text-center">
    <?= $_GET['message'] ?>
</div><?php
} ?>
<div class="col-xs-12 bold font-size-24 margin-bottom-20">
    About us page list
</div>
<div class="col-sm-6 margin-auto">
    <div class="col-xs-12 padding-0 margin-bottom-20">
        <a class="btn btn-success pull-right" href="<?= BASE_URL_ADMIN.'edit-about' ?>"><span class="glyphicon glyphicon-plus-sign"></span> Add about us page</a>
    </div><?php
    if ($aAboutUsPages) { ?>
        <table class="table"><?php
        foreach ($aAboutUsPages as $aAboutUsPage) { ?>
            <tr>
                <td class="padding-top-10 padding-left-20"><a href="<?= BASE_URL_ADMIN.'edit-about?id_page='.$aAboutUsPage['id'] ?>"><?= Website::getName($aAboutUsPage['id_website']) ?></a></td>
                <td class="pull-right"><a href="<?= BASE_URL_ADMIN.'edit-about?id_page='.$aAboutUsPage['id'] ?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit"></span> Modify</a></td>
            </tr><?php
        } ?>
        </table><?php
    } ?>
</div>