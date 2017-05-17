<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['nom'])){
		$nom = stripslashes($_REQUEST['nom']);
		$nom = mysqli_real_escape_string($con,$nom);
        $first_name = stripslashes($_REQUEST['first_name']);
        $first_name = mysqli_real_escape_string($con,$first_name);
        $tel = stripslashes($_REQUEST['tel']);
        $tel = mysqli_real_escape_string($con,$tel);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$mdp = stripslashes($_REQUEST['mdp']);
		$mdp = mysqli_real_escape_string($con,$mdp);




        $annee = $_POST['annee'];
        $mois = $_POST['mois'];
        $jour = $_POST['jour'];



        $date = $_POST['annee'].'-'.$_POST['mois'].'-'.$_POST['jour'];





        $date_inscription = date("Y-m-d H:i:s");
        $query = "INSERT into `utilisateurs` (nom, prenom, date_de_naissance, telephone, mot_de_passe, e_mail, date_inscription) VALUES ('$nom', '$first_name', '$date', '$tel', '".md5($mdp)."', '$email', '$date_inscription')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Enregistrer avec sucess.</h3><br/>Clique ici pour se <a href='connection.php'>connecter</a></div>";
        }
    }else{
?>
        <div class="form">
            <h1>Inscription</h1>
            <form name="inscription" action="" method="post">
                <input type="text" name="nom" placeholder="Nom" required />
                <input type="text" name="first_name" placeholder="Prénom" required />
                <input type="tel" name="tel" placeholder="Téléphone" required />
                <br>
                <select name="jour">
                    <option value="01">1</option>
                    <option value="02">2</option>
                </select>
                <select name="mois">
                    <option value="01">janvier</option>
                    <option value="02">février</option>
                </select>
                <select name="annee">
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                </select>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="mdp" placeholder="Mot de passe" required />
                <input type="submit" name="submit" value="Register" />
            </form>
        </div>
    <?php } ?>
</body>
</html>
