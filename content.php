<?php

$site = "home";

if(isset($_GET["page"]))
{
    $site = $_GET["page"];
}
?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>WayneSchlegel Inc.</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <ul>
                <li>
                    <a href="?page=home">Home</a>
                </li>
                <li>
                    <a href="?page=berichte">Berichte</a>
                </li>
                <li>
                    <a href="?page=projekt">Projekt</a>
                </li>
                <li>
                    <a href="?page=feedback">Feedback</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9">
            <?php require_once "views/".$site.".php"; ?>
        </div>
    </div>
</div>





