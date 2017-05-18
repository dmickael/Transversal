<?php
include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bienvenue </title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Bienvenue <?php echo $_SESSION['nom']; ?> !</p>
<p>Page sécuriser.</p>
<p><a href="exemple.php">Autre page securiser</a></p>
<a href="deconnection.php">Déconnection</a>

</div>
</body>
</html>
