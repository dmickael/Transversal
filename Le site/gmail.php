<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <?php include 'header.html'; ?>
</header>
<section>
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
    echo "<p class='contact_gmail'>Votre email n'a pu être envoyé veuillez réessayer ulterieurement : </p>" . $mail->ErrorInfo;
    echo "<p class='contact_gmail'>Redirection dans 5 secondes</p>";
    header("refresh:5;url=index.php");
    exit();
}else{
    echo "<img class='contact_img' src='images/merci.png'><br>";
    echo "<p class='contact_gmail'>redirection dans 5 secondes</p>";
    header("refresh:5;url=index.php");
    exit();
}

?>;
    <?php include 'header.html'; ?>
</section>

<footer>

</footer>

</body>
</html>

