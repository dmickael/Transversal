<?php

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
$msg=$zonetext.'<br/>'.$phone;



include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 465; // Or 587
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->AddReplyTo($from);
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
    echo "Mailer erreur: " . $mail->ErrorInfo;
    echo '</br><a href="javascript:history.go(-1)">Retour</a>';
}else{
    echo "E-Mail a été envoyer";
    echo '</br><a href="javascript:history.go(-1)">Retour</a>';
}
?>;
