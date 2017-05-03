<?php

class Rank{
    private $table = 'rank';

    public $ID = "";
    public $Name = "";
    public $NeuerBericht = "";

    public function _construct() {

    }

    public function GetTableName() {
        return $this->table;
    }
}