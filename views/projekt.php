<?php

/**
 * Created by PhpStorm.
 * User: Niklas
 * Date: 03.05.2017
 * Time: 21:28
 */
?>

<div class="row">
    <div class="col-md-9">
        <h2>Zeiterfassung</h2>
    </div>
    <div class="col-md-3">

        <?php
        $datum = date("d.m.Y");
        $uhrzeit = date("H:i");
        echo $datum," - ",$uhrzeit," Uhr";
        ?>
    </div>
</div>


<div class="row">
    <div class="col-md-4">

        <input type="text" class="form-control" placeholder="von">


    </div>
    <div class="col-md-4">

        <input type="text" class="form-control" placeholder="bis">


    </div>
    <div class="col-md-3">

    </div>
</div>
<div class="row">

    <div class="col-md-7">

    </div>
    <div class="col-md-1">
<br>
        <button type="button" class="btn btn-warning">Submit Time</button>

    </div>
</div>





