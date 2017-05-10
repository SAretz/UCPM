<?php

class User{
    private $table = 'user';

    public $ID = "";
    public $Name = "";
    public $Passwort = "";
    public $Email = "";
    public $Rang = "";

    public function _construct() {

    }

    public function GetTableName() {
        return $this->table;
    }
}