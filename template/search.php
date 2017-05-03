<div class="col-xs-12 padding-0 home">
    <div class="container">
        <h1 class="col-xs-12 font-size-24 margin-top-0">Your search result <?= isset($_GET['search']) && $_GET['search'] ? 'for keywords: '.$_GET['search'] : '' ?></h1>
        <div class="col-xs-12 margin-bottom-20">
            <a href="<?= BASE_URL ?>" title="Back to <?= WEBSITE_NAME ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
        </div>
    </div><?php
     include 'product-list.php'; ?>
</div>