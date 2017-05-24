<?php
/**
 * Created by PhpStorm.
 * User: maelb
 * Date: 22/05/2017
 * Time: 09:35
 */?>
<html>

    <head>
        <title>Événement détailé | A l'Équilibre</title>
        <meta name="description" content="Foodtruck, vous souhaitez savoir ce que l'on peut faire pour vous pour cet événement ? Alors nous allons vous apporter toutes les réponses à vos questions."/> <meta charset="utf-8"/>
        <link href="style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/favicon.ico" />
    </head>

    <body>
        <header>
            <?php include('header.html');
            ?>
        </header>

        <?php

        session_start();

        Try {
            $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=utf8', 'root', '');
        }
        catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
        ?>

        <div class="blog_detail">

            <?php
            $article=$_GET['id'];
            echo $article;
            $result=$bdd->query('SELECT * FROM articles WHERE `code_article`= '.$article.' ');
            while ($blog=$result->fetch()){
                ?>
                <h1 id=""><?php echo $blog['nom_article'] ?></h1>
                <img src="<?php echo $blog['image_article']; ?>" class="">
                <p class=""><?php echo $blog['description_article']; ?></p>
            <?php  } ?>
        </div>
        <?php include ('footer.html');
        ?>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js/footer.js"></script>
        <script src="js/header.js"></script>
        <script src="js/evenements.js"></script>
    </body>

</html>
