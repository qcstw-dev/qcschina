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

    public function __construct($id = null) {
        if ($id) {
            $oDb = Db::getInstance()->where('id', $id);
            $aProduct = $oDb->getOne('product');
            if ($aProduct) {
                foreach ($aProduct as $sKey => $sProperty) {
                    $this->{$sKey} = $sProperty;
                }
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

    public function deletePicture() {
        if ($this->picture && file_exists(IMG_PRODUCTS_RELATIVE_DIR . $this->picture)) {
            unlink(IMG_PRODUCTS_RELATIVE_DIR . $this->picture);
        }
    }

    public function delete() {
        $db = Db::getInstance();
        $db->where('id', $this->id);
        $bIsDeleted = $db->delete('product');
        if ($bIsDeleted) {
            $this->deletePicture();
        }
        return $bIsDeleted;
    }

    public function save() {
        if ($this->id) {
            $db = Db::getInstance();
            $db->where ('id', $this->id);
            return $db->update('product', (array) $this);
        } else {
            $id = Db::getInstance()->insert('product', (array) $this);
            if ($id) {
                $this->id = $id;
            }
        }
    }

}
