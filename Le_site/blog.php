<!DOCTYPE HTML>
<html>
    <head>
        title>Blog et articles | A l'Equilibre</title>
        <meta name="Nos actualitÈs et nos bloggueurs/bloggueuses favoris" content="Blog A l'…quilibre : actualitÈ, guides pratiques et conseils. La nouvelle alternative qui remplace le restaurant."/>
        <meta charset="utf-8"/>
        <link href="stylemin.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/favicon.ico" />
    </head>
    <body>
            <?php
            include("header.html");
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


        <h2 class="sc_title">Blog & Actualité</h2>


        <h3 class="ba_title">Actualités</h3>


        <div id="actualite">
            <?php
            $result=$bdd->query('SELECT * FROM articles WHERE `code_type_article`="TYPART01" ');
            while ($data= $result->fetch()) {?>
                <div class="block_actualite">
                    <img src="<?php echo $data['image_article']; ?>" class="blog_image">
                    <p class="block_actualitetitle"><?php echo $data['nom_article']; ?></p>
                    <p class="block_actualitetext"><?php echo substr($data['description_article'],0,200); ?>[...]</p>
                    <div class="auteurdate"><p class="date_blog"><?php echo $data['date']; ?></p>
                    <p class="auteur_blog"><?php echo $data['auteur']; ?></p></div>
                    <div class="blog_bouton">
                        <p>
                            <a href="article_detail.php?id='<?php echo $data['code_article']?>'">Découvrir</a>
                        </p>
                    </div>
                </div>
            <?php }
            ?>
        </div>
            <hr>
            <h3 class="ba_title">Avis</h3>
        <div id="blog">
            <?php
            $result=$bdd->query('SELECT * FROM articles WHERE `code_type_article`!="TYPART01"');
            while ($data= $result->fetch()) {?>
                <div class="block_actualite">
                    <img src="<?php echo $data['image_article']; ?>" class="blog_image">
                    <p class="block_actualitetitle"><?php echo $data['nom_article']; ?></p>
                    <div class="auteurdate"><p class="auteur_blog"><?php echo $data['auteur']; ?></p></div>
                    <div class="blog_bouton">
                        <p>
                            <a href="<?php echo $data['lien']?>">Découvrir</a>
                        </p>
                    </div>
                </div>
            <?php }
            ?>
        </div>

            <?php
            include("footer.html");
            ?>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js/headermin.js"></script>
    </body>
</html>