<?php

class Feedback{
    private $table = 'feedback';

    public $ID = "";
    public $Bewertung = "";
    public $Kurztext = "";
    public $Projekt = "";

    public function _construct() {

    }

    public function GetTableName() {
        return $this->table;
    }
}