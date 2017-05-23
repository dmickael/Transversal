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
                $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=utf8', 'root', '');
            }
            catch (PDOException $e) {
                die('Erreur : ' . $e->getMessage());
            }
        ?>
            <h1 class="titre_rouge">Prestations événementielles :</h1>
            <div class="events">

                <?php
                    $result=$bdd->query('SELECT * FROM evenements');
                    while ($data=$result->fetch()){

                ?>

                        <div class="block_event">
                            <img src="<?php echo $data['image_evenement']; ?>" class="event_image">
                            <div class="block_titredesc">
                                <h3 class="event_title titre_rouge"><?php echo ($data['nom_evenement']); ?></h3>
                                <p class="event_text"><?php echo ($data['description_evenement']); ?></p>
                            </div>
                            <div class="event_bouton"><p><a href="evenement_detail.php?id='<?php echo $data['code_evenement']?>'">Découvrir</a></p></div>

                        </div>
                <?php } ?>
            </div>
        <?php include('footer.html') ?>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js/footer.js"></script>
        <script src="js/header.js"></script>
        <script src="js/evenements.js"></script>
    </body>

</html>