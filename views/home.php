<?php

require_once __DIR__."/../Model/feedback.php";


$db = new Database();
$result = $db->Select(new Feedback());

//var_dump($result);

$model = new Feedback();
$model->Bewertung = 5;
$model->Kurztext = "Mal schauen";
$model->Projekt = "1";

$result = $db->Insert($model);

var_dump($result);
