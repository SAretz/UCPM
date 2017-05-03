<h2>Berichte</h2>

<?php

$role = getRole(2);

?>


<button class="btn btn-primary" <?php if(!$role->NeuerBericht == 1) echo "disabled" ?>>Neuer Bericht</button>
