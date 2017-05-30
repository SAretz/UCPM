<?php

    if(isset($_SESSION['User']))
    {
        if($_SESSION['login'] == 1) {
            ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <strong>Willkommen!</strong> Du wurdest erfolgreich angemeldet
            </div>
            <?php
            $_SESSION['login'] = 0;
        }
    }
?>

<h3>Konzeptportal der WayneSchlegel Inc.</h3>
<p>Ihre Plattform für inovative Konzepte</p>

