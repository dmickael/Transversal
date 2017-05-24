<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajout de menus</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
ob_start();
include ('auth.php');
require('db.php');

$sql = 'SELECT code_article, nom_article, description_article FROM articles';


// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysqlI_query($con,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on va scanner tous
?><div style="text-align: center">
    <div class="form" style="text-align: center">
        <h1>Suppression d'article</h1>
        <form name="Ajout de menus" enctype="multipart/form-data" method="post">
            <input name = "articleId" type = "text" id = "articleId" style="text-align: center" placeholder="Le code_article a supprimer">
            <input name = "delete" type = "submit" id = "delete" value = "Delete">
        </form>
    </div>
    <br>
    <br>

    <?php
    if(isset($_POST['delete'])) {
        $articleId = $_POST['articleId'];

// sql to delete a record
        $sql = "DELETE FROM articles WHERE code_article='$articleId'";
        if ($con->query($sql) === TRUE) {
            echo "<div class='form'><h3>Suppression reussi.</h3><br/>Clique ici pour retourner a la page d'<a href='index.php'>administration</a><br><br><br></div>";

        } else {
            echo "Impossible de supprimer la ligne de la table: " . $conn->error;
        }

        $con->close();

    }

    while ($data = mysqli_fetch_array($req)) {
        // on affiche les résultats
        echo 'articleId : '.$data['code_article'].'<br />';
        echo 'articleTitle : '.$data['nom_article'].'<br />';
        echo 'articleDescription : '.$data['description_article'].'<br /><br />';
    }
    mysqli_free_result ($req);?>
</div>
</body>
</html>