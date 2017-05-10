<div class="row">
    <div class="col-md-9">
        <h2>Zeiterfassung</h2>
    </div>
</div>

<div class="row">
    <table class="table table-striped">
        <?php
            $times = getTimes();

            foreach ($times AS $time)
            {
                if($time->Projekt == $_GET['projekt']) {
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
            }
        ?>
    </table>
</div>
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
        <?php
        if($_GET['projekt'] != "new")
        {
            echo '<button type="submit" name="submit" value="konzept" class="btn btn-warning">Submit Time</button>';
        }
        else
        {
            echo '<button type="submit" name="submit" value="konzept_neu" class="btn btn-warning">Submit Time</button>';
        }


        ?>
    </div>
</div>







