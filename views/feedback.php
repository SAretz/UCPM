<?php
/**
 * Created by PhpStorm.
 * User: Niklas
 * Date: 03.05.2017
 * Time: 20:29
 */
?>

<html lang="en">
<style type="text/css">
    body { background: #d3d3d3 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
    <div class="row">
    <div class="col-md-9">


        <h1>Feedback-Runde<small> - Wayne Schlegel INC.</small></h1>



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
    <div class="row">
         <div class="col-md-8">

             <div class="form-group">
                 <label for="comment">Feedback:</label>
                 <textarea class="form-control" rows="5" id="comment"></textarea>
             </div>


          </div>
          <div class="col-md-4">


              <div class="radio">
                  <label>
                      <input type="radio" name="bewertung" id="id1" value="1" checked>
                      1 Stern
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="bewertung" id="id2" value="2">
                      2 Sterne
                  </label>
              </div>

              <div class="radio">
                  <label>
                      <input type="radio" name="bewertung" id="id2" value="2">
                      3 Sterne
                  </label>
              </div>

              <div class="radio">
                  <label>
                      <input type="radio" name="bewertung" id="id2" value="2">
                      4 Sterne
                  </label>
              </div>

              <div class="radio">
                  <label>
                      <input type="radio" name="bewertung" id="id2" value="2">
                      5 Sterne
                  </label>
              </div>



          </div>


        <div class="row">

            <div class="col-md-7">


            </div>
            <div class="col-md-1">

                <button type="button" class="btn btn-warning">Submit</button>

            </div>
            <div class="col-md-4">


            </div>
        </div>



</div>
</html>
