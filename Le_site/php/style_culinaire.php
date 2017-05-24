
<!DOCTYPE HTML>
<html>
<head>
    <title>Styles culinaires | A l'…quilibre</title>
    <meta name="Nos specialitÈs"  content="Plus de 10 styles culinaires disponibles ‡ la privatisation parmi notre rÈseau de traiteurs Nantais."/>
    <meta charset="utf-8"/>
    <link href="../style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/favicon.ico" />
</head>
<body>
<header>
    <?php
    include("../header.html");
    ?>
</header>


<div class="sc_title">
    <h2>Aux travers de nos 16 <span>Styles culinaires</span></h2>
</div>


<div class="sc_blocpays">

    <?php

    Try {
        $bdd = new PDO('mysql:host=localhost;dbname=a_l_equilibre;charset=utf8', 'root', '');
    }
    catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    ?>
    <div class="sc_blocpays">
    <?php
    $result=$bdd->query('SELECT * FROM types_menu ORDER BY code_type_menu');
    $result2=$bdd->query('SELECT * FROM types_plat ORDER BY code_type_plat');
    while ($data= $result->fetch()) {
        ?>
        <div class="sc_pays">
            <a href="cullinaire_detail.php?id='<?php echo $data['code_type_menu']?>'">
                <div class="sc_blocktitle">
                    <span class="sc_paystitle"><?php echo $data['nom_type_menu']; ?></span>
                </div>
                <img class="sc_imgpays" src="../<?php echo $data['image_type_menu']; ?>"" class="specialite_culinaire_image">
            </a>
        </div>

    <?php } ?>
    <hr>
        <?php
     while ($data= $result2->fetch()) {
        ?>
        <div class="sc_pays">
            <a href="cullinaire_detail.php?id='<?php echo $data['code_type_plat']?>'">
                <div class="sc_blocktitle">
                    <span class="sc_paystitle"><?php echo $data['nom_type_plat']; ?></span>
                </div>
                <img class="sc_imgpays" src="../<?php echo $data['image_type_plat']; ?>"" class="specialite_culinaire_image">
            </a>
        </div>

    <?php }
    ?>
    </>

    <?php
    include ("../footer.html"); ?>
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../js/header.js"></script>
</body>
</html>












