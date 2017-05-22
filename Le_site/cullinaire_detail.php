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
    $nom=$bdd->query('SELECT * FROM types_menu WHERE `code_type_menu`='.$type_menu.' '); ?>
        <?php while ($data2=$nom->fetch()){?>
            <h1 class="titre_rouge"><?php echo $data2['nom_type_menu']; ?></h1>
            <img src="<?php echo $data2['fond_type_menu'] ?>" class="fondmenu">
        <div class="plat_blockpresentationglobal"><img src="<?php  echo $data2['logo_type_menu']?>"/><p><?php echo $data2['description_type_menu']?></p></div>
        <div class="plat_blockspecialite"><h2 class="titre_rouge">Spécialités :</h2><p class="plat_difspec"><?php echo $data2['specialite_type_menu']?></p></div>
        <?php };
        while ($data= $result->fetch()) { ?>
        <div class="plat_blockrecette">
            <img src="images/images_style_culinaire/<?php  echo $data['nom_type_menu']?>/<?php echo $data['image_menu']; ?>"  class="specialite_culinaire_image">
            <span class="title_plat"><?php echo $data['nom_menu']; ?></span>
            <p class="plat_presentation"><?php echo $data['description_menu']; ?></p>
        </div>

    <?php }
    ?>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>
