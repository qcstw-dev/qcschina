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

    public static function getAll($iIdWebsite = null) {
        $aProductsObjects = [];
        $db = Db::getInstance();
        if ($iIdWebsite) {
            $db->join('product_website pw', "p.id = pw.id_product", "LEFT");
            $db->where("pw.id_website", $iIdWebsite);
        }
        $aProducts = $db->get('product p');
        foreach ($aProducts as $aProduct) {
            $aProductsObjects[] = new Product($aProduct['id']);
        }
        return $aProductsObjects;
    }

    public function isDisplayedOnWebsite($iIdWebsite) {
        $db = Db::getInstance();
        $db->where('id_product', $this->id);
        $db->where('id_website', $iIdWebsite);
        return $db->getValue('product_website','display');
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
    
    public function updateStatusWebsite($iIdWebsite, $iStatus) {
        $db = Db::getInstance();
//            $db->where('id_product', $this->id);
//            $db->where('id_website', $iIdWebsite);
        return $db->replace('product_website', ['id_product'=> $this->id, 'id_website' => $iIdWebsite, 'display' => $iStatus]);
    }
    
    public function delete() {
        $db = Db::getInstance();
        $db->where('id', $this->id);
        $bIsDeleted = $db->delete('product');
        if ($bIsDeleted) {
            $this->deletePicture();
            $db->where('id', $this->id);
            $db->delete('product_website');
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
