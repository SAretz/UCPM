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
    <div class="col-md-7">
    </div>
    <div class="col-md-1">
        <br>
        <input type="hidden" name="Projekt" value="<?php echo $_GET['projekt'] ?>">
        <input type="hidden" name="ID" value="<?php echo $konzept->ID; ?>">
        <input type="hidden" name="Von" value="<?php echo date("H:i")?>">
        <button type="submit" name="submit" value="konzept" class="btn btn-warning">Senden</button>;

    </div>
</div>







