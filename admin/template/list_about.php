<a class="btn btn-success pull-right" href="<?= BASE_URL_ADMIN.'edit-about' ?>"><span class="glyphicon glyphicon-plus-sign"></span> Add about us page</a>
<?php
if ($aAboutUsPages) { ?>
    <div class="col-sm-6 margin-auto">
        <table class="table"><?php
        foreach ($aAboutUsPages as $aAboutUsPage) { ?>
            <tr>
                <td class="padding-top-10 padding-left-20"><a href="<?= BASE_URL_ADMIN.'edit-about?id_page='.$aAboutUsPage['id'] ?>"><?= Website::getName($aAboutUsPage['id_website']) ?></a></td>
                <td class="pull-right"><a href="<?= BASE_URL_ADMIN.'edit-about?id_page='.$aAboutUsPage['id'] ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span> Modify</a></td>
            </tr><?php
        } ?>
        </table>
    </div><?php
} 