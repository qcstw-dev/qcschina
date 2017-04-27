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
    public $logo;
    public $title;
    public $motto;

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

    public static function getAll($iIdWebsite = null) {
        $aWebsitesObjects = [];
        $db = Db::getInstance();
        
        if ($iIdWebsite) {
            $db->where("id", $iIdWebsite);
        }
        $aWebsites = $db->get('website');
        
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

     public function deleteLogo() {
        if ($this->logo && file_exists(IMG_LOGO_RELATIVE_DIR . $this->logo)) {
            unlink(IMG_LOGO_RELATIVE_DIR . $this->logo);
        }
    }
    
    public function delete() {
        $db = Db::getInstance();
        $db->where('id', $this->id);
        $bIsDeleted = $db->delete('website');
        if ($bIsDeleted) {
            $this->deleteLogo();
            $db->where('id_website', $this->id);
            $db->delete('product_website');
        }
        return $bIsDeleted;
    }
    
    public function save() {
        $db = Db::getInstance();
        if ($this->id) {
            $db->where('id', $this->id);
            return $db->update('website', (array) $this);
        } else {
            $id = $db->insert('website', (array) $this);
            if ($id) {
                $this->id = $id;
            }
        }
    }
    public function update($aData) {
        foreach ($aData as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

}
