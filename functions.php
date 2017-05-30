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

function getUser($id) {
    $db = new Database();
    $user = $db->SelectOne(new User(),$id);

    return $user;
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

function weiterleitung($page){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '?page='.$page;
    header("Location: http://$host$uri/$extra");
    exit();
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

    weiterleitung("konzepte");

}

function konzept()
{

    $datum = date("d.m.Y");
    $uhrzeit = date("H:i");
    $db = new Database();
    $konzept = $db->SelectOne(new Konzepte(),$_POST['ID']);
    $konzept->Text = $_POST['Text'];
    $konzept->Letzter_Bearbeiter = $_POST['Bearbeiter'];
    $konzept->Zeit = date("d.m.Y")." ".date("H:i");
    if($_POST['Fertig'] == "on")
    {
        $konzept->Fertig = 1;
    }
    else{
        $konzept->Fertig = 0;
    }

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

    weiterleitung("konzepte");

}

function setTimes(){
    $db = new Database();
    $times = new Times();
    $times->Projekt = $_POST['Projekt'];
    $times->Von = $_POST['Von'];
    $times->Bis = date("H:i");
    $db->Insert($times);

    weiterleitung("konzepte");


}

function getTimes()
{
    $db = new Database();
    $result = $db->Select(new Times());
    return $result;

}

function login()
{
    $db = new Database();
    $db->where = array("Email"=>$_POST['Email']);
    $result = $db->Select(new User());
    session_start();
    $_SESSION['User'] = $result[0]->ID;
    $_SESSION['login'] = 1;

    weiterleitung("home");
}

function logout()
{
    session_start();
    session_destroy();
    weiterleitung("login");
}

function getKonzepte()
{
    $db = new Database();
    $result = $db->RawQuery("SELECT konzepte.*, AVG(feedback.Bewertung) AS Durchschnitt FROM `konzepte` JOIN `feedback` ON konzepte.ID = feedback.Projekt GROUP BY feedback.Projekt ORDER BY Durchschnitt DESC");
    return $result;
}
