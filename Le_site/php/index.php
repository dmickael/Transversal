<?php
/**
 * Created by PhpStorm.
 * User: maelb
 * Date: 17/05/2017
 * Time: 09:39
 */;
Try {
    $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=utf8', 'root', '');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <title>A l'équilibre</title>
    <meta name="description" content="L'alternative au restaurant, A l'équilibre est la pour vous !"/>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
    <link href="../style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/favicon.ico" />
</head>
<body>
<?php include('../header.html'); ?>
    <section>
        <div id="index_carousselle" class="slider">
            <div><img src="../images/image_caroussel/cuisinedumonde.jpg" alt="cuisine du monde" title="cuisinemonde"></div>
            <div><img src="../images/image_caroussel/legume.jpg" title="legumefeu"  alt=""></div>
            <div><img src="../images/image_caroussel/fruit_legume.jpg" title="fruitlegume" alt="fruit et legume"></div>
            <div><img src="../images/image_caroussel/cuisine_du_monde.jpg" title="cuisinemonde" alt="cuisine du monde"></div>
        </div>
        <h1 class="titre_blanc titre_caroussel">A l'équilibre</h1>
        <article id="index_decouverte_monde">
            <h2 class="titre_rouge" id="ancre_decouverte_monde">A la découverte du monde</h2>
            <div class="index_decouverte_monde_images">
                <img src="../images/nourriture/salade-nicoise-pizza-casa.jpg" alt="">
                <p>Pour satisfaire votre gourmandise et respecter au mieux les saisons, le menu change chaque semaine. Ainsi, chez A l’Equilibre, vous êtes assurés de manger uniquement des produits frais !</p>
            </div>
            <div class="index_decouverte_monde_images">
                <img src="../images/nourriture/wok.jpeg" alt="">
                <p> A l’Equilibre, c’est votre foodtruck  100% frais, 100% nantais, proposant des cuisines du mondes. A bord d’un camion équipé d’une cuisine professionnelle, nous élaborons des recettes originales en utilisant des produits frais, locaux et de saison.</p>
            </div>
            <a class="btn-3 texte_blanc fond_rouge" href="style_culinaire.php">Découvrir!</a>
        </article>
        <div id="index_ils_adorent" class="fond_rouge">
            <h2 class="titre_blanc ">Nos partenaires</h2>
            <ul>
                <li><img src="../images/logo_entreprise/Logo_Nantes.png" alt="logo "></li>
                <li><img src="../images/logo_entreprise/Logo_Semitan.png" alt="logo "></li>
                <li><img src="../images/logo_entreprise/Logo_Ynov.png" alt="logo "></li>
                <li><img src="../images/logo_entreprise/Logo_audencia.png" alt="logo "></li>
                <li><img src="../images/logo_entreprise/Logo_Steria.png" alt="logo "></li>
            </ul>
        </div>
        <div id="index_nous_trouver">
            <h2 class="titre_rouge">Ou nous trouver?!</h2>
            <div id="index_carte_localisation">
                <div id="map"></div>
                <?php $datetime = date("w");
                $result=$bdd->query('SELECT * FROM lieux WHERE `jour_lieu`='.$datetime.' ');
                if (isset($result)){
                while ($lieu=$result->fetch()){?>
                <div><h3 class="titre_rouge"><?php echo $lieu['nom_lieu']?></h3><p id="lieuparagraphe"><?php echo $lieu['description_lieu']?></p><?php }}
                else{
                }
                $result=$bdd->query('SELECT nom_type_menu FROM types_menu ORDER BY RAND( ) LIMIT 4')?>
                <h3 class="titre_rouge">Aujourd'hui nous vous proposons : </h3>
                    <div id="repas"><?php while ($repas=$result->fetch()){ ?>
                    <p><?php echo $repas['nom_type_menu'] ?></p>
                        <?php } ?></div>
                </div>
            </div>
            <a class="texte_blanc fond_rouge" href="lieux.php">Plus....</a>
        </div>
        <article id="index_equipe" class="fond_rouge">
            <h2 class="titre_blanc">Notre équipe</h2>
            <div id="index_collegue">
                <?php $result=$bdd->query('Select * FROM membres');
                while ($equipe=$result->fetch()){
                    ?> <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img src="../<?php echo $equipe['image_membre'] ?>" alt="photo ">
                            </div>
                            <div class="back">
                                <p class="texte_blanc"><?php echo $equipe['prenom_membre']." ".$equipe['nom_membre'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <a class="texte_rouge" href="equipe.php">Plus d'infos....</a>
        </article>
    </section>
    <a href="#index_decouverte_monde"><svg id="svgretour_haut" title="retour vers le haut" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><g><polygon points="49.918,5 20.898,28.971 20.898,46.415 49.918,22.446 79.102,46.415 79.102,28.971  "/><polygon points="20.898,57.179 20.898,74.616 34.429,63.533 34.429,95 65.406,95 65.406,63.533 79.102,74.616 79.102,57.179    49.918,33.208  "/></g></svg></a>
    <?php include('../footer.html') ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../slick/slick.min.js"></script>
    <script src="../js/headermin.js"></script>
    <script src="../js/accueilmin.js"></script>
</body>
</html>
