<html>

<head>
    <title>Article détailé | A l'Équilibre</title>
    <meta name="description" content="Foodtruck, vous souhaitez savoir ce que l'on a deja proposé ? Alors nous allons vous apporter toutes les réponses à vos questions."/> <meta charset="utf-8"/>
    <link href="../style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>

<body>
<header>
    <?php include'../header.html';
    ?>
</header>

<?php

session_start();

Try {
    $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=latin1', 'root', '');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<div class="article_detail">

    <?php
    $result=$bdd->query('SELECT * FROM evenements WHERE code_evenement = $_SESSION[id]');
    ?>

    <h1 id="title_events"><? echo $data['nom_article'] ?></h1>

    <img src="images/actu_blog/<?php echo $data['image_article']; ?>"" class="article_image">
    <p class="article_text"><?php echo $data['description_article']; ?></p>

</div>
    <?php include '../footer.html';
    ?>

</body>

