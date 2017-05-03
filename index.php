<?php

require_once __DIR__."/database.php";

$site = "home";

if(isset($_GET["page"]))
{
    $site = $_GET["page"];
}

require_once "header.php";

require_once "views/".$site.".php";

require_once "footer.php";

