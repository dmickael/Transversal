<html>
    <head>
        <title>Équipe | A l'Équilibre</title>
        <meta name="description" content="Vous êtes curieux de connaître les personnes avec qui vous êtes possiblement amenés à échanger ? Voici notre équipe."/>
        <meta charset="UTF-8" />
        <link href="../style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link rel="icon" type="image/png" href="../images/favicon.ico" />
    </head>
    <body>
        <?php include'../header.html';
        Try {
            $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=utf8', 'root', '');
        }
        catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
        ?>
        <h1 class="titre_rouge">L'équipe</h1>
                <div id="equipe_detail">
                <?php
                    $result=$bdd->query('SELECT * FROM membres');
                    while ($data= $result->fetch()) {
                ?>
                        <div class="flip-container2" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper2">
                                <div class="front2">
                                    <h2 class="titre_rouge" id="nom-equipe"><?php echo ($data['nom_membre'])." ".($data['prenom_membre']) ?></h2>
                                    <img src="../<?php echo $data['image_membre'] ?>" alt="photo " class="equipe_image">
                                </div>
                                <div class="back2">
                                    <p class="event_text"><?php echo $data['description_membre']; ?></p>
                                </div>
                            </div>
                        </div>




                <?php } ?>
                </div>

        <?php include '../footer.html'; ?>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="../js/header.js"></script>
    </body>
</html>