<?php

class Times{
    private $table = 'times';

    public $ID = "";
    public $Projekt = "";
    public $Von = "";
    public $Bis = "";


    public function _construct() {

    }

    public function GetTableName() {
        return $this->table;
    }
}