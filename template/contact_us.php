<div class="col-sm-6"><?php
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
            if ($_SERVER['HTTP_HOST'] != 'localhost') { ?>
                    <div class="g-recaptcha" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>"></div><?php
            } ?>
        <div class="input-group margin-bottom-20 pull-right">
            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-send"></span> Send</button>
        </div>
    </form>
</div>
<div class="col-sm-6">
    <div class="col-xs-12 padding-0">
        <h3 class="font-size-30 margin-top-0 margin-bottom-10">Taiwan head office:</h3>
    </div>
    <div class="col-xs-12 padding-0 bold margin-bottom-10">
        <span class="font-size-20">QCS ASIA CO. ,LTD 台灣妍品有限公司</span><br />
        5F-8, 63 HEPING E. RD , SEC3 TAIPEI TAIWAN<br />
        台北市和平東路3段63號5樓之8 (嘉樂大樓)<br />
        <br />
        TEL : (886-2) 27385787 FAX : (886-2)27385816
    </div>
    <iframe frameborder="0" height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d903.8183351866223!2d121.54866132923432!3d25.024796214206898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aa321d20e10d%3A0xf43ccf1621215ddf!2sNo.+63%2C+Section+3%2C+Heping+E+Rd%2C+Da%E2%80%99an+District%2C+Taipei+City%2C+106!5e0!3m2!1sen!2stw!4v1452219366587" style="border:0" width="100%"></iframe>
</div>