<?php

require_once __DIR__."/Model/rank.php";
require_once __DIR__."/Model/user.php";

function getRole($id) {
    $db = new Database();
    $role = $db->SelectOne(new Rank(), $id);

    return $role;
}

function sendMails($id, $message) {
    $db = new Database();
    $result = $db->Select(new User);

    $betreff = "Projekt Nr.".$id." bewerten";
    $from = "From: NoReply <noreply@wayneschlegel.de>\n";
    $from .= "Content-Type: text/html\n";
    $text = $message;

    foreach($result AS $user) {
        mail($user->Email, $betreff, $text, $from);
    }




}