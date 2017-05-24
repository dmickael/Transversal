<!DOCTYPE>

<html>
<head>
    <title>Événements | A l'Équilibre</title>
    <meta name="description" content="Foodtruck, rejoignez notre réseau et bénéficiez de nos services événementiels. Avec nous, boostez votre chiffre d’amitié."/>
    <meta charset="utf-8"/>
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.ico" />
</head>
<body>
<?php include('header.html');


Try {
    $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=utf8', 'root', '');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>


<h1 class="titre_rouge">Nos lieux de localisation :</h1>


<div id="bloc_lieux">
    <div id="filter">
        <ul>
            <li><button class="cat texte_blanc fond_rouge" data-rel="all">Toute la semaine</button></li>
            <li><button class="cat texte_blanc fond_rouge" data-rel="lundi">Lundi</button></li>
            <li><button class="cat texte_blanc fond_rouge" data-rel="mardi">Mardi</button></li>
            <li><button class="cat texte_blanc fond_rouge" data-rel="mercredi">Mercredi</button></li>
            <li><button class="cat texte_blanc fond_rouge" data-rel="jeudi">Jeudi</button></li>
            <li><button class="cat texte_blanc fond_rouge" data-rel="vendredi">Vendredi</button></li>
            <li><button class="cat texte_blanc fond_rouge" data-rel="samedi">Samedi</button></li>
            <li><button class="cat texte_blanc fond_rouge" data-rel="dimanche">Dimanche</button></li>
        </ul>
    </div>
    <div id="lescarte">
    <?php
    $result=$bdd->query('SELECT * FROM lieux');
    while ($data=$result->fetch()){
        switch ($data['jour_lieu']){
            case 1: $jour = 'Lundi';break;
            case 2: $jour = 'Mardi';break;
            case 3: $jour = 'Mercredi';break;
            case 4: $jour = 'Jeudi';break;
            case 5: $jour = 'Vendredi';break;
            case 6: $jour = 'Samedi';break;
        }
        ?>
        <article class="block_jours_lieux all <?php echo $jour ?>">
            <div class="texte_lieux">
                <h3 class="jour_title"><?php echo $jour ?> </h3>
                <p class="nom_lieux"> <?php echo $data['nom_lieu']; ?> </p>
                <p class="horaire_text"> 11h 30 / 14h 00   et   18h 30 / 21h 30</p>
                <p class="description_lieux"><?php echo $data['description_lieu']; ?></p>
            </div>
            <div id="map<?php echo $data['jour_lieu']+2?>"></div>
        </article>
        <?php } ?>
        <article class="block_jours_lieux all dimanche">
            <div class="texte_lieux">
                <h3 class="jour_title">Dimanche</h3>
                <p class="nom_lieux">Disponible pour tous vos évênements sur Nantes!!</p>
                <h4 class="titre_rouge">Pour plus d'infos: </h4><a href="contact.php">Contactez-Nous!!</a>
            </div>
        </article>
    </div>

</div>
<?php include('footer.html') ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="js/header.js"></script>
<script src="js/localisation.js"></script>
</body>

</html>