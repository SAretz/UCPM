<?php
    $konzepte = getKonzepte();
    $counter = 0;


    if(isset($_SESSION['Rang']))
    {
        if($_SESSION['Rang'] >= 3)
        {
            ?>
            <div class="konzept" id="konzept_new">
                <a href="?page=konzepte_details&projekt=new"><i class="fa fa-plus-circle" aria-hidden="true"></i> Neues Konzept</a>
            </div>
            <?php
        }
    }

    foreach($konzepte AS $konzept)
    {

        if($counter % 2 == 0) {
            ?>
            <div class="row renamelater">
            <?php
            include __DIR__."/konzept_preview.php";

        }
        else {
            include __DIR__."/konzept_preview.php";
            ?>
            </div>
            <?php
        }
        $counter++;

    }
?>

