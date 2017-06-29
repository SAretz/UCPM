<?php
    if($_SESSION['acv'] == 1)
    {
        $var = "progress-bar-success";
    }
    else
    {
        $var = "";
    }

    $_SESSION['acv'] = 0;
?>

<div id="archievments">
    <div class="row">
        <div class="wrapper">
            <div class="col-sm-3">
                <p>Erstelle 3 Konzepte</p>
            </div>
            <div class="col-sm-9">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">66% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="wrapper">
            <div class="col-sm-3">
                <p>Ändere dein Profilbild</p>
            </div>
            <div class="col-sm-9">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped <?php echo $var ?>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="wrapper">
            <div class="col-sm-3">
                <p>Bewerte ein Konzept</p>
            </div>
            <div class="col-sm-9">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped <?php echo $var ?>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100% </div>
                </div>
            </div>
        </div>
    </div>
</div>

