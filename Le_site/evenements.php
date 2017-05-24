<!DOCTYPE>

<html>
    <head>
        <title>Evenements | A l'Equilibre</title>
        <meta name="Organisation d'ÈvÈnements" content="Foodtruck, rejoignez notre rÈseau et bÈnÈficiez de nos services ÈvÈnementiels. Avec nous, boostez votre chiffre díamitiÈ."/>
        <meta charset="utf-8"/>
        <link href="stylemin.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/favicon.ico" />
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
                                <h3 class="event_title titre_rouge"><?php echo ($data['nom_evenement']); ?></h3>
                                <p class="event_text"><?php echo substr($data['description_evenement'],0,200); ?>[...]</p>
                            <div class="event_bouton"><p><a href="evenement_detail.php?id='<?php echo $data['code_evenement']?>'">Découvrir</a></p></div>

                        </div>
                <?php } ?>
            </div>
        <?php include('footer.html') ?>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js/headermin.js"></script>
    </body>

</html>