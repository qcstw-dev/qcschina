<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AboutUsPage
 *
 * @author QCS18
 */
class AboutUsPage {

    public $id;
    public $video;
    public $text;
    public $photo_1;
    public $photo_2;
    public $photo_3;
    public $photo_4;
    public $id_website;

    public function __construct($id = null) {
        if ($id) {
            $oDb = Db::getInstance()->where('id', $id);
            $aWebsite = $oDb->getOne('page_about_us');
            if ($aWebsite) {
                foreach ($aWebsite as $sKey => $sProperty) {
                    $this->{$sKey} = $sProperty;
                }
            }
        }
    }
    
    public static function getAboutUsPageByWebsiteId($iIdWebsite) {
        $db = Db::getInstance();
        $db->where('id_website', $iIdWebsite);
        return $db->getOne('page_about_us');
    }
}
