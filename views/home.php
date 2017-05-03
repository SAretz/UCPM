<?php

require_once __DIR__."/../Model/feedback.php";


$db = new Database();
$result = $db->Select(new Feedback());

var_dump($result);