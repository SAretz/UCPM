<?php
session_start();


$site = "home";

if(isset($_GET["page"]))
{
    $site = $_GET["page"];
}

if(isset($_SESSION['User']))
{
    $Rang = getRole($_SESSION['User'])->Rang;
    $_SESSION['Rang'] = $Rang;
}
else{
    $Rang = -1;
}
?>

<nav class="navbar navbar-default navbar-left navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="http://img13.deviantart.net/c637/i/2015/138/f/2/wayne_enterprises_by_pointingmonkey-d8ttptb.png">
            </a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="?page=home">Startseite</a></li>
            <li><a href="?page=konzepte">Konzepte</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php
                if(!isset($_SESSION['User']))
                {
                    ?>
                        <li class="pull-right"><a href="?page=login"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                    <?php

                }
                else
                {
                    ?>
                        <li class="pull-right"><a href="?page=login">Logout</a></li>
                        <li class="pull-right"><a href="?page=profil"><i class="fa fa-user" aria-hidden="true"></i> Profil</a></li>
                    <?php
                }
            ?>

        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            if(isset($_SESSION['User']))
            {
                require_once "views/".$site.".php";
            }
            else
            {
                if($site != "home" && $site != "login")
                {
                    require_once "views/login.php";
                }
                else
                {
                    require_once "views/".$site.".php";
                }
            }

            ?>
        </div>
    </div>
</div>





