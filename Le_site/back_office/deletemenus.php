<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Supression de menus</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
ob_start();
include ('auth.php');
require('db.php');

$sql = 'SELECT code_menu, nom_menu, description_menu FROM menus';


// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysqlI_query($con,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on va scanner tous
?><div style="text-align: center">
    <div class="form" style="text-align: center">
        <h1>Suppression de menu</h1>
        <form name="Supression de menus" enctype="multipart/form-data" method="post">
            <input name = "menuId" type = "text" id = "menuId" style="text-align: center" placeholder="Le code_menu a supprimer">
            <input name = "delete" type = "submit" id = "delete" value = "Delete">
        </form>
    </div>
    <br>
    <br>


    <?php
    if(isset($_POST['delete'])) {
        $menuId = $_POST['menuId'];

// sql to delete a record
        $sql = "DELETE FROM menus WHERE code_menu='$menuId'";
        if ($con->query($sql) === TRUE) {
            echo "<div class='form'><h3>Suppression reussi.</h3><br/>Clique ici pour retourner a la page d'<a href='index.php'>administration</a><br><br><br></div>";

        } else {
            echo "Impossible de supprimer la ligne de la table: " . $conn->error;
        }

        $con->close();

    }
    while ($data = mysqli_fetch_array($req)) {
        // on affiche les résultats
        echo 'menuId : '.$data['code_menu'].'<br />';
        echo 'menuTitle : '.$data['nom_menu'].'<br />';
        echo 'menuDescription : '.$data['description_menu'].'<br /><br />';
    }
    mysqli_free_result ($req);?>
</div><?php



