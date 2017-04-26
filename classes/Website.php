<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Website
 *
 * @author QCS18
 */
class Website {

    public $id;
    public $name;
    
    public function __construct($id = null) {
        if ($id) {
            $oDb = Db::getInstance()->where('id', $id);
            $aWebsite = $oDb->getOne('website');
            if ($aWebsite) {
                foreach ($aWebsite as $sKey => $sProperty) {
                    $this->{$sKey} = $sProperty;
                }
            }
        }
    }
    public static function getAll() {
        $aWebsitesObjects = [];
        $aWebsites = Db::getInstance()->get('website');
        foreach ($aWebsites as $aWebsite) {
            $aWebsitesObjects[] = new Website($aWebsite['id']);
        }
        return $aWebsitesObjects;
    }
    public static function getName($iId) {
        $db = Db::getInstance();
        $db->where('id', $iId);
        return $db->getValue('website', 'name');
    }

}
