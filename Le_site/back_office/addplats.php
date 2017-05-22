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
    $auteur = stripslashes($_REQUEST['auteur']);
    $auteur = mysqli_real_escape_string($con,$auteur);
    $lien = stripslashes($_REQUEST['lien']);
    $lien = mysqli_real_escape_string($con,$lien);
    $description_article = stripslashes($_REQUEST['description_article']);
    $description_article = mysqli_real_escape_string($con,$description_article);
    $lien1="/images/image_article/";
    $lien2=$_FILES['fichier']['name'];

    $image_article=$lien1.$lien2;


    $annee = $_POST['annee'];
    $mois = $_POST['mois'];
    $jour = $_POST['jour'];



    $date = $_POST['annee'].'-'.$_POST['mois'].'-'.$_POST['jour'];


    $query = "INSERT into `articles` (nom_article, code_type_article, `date`, auteur, lien, description_article, image_article) VALUES ('$nom_article', '$code_type_article', '$date', '$auteur', '$lien', '$description_article', '$image_article')";
    $result = mysqli_query($con,$query);


    $destination = '../images/image_article/'; // dossier où sera déplacé le fichier

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

    echo "Le fichier a bien été envoyé";


    if($result){
        echo "<div class='form'><h3>Ajout reussi.</h3><br/>Clique ici pour retourner a la page d'<a href='index.php'>administration</a></div>";
    }
}else{
    ?>






    <div class="form">
        <h1>Ajout d'article</h1>
        <form name="Ajout article" action="addarticles.php" enctype="multipart/form-data" method="post">
            <input type="text" name="nom_article" placeholder="Nom" required />
            <select name="code_type_article">
                <option value="TYPART01">Communiqué</option>
                <option value="TYPART02">Blog</option>
                <option value="TYPART03">Presse</option>
            </select>
            <br>
            <input type="text" name="auteur" placeholder="Auteur" required />
            <input type="text" name="lien" placeholder="Lien du blog" required />
            <input type="text" name="description_article" placeholder="Description de l'article" required />
            <input type="file" name="fichier" size="30">
            <input type="submit" name="submit" value="S'enregistrer" />
        </form>
    </div>
<?php } ?>
</body>
</html>
