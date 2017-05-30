<?php

if(isset($_SESSION['User']))
{
    ?>
    <form action="functions.php" method="post">
        <button class="btn btn-danger btn-block" value="logout" name="submit" type="submit">Logout</button>
    </form>


    <?php
}
else {
    ?>

    <form action="functions.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="Email" class="form-control" placeholder="Email address" required
               autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="Passwort" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" value="login" name="submit" type="submit">Sign in</button>
    </form>

    <?php
}
?>
