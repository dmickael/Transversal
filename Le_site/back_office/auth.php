<?php
?>

<?php
session_start();
if(!isset($_SESSION["nom"])){
header("Location: connection.php");
exit(); }
?>
