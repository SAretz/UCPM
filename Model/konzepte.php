<?php

class Konzepte{
    private $table = 'konzepte';

    public $ID = "";
    public $Name = "";
    public $Text = "";


    public function _construct() {

    }

    public function GetTableName() {
        return $this->table;
    }
}