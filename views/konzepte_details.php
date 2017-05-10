<?php
$konzeptID = $_GET['projekt'];

$db = new Database();
$konzept = $db->SelectOne(new Konzepte(),$konzeptID);
?>


<div class="row">
    <div class="col-sm-12">
        <?php
            if($konzept != "new")
            {
                echo "<h2>".$konzept->Name."</h2>";
            }
        ?>
    </div>
</div>
<div class="row">
    <form action="functions.php" method="post">
        <div class="row">
            <textarea class="form-control" rows="5" name="Text"></textarea>
            <input type="hidden" name="ID" value="<?php echo $konzept->ID; ?>">
            <input type="hidden" name="Von" value="<?php echo date("H:i")?>">
        </div>

        <?php
        if($konzept != "new")
        {
            include __DIR__."/projekt.php";
        }
        ?>
    </form>
</div>
