<?php
/**
 * Created by PhpStorm.
 * User: maelb
 * Date: 22/05/2017
 * Time: 11:33
 */?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Argentin | A l'Èquilibre</title>
    <meta name="description" content="Traiteur Argentin pour vos ÈvÈnements d'entreprise et ÈvÈnements privÈs partout en rÈgion Nantaise. De nombreux plats et formules sur-mesure disponibles ‡ la rÈservation."/>    <meta charset="utf-8"/>
    <meta charset="utf-8"/>
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
    <?php include'header.html'; ?>

<?php

session_start();

Try {
    $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=utf8', 'root', '');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
    <div class="plat_blockdifferents">
    <?php
    $type_menu=$_GET['id'];
    $result=$bdd->query('SELECT * FROM menus NATURAL JOIN types_menu WHERE `code_type_menu`= '.$type_menu.' ');
    $nom=$bdd->query('SELECT * FROM types_menu WHERE `code_type_menu`='.$type_menu.' ');
    $result2=$bdd->query('SELECT * FROM plats NATURAL JOIN types_plat WHERE `code_type_plat`= '.$type_menu.' ');
    $nom2=$bdd->query('SELECT * FROM types_plat WHERE `code_type_plat`='.$type_menu.' ');
        while ($data2=$nom->fetch()){?>
            <div class="plat_blockdifferentstitreimg">
                <h1 class="titre_blanc"><?php echo $data2['nom_type_menu']; ?></h1>
                <img src="<?php echo $data2['fond_type_menu'] ?>" class="fondmenu">
            </div>
        <div class="plat_blockpresentationglobal"><img src="<?php  echo $data2['logo_type_menu']?>"/><p><?php echo $data2['description_type_menu']?></p></div>
        <div class="plat_blockspecialite"><h2 class="titre_rouge">Spécialités :</h2><p class="plat_difspec"><?php echo $data2['specialite_type_menu']?></p></div>
        <div id="block_fullrecette">
            <?php };
            while ($data= $result->fetch()) { ?>
            <div class="plat_blockrecette">
                <img src="<?php echo $data['image_menu']; ?>"  class="specialite_culinaire_image">
                <h3 class="title_plat titre_rouge"><?php echo $data['nom_menu']; ?></h3>
                <p class="plat_presentation"><?php echo $data['description_menu']; ?></p>
            </div>
            <?php }
            while ($data=$nom2->fetch()){ ?>
            <div class="plat_blockdifferentstitreimg">
                <h1 class="titre_blanc"><?php echo $data['nom_type_plat']; ?></h1>
                <img src="<?php echo $data['fond_type_plat'] ?>" class="fondmenu">
            </div>
            <div class="plat_blockpresentationglobal"><img src="<?php  echo $data['logo_type_plat']?>"/><p><?php echo $data['description_type_plat']?></p></div>
            <div class="plat_blockspecialite"><h2 class="titre_rouge">Spécialités :</h2><p class="plat_difspec"><?php echo $data['specialite_type_plat']?></p></div>
            <div id="block_fullrecette">
                <?php };
            while ($data= $result2->fetch()) { ?>
                <div class="plat_blockrecette">
                    <img src="<?php echo $data['image_plat']; ?>"  class="specialite_culinaire_image">
                    <h3 class="title_plat titre_rouge"><?php echo $data['nom_plat']; ?></h3>
                    <p class="plat_presentation"><?php echo $data['description_plat']; ?></p>
                </div>

                <?php }

    ?>
        </div>
    </div>
    <?php include 'footer.html'; ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/footer.js"></script>
    <script src="js/header.js"></script>
</body>
</html>
