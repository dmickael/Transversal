<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajout de plat</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
include ('auth.php');
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['nom_plat'])){
    $nom_plat = stripslashes($_REQUEST['nom_plat']);
    $nom_plat = mysqli_real_escape_string($con,$nom_plat);
    $code_type_plat = stripslashes($_REQUEST['code_type_plat']);
    $code_type_plat = mysqli_real_escape_string($con,$code_type_plat);
    $prix_plat = stripslashes($_REQUEST['prix_plat']);
    $prix_plat = mysqli_real_escape_string($con,$prix_plat);
    $description_plat = stripslashes($_REQUEST['description_plat']);
    $description_plat = mysqli_real_escape_string($con,$description_plat);
    $code_plat1 = stripslashes($_REQUEST['code_plat1']);
    $code_plat1 = mysqli_real_escape_string($con,$code_plat1);

    $code_plat='plat'.$code_plat1;
    $lien1="images/image_plat/";
    $lien2=$_FILES['fichier']['name'];

    $image_plat=$lien1.$lien2;



    $query = "INSERT into `plats` (code_plat, nom_plat, code_type_plat, prix_plat, description_plat, image_plat) VALUES ('$code_plat', '$nom_plat', '$code_type_plat', '$prix_plat', '$description_plat', '$image_plat')";
    $result = mysqli_query($con,$query);


    $destination = '../images/image_plat/'; // dossier où sera déplacé le fichier

    $fichier = $_FILES['fichier']['tmp_name'];

    if( !is_uploaded_file($fichier) )
    {
        exit("Veuiller selectionner une image");
    }

    // on vérifie maintenant l'extension
    $type_fichier = $_FILES['fichier']['type'];

    if( !strstr($type_fichier, 'jpg') && !strstr($type_fichier, 'jpeg') && !strstr($type_fichier, 'bmp') && !strstr($type_fichier, 'gif') )
    {
        exit("Ce n'est pas une image");
    }

    // on copie le fichier dans le dossier de destination
    $nom_fichier = $_FILES['fichier']['name'];

    if( !move_uploaded_file($fichier, $destination . $nom_fichier) )
    {
        exit("Impossible de sauvegarde dans $destination");
    }

    echo "<div class='form'>Le fichier (image) a bien été envoyé</div>";


    if($result){
        echo "<div class='form'><h3>Ajout reussi.</h3><br/>Clique ici pour retourner a la page d'<a href='index.php'>administration</a></div>";
    }
}else{
    ?>
    <div class="form">
        <h1>Ajout de plat</h1>
        <form name="Ajout de plats" enctype="multipart/form-data" method="post">
            <input type="text" class="addmenu" name="code_plat1" placeholder="Id du plat (platXXXX)" maxlength="3" required />
            <input type="text" class="addplats" name="nom_plat" placeholder="Nom" required />
            <select class="addplats" name="code_type_plat">
                <option value="TYPLAT01">Coktails</option>
                <option value="TYPLAT02">Glaces</option>
                <option value="TYPLAT03">Gâteaux</option>
                <option value="TYPLAT03">Crêpes</option>
            </select>
            <br>
            <input type="number" class="addplats" name="prix_plat" placeholder="Prix du plat" required />
            <input type="text" class="addplats" name="description_plat" placeholder="Description du plat" required />
            <input type="file" class="addplats" name="fichier" size="30">
            <input type="submit" name="submit" value="Ajouter" />
        </form>
    </div>
    <br><br/>
    <h2 style="text-align: center">Les plats déjà présent :</h2>
    <div style="text-align: center"><?php
        $sql = 'SELECT code_plat, nom_plat, description_plat FROM plats';
        // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
        $req = mysqli_query($con,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

        // on va scanner tous
        while ($data = mysqli_fetch_array($req)) {
            // on affiche les résultats
            echo 'Plat :</br>';
            echo 'code_plat : '.$data['code_plat'].'<br />';
            echo 'nom_plat : '.$data['nom_plat'].'<br />';
            echo 'description_plat : '.$data['description_plat'].'<br /><br />';
        }
        ?></div>
<?php } ?>
</body>
</html>
