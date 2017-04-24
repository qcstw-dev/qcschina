<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author QCS18
 */
class Product {

    public $id;
    public $title;
    public $picture;
    public $url;

    public function __construct($id = null, $aProperties = []) {
        if ($id) {
            $oDb = Db::getInstance()->where ('id', $id);
            $aProduct = $oDb->getOne('product');
            
            foreach ($aProduct as $sKey => $sAttribute) {
                $this->{$sKey} = $sAttribute;
            }
        } 
    }

    public static function getAll() {
        return Db::getInstance()->get('product');
    }

    public function update($aData) {
        foreach ($aData as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
    public function setPicture($sPicture) {
        $this->picture = $sPicture;
    }

    public function save() {
        if ($this->id) {
            return Db::getInstance()->update('product', (array) $this);
        } else {
            $id = Db::getInstance()->insert('product', (array) $this);
            if ($id) {
                $this->id = $id;
            }
        }
    }

}
