<html>

    <head>
        <title>Événement détailé | A l'Équilibre</title>
        <meta name="description" content="Foodtruck, vous souhaitez savoir ce que l'on peut faire pour vous pour cet événement ? Alors nous allons vous apporter toutes les réponses à vos questions."/> <meta charset="utf-8"/>
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

                <div class="events_detail">

            <?php
                $result=$bdd->query('SELECT * FROM evenements WHERE code_evenement = $_SESSION[id]');
            ?>

                <h1 id="title_events"><?p echo $data['nom_evenement'] ?></h1>

                    <img src="images/actu_blog/<?php echo $data['image_evenement']; ?>"" class="event_image">
                    <p class="event_text"><?php echo $data['description_evenement']; ?></p>

                </div>

        <footer>
            <?php include '../footer.html'; 
            ?>
        </footer>

    </body>

</html>