<?php

$site = "home";

if(isset($_GET["page"]))
{
    $site = $_GET["page"];
}
?>


<div class="container">
    <div class="row" id="banner">
        <div class="col-sm-12">
            <h1>WayneSchlegel Inc.</h1>

            <li>
                <a href="?page=login">Login</a>
            </li>
            <li>
                <a href="?page=register">Registrieren</a>
            </li>

        </div>
    </div>
    <div class="row">
        <nav class="col-sm-3 wrapper">
            <ul class="nav nav-pills nav-stacked">
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
                    <a href="?page=feedback&projekt=1">Feedback</a>
                </li>
                <li>
                    <a href="?page=konzepte">Konzepte</a>
                </li>

            </ul>
        </nav>
        <div class="col-sm-8 wrapper">
            <?php require_once "views/".$site.".php"; ?>
        </div>
    </div>
</div>





