<?php

?>

<div id="profil">
    <div class="row">
        <div class="col-sm-2">
            <div class="row">
                <div class="col-sm-12 profil_wrapper">
                    <img class="center-block" src="./img/user/user1.png" />
                    <p class="name">Bruce Wayne Schlegel</p>
                    <p>"Wir brauchen mehr Fahrräder mit Telefonanlagen"</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 profil_wrapper">
                    <p class="about"><span class="header">Über:</span></p>
                    <p class="about"><span class="header">Tel:</span>+491234 345342</p>
                    <p class="about"><span class="header">Position:</span>Geschäftsführer</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 profil_wrapper">
                    <a href="?page=archievments" class="text-center center-block">Archievments
                        <?php
                            if($_SESSION['acv'] == 1)
                            {
                                echo '<span class="badge">2</span>';
                            }
                        ?>

                    </a>
                </div>
            </div>

        </div>
        <div class="col-sm-10">

            <div class="list-group">
                <div class="list-group-item">
                    <h3 class="text-center">Dein Score:<?php echo $_SESSION['score'] ?></h3>
                </div>
            </div>
            <div class="list-group">
                <div class="list-group-item">
                    <h4 class="text-center">Ranking</h4>
                </div>
                <div class="list-group-item diamond">
                    <p class="list-group-item-text text-center">Super Konzept 1: 350<i class="fa fa-diamond" aria-hidden="true"></i></p>
                </div>
                <div class="list-group-item gold">
                    <p class="list-group-item-text text-center">Super Konzept 1: 200</p>
                </div>
                <div class="list-group-item gold">
                    <p class="list-group-item-text text-center">Super Konzept 1: 200</p>
                </div>
            </div>
            <div class="list-group">
                <div class="list-group-item">
                    <p>Nächste Auswertung 17H 12M</p>
                </div>
            </div>

        </div>
    </div>
</div>