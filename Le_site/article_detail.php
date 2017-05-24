<html>

<head>
    <title>Article détailé | A l'Équilibre</title>
    <meta charset="utf-8"/>
    <link href="stylemin.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.ico" />
</head>

<body>
    <?php include 'header.html';
    ?>

<?php

session_start();

Try {
    $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=utf8', 'root', '');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<div class="event_detail">

    <?php
    $article=$_GET['id'];
    $result=$bdd->query('SELECT * FROM articles WHERE `code_article`= '.$article.' ');
    while ($blog=$result->fetch()){
        ?>
        <h1 class="titre_rouge title_event"><?php echo $blog['nom_article'] ?></h1>
        <img src="<?php echo $blog['image_article']; ?>" class="image_article">
        <p class="text_event"><?php echo $blog['description_article']; ?></p>
    <?php  } ?>
</div>
    <?php include 'footer.html';
    ?>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/headermin.js"></script>
</body>

