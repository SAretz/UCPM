<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=uscp', 'root', '');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrierung</title>
</head>
<body>

<?php

if(isset($_GET['register'])) {
    $error = false;
    $name = $_POST['username'];
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];


    if (strlen($name) == 0) {
        echo 'Bitte einen gültigen Namen eingeben<br>';
        $error = true;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
        $error = true;
    }
    if (strlen($passwort) == 0) {
        echo 'Bitte ein Passwort angeben<br>';
        $error = true;
    }
    if ($passwort != $passwort2) {
        echo 'Die Passwörter müssen übereinstimmen<br>';
        $error = true;
    }

    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if (!$error) {
        $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();

        if ($user !== false) {
            echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
           // $error = true;
        }
    }


}



    //Keine Fehler, wir können den Nutzer registrieren
    user_einfuegen();


?>

    <form action="?register=1" method="post" name="form1">
        Name:<br>
        <input type="text" size="40" maxlength="250" name="username"><br><br>

        E-Mail:<br>
        <input type="email" size="40" maxlength="250" name="email"><br><br>

        Dein Passwort:<br>
        <input type="password" size="40"  maxlength="250" name="passwort"><br>

        Passwort wiederholen:<br>
        <input type="password" size="40" maxlength="250" name="passwort2"><br><br>

        <input type="submit" value="Registrieren">
    </form>



</body>
</html>