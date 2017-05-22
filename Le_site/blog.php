<!DOCTYPE HTML>
<html>
    <head>
        <title>Blog | A l'Èquilibre</title>
        <meta name="description" content="Plus de 10 styles culinaires disponibles ‡ la privatisation parmi notre rÈseau de traiteurs Nantais."/>
        <meta charset="utf-8"/>
        <link href="style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
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


        <p class="ba_title">Actualités</p>


        <div class="actualite">

            <?php
            $result=$bdd->query('SELECT * FROM articles');
            while ($data= $result->fetch()) {
                ?>

                <div class="block_actualite">
                    <img src="images/actu_blog/<?php echo $data['image_article']; ?>"" class="blog_image">
                    <p class="date_blog"><?php echo $data['date']; ?></p>


                    <p class="block_actualitetitle"><?php echo $data['nom_article']; ?></p>

                    <p class="block_actualitetext"><?php echo $data['description_article']; ?></p>


                    <div class="blog_bouton">
                        <p>
                            <a href=" article/article_detail.php?id='<?php echo $data['code_article']?>' ?>">Découvrir</a>
                        </p>
                    </div>
                </div>
            <?php }
            ?>
        </div>



        <!--

        <div class="actualite">
            <div class="block_actualite">
                <img src="images/actu_blog/anniversaire%20original.jpg">
                <p class="date_blog"> 16/01/2017</p>



                <p class="block_actualitetitle"> Un food truck pour votre mariage </p>

                <p class="block_actualitetext"> La street food règne en maitre sur nos déjeuners, et depuis quelques temps, on retrouve également les désormais célèbres food trucks sur les mariages. </p>


                <div class="blog_bouton">
                    <p>
                        <a href="#">Découvrir</a>
                    </p>
                </div>
            </div>






            <div class="block_actualite">
                <img src="images/actu_blog/food_truck.jpg">
                <p class="date_blog"> 16/01/2017</p>

                <p class="block_actualitetitle"> Ça roule pour les food trucks!</p>
                <p class="block_actualitetext">Nouvelle forme de restauration rapide, cette street food proposée "au cul du camion" tente de jouer la carte du sain et du local. Céderez-vous à la mode des roulottes gourmandes? </p>
                <div class="blog_bouton">
                    <p>
                        <a href="#">Découvrir</a>
                    </p>
                </div>
            </div>



            </div>
            <div class="actualite">
                <div class="block_actualite">
                    <img src="images/actu_blog/festival_foodtruck.jpg">
                    <p class="date_blog"> 16/01/2017</p>

                    <p class="block_actualitetitle" > Les évènements food trucks à ne pas rater !</p>
                    <p class="block_actualitetext"> Préparez-vous à un été bien chargé ! Nous avons repéré les meilleurs événements où trouver les food trucks, d’ici à septembre !Au programme, des festivals 100% street food célébrant la cuisine de rue, mais aussi des évènements musicaux où vous pourrez vous régaler au son de vos groupes préférés.</p>
                    <div class="blog_bouton">
                        <p>
                            <a href="#">Découvrir</a>
                        </p>
                    </div>
                </div>
                <div class="block_actualite">
                    <img src="images/actu_blog/Cuisine%20traditionnelle%20.jpg">
                    <p class="date_blog"> 16/01/2017</p>

                    <p class="block_actualitetitle">Cuisine traditionnelle VS Street food ? Laquelle remporte le plus de succès auprès des français ?</p>
                    <p class="block_actualitetext"> Face au sempiternel poulet rôti dominical qui s’invite toujours dans de nombreux foyers français, de nouvelles habitudes de consommation gagnent du terrain.</p>
                    <div class="blog_bouton">
                        <p>
                            <a href="#">Découvrir</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="actualite">
                <div class="block_actualite">
                    <img src="images/actu_blog/anniversaire%20original.jpg">
                    <p class="date_blog"> 16/01/2017</p>
                    <p class="block_actualitetitle">Pour un anniversaire original, louez un food truck ! </p>
                    <p class="block_actualitetext"> Dans quelques mois c’est votre anniversaire et vous souhaitez marquer le coup en organisant une soirée digne de son nom. Bien entendu, pour un anniversaire qui en vaut la chandelle, il vous faut une playlist, un beau cadre mais également un bon repas. </p>
                    <div class="blog_bouton">
                        <p>
                            <a href="#">Découvrir</a>
                        </p>
                    </div>
                </div>
                <div class="block_actualite">
                    <img src="images/actu_blog/foodtruck%20au%20lieu%20d’un%20traiteur.jpg">
                    <p class="date_blog"> 16/01/2017</p>
                    <p class="block_actualitetitle"> Choisir un foodtruck au lieu d’un traiteur?</p>
                    <p class="block_actualitetext">Privatiser un foodtruck pour son événement ? Une bonne idée pour changer du traiteur traditionnel tout en faisant le choix d’une véritable alternative de restauration de qualité.  </p>
                    <div class="blog_bouton">
                        <p>
                            <a href="#">Découvrir</a>
                        </p>
                    </div>
                </div>
            </div>
            <hr>

            <p class="ba_title">BLog</p>


            <div class="ba_section">
                <article class="style-1">
                    <img src="images/actu_blog/Machines-Nantes.jpg" alt="img01">
                    <div>
                        <h3>Machine de Nantes</h3>
                        <span>John Doe</span>
                        <a href="#">Plus de détails</a>
                    </div>
                </article>
                <article class="style-1">
                    <img src="images/actu_blog/Machines-Nantes.jpg" alt="img01">
                    <div>
                    <h3>Machine de Nantes</h3>
                    <span>John Doe</span>
                    <a href="#">Plus de détails</a>
                </div>
            </article>
        </div>
        <div class="ba_section">
            <article class="style-1">
                <img src="images/actu_blog/Machines-Nantes.jpg" alt="img01">
                <div>
                    <h3>Machine de Nantes</h3>
                    <span>John Doe</span>
                    <a href="#">Plus de détails</a>
                </div>
            </article>


            <article class="style-1">
                <img src="images/actu_blog/Machines-Nantes.jpg" alt="img01">
                <div>
                    <h3>Machine de Nantes</h3>
                    <span>John Doe</span>
                    <a href="#">Plus de détails</a>
                </div>
            </article>
        </div>

        <div class="ba_section">

            <article class="style-1">
                <img src="images/actu_blog/Machines-Nantes.jpg" alt="img01">
                <div>
                    <h3>Machine de Nantes</h3>
                    <span>John Doe</span>
                    <a href="#">Plus de détails</a>
                </div>
            </article>
            <article class="style-1">
                <img src="images/actu_blog/Machines-Nantes.jpg" alt="img01">
                <div>
                    <h3>Machine de Nantes</h3>
                    <span>John Doe</span>
                    <a href="#">Plus de détails</a>
                </div>
            </article>
        </div>
        -->

            <?php
            include ("footer.html");
            ?>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js/footer.js"></script>
        <script src="js/header.js"></script>
    </body>
</html>