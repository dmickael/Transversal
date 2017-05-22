
<!DOCTYPE HTML>
<html>
<head>
    <title>Styles culinaires | A l'Èquilibre</title>
    <meta name="description" content="Plus de 10 styles culinaires disponibles ‡ la privatisation parmi notre rÈseau de traiteurs Nantais."/>
    <meta charset="utf-8"/>
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
<header>
    <?php
    include("header.html");
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
    while ($data= $result->fetch()) {
        ?>
        <div class="sc_pays">
            <a href="cullinaire_detail.php?id='<?php echo $data['code_type_menu']?>'">
                <div class="sc_blocktitle">
                    <span class="sc_paystitle"><?php echo $data['nom_type_menu']; ?></span>
                </div>
                <img class="sc_imgpays" src="<?php echo $data['image_type_menu']; ?>"" class="specialite_culinaire_image">
            </a>
        </div>

    <?php }
    ?>
    </div>






    <!--

    <div class="sc_pays">
        <a href="style_culinaire/italien.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">italien</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/italien.jpg">
        </a>
    </div>



    <div class="sc_pays">
        <a href="style_culinaire/pate.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">pates</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/pates.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/pizza.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">pizza</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/pizza.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/wrap.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">wrap</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/wrap.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/japonais.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">japonais</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/japonais.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/wok.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">wok</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/wok.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/grec.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">grec</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/grec.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/mexicain.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">mexicain</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/mexicain.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/indien.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">indien</span></div>
            <img class="sc_imgpays" src="images/styles_culinaires/indien.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/argentin.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">argentin</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/argentin.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/libanais.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">libanais</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/libanais.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/burger.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">burger</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/burger.jpg">
        </a>
    </div>
</div>
<hr>

<div class="sc_blocpays">

    <div class="sc_pays">
        <a href="style_culinaire/cocktail.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">cocktails</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/cocktail.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/glace.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">glaces</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/glace.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/gateau.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">gateaux</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/gateau.jpg">
        </a>
    </div>
    <div class="sc_pays">
        <a href="style_culinaire/crepe.php">
            <div class="sc_blocktitle">
                <span class="sc_paystitle">crepes</span>
            </div>
            <img class="sc_imgpays" src="images/styles_culinaires/crepe.jpg">
        </a>
    </div>
</div>

-->
    <?php
    include ("footer.html");
    ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdV7_4GPVnAfUo9AgcX8XNkzXxnVUw5zM"></script>
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="js/footer.js"></script>
<script src="js/header.js"></script>
</body>
</html>












