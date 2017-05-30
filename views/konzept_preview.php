<div class="col-sm-6">

    <?php

    if($counter == 0)
    {
        echo '<div class="rahmen diamond">';
    }
    else if($counter < 3)
    {
        echo '<div class="rahmen gold">';
    }
    else
    {
        echo '<div class="rahmen bronze">';
    }
    ?>

        <div class="konzept_preview">
            <img src="img/fahrrad/<?php echo $counter+1?>.jpg" class="center-block" alt="Rad">
            <p class="konzept_description"><?php echo substr($konzept["Text"],0,50) ?>...</p>
            <a href="?page=konzepte_details&projekt=<?php echo $konzept["ID"] ?>">Mehr</a>
            <form>
                <fieldset>
                <span class="star-cb-group">
                    <input type="radio" id="rating-5_<?php echo $konzept["ID"] ?>" name="rating_<?php echo $konzept["ID"] ?>" value="5" <?php if( floor($konzept["Durchschnitt"]) == 5 ) { echo 'checked="checked"'; }?> /><label for="rating-5_<?php echo $konzept["ID"] ?>">5</label>
                    <input type="radio" id="rating-4_<?php echo $konzept["ID"] ?>" name="rating_<?php echo $konzept["ID"] ?>" value="4" <?php if( floor($konzept["Durchschnitt"]) == 4 ) { echo 'checked="checked"'; }?> /><label for="rating-4_<?php echo $konzept["ID"] ?>">4</label>
                    <input type="radio" id="rating-3_<?php echo $konzept["ID"] ?>" name="rating_<?php echo $konzept["ID"] ?>" value="3" <?php if( floor($konzept["Durchschnitt"]) == 3 ) { echo 'checked="checked"'; }?> /><label for="rating-3_<?php echo $konzept["ID"] ?>">3</label>
                    <input type="radio" id="rating-2_<?php echo $konzept["ID"] ?>" name="rating_<?php echo $konzept["ID"] ?>" value="2" <?php if( floor($konzept["Durchschnitt"]) == 2 ) { echo 'checked="checked"'; }?> /><label for="rating-2_<?php echo $konzept["ID"] ?>">2</label>
                    <input type="radio" id="rating-1_<?php echo $konzept["ID"] ?>" name="rating_<?php echo $konzept["ID"] ?>" value="1" <?php if( floor($konzept["Durchschnitt"]) == 1 ) { echo 'checked="checked"'; }?> /><label for="rating-1_<?php echo $konzept["ID"] ?>">1</label>
                    <input type="radio" id="rating-0_<?php echo $konzept["ID"] ?>" name="rating_<?php echo $konzept["ID"] ?>" value="0" <?php if( floor($konzept["Durchschnitt"]) == 0 ) { echo 'checked="checked"'; }?> class="star-cb-clear" /><label for="rating-0_<?php echo $konzept["ID"] ?>">0</label>
                </span>
                </fieldset>
            </form>
        </div>
    </div>
</div>

