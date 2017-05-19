<!DOCTYPE HTML>
<html>
<head>
    <title>CrËpe | A l'Èquilibre</title>
    <meta name="description" content="Traiteur crÍpes pour vos ÈvÈnements d'entreprise et ÈvÈnements privÈs partout en rÈgion Nantaise. De nombreux plats et formules sur-mesure disponibles ‡ la rÈservation."/>
    <meta charset="utf-8"/>
    <link href="../style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
<header>
    <?php include'../header.html'; ?>

</header>
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

    <div class="plat_blockheader">
        <div class="plat_blocktitle">
            <h2 class="plat_blockheader"><?php echo $data['plat_presentationpaysCrepe']; ?></h2>
        </div>
    </div>
    <div class="plat_blockpresentationglobal">
        <img src="images/italien/<?php echo $data['logo_specialite_culinaireCrepe']; ?>"" class="specialite_culinaire_logo">
        <p><?php echo $data['description_paysCrepe']; ?></p>
    </div>
    <div class="plat_blockspecialite">
        <span class="plat_specialitetitle"><?php echo $data['plat_specialitetitleCrepe']; ?></span>
        <span class="plat_difspec"><?php echo $data['plat_difspecCrepe']; ?></span>
    </div>


    <div class="plat_blockdifferents">


        <div class="plat_blockrecette">
            <img src="images/italien/<?php echo $data['image_specialite_culinaireCrepe']; ?>"" class="specialite_culinaire_image">
            <span class="title_plat"><?php echo $data['title_platCrepe']; ?></span>
            <p class="plat_presentation"><?php echo $data['plat_presentationCrepe']; ?></p>
        </div>
    </div>

<?php }
?>

<footer>
    <?php include '../footer.html'; ?>
</footer>

</body>
</html>