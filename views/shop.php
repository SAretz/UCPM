<div id="shop">
    <div class="row renamelater">
        <div class="col-sm-6">
            <div class="konzept_preview">
                <img src="img/fahrrad/1.jpg" class="center-block" alt="Rad">
                <p class="konzept_description">Mehr Freizeit für dich!</p>
                <a href="?page=profil" class="_button">Kaufen</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="konzept_preview">
                <img src="img/fahrrad/1.jpg" class="center-block" alt="Rad">
                <p class="konzept_description">Mehr Freizeit für dich!</p>
                <a href="?page=profil" class="_button">Kaufen</a>
            </div>
        </div>
    </div>
    <div class="row renamelater">
        <div class="col-sm-6">
            <div class="konzept_preview">
                <img src="img/fahrrad/1.jpg" class="center-block" alt="Rad">
                <p class="konzept_description">Mehr Freizeit für dich!</p>
                <a href="?page=profil" class="_button">Kaufen</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="konzept_preview">
                <img src="img/fahrrad/1.jpg" class="center-block" alt="Rad">
                <p class="konzept_description">Mehr Freizeit für dich!</p>
                <a href="?page=profil" class="_button">Kaufen</a>
            </div>
        </div>
    </div>
</div>

<script>
    $('._button').click(function () {
        $.ajax({
            method: "POST",
            url: "functions.php",
            data: { submit: "ajax_shop"}
        })
            .fail(function() {
                alert( "error" );
            })
            .done(function(msg) {
                alert( "Vielen Spaß mit deinem Einkauf");
            });
    });
</script>