<div class="container">
    <?php
    $response_xml_data = file_get_contents("https://www.qcsasia.com/rss_news");
    $posts = simplexml_load_string($response_xml_data);
    if ($posts) {?>
        <div class="col-xs-12 padding-0">
            <hr>
            <h2 class="col-xs-12 font-size-24">
                QCS Asia news
            </h2>
            <div class="col-xs-12 padding-0"><?php
                $i = 0;
                foreach ($posts as $post) { 
                    $post->title = urldecode($post->title); ?>
                    <a href="<?= $post->url ?>" title="<?= $post->title ?>" >
                        <div class="col-sm-3 margin-bottom-10">
                            <div class="col-xs-12 thumbnail margin-bottom-0">
                                <div class="col-xs-12 thumbnail margin-bottom-0">
                                    <img src="<?= $post->thumbnail_url ?>" alt="<?= $post->title ?>" title="<?= $post->title ?>" />
                                </div>
                                <div class="font-size-15 text-center"><?= $post->title ?></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </a><?php
                    $i++;
                    if ($i == 4) { break; }
                } ?>
            </div>
        </div><?php
    } ?>
</div>