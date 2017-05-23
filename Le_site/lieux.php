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


<h1 class="titre_rouge">Nos lieux de localisation :</h1>


<div class="bloc_lieux">

    <?php
    $result=$bdd->query('SELECT * FROM evenements');
    while ($data=$result->fetch()){}

        ?>

        <div class="block_jours_lieux">
            <div class="texte_lieux">
                <h3 class="jour_title"> Lundi</h3>
                <p class="nom_lieux"> <?php echo $data['nom_lieux']; ?> </p>
                <p class="horaire_text"> 11h 30 / 14h 00   et   18h 30 / 21h 30</p>
                <p class="description_lieux"><?php echo $data['description_lieux']; ?></p>
            </div>
            <div id="map3"></div>
        </div>
        <div class="block_jours_lieux">
            <div class="texte_lieux">
                <h3 class="jour_title"> Mardi</h3>
                <p class="nom_lieux"><?php echo $data['nom_lieux']; ?> </p>
                <p class="horaire_text"> 11h 30 / 14h 00   et   18h 30 / 21h 30</p>
                <p class="description_lieux"><?php echo $data['description_lieux']; ?></p>
            </div>
            <div id="map4"></div>
        </div>
        <div class="block_jours_lieux">
            <div class="texte_lieux">
                <h3 class="jour_title"> Mercredi</h3>
                <p class="nom_lieux"><?php echo $data['nom_lieux']; ?></p>
                <p class="horaire_text"> 11h 30 / 14h 00   et   18h 30 / 21h 30</p>
                <p class="description_lieux"><?php echo $data['description_lieux']; ?></p>
            </div>
            <div id="map5"></div>
        </div>
        <div class="block_jours_lieux">
            <div class="texte_lieux">
                <h3 class="jour_title"> Jeudi</h3>
                <p class="nom_lieux"><?php echo $data['nom_lieux']; ?></p>
                <p class="horaire_text"> 11h 30 / 14h 00   et   18h 30 / 21h 30</p>
                <p class="description_lieux"><?php echo $data['description_lieux']; ?></p>
            </div>
            <div id="map6"></div>
        </div>
        <div class="block_jours_lieux">
            <div class="texte_lieux">
                <h3 class="jour_title"> vendredi</h3>
                <p class="nom_lieux"><?php echo $data['nom_lieux']; ?></p>
                <p class="horaire_text"> 11h 30 / 14h 00   et   18h 30 / 21h 30</p>
                <p class="description_lieux"><?php echo $data['description_lieux']; ?></p>
            </div>
            <div id="map7"></div>
        </div>
        <div class="block_jours_lieux">
            <div class="texte_lieux">
                <h3 class="jour_title"> Samedi</h3>
                <p class="nom_lieux"><?php echo $data['nom_lieux']; ?></p>
                <p class="horaire_text"> 11h 30 / 14h 00   et   18h 30 / 21h 30</p>
                <p class="description_lieux"><?php echo $data['description_lieux']; ?></p>
            </div>
            <div id="map8"></div>
        </div>
        <div class="block_jours_lieux">
            <div class="texte_lieux">
                <h3 class="jour_title"> Dimanche</h3>
                <p class="horaire_text"> Disponibilité pour vos événements</p>
                <p><a href="contact.php"> Nous contacter</a> </p>
            </div>
            <div id="map9"></div>
        </div>

</div>



<?php include('footer.html') ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="js/footer.js"></script>
<script src="js/header.js"></script>
<script src="js/localisation.js"></script>
<script src="js/evenements.js"></script>
</body>

</html>