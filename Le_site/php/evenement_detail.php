<html>
<head>
    <title>Emplacements fixes et ÈvÈnements pour foodtruck | A l'…quilibre</title>
    <meta name="description" content="Foodtrucks, rejoignez notre rÈseau et bÈnÈficiez de nos services d'emplacements fixes et ÈvÈnementiels. Avec nous, boostez votre chiffre d'amitiÈ."/>
    <meta charset="utf-8"/>
    <link href="../style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/favicon.ico" />
</head>
<body>
    <?php include('../header.html');
    ?>
<?php
session_start();
Try {
    $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=utf8', 'root', '');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<div class="event_detail">
    <?php
    $test=$_GET['id'];
    $result=$bdd->query('SELECT * FROM evenements WHERE `code_evenement`= '.$test.' ');
    while ($evenement=$result->fetch()){
        ?>
        <h1 class="titre_rouge title_event"><?php echo $evenement['nom_evenement'] ?></h1>
        <img src="../<?php echo $evenement['banniere_evenement']; ?>" class="image_event">
        <p class="text_event"><?php echo $evenement['description_evenement']; ?></p>
    <?php  } ?>
</div>
<div class="event_contact_bouton"><p><a href="contact.php">Nous contacter</a></p></div>
<?php include ('../footer.html');
?>
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../js/header.js"></script>
<script src="../js/evenements.js"></script>
</body>
</html>