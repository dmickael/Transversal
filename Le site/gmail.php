<?php

if (isset($_POST['societe'])) {
    $societe = $_POST['societe'];
}

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
}
if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
}
if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
}
if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
}
if (isset($_POST['demande'])) {
    $demande = $_POST['demande'];
}
if (isset($_POST['zonetext'])) {
    $zonetext = $_POST['zonetext'];
}


$account="ynovphp@gmail.com";
$password="ynov123456";
$to="ynovphp@gmail.com";

$from=$mail;
$from_name=$nom.' '.$prenom;
$subject=$demande;
$msg=$zonetext.'<br><br>'.'<p>Société : '.$societe.'</p>'.'<p>E-mail : '.$from.'</p>'.'<p>Téléphone : '.$phone.'</p>';


require('phpmailer/class.phpmailer.php');
require('phpmailer/class.smtp.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->From = $from;
$mail->Username= $account;
$mail->Password= $password;
$mail->FromName= $from_name;
$mail->CharSet ="UTF-8";
$mail->AddReplyTo($from);
$mail->AddAddress($to);
$mail->Subject = $subject;
$mail->IsHTML(true); //Or false if you do not want HTML content
$mail->Body = $msg;
$mail->AltBody = "No HTML Body. Great story goes here!";

if(!$mail->Send()){
    echo "Mailer erreur: " . $mail->ErrorInfo;
    echo '</br><a href="javascript:history.go(-1)">Retour</a>';
}else{
    echo "E-Mail a été envoyer";
    echo '</br><a href="javascript:history.go(-1)">Retour</a>';
}
?>;


