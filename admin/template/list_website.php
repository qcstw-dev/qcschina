<?php if (isset($_GET['message']) && $_GET['message']) { ?>
<div class="alert alert-info text-center">
    <?= $_GET['message'] ?>
</div><?php
} ?>
<div class="col-xs-12 bold font-size-24 margin-bottom-20">
    Websites list
</div>
<div class="col-xs-12 margin-bottom-10">
    <a href="<?= BASE_URL_ADMIN.'edit-website' ?>" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Add new website</a>
</div>
<div class="col-xs-12 padding-0">
    <table class="table">
        <tr>
            <th class="text-center hidden-xs">ID</th>
            <th>Name</th>
            <th class="hidden-xs">Title</th>
            <th class="hidden-xs">Motto</th>
            <th>&nbsp;</th>
        </tr>
        <tr><?php
        foreach ($aWebsites as $oWebsites) { ?>
            <td class="padding-top-10 text-center hidden-xs">(ID: <?= $oWebsites->id ?>)</td>
            <td class="padding-top-10">
                <a href="<?= BASE_URL_ADMIN.'edit-website?id_website='.$oWebsites->id ?>"><?= $oWebsites->name ?></a>
            </td>
            <td class="padding-top-10 hidden-xs">
                <?= $oWebsites->title ?>
            </td>
            <td class="padding-top-10 hidden-xs">
                <?= $oWebsites->motto ?>
            </td>
            <td class="text-right">
                <a href="http://<?= $oWebsites->name ?>" target="_blank" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Visit</a>
                <a href="<?= BASE_URL_ADMIN.'edit-website?id_website='.$oWebsites->id ?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit"></span> Modify</a>
                <a class="btn btn-danger btn-sm" href="<?= BASE_URL_ADMIN.'delete?id_website='.$oWebsites->id ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
            </td>
            </tr><?php 
        } ?>
    </table>
</div>