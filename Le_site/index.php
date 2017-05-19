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
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php include('header.html'); ?>
    <section>
        <h1 class="titre_blanc titre_caroussel">A l'equilibre</h1>
        <div id="index_carousselle" class="slider">
            <div><img src="images/image_caroussel/cuisinedumonde.jpg" alt="cuisine du monde" title="cuisinemonde"></div>
            <div><img src="images/image_caroussel/legume.jpg" title="legumefeu"  alt=""></div>
            <div><img src="images/image_caroussel/fruit_legume.jpg" title="fruitlegume" alt="fruit et legume"></div>
            <div><img src="images/image_caroussel/cuisine_du_monde.jpg" title="cuisinemonde" alt="cuisine du monde"></div>
        </div>
        <article id="index_decouverte_monde">
            <h2 class="titre_rouge" id="ancre_decouverte_monde">A la découverte du monde</h2>
            <div class="index_decouverte_monde_images">
                <img src="images/nourriture/salade-nicoise-pizza-casa.jpg" alt="">
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="index_decouverte_monde_images">
                <img src="images/nourriture/wok.jpeg" alt="">
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <a class="texte_blanc fond_rouge" href="style_culinaire.php">Découvrir!</a>
        </article>
        <div id="index_ils_adorent" class="fond_rouge">
            <h2 class="titre_blanc ">Ils nous font confiance</h2>
            <ul>
                <li><img src="images/logo_entreprise/Logo_Nantes.png" alt="logo "></li>
                <li><img src="images/logo_entreprise/Logo_Semitan.png" alt="logo "></li>
                <li><img src="images/logo_entreprise/Logo_Ynov.png" alt="logo "></li>
                <li><img src="images/logo_entreprise/Logo_audencia.png" alt="logo "></li>
                <li><img src="images/logo_entreprise/Logo_Steria.png" alt="logo "></li>
            </ul>
        </div>
        <div id="index_nous_trouver">
            <h2 class="titre_rouge">Ou nous trouver?!</h2>
            <div id="index_carte_localisation">
                <div id="map"></div>
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <a class="texte_blanc fond_rouge" href="horaires.php">Plus....</a>
        </div>
        <article id="index_equipe" class="fond_rouge">
            <h2 class="titre_blanc">Notre équipe</h2>
            <div id="index_collegue">
                <?php $result=$bdd->query('Select * FROM membres');
                while ($equipe=$result->fetch()){
                    ?> <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img src="<?php echo $equipe['image_membre'] ?>" alt="photo ">
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
    <?php include('footer.html') ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/header.js"></script>
    <script src="js/accueil.js"></script>
</body>
</html>
