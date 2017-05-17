<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Connection</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    if (isset($_POST['nom'])){

		$nom = stripslashes($_REQUEST['nom']);
		$nom = mysqli_real_escape_string($con,$nom);
		$mdp = stripslashes($_REQUEST['mdp']);
		$mdp = mysqli_real_escape_string($con,$mdp);

        $query = "SELECT * FROM `utilisateurs` WHERE `nom`='$nom' and mot_de_passe='".md5($mdp)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['nom'] = $nom;
			header("Location: index.php");
            }else{
				echo "<div class='form'><h3>Nom ou mot de passe incorrect.</h3><br/>Clique ici pour <a href='connection.php'>reesayé</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Se connecter</h1>
<form action="" method="post" name="connection">
<input type="text" name="nom" placeholder="Nom" required />
<input type="password" name="mdp" placeholder="Mot de passe" required />
<input name="submit" type="submit" value="connection" />
</form>
<p>Pas encore enregistrer ? <a href='inscription.php'>S'enregistrer</a></p>
</div>
<?php } ?>


</body>
</html>
