<!DOCTYPE>

<html>

    <head>
        <title>Événements | A l'Équilibre</title>
        <meta name="description" content="Foodtruck, rejoignez notre réseau et bénéficiez de nos services événementiels. Avec nous, boostez votre chiffre d’amitié."/>
        <meta charset="utf-8"/>
        <link href="style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    </head>
    <body>
        <?php include('header.html');

            session_start();

            Try {
                $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=latin1', 'root', '');
            }
            catch (PDOException $e) {
                die('Erreur : ' . $e->getMessage());
            }
        ?>
            <h1 id="title_events">Prestations événementielles :</h1>
            <div class="events">

                <?php
                    $result=$bdd->query('SELECT * FROM evenements');
                while ($equipe=$result->fetch()){
                    ?> <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img src="<?php echo $equipe['image_membre'] ?>" alt="photo ">
                            </div>
                            <div class="back">
                                <p class="texte_blanc"><?php echo $equipe['prenom_membre']." ".$equipe['nom_membre'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        <footer><?php include('footer.html') ?></footer>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js/footer.js"></script>
        <script src="js/header.js"></script>
    </body>

</html>