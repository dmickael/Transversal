<!DOCTYPE HTML>

<html>

    <head>
        <title>Événements | A l'Équilibre</title>
        <meta name="description" content="Foodtruck, rejoignez notre réseau et bénéficiez de nos services événementiels. Avec nous, boostez votre chiffre d’amitié."/> <meta charset="utf-8"/>
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
        <h1 id="title_events">Prestations événementielles :</h1>
        <div class="events">

            <?php
                $result=$bdd->query('SELECT * FROM evenements');
                while ($data= $result->fetch()) {

                $_SESSION['id'] = $data[code_evenement];

            ?>

                    <div class="block_event">
                        <img src="images/actu_blog/<?php echo $data['image_evenement']; ?>"" class="event_image">
                        <p class="event_title"><?php echo $data['nom_evenement']; ?></p>
                        <p class="event_text"><?php echo $data['description_evenement']; ?></p>
                        <div class="event_bouton">
                            <p>
                                <a href="event_detail.php ?>">Découvrir</a>
                            </p>
                        </div>
                    </div>
            <?php }
            ?>
        </div>
    <footer>
        <?php include '../footer.html';
        ?>
    </footer>

</body>

</html>