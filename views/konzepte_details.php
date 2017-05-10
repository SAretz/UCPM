<?php
$konzeptID = $_GET['projekt'];

$db = new Database();
$konzept = $db->SelectOne(new Konzepte(),$konzeptID);


?>

<div class="row">
    <div class="col-sm-12">
        <?php
            if($_GET['projekt'] != "new")
            {
                echo "<h2>".$konzept->Name."</h2>";
            }
        ?>
    </div>
</div>
<div class="row">
    <form action="functions.php" method="post">
        <?php
            if($_GET['projekt'] == "new")
            {
                echo '<input type="text" name="Name" placeholder="Konzeptname">';
            }
        ?>


        <div class="row">
            <textarea class="form-control" rows="5" name="Text" id="text"></textarea>

        </div>

        <?php
        if($_GET['projekt'] != "new")
        {
            include __DIR__."/projekt.php";
        }
        else
        {
            ?>

            <button type="submit" name="submit" value="konzept_neu" class="btn btn-warning">Erstellen</button>

            <?php
        }
        ?>
    </form>
</div>

<?php
if($_GET['projekt'] != "new") {
    echo "
        <script type=\"text/javascript\">
            $('textarea#text').val(". json_encode($konzept->Text ). ");
        </script>
";
}
?>