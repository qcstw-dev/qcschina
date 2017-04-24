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

    private $id;
    private $title;
    private $picture;
    private $url;

    public function __construct($id = null) {
        parent::__construct();
        if ($id && is_int($id)) {
            $query = $bdd->query(
                    'SELECT *'
                    . ' FROM product'
                    . ' WHERE `id` = ' . $id
            );
            $aProduct = $query->fetch(PDO::FETCH_ASSOC);
            foreach ($aProduct as $sKey => $sAttribute) {
                $this->{$sKey} = $sAttribute;
            }
        }
    }

    public static function getAll() {
        $query = Db::getInstance()->query(
                'SELECT *'
                . ' FROM product'
        );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}
