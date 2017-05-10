<?php
    $konzepte = getKonzepte();
?>


<div class="row">
    <div class="col-sm-12">
        <div class="list-group">
            <a href="?page=konzepte_details&projekt=new" class="list-group-item list-group-item-info"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Neues Konzept</a>
            <?php
            foreach($konzepte AS $konzept)
            {
                ?>
                <a class="list-group-item" href="?page=konzepte_details&projekt=<?php echo $konzept->ID ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  <?php echo $konzept->Name ?></a>
                <?php
            }
            ?>
        </div>
    </div>
</div>