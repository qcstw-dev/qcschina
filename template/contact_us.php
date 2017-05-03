<div class="container">
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
            <h3 class="font-size-30 margin-top-0 margin-bottom-10">China Factory:</h3>
        </div>
        <div class="col-xs-12 padding-0 bold margin-bottom-10">
            <span class="font-size-20">QCS Gift Factory 高要市廣星禮品有限公司</span><br />
                D2 DISTRICT, JINDU, GAOYAO CITY, GUANGDONG, CHINA<br />
                中國廣東省肇慶高要市金渡鎮D2小區 ZIP: 526108<br />
                <br />
                TEL :(86.758) 8512115 FAX : (86.758) 8512145
        </div>
        <iframe frameborder="0" height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.455377450762!2d112.52200431537644!3d23.043760921317396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDAyJzM3LjUiTiAxMTLCsDMxJzI3LjEiRQ!5e0!3m2!1sfr!2stw!4v1448518944612" style="border:0" width="100%"></iframe>
    </div>
</div>