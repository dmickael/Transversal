<html>
<head>
    <title>Événement détailé | A l'Équilibre</title>
    <meta name="description" content="Foodtruck, vous souhaitez savoir ce que l'on peut faire pour vous pour cet événement ? Alors nous allons vous apporter toutes les réponses à vos questions."/> <meta charset="utf-8"/>
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
    <?php include('header.html');
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
        <h1 class="titre_rouge" id="title_event"><?php echo $evenement['nom_evenement'] ?></h1>
        <img src="<?php echo $evenement['banniere_evenement']; ?>" class="image_event">
        <p class="text_event"><?php echo $evenement['description_evenement']; ?></p>
    <?php  } ?>
</div>
<div class="event_contact_bouton"><p><a href="contact.php">Nous contacter</a></p></div>
<?php include ('footer.html');
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="js/footer.js"></script>
<script src="js/header.js"></script>
<script src="js/evenements.js"></script>
</body>
</html>