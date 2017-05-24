<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Contactez-nous | A l'équilibre</title>
    <meta name="description" content="Vous souhaitez privatiser un foodtruck, un foodbike ou un stand mobile ? Contactez-nous et faites-nous part de nos envies, même les plus folles !"/>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/favicon.ico" />
</head>
<body>
    <?php include '../header.html'; ?>
    <section>
        <form class="contact_form" action="gmail.php" method="post" enctype="multipart/form-data">
            <?php
            if (isset($_POST['nom'])) {
                setcookie($_POST['nom']);
            }
            if (isset($_POST['prenom'])) {
                setcookie($_POST['prenom']);
            }
            if (isset($_POST['mail'])) {
                setcookie($_POST['mail']);
            }
            if (isset($_POST['societe'])) {
                setcookie($_POST['societe']);
            }
            if (isset($_POST['phone'])) {
                setcookie($_POST['phone']);
            }
            if (isset($_POST['demande'])) {
                setcookie($_POST['demande']);
            }
            if (isset($_POST['zonetext'])) {
                setcookie($_POST['zonetext']);
            }
            ?>
            <div class="contact">
                <h2 class="red">Nous contacter</h2>
                <div class="bloc_contact">
                    <input class="champ" type="text" name="nom" id="nom" placeholder="Votre nom" required="required"/>
                    <br/>
                    <br/>
                    <input class="champ" type="text" name="prenom" id="prenom" placeholder="Votre prenom" required="required"/>
                    <br/>
                    <br/>
                    <input class="champ" type="email" name="mail" id="mail" placeholder="Votre e-mail" required="required"/>
                    <br/>
                    <br/>
                    <input class="champ" type="text" name="societe" id="societe" placeholder="Votre société" required="required"/>
                    <br/>
                    <br/>
                    <input class="champ" type="tel" name="phone" id="phone" placeholder="Votre numero de telephone" required="required"/>
                    <br/>
                    <br/>
                </div>
                <div class="bloc_contact bloc_espace"></div>
                <div class="bloc_contact">
                    <select name="demande" id="demande">
                        <optgroup label="Objet de votre demande">
                            <option value="Autre" selected>Autre</option>
                            <option value="Mariages">Mariages</option>
                            <option value="Baptèmes">Baptèmes</option>
                            <option value="Séminaires">Séminaires</option>
                            <option value="Apéritifs">Apéritifs</option>
                            <option value="Anniversaires">Anniversaires</option>
                        </optgroup>
                    </select>
                    <br/>
                    <br/>
                    <input class="champ" type="text" name="zonetext" id="zonetextr" placeholder="Votre message" required="required"/>
                </div>
            </div>
            <input class="btn_envoyer" type="submit" value="Envoyer"/>
        </form>
    </section>
<?php include '../footer.html'; ?>
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../js/header.js"></script>
</body>
</html>




