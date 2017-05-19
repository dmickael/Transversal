<html>

    <head>
        <title>Équipe | A l'Équilibre</title>
        <meta name="description" content="Vous êtes curieux de connaître les personnes avec qui vous êtes possiblement amenés à échanger ? Voici notre équipe."/> <meta charset="utf-8"/>
        <link href="../style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    </head>

    <body>
        <header>
            <?php include'../header.html'; 
            ?>
        </header>

        <?php

        Try {
            $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=latin1', 'root', '');
        }
        catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
        ?>

                <div class="equipe_detail">

                <?php
                    $result=$bdd->query('SELECT * FROM membres');
                    while ($data= $result->fetch()) {
                ?>

                    <h1 id="title_events"><?p echo $data['nom_membre'] ?></h1>

                        <img src="images/actu_blog/<?php echo $data['image_membre']; ?>"" class="event_image">
                        <p class="event_text"><?php echo $data['description_membre']; ?></p>

                </div>

                <?php } 
                ?>

        <footer>
            <?php include '../footer.html'; 
            ?>
        </footer>

    </body>

</html>