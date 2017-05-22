<!DOCTYPE HTML>
<html>
<head>
    <title>Pizza | A l'Èquilibre</title>
    <meta name="description" content="Traiteur pizza pour vos ÈvÈnements d'entreprise et ÈvÈnements privÈs partout en rÈgion Nantaise. De nombreux plats et formules sur-mesure disponibles ‡ la rÈservation."/>    <meta charset="utf-8"/>
    <link href="../style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
<header>
    <?php include'../header.html'; ?>

</header>



<div class="plat_blockheader">
    <div class="plat_blocktitle">
        <h2 class="plat_blockheader">Argentin</h2>
        <img src="images/argentin/">
    </div>
</div>
<div class="plat_blockpresentationglobal">
    <img src="images/argentin/">
    <p></p>
</div>
<div class="plat_blockspecialite">
    <span class="plat_specialitetitle">Spécialité:</span>
    <span class="plat_difspec"> </span>
</div>

<?php

session_start();

Try {
    $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=latin1', 'root', '');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<?php
$result=$bdd->query('SELECT * FROM specialite_culinaire');
while ($data= $result->fetch()) {
    $_SESSION['id'] = $data[code_blog];
    ?>



    <div class="plat_blockdifferents">
        <div class="plat_blockrecette">
            <img src="images/italien/<?php echo $data['image_menu']; ?>"" class="specialite_culinaire_image">
            <span class="title_plat"><?php echo $data['nom_menu']; ?></span>
            <p class="plat_presentation"><?php echo $data['description_menu']; ?></p>
        </div>
    </div>

<?php }
?>

<footer>
    <?php include '../footer.html'; ?>
</footer>

</body>
</html>