<?php

$site = "home";

if(isset($_GET["page"]))
{
    $site = $_GET["page"];
}
?>


<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <ul>
                <li>
                    <a href="?page=home">Home</a>
                    <a href="?page=berichte">Berichte</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9">
            <?php require_once "views/".$site.".php"; ?>
        </div>
    </div>
</div>





