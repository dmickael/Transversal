<html>
    <head>
        <title>Équipe | A l'Équilibre</title>
        <meta name="description" content="Vous êtes curieux de connaître les personnes avec qui vous êtes possiblement amenés à échanger ? Voici notre équipe."/>
        <meta charset="UTF-8" />
        <link href="style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    </head>
    <body>
        <?php include'header.html';


        Try {
            $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=utf8', 'root', '');
        }
        catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
        ?>

                <div class="equipe_detail">

                <?php
                    $result=$bdd->query('SELECT * FROM membres');
                    while ($data= $result->fetch()) {
                    $desc=$data['description_membre']
                ?>

                    <h1 id="title_events"><?php echo utf8_encode($data['nom_membre'])." ".utf8_encode($data['prenom_membre']) ?></h1>

                        <img src="<?php echo $data['image_membre']; ?>"" class="event_image">
                        <p class="event_text"><?php echo $desc; ?></p>

                </div>

                <?php } 
                ?>

        <?php include 'footer.html'; ?>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
        <script src="js/footer.js"></script>
        <script src="js/header.js"></script>
    </body>
</html>