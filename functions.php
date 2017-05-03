<?php

require_once __DIR__."/Model/rank.php";

function getRole($id) {
    $db = new Database();
    $role = $db->SelectOne(new Rank(), $id);

    return $role;
}