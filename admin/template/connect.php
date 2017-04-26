<div class="col-xs-12 col-sm-4 margin-auto"><?php
    if ($sMessage) { ?>
        <div class="alert alert-danger"><?= $sMessage ?></div><?php
    }?>
    <div class="col-xs-12 font-size-24 bold margin-bottom-20 text-center">Login</div> 
    <form method="POST" >
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="login">Login</span>
            <input type="text" class="form-control" name="login" value="" autocomplete="off">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="password">Password</span>
            <input type="password" class="form-control" name="password" value="" autocomplete="off">
        </div><?php
//            if ($_SERVER['HTTP_HOST'] != 'localhost') { ?>
                    <div class="g-recaptcha" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>"></div><?php
//            } ?>
        <div class="input-group margin-bottom-20 pull-right">
            <button type="submit" class="btn btn-success">Log in</submit>
        </div>
    </form>
</div>