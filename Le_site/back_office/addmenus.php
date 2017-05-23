<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajout de menus</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
include ('auth.php');
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['nom_menu'])){
    $nom_menu = stripslashes($_REQUEST['nom_menu']);
    $nom_menu = mysqli_real_escape_string($con,$nom_menu);
    $code_type_menu = stripslashes($_REQUEST['code_type_menu']);
    $code_type_menu = mysqli_real_escape_string($con,$code_type_menu);
    $prix_menu = stripslashes($_REQUEST['prix_menu']);
    $prix_menu = mysqli_real_escape_string($con,$prix_menu);
    $description_menu = stripslashes($_REQUEST['description_menu']);
    $description_menu = mysqli_real_escape_string($con,$description_menu);
    $code_menu1 = stripslashes($_REQUEST['code_menu1']);
    $code_menu1 = mysqli_real_escape_string($con,$code_menu1);

    $code_menu='menu_'.$code_menu1;
    $lien1="images/image_menu/";
    $lien2=$_FILES['fichier']['name'];

    $image_menu=$lien1.$lien2;



    $query = "INSERT into `menus` (code_menu, nom_menu, code_type_menu, prix_menu, description_menu, image_menu) VALUES ('$code_menu','$nom_menu', '$code_type_menu', '$prix_menu', '$description_menu', '$image_menu')";
    $result = mysqli_query($con,$query);


    $destination = '../images/image_menu/'; // dossier où sera déplacé le fichier

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
        <h1>Ajout de menus</h1>
        <form name="Ajout de menus" enctype="multipart/form-data" method="post">
            <input type="text" class="addmenu" name="code_menu1" placeholder="Id du menu (menu_XXX)" maxlength="3" required />
            <input type="text" class="addmenu" name="nom_menu" placeholder="Nom" required />
            <select class="addmenu" name="code_type_menu">
                <option value="TYPMEN01">Italien</option>
                <option value="TYPMEN02">Pates</option>
                <option value="TYPMEN03">Pizzas</option>
                <option value="TYPMEN04">Wraps</option>
                <option value="TYPMEN05">Japonais</option>
                <option value="TYPMEN06">Wok</option>
                <option value="TYPMEN07">Grec</option>
                <option value="TYPMEN08">Mexicain</option>
                <option value="TYPMEN09">Indien</option>
                <option value="TYPMEN10">Argentin</option>
                <option value="TYPMEN11">Libanais</option>
                <option value="TYPMEN12">Burgers</option>
            </select>
            <br>
            <input type="number" class="addmenu" name="prix_menu" placeholder="Prix du menu" required />
            <input type="text" class="addpmenu" name="description_menu" placeholder="Description du menu" required />
            <input type="file" class="addmenu" name="fichier" size="30">
            <input type="submit" name="submit" value="Ajouter" />
        </form>
    </div>
    <br><br/>
    <h2 style="text-align: center">Les menus déjà présent :</h2>
    <div style="text-align: center"><?php
        $sql = 'SELECT code_menu, nom_menu, description_menu FROM menus';
        // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
        $req = mysqli_query($con,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

        // on va scanner tous
        while ($data = mysqli_fetch_array($req)) {
            // on affiche les résultats
            echo 'Menu :</br>';
            echo 'code_menu : '.$data['code_menu'].'<br />';
            echo 'nom_menu : '.$data['nom_menu'].'<br />';
            echo 'description_menu : '.$data['description_menu'].'<br /><br />';
        }
        ?></div>
<?php } ?>
</body>
</html>
