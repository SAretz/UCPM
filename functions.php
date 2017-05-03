<?php

require_once __DIR__."/Model/rank.php";

function getRole($id) {
    $db = new Database();
    $role = $db->SelectOne(new Rank(), $id);

    return $role;
}

function sendMails($id) {
    $db = new Database();


    $empfaenger = "seba.aretz@hotmail.de";
    $betreff = "Die Mail-Funktion";
    $from = "From: NoReply <noreply@wayneschlegel.de>\n";
    $from .= "Content-Type: text/html\n";
    $text = "Bitte bewerten Sie folgendes Projekt";

    mail($empfaenger, $betreff, $text, $from);

}