    <div class="row">
        <div class="col-md-9">
            <h1>Feedback-Runde</h1>
        </div>
        <div class="col-md-3">

            <?php
            $datum = date("d.m.Y");
            $uhrzeit = date("H:i");
            echo $datum," - ",$uhrzeit," Uhr";
            ?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            Teilen Sie uns Ihr Feedback zu unseren Projekten mit:
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <form method="post" action="./functions.php">
    <div class="row">
         <div class="col-md-8">
             <div class="form-group">
                 <label for="comment">Feedback:</label>
                 <textarea class="form-control" name="Kurztext" rows="5" id="comment"></textarea>
             </div>
        </div>
        <div class="col-md-4">
            <div class="radio">
                <label>
                    <input type="radio" name="Bewertung" id="id1" value="1" checked>
                    1 Stern
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="Bewertung" id="id2" value="2">
                    2 Sterne
                </label>
            </div>

            <div class="radio">
                <label>
                    <input type="radio" name="Bewertung" id="id2" value="3">
                    3 Sterne
                </label>
            </div>

            <div class="radio">
                <label>
                    <input type="radio" name="Bewertung" id="id2" value="4">
                    4 Sterne
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="Bewertung" id="id2" value="5">
                    5 Sterne
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
            </div>
            <div class="col-md-1">
                <input type="hidden" name="Projekt" value="<?php echo $_GET['projekt'] ?>">
                <button type="submit" value="feedback" name="submit" class="btn btn-primary">Senden</button>
            </div>
        </div>
    </div>