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
    <table class="table table-striped">
        <?php
            $times = getTimes();

            foreach ($times AS $time)
            {
                ?>
                <tr>
                    <td>
                        <?php echo $time->Von; ?>
                    </td>
                    <td>
                        <?php echo $time->Bis; ?>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
</div>
<form method="post" action="./functions.php">
    <div class="row">
        <div class="col-md-4">
            <input type="time" name="Von" class="form-control" placeholder="von">
        </div>
        <div class="col-md-4">
            <input type="time" name="Bis" class="form-control" placeholder="bis">
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
        </div>
        <div class="col-md-1">
            <br>
            <input type="hidden" name="Projekt" value="<?php echo $_GET['projekt'] ?>">
            <button type="submit" name="submit" value="time" class="btn btn-warning">Submit Time</button>
        </div>
    </div>
</form>







