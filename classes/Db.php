<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author QCS18
 */
class Db {

    public static function getInstance() {
        $bdd = new MysqliDb (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $bdd;
    }

}
