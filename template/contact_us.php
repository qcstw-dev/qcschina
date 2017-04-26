<div class="col-sm-6 margin-auto"><?php
    if ($aMessage) { ?>
        <div class="alert alert-<?= $aMessage['type'] ?> text-center">
            <?= $aMessage['text'] ?>
        </div><?php
    } ?>
    <h1 class="col-xs-12 font-size-30 margin-top-0 margin-bottom-20">Contact us</h1>
    <form method="POST" >
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="email">Your email</span>
            <input type="email" class="form-control" name="email" value="">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="subject">Subject</span>
            <input type="text" class="form-control" name="subject" value="" autocomplete="off">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon" id="message">Message</span>
            <textarea class="form-control height-150" name="message"></textarea>
        </div><?php
//            if ($_SERVER['HTTP_HOST'] != 'localhost') { ?>
                    <div class="g-recaptcha" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>"></div><?php
//            } ?>
        <div class="input-group margin-bottom-20 pull-right">
            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-send"></span> Send</button>
        </div>
    </form>
</div>