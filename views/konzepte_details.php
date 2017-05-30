<?php
$konzeptID = $_GET['projekt'];

$db = new Database();
$konzept = $db->SelectOne(new Konzepte(),$konzeptID);

if($Rang >= 4 && $_GET['projekt'] == "new")
{
    weiterleitung("konzepte");
}

?>
<div class="row">
    <div class="col-sm-12">
        <div class="konzept">
            <div class="row">
                <div class="col-sm-8">
                    <?php
                    if($_GET['projekt'] != "new")
                    {
                        echo "<h2>".$konzept->Name."</h2>";
                    }
                    ?>
                </div>
                <div class="col-sm-4">
                    <img src="img/fahrrad/<?php echo 1?>.jpg" alt="Rad">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <textarea class="form-control" rows="5" name="Text" id="text"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="functions.php" method="post">
                        <?php
                        if($_GET['projekt'] == "new")
                        {
                            echo '<input type="text" name="Name" placeholder="Konzeptname">';
                        }
                        ?>

                        <?php
                        if($_GET['projekt'] != "new")
                        {
                            include __DIR__."/projekt.php";
                        }
                        else
                        {
                        ?>
                            <button type="submit" name="submit" value="konzept_neu" class="btn btn-primary">Erstellen</button>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
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