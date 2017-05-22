<!DOCTYPE HTML>
<html>
<head>
    <title>Italien | A l'Èquilibre</title>
    <meta name="description" content="Traiteur italien pour vos ÈvÈnements d'entreprise et ÈvÈnements privÈs partout en rÈgion Nantaise. De nombreux plats et formules sur-mesure disponibles ‡ la rÈservation."/>    <meta charset="utf-8"/>
    <link href="../style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
<header>
    <?php include'../header.html'; ?>
</header>

<div class="plat_blockheader">
    <div class="plat_blocktitle">
        <h2 class="plat_blockheader">Italien</h2>
        <img src="images/italien/Vernazza-Italie.jpg">
    </div>
</div>
<div class="plat_blockpresentationglobal">
    <img src="images/italien/italie%20logo.png">
    <p>La cuisine italienne est incontournable et toujours réalisée autour d'ingrédients frais et de bonne qualité. L'Italie est un paradis pour les gourmets et nos Food Trucks partenaires regorgent de recettes toujours plus alléchantes les unes que les autres. Si vous avez envie de déguster les délicieuses saveurs méditerranéennes dans un climat de confiance, l'italien est fait pour vous.</p>
</div>
<div class="plat_blockspecialite">
    <span class="plat_specialitetitle">Spécialité:</span>
    <span class="plat_difspec">Arancini siciliens - Sandwich de Porchetta - Le Speck - La Burrata - Salade italienne - Lasagne - Artichauts farcis - Tiramisu -</span>
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