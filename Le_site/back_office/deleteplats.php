<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Supression de plats</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
ob_start();
include ('auth.php');
require('db.php');

$sql = 'SELECT code_plat, nom_plat, description_plat FROM plats';


// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysqlI_query($con,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on va scanner tous
?><div style="text-align: center">
    <div class="form" style="text-align: center">
        <h1>Suppression de plat</h1>
        <form name="Supression de plats" enctype="multipart/form-data" method="post">
            <input name = "platId" type = "text" id = "platId" style="text-align: center" placeholder="Le code_plat a supprimer">
            <input name = "delete" type = "submit" id = "delete" value = "Delete">
        </form>
    </div>
    <br>
    <br>


    <?php
    if(isset($_POST['delete'])) {
        $platId = $_POST['platId'];

// sql to delete a record
        $sql = "DELETE FROM plats WHERE code_plat='$platId'";
        if ($con->query($sql) === TRUE) {
            echo "<div class='form'><h3>Suppression reussi.</h3><br/>Clique ici pour retourner a la page d'<a href='index.php'>administration</a><br><br><br></div>";

        } else {
            echo "Impossible de supprimer la ligne de la table: " . $conn->error;
        }

        $con->close();

    }
    while ($data = mysqli_fetch_array($req)) {
        // on affiche les résultats
        echo 'platId : '.$data['code_plat'].'<br />';
        echo 'platTitle : '.$data['nom_plat'].'<br />';
        echo 'platDescription : '.$data['description_plat'].'<br /><br />';
    }
    mysqli_free_result ($req);?>
</div><?php



