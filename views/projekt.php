<div class="row">
    <div class="col-md-12">
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
</div>
<div class="row">
    <div class="col-md-7">
        <label>Konzept fertig?</label>
        <input type="checkbox" name="Fertig">
    </div>
    <div class="col-md-1">
        <br>
        <input type="hidden" name="Projekt" value="<?php echo $_GET['projekt'] ?>">
        <input type="hidden" name="ID" value="<?php echo $konzept->ID; ?>">
        <input type="hidden" name="Von" value="<?php echo date("H:i")?>">
        <input type="hidden" name="Bearbeiter" value="<?php echo $_SESSION['User'];?>">
        <button type="submit" name="submit" value="konzept" class="btn btn-primary">Senden</button>
    </div>
</div>







