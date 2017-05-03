<h2>Berichte</h2>

<?php

$role = getRole(3);

?>


<button class="btn btn-primary" <?php if($role->Rang < 3) echo "disabled" ?>>Neuer Bericht</button>
