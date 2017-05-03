<h2>Berichte</h2>

<?php

$role = getRole(3);

?>
<div class="row">
    <ul class="berichte">
        <li>Bericht vom 10.3.2017</li>
        <li>Bericht vom 17.3.2017</li>
        <li>Bericht vom 21.3.2017</li>
    </ul>
</div>

<div class="row">
    <button class="btn btn-primary" <?php if($role->Rang < 3) echo "disabled" ?>>Neuer Bericht</button>
    <button class="btn btn-danger" <?php if($role->Rang < 4) echo "disabled" ?>>Bericht löschen</button>
</div>
