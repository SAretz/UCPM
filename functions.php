<?php
require_once __DIR__."/Model/rank.php";
require_once __DIR__."/Model/user.php";
require_once __DIR__."/Model/feedback.php";
require_once __DIR__."/Model/times.php";
require_once __DIR__."/Model/konzepte.php";
require_once __DIR__."/database.php";

if(isset($_POST['submit']))
{
    $_POST['submit']();
}

function getRole($id) {
    $db = new Database();
    $role = $db->SelectOne(new Rank(), $id);

    return $role;
}

function sendMails($id, $message) {
    $db = new Database();
    $result = $db->Select(new User);

    $betreff = "Projekt Nr.".$id." bewerten";
    $from = "From: NoReply <noreply@wayneschlegel.de>\n";
    $from .= "Content-Type: text/html\n";
    $text = $message;

    foreach($result AS $user) {
        mail($user->Email, $betreff, $text, $from);
    }
}

function konzept_neu()
{
    $db = new Database();
    $konzept = new Konzepte();
    $konzept->Name = $_POST['Name'];
    $konzept->Text = $_POST['Text'];
    $konzept->Letzter_Bearbeiter = 1;
    $konzept->Zeit= date("d.m.Y")." ".date("H:i");
    $db->Insert($konzept);

    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '?page=konzepte';
    header("Location: http://$host$uri/$extra");
    exit();
    
}

function konzept()
{

    $datum = date("d.m.Y");
    $uhrzeit = date("H:i");
    $db = new Database();
    $konzept = $db->SelectOne(new Konzepte(),$_POST['ID']);
    $konzept->Text = $_POST['Text'];
    $konzept->Letzter_Bearbeiter = 1;
    $konzept->Zeit = date("d.m.Y")." ".date("H:i");
    $db->Update($konzept);
    setTimes();
}

function feedback()
{
    $db = new Database();
    $feedback = new Feedback();
    $feedback->Kurztext = $_POST['Kurztext'];
    $feedback->Bewertung = $_POST['Bewertung'];
    $feedback->Projekt = $_POST['Projekt'];
    $db->Insert($feedback);

    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '?page=projekt';
    header("Location: http://$host$uri/$extra");
    exit();

}

function setTimes(){
    $db = new Database();
    $times = new Times();
    $times->Projekt = $_POST['Projekt'];
    $times->Von = $_POST['Von'];
    $times->Bis = date("H:i");
    $db->Insert($times);

    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '?page=konzepte_details&projekt='.$times->Projekt;
    header("Location: http://$host$uri/$extra");
    exit();


}

function getTimes()
{
    $db = new Database();
    $result = $db->Select(new Times());
    return $result;

}

function getKonzepte()
{
    $db = new Database();
    $result = $db->Select(new Konzepte());
    return $result;
}
