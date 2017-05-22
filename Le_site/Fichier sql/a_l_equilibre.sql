-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Mai 2017 à 09:11
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `a_l_equilibre`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `code_article` int(8) NOT NULL,
  `nom_article` varchar(150) DEFAULT NULL,
  `code_type_article` varchar(8) NOT NULL,
  `date` date DEFAULT NULL,
  `auteur` varchar(150) DEFAULT NULL,
  `lien` varchar(255) DEFAULT NULL,
  `description_article` varchar(5000) DEFAULT NULL,
  `image_article` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `code_evenement` varchar(8) NOT NULL,
  `nom_evenement` varchar(100) DEFAULT NULL,
  `description_evenement` varchar(1000) DEFAULT NULL,
  `image_evenement` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `evenements`
--

INSERT INTO `evenements` (`code_evenement`, `nom_evenement`, `description_evenement`, `image_evenement`) VALUES
('EVENT001', 'Un food truck pour votre mariage, est-ce possible ?', 'La street food règne en maitre sur nos déjeuners, et depuis quelques temps, on retrouve également les désormais célèbres food trucks sur les mariages. Au cocktail, au dîner, ou pour le brunch du lendemain, de nombreux mariés ont choisi de confier les estomacs affamés de leurs invités à ces camions gourmands.\r\n\r\nDes burgers, aux bagels, en passant par les crêpes, etc, louer un food truck pour votre mariage peut avoir de nombreux avantages. En premier lieu le coût, puisque nous proposons des formules abordables. Moins conventionnel et plus décontracté qu’un menu traditionnel, le food truck est convivial et original. N’oubliez pas de prévoir tout de même des chaises et des tables pour que vos invités puissent s’asseoir. Assurez vous que notre pourra prendre en charge tous vos invités, sans imposer trop de temps d’attente.', 'images/evenements/mariage.jpg'),
('EVENT002', 'Vous pensez à un food truck pour l\'organisation d\'un baptême ?', 'Un événement spécial à organiser ? Un bon repas à prévoir ? Mais pas envie de privatiser un restaurant pour autant ? Nous sommes ici pour vous.\r\n\r\nDepuis quelques temps, la street food ne se contente plus de simple repas sur les emplacements habituels mais se lance dans l’offre événementielle. La privatisation des food trucks devient de plus en plus simple et permet d’animer vos repas.\r\n\r\nPlace aux camions au bout de votre jardin le jour d\'une de vos fêtes religieuses qui remplacent petit à petit les traiteurs. Ne vous souciez plus de ce que nous pouvez faire à manger pour vos invités lors de vos événements, apportez votre touche d’originalité et pensez à la location de notre food truck. Un service de qualité, des invités enjoués pour un événement mémorable! Et oui, louer votre propre restaurant chez vous, c’est possible et ce quelque soit la raison !', 'images/evenements/bapteme.jpg'),
('EVENT003', 'Pour un anniversaire original, louez un food truck !', 'Dans quelques mois c’est votre anniversaire et vous souhaitez marquer le coup en organisant une soirée digne de son nom. Bien entendu, pour un anniversaire qui en vaut la chandelle, il vous faut une playlist, un beau cadre mais également un bon repas. \r\n\r\n                                                                                                                C’est généralement au moment où il faut choisir une idée de repas d’anniversaire originale que l’on bloque. Une des solution pour un repas d’anniversaire, est de préparer son propre diner ou alors faire appel à un traiteur (mais cette idée est loin d’être économique..). Inutile de se creuser la tête, Nous avons trouvé la clé du succès pour une soirée réussi! Le tout est de sortir des chantiers battus, c’est pourquoi on vous propose de louer votre propre food truck.', 'images/styles_culinaires/anniversaire.jpg'),
('EVENT004', 'La street est aussi adéquate dans le milieu professionnel !', 'En camion restaurant ou en « food truck », cela fait déjà quelques années que la street food version gastro est de retour ! Non aux sandwichs sur le pouce et oui aux food trucks gastronomiques. \r\n                                                                                                                                     Salade de chef, ingrédients de saisons et plats faits maison : le food truck à tout d’un restaurant et séduit les plus gourmands et les plus intransigeants. Foodtruck classique façon burger à l’américaine, ou camion restaurant gastronomique : la location de food truck pour un evenement professionnel est ultra tendance.\r\n                                                                                                                                     Nous vous proposons de par notre concept, de faire impression décontracter tout en restant professionnel. Vous hésitez encore ? Contactez-nous !', 'images/evenements/seminaire.jpg'),
('EVENT005', 'Eh oui !Les apéritifs ont aussi leur place dans le monde de la street food.', 'L\'été arrive et vous souhaitez commencer à profiter des petit plus de la saison. Seulement un problème s\'impose, les apéritifs vous appréciez les déguster néanmoins pour ce qui est de les préparer c\'est une autre affaire... \r\n                                                                                                                \r\n                                                                                                                Pensez dans ce cas à la street food, car oui, on est aussi de la partie ! Ne tergiversez plus, pensez à nous et arrêtez de perdre votre temps. A l\'Équilibre est là pour vous : apéro\' dinatoires, cocktails, ... On vous propose un max de choix pour que cette période soit ce qu\'elle doit être, c\'est à dire reposante.', 'images/evenements/cocktail.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `code_membre` varchar(8) NOT NULL,
  `nom_membre` varchar(100) DEFAULT NULL,
  `prenom_membre` varchar(50) DEFAULT NULL,
  `description_membre` varchar(500) DEFAULT NULL,
  `image_membre` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`code_membre`, `nom_membre`, `prenom_membre`, `description_membre`, `image_membre`) VALUES
('MEMBRE01', 'Bournigal', 'Maël', 'Monsieur Maêl Bournigal est ce qui représente l\'image de la marque. Ancien chef cuisinier récement reconvertie, il a pris la direction de la société A l\'Équilibre pour imposer son empreinte qui est un gage de qualité. Il gère avec ces quatres autres compères ce pourrait devenir le plus grand concept de food truck nantais dans les années à venir.', 'images/membres/mael.png'),
('MEMBRE02', 'Dadomo', 'Marie', 'Madame Marie Dadomo constitue la seule femme de notre restaurant sur roues. Elle défend la place des gente féminine dans le monde de la cuisine de par ses qualités de cuisinière qui sont largement louées par ses collègues mais également ses clients. Elle est la présente depuis la naissance de la marque.', 'images/membres/marie.png'),
('MEMBRE03', 'Delanoë', 'Mickaël', 'Monsieur Mickaël Delanoë est la personne la plus expérimentée de l\'équipe A l\'Équilibre. Polyvalent et connaisseur, il permet aux autres membres de l\'équipe d\'avoir un taulier technique sur qui compter. Il n\'est pas avare d\'effort et est relativement bien apprécié également auprès de la clientèle. Si vous voulez donc quelque chose de travaillé autant techniquement qu\'esthétiquement, par exemple pour les mariages, c\'est alors à lui qu\'il faut s\'adresser.', 'images/membres/mickael.jpg'),
('MEMBRE04', 'Grand', 'Maxime', 'Monsieur Maxime GRAND n\'est ni plus ni moins que le dirigeant de la société A l\'Équilibre. Il n\'en reste tout de même que le co-fondateur. De par son expérience, car doyen du groupe, il apprécie partager sa vision des choses avec les cuisiniers, conscient que ces derniers sont les véritables mains et l\'image de la marque. Avec ses compétences plutôt managériales vis-à-vis de la cuisine mais non moins gourmand pour autant, il espère voir, un jour, la marque rayonner à Nantes et sa périphérie.', 'images/membres/maxime.png');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `code_menu` varchar(8) NOT NULL,
  `nom_menu` varchar(150) DEFAULT NULL,
  `code_type_menu` varchar(8) NOT NULL,
  `prix_menu` decimal(5,0) DEFAULT NULL,
  `description_menu` varchar(500) DEFAULT NULL,
  `image_menu` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `menus`
--

INSERT INTO `menus` (`code_menu`, `nom_menu`, `code_type_menu`, `prix_menu`, `description_menu`, `image_menu`) VALUES
('menu0001', 'ARANCINI SICILIENS', 'TYPMEN01', '5', 'Une alléchante ? Ce sulfureux mélange de riz farcies à la sicilienne va éveiller vos papilles gustatives. Ingrédients : boules de riz frit fourrées au ragout de légumes.', 'ARANCINI SICILIENS.jpg'),
('menu0002', 'SANDWICH DE PORCHETTA', 'TYPMEN01', '5', 'Pour un sandwich de qualité et équilibrez, alors il est fait pour vous. Petite faim rapide ? Vous êtes servi. Ingrédients : veau, tomates séchées, courge, mâche, feuilles de sauge.', 'SANDWICH DE PORCHETTA.jpg'),
('menu0003', 'LE SPECK', 'TYPMEN01', '5', 'Jambon cru et véritable tradition italienne. Pas le temps de cuisiner ? Pas de panique un sandwich maison vous est concocté ! Ingrédients : Pain, speck, salade, tomate, beurre.', 'LE SPECK.jpg'),
('menu0004', 'LA BURRATA', 'TYPMEN01', '5', 'Envie d’une saveur rappelant l’été ? Un arrière-goût fondant dans votre bouche et un soupçon de douceur voilà ce que vous propose ce plat. Ingrédients : huile d’olive, basilic, burrata.', 'LA BURRATA.jpg'),
('menu0005', 'SALADE ITALIENNE', 'TYPMEN01', '5', 'Salade composée de laitue, tomates, et de mozzarella, un classique italien ! Une envie de verdure ? Alors cette entrée est parfaitement mijotée pour vous !', 'SALADE ITALIENNE.jpg'),
('menu0006', 'LASAGNE', 'TYPMEN01', '5', 'Un plat incontournable, c\'est le pur chef d\'oeuvre de la cuisine italienne revisité en France par nos partenaires food trucks ! Une envie de manger l\'authentique lasagne ? C\'est ici !', 'LASAGNE.jpg'),
('menu0007', 'ARTICHAUTS FARCIS', 'TYPMEN01', '5', 'Un légume revisité à l\'italienne de manière à ce qu\'il soit appétissant pour tous ! Une envie de fraîcheur ? Une envie de soleil ? Ce plat saura vous combler !', 'ARTICHAUTS FARCIS.jpg'),
('menu0008', 'TIRAMISU', 'TYPMEN01', '5', 'Un dessert regorgeant d\'une multitude de cacao, un mélange subtil qui vous émerveillera vers les traditions italiennes ! Pour tous les rêveurs et les envieux de saveurs nouvelles !', 'TIRAMISU.jpg'),
('menu0009', 'PÂTES AUX CREVETTES', 'TYPMEN02', '6', 'Amateurs de fruits de mer ? C\'est en ce plat que vous vous retrouverez ! Un goût agréable rappelant l\'air marin ? Ce plat à base de pâtes, de crevette légèrement sauvée est là !', 'PÂTES AUX CREVETTES.jpg'),
('menu0010', 'GRATIN DE PÂTES', 'TYPMEN02', '5', 'Marre des pâtes natures ? Une envie de changement ? Ce gratin de pâtes au fromage est un délice innovateur et sympa à manger en toute simplicité !', 'GRATIN DE PÂTES.jpg'),
('menu0011', 'PÂTES AU PERSIL', 'TYPMEN02', '6', 'Pour tous ceux qui ont envie de fraîcheur et d\'éviter les calories ? Un plat bien sympathique s\'offre à vous ! Des pâtes au persil, une nourriture saine et riche !', 'PÂTES AU PERSIL.jpg'),
('menu0012', 'PÂTES À LA SAUCE TOMATE', 'TYPMEN02', '6', 'Un classique fait maison ! Pour tous les amateurs de la sauce tomate ce plat est fait pour vous tout simplement ! Il est recommandé à 100% et vous garantira un repas des plus copieux !', 'PÂTES À LA SAUCE TOMATE.jpg'),
('menu0013', 'PÂTES CARBONARA', 'TYPMEN02', '6', 'Un plat incontournable et riche en saveurs ! Plat de base et apprécié de tous ! La cuisine de nos food trucks vous permet de re découvrir ce plat emblématique en Europe ! Bon appétit !', 'PÂTES CARBONARA.jpg'),
('menu0014', 'SPAGHETTIS AUX CREVETTES', 'TYPMEN02', '6', 'Plat sympathique issu de la mer ! Des crevettes fraîches et de qualité sont mises à votre disposition ! Une envie d\'un doux mélange de saveurs opposées ? Alors ce plat est parfait !', 'SPAGHETTIS AUX CREVETTES.jpg'),
('menu0015', 'SPAGHETTI À LA PUTTANESCA', 'TYPMEN02', '6', 'Les spaghetti à la puttanesca un assortiment de pâtes traditionnelles à base de tomates cuisinées avec de l\'ail, du piment, des câpres et des olives. Un plat très sympa !', 'SPAGHETTI À LA PUTTANESCA.jpg'),
('menu0016', 'SPAGHETTI AUX CRABES', 'TYPMEN02', '6', 'Une autre variété de pâtes mélangés aux produits issus de la mer ! Un plat fort agréable et assez riche pour vous donner l\'apport énergétique souhaité pour l\'évènement assisté !', 'SPAGHETTI AUX CRABES.jpg'),
('menu0017', 'AL TAGLIO', 'TYPMEN03', '8', 'Un plat réalisé à base de pâte à pizza pour un goût des plus appréciables. Fait à base de jambon cru, tomates séchées, parmesan, sauce tomate, roquette il saura vous satisfaire.', 'AL TAGLIO.jpg'),
('menu0018', 'ITALIENNE', 'TYPMEN03', '9', 'Pizza incontournable de la gastronomie italienne ! De quoi éveiller vos papilles. Confectionnée à base de tomates cerises, mozzarella, sauce tomate, basilic, herbes.', 'ITALIENNE.jpg'),
('menu0019', 'SALAMI', 'TYPMEN03', '7', 'Une pizza gourmande pour tous les amateurs de salami. Venez découvrir ce magnifique plat réalisé à base de salami épicé, mozzarella, emmental, sauce tomate rien que pour vous.', 'SALAMI.jpg'),
('menu0020', 'GORGONZOLA', 'TYPMEN03', '8', 'Une pizza simple, appréciée par beaucoup. Il saura être à la hauteur de vos attentes. Fait à base de chorizo, mozzarella, champignons, crème, oignon rouge : bon appétit !', 'GORGONZOLA.jpg'),
('menu0021', 'PIZZA À LA TRUFFE BLANCHE ET AUX ARTICHAUTS', 'TYPMEN03', '7', 'Un plat recommandé et à tester au plus vite ! Ce plat contient de la truffe blanche, des artichauts, romarin, bacon, poireaux, fromage de chèvre salé et mozzarella.', 'PIZZA À LA TRUFFE BLANCHE ET AUX ARTICHAUTS.jpg'),
('menu0022', 'LA CARBONARA', 'TYPMEN03', '7', 'Un plat inspiré de la célèbre recette italienne des pâtes carbonates ! Cette fois ci c\'est dans une pâte à pizza que l\'incontournable sauce voit le jour ! Bonne dégustation !', 'LA CARBONARA.jpg'),
('menu0023', 'LA CHAMPIGNON', 'TYPMEN03', '8', 'Une petite pizza sympathique pour les amateurs de champignon ! Pour une douce et agréable dégustation nous vous recommandons ce plat aux multiples facettes !', 'LA CHAMPIGNON.jpg'),
('menu0024', 'LA CHORIZO', 'TYPMEN03', '7', 'Un classique épicé réuni dans une simple pâte à pizza ! Un pur délice et une des pizzas les plus appréciées ! Venez découvrir la recette inédite de ce plat succulent !', 'LA CHORIZO.jpg'),
('menu0025', 'AMERICAIN', 'TYPMEN04', '5', 'Un plat sympathique pour les amateurs de wrap. Une dégustation que vous ne regretterez pas cuisinée à base de poulet pané, cheddar, bacon, oignons caramélisés, salade, tomate, sauce BBQ.', 'AMERICAIN.jpg'),
('menu0026', 'SANS GLUTEN', 'TYPMEN04', '5', 'Plat fait maison réalisé à base de poulet, poivrons, emmental, salade, tomate, oignons, sauce salsa pour un repas des plus alléchant. Venez goûter ce plat aux saveurs succulentes !', 'SANS GLUTEN.jpg'),
('menu0027', 'VÉGÉTARIEN', 'TYPMEN04', '5', 'Une solution alternative pour les végétariens. Une jeune pousse d’épinard, chèvre, miel, mozzarela, basilic pour un repas riche et appétissant.', 'VÉGÉTARIEN.jpg'),
('menu0028', 'BOEUF CRUDITÉ', 'TYPMEN04', '5', 'Envie d\'une gourmandise revigorante lors d\'un évènement ou à la pause déjeuner ? Un plat contenant du bœuf, salade, courgettes, chou rouge, sauce tex-mex pour les plus affamés.', 'BOEUF CRUDITÉ.jpg'),
('menu0029', 'ROULEAU DE POULET AVEC DES LÉGUMES', 'TYPMEN04', '6', 'Pour déguster une variété de wraps, venez découvrir une pluralité de recettes mises à votre disposition pour manger quand vous le souhaitez !', 'ROULEAU DE POULET AVEC DES LÉGUMES.jpg'),
('menu0030', 'WRAP DE SAUMON', 'TYPMEN04', '4', 'Un wrap original en salade ! Alliant légumes et l\'incontournable saumon, ce plat vous assure un repas plus que satisfaisant ! Venez découvrir ce plat !', 'WRAP DE SAUMON.jpg'),
('menu0031', 'WRAP DE PORC', 'TYPMEN04', '5', 'Un plat simple à réaliser, et on prend plaisir à le déguster ! En famille, entre amis, lors d\'un évènement venez découvrir ce plat aux multiples saveurs !', 'WRAP DE PORC.jpg'),
('menu0032', 'WRAP DE BACON', 'TYPMEN04', '6', 'Un plat incontournable ! Une réinvention d\'une recette agréable à déguster en toute simplicité et où vous le souhaitez ! Bon appétit à tous !', 'WRAP DE BACON.jpg'),
('menu0033', 'RAMEN AU PORC', 'TYPMEN05', '6', 'Une envie de cuisine typique japonaise ? Les ramens sont faits pour vous. Un plat à base de porc, nouilles, gingembre, ail, oignons pour une dégustation des plus appréciables !', 'RAMEN AU PORC.jpg'),
('menu0034', 'UDON AUX CREVETTES', 'TYPMEN05', '5', 'Une envie de nouveauté de fraîcheur asiatique ? Alors cette soupe est est parfaite pour vous et est à base de crevettes, nouilles Udon sautées, courgettes, poivron, coriandre.', 'UDON AUX CREVETTES.jpg'),
('menu0035', 'ANGUILLES GRILLÉES', 'TYPMEN05', '5', 'Une envie de goûter les saveurs de la mer ? Ce plat japonais à base d’anguilles grillées, de sauce brune, riz, et de dashi vous offre ce tendre goût marin !', 'ANGUILLES GRILLÉES.jpg'),
('menu0036', 'SASHIMI DE CALAMAR', 'TYPMEN05', '5', 'Ce plat ancestral vous assure une revisite de la cuisine du calamar. Un plat en plus abordable fait à base de calamar sauté, algue Nori, gingembre, sauce soja.', 'SASHIMI DE CALAMAR.jpg'),
('menu0037', 'MAKI', 'TYPMEN05', '5', 'C\'est dans une bande de saumon, de concombre, d\'avocat avec un soupçon de grains de sésames et du persil haché que vous trouverez ce plat japonais délicieux !', 'MAKI.jpg'),
('menu0038', 'SUSHIS', 'TYPMEN05', '5', 'L\'incontournable de la cuisine japonaise ! Les sushis sont emblématiques et sont très présents en Europe ! Venez découvrir une recette de sushis uniques rappelant le Japon !', 'SUSHIS.jpg'),
('menu0039', 'ONIGIRI', 'TYPMEN05', '6', 'Une envie d\'un encas pour votre pause déjeuner ? Cet galette de riz entouré d\'une bande de poisson est parfait pour vous envoyer au plaisir gustatif du Japon ! Une saveur unique !', 'ONIGIRI.jpg'),
('menu0040', 'YAKITORI', 'TYPMEN05', '7', 'Une recette japonaise incontournable ! Ce plat vous assure gaieté et sérénité ! Plat convivial au Japon et plat de partage en Occident ! Bonne dégustation !', 'YAKITORI.jpg'),
('menu0041', 'WOK VÉGÉTARIEN', 'TYPMEN06', '8', 'Amateurs végétariens ou adeptes de la tendance healthy? Un plat réalisé pour vous seuls ! Nous vous proposons cette recette pour une satisfaction assurée pour tous !', 'WOK VÉGÉTARIEN.jpg'),
('menu0042', 'SAUTÉ DE POULET', 'TYPMEN06', '7', 'Un plat des plus succulents, une saveur vous envoyant vers les plus belles saveurs que l\'on puisse goûter ! Un plat recommandé pour une sympathique dégustation !', 'SAUTÉ DE POULET.jpg'),
('menu0043', 'WOK DE POISSON', 'TYPMEN06', '6', 'Un plat rappellent les saveurs de la mer tout en étant cuisiné ? Une mélange fructueux et inventif ! Ce plat vous garantit une dégustation des plus agréables ! Bon appétit !', 'WOK DE POISSON.jpg'),
('menu0044', 'WOK AU PORC', 'TYPMEN06', '7', 'Les amateurs de viande seront servis par ce plat ! Une nouvelle saveur, un goût atypique alors ce plat vous est conseillé ! Prenez plaisir à déguster ce plat ralliant légumes et porc !', 'WOK AU PORC.jpg'),
('menu0045', 'WOK POULET-BROCCOLI', 'TYPMEN06', '7', 'Un plat cuisiné à partir d\'un won ! Pour une saveur pleines de charme vous pouvez déguster ce plat aussi bon qu\'original ! Bon appétit et à bientôt !', 'WOK POULET-BROCCOLI.jpg'),
('menu0046', 'WOK DE BOEUF', 'TYPMEN06', '4', 'Une recette fortement attrayante ! Une envie de goûter aux saveurs d\'un boeuf cuisiné ? Alors ce plat est 100% recommandé pour vous ! Nous vous souhaitons une bonne dégustation !', 'WOK DE BOEUF.jpg'),
('menu0047', 'WOK DE FAJITAS', 'TYPMEN06', '5', 'Une revisite de la cuisine mexicaine au won ? Ce plat particulièrement original saura vous convaincre par son goût prononcé rappelant le Mexique ! Un mélange parfait !', 'WOK DE FAJITAS.jpg'),
('menu0048', 'WOK DE NOUILLES ASIATIQUES', 'TYPMEN06', '6', 'Un délice représenté en ce plat unique ! Alliant wok et traditions asiatiques ce plat est un incontournable à ne surtout pas louper ! Bon appétit !', 'WOK DE NOUILLES ASIATIQUES.jpg'),
('menu0049', 'CURRY', 'TYPMEN07', '6', 'Un plat épicé pour tous les amateurs de la culture thaï. Ce plat à base de curry vert de poulet, courgette, poivron, pousse de bambou, gingembre, lait de coco est pour vous !', 'CURRY.jpg'),
('menu0050', 'LARB KHAI', 'TYPMEN07', '6', 'Un plat aux doubles qualités : il est sain et nutritif. C\'est une salade de poulet haché aux herbes, menthe, coriandre, oignons frais, citron vert, piment oiseau accompagné de riz.', 'LARB KHAI.jpg'),
('menu0051', 'SATAY DE POULET', 'TYPMEN07', '7', 'Une saveur asiatique originale. Un plat à base de brochettes de poulet marinés au paprika, curry, ail, lait de coco, gingembre, sauce soja sucrée, citronnelle 100% appétissant.', 'SATAY DE POULET.jpg'),
('menu0052', 'SOUPE AUX NOUILLES AU BOEUF', 'TYPMEN07', '6', 'Ce n\'est pas qu\'une simple soupe de nouille mais un plat unique thaï. A base de nouilles de riz, bœuf, champignons noirs, feuilles de choux vert, cive. Il saura vous donner envie.', 'SOUPE AUX NOUILLES AU BOEUF.jpg'),
('menu0053', 'WANTON MEE', 'TYPMEN07', '4', 'Plat asiatique qui vous voyager et qui vous montre la richesse de traditions éloignées de l\'Occident ! Venez découvrir un goût surprenant en ce plat cuisiné comme à la maison !', 'WANTON MEE.jpg'),
('menu0054', 'SOUPE DE NOIX DE COCO THAÏ', 'TYPMEN07', '5', 'Une recette allégée pour ceux qui n\'ont pas une grosse faim. Venez découvrir une splendeur de la culture thaïlandaise réunie en ce plat rafraîchissant ! Cette soupe est parfaite !', 'SOUPE DE NOIX DE COCO THAÏ.jpg'),
('menu0055', 'SALADE DE CONCOMBRE', 'TYPMEN07', '7', 'Un plat léger et pour tous les amateurs de la tendance healthy ! La nourriture thaï est variée et est présente pour tous les goûts ! Ce plat est fait pour être dégusté !', 'SALADE DE CONCOMBRE.jpg'),
('menu0056', 'TOM YAM KUNG', 'TYPMEN07', '6', 'une soupe originale et peu connue en Occident, cependant nous vous offrons la possibilité de découvrir cette saveur et bien d\'autres encore ! Venez vite découvrir ce plat thaïlandais !', 'TOM YAM KUNG.jpg'),
('menu0057', 'QUESADILLAS', 'TYPMEN08', '5', 'Plat équilibré et varié ! Une association d’aliments relevés aux épices que ce plat en régale plus d’un ! Ingrédients : Galette de maïs, poulet, poivrons, cheddar, pico de gallo', 'QUESADILLAS.jpg'),
('menu0058', 'ENCHILADAS', 'TYPMEN08', '6', 'Plat consistant et familial, Un arrière-goût qui nous laisse s’emporter vers le plaisir gustatif de la cuisine mexicaine ! Ingrédients : Bœuf, tomates, salade, cheddar, salsa roja.', 'ENCHILADAS.jpg'),
('menu0059', 'BURRITO', 'TYPMEN08', '6', 'Plat typique et simple à réaliser. Plat composé d’une galette de maïs associée par un délicieux assemblage varié ! Ingrédients : Galette de maïs, poulet frit, choux rouge, jalapeno.', 'BURRITO.jpg'),
('menu0060', 'CHILLI BOWL', 'TYPMEN08', '6', 'Un mélange intéressant d’herbes et d’épices sur un fond bœuf. De quoi éveiller en vous le goût du Mexique ! Ingrédients : Bœuf, tomates, jalapeno, cheddar, sauce chili.', 'CHILLI BOWL.jpg'),
('menu0061', 'TACOS', 'TYPMEN08', '5', 'Un classique et une des saveurs les plus appréciées de la cuisine Mexicaine ! Venez découvrir ce plat typique chez nos partenaires food trucks ! Buen provecho !', 'TACOS.jpg'),
('menu0062', 'FAJITAS', 'TYPMEN08', '6', 'Les fajitas mexicaines sont exceptionnelles ! Elles rappellent le goût épicé mexicain et sont un classique incontournable à ne pas louper ! Bonne dégustation !', 'FAJITAS.jpg'),
('menu0063', 'SALADE DE QUINOA', 'TYPMEN08', '7', 'Un plat typique mexicain rafraîchissant et qu\'on ne retrouve nulle part ailleurs qu\'au Mexique ! Cependant nos food trucks proposent une cuisine réussie de cette recette mexicaine !', 'SALADE DE QUINOA.jpg'),
('menu0064', 'CHILI CON CARNE', 'TYPMEN08', '7', 'Un plat des plus appréciables, un classique, le fameux plat épicé à l\'image du Mexique ! Si vous êtes amateurs d\'épices et d\'une cuisine colorée et riche alors ce plat est parfait !', 'CHILI CON CARNE.jpg'),
('menu0065', 'AGNEAU BIRYANI', 'TYPMEN09', '7', 'Un plat spécifique à la culture indienne. Fait à base d\'agneau désossé mijotés avec riz, épices variées, noix de cajou, amandes pilées. Ce plat garantit une dégustation enrichissante !', 'AGNEAU BIRYANI.jpg'),
('menu0066', 'POULET BIRYANI', 'TYPMEN09', '7', 'Un plat des plus croustillants et des plus appréciés. Il saura vous faire voyager et est fait à base de poulet désossé mijotés avec riz, épices variées, noix de cajou, amandes pilées.', 'POULET BIRYANI.jpg'),
('menu0067', 'POULET CURRY', 'TYPMEN09', '6', 'Plat représentant les charmes de l’Inde, une sauce aux mille délices à base de poulet aux épices, de lait de coco et de curry en poudre. Le fruit d’un mélange à succès !', 'POULET CURRY.jpg'),
('menu0068', 'POULET TANDOORI', 'TYPMEN09', '5', 'Un poulet classique et très sympa. Pour un goût des plus appréciables optez pour ce plat fait à base de morceaux de poulet désossé marinés et cuit au tandoor.', 'POULET TANDOORI.jpg'),
('menu0069', 'LE RASMALAI', 'TYPMEN09', '4', 'Une recette en mieux ? Un plat innovant et riche ? Le rasmalai, typique saveur indienne saura vous convaincre par son goût unique et sucré ! Une envie de changement ? Optez pour ce dessert indien et créatif !', 'LE RASMALAI.jpg'),
('menu0070', 'PAKORA', 'TYPMEN09', '6', 'C\'est en ces beignets de légumes incarnant les saveurs de la culture indienne que vous pouvez trouver votre plaisir gustatif ! Un véritable délice de qualité ! Très bonne dégustation !', 'PAKORA.jpg'),
('menu0071', 'ALOO GOBI', 'TYPMEN09', '7', 'Un plat envoûtant vers le magnifique pays des indes ! Un plat atypique et que l\'on ne trouve nulle part ailleurs que chez nos partenaires food trucks ! Venez déguster ce plat !', 'ALOO GOBI.jpg'),
('menu0072', 'LE GALOUTI KEBAB', 'TYPMEN09', '7', 'Une viande réinventée à la manière de la culture indienne ! Une envie de nouveaux goûts ? Une envie de manger un plat inédit proposé ici ? Alors le galouti kebab est le plat parfait !', 'LE GALOUTI KEBAB.jpg'),
('menu0073', 'EL ASADO', 'TYPMEN10', '6', 'Plat retraçant un rite typique pour les relations sociales. Plat consistant et sophistiqué pour des festivités entre amis. Ingrédients : viande de bœuf cuite au barbecue à l’argentine.', 'EL ASADO.jpg'),
('menu0074', 'EMPANADAS', 'TYPMEN10', '5', 'Un plat qui en envoûte plus d’un. Ce plat croustillant et tendre à la fois saura combler votre faim ! Ingrédients : Chausson de bœuf, tomates, oignons et poivrons verts.', 'EMPANADAS.jpg'),
('menu0075', 'PROVOLETA', 'TYPMEN10', '7', 'Plat à base de fromage grillé typique. Il saura en conquérir plus d’un et se révèle comme étant pionnier de la culture de l\'argentine. Ingrédients : Provolone, pain, piment, origan.', 'PROVOLETA.jpg'),
('menu0076', 'CHORIPAN', 'TYPMEN10', '5', 'Une gourmandise classique et rapide dans les stades de foot, dans la rue. Sandwich amélioré, véritable source d’énergie. Ingrédients : Pain, chorizo grillé, poivron, chimichurri.', 'CHORIPAN.jpg'),
('menu0077', 'CHIPAS', 'TYPMEN10', '4', 'Spécialité issue de la culture argentine ! Une sorte de pain typique, optez pour cet accompagnement dans les divers plats qui vous sont proposés !', 'CHIPAS.jpg'),
('menu0078', 'BEIGNET DE BANANE', 'TYPMEN10', '6', 'Plat incontournable d\'Argentine ! Une envie de banane et d\'originalité ? Ce plat vous assure un voyage vers le beau pays que représente l\'Argentine !', 'BEIGNET DE BANANE.jpg'),
('menu0079', 'ALFAJORES', 'TYPMEN10', '7', 'Un dessert sympathique qu\'on ne retrouve qu\'en Argentine ! Un gâteau après un bon repas ? Une petite collation qui remplace les desserts habituels ! Lancez vous !', 'ALFAJORES.jpg'),
('menu0080', 'CHIMICHURRI', 'TYPMEN10', '7', 'Une sauce typique d\'Argentine qui peut se marier avec de la viande ou autres plats que vous souhaitez ! Venez découvrir une sauce unique en son genre qui saura vous satisfaire !', 'CHIMICHURRI.jpg'),
('menu0081', 'TABBOULÉ', 'TYPMEN11', '6', 'Un plat simple et léger aux saveurs libanaises. Une envie de se régaler ? Alors ce plat à base de boulghour, tomates, oignon vert, persil, menthe, citron est servi pour vous.', 'TABBOULE.jpg'),
('menu0082', 'FALAFEL', 'TYPMEN11', '7', 'Un plat des plus captivants représentatifs des saveurs libanaises. Fait à base de boules de pois chiche, ail, persil, coriandre, sésame, une dégustation riche s\'offre à vous.', 'FALAFEL.jpg'),
('menu0083', 'POULET SHAWARMA', 'TYPMEN11', '5', 'Un plat des plus originaux. Pour une touche d\'exotisme et qui fait voyager ce plat fait à base de poulet, ail, coriandre, cumin, citron, sauce au yaourt est concocté pour vous.', 'POULET SHAWARMA.jpg'),
('menu0084', 'FEUILLES DE VIGNE', 'TYPMEN11', '6', 'Un plat naturel aux propriétés saines pour la santé. Un plat à base d\'agneau, riz, feuille de vigne, citron, d\'ail mijoté rien que pour vous. Bonne dégustation !', 'FEUILLES DE VIGNE.jpg'),
('menu0085', 'AGNEAU ROTI AU PIMENT ROUGE', 'TYPMEN11', '5', 'Pour une viande réinventée par les libanais, ce plat vous assure un encas appétissant ! Pour manger en toute simplicité un plat libanais de qualité optez pour cet agneau rôti !', 'AGNEAU ROTI AU PIMENT ROUGE.jpg'),
('menu0086', 'SALADE DE LENTILLES VERTES', 'TYPMEN11', '4', 'Un apport en fer nécessaire et bénéfique pour la santé ! Pour une salade légère au reflet du Liban optez pour cet assortiment de lentilles vertes ! Satisfaction assurée !', 'SALADE DE LENTILLES VERTES.jpg'),
('menu0087', 'HOUMOUS MAISON', 'TYPMEN11', '7', 'Un mélange de pain et de poids chiches cette recette est typique du Liban ! Plat sophistiqué et fabriqué pour tous les amateurs de saveurs libanaises ! Il saura vous combler !', 'HOUMOUS MAISON.jpg'),
('menu0088', 'MAAMOUL', 'TYPMEN11', '8', 'Un dessert atypique ça on peut le dire ! Un biscuit traditionnel libanais et assurément une bonne idée pour un dessert innovant ! Venez déguster ce tendre biscuit !', 'MAAMOUL.jpg'),
('menu0089', 'BACON BURGER', 'TYPMEN12', '6', 'Un burger simple, classique et apprécié de tous qui montre le plaisir gustatif de la culture américaine. Ingrédients : Pain boulanger, viande bouchère, cheddar, bacon, sauce ketchup.', 'BACON BURGER.jpg'),
('menu0090', 'VEGGIE BURGER', 'TYPMEN12', '5', 'VEGGIE BURGER', 'VEGGIE BURGER.jpg'),
('menu0091', 'PULLED PORK BURGER', 'TYPMEN12', '6', 'Un burger atypique faisant parti des diversités proposées à chacun ! Venez découvrir ce savoureux burger ! Ingrédients : Pain boulanger, slow cooked pork, choux rouge, sauce BBQ.', 'PULLED PORK BURGER.jpg'),
('menu0092', 'BURGER SAVOYARD', 'TYPMEN12', '5', 'Au cœur d’un mélange de saveurs, ce plat saura vous donner envie ! Ingrédients : Pain artisanal, viande bouchère, bacon, reblochon, confit d’oignon.', 'BURGER SAVOYARD.jpg'),
('menu0093', 'CHEESEBURGER', 'TYPMEN12', '6', 'Une envie d\'un délicieux fromage ? Le cheeseburger met en avant le goût prononcé d\'un fromage fondant ! Pour un repas copieux, nous vous recommandons ce plat !', 'CHEESEBURGER.jpg'),
('menu0094', 'LE POULET', 'TYPMEN12', '5', 'Un hamburger au poulet ! Pour les amateurs de volaille ce plat est assurément cuisiné pour vous ! Fait à base de poulet, salade, pain à burger il saura combler votre faim !', 'LE POULET.jpg'),
('menu0095', 'LE FISH BURGER', 'TYPMEN12', '6', 'Un burger à base de produits issus de la mer ! Pour du changement et un menu moins riche, ce plat à base de saumon, salade, tomate, pain à burger est fait pour vous !', 'LE FISH BURGER.jpg'),
('menu0096', 'UN VEGAN BURGER', 'TYPMEN12', '4', 'Une autre plat pour les végétariens ! Le vegan burger est particulier, même si il ne contient pas de viande il vous garantit un goût des plus appréciables et assure un repas complet !', 'UN VEGAN BURGER.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

CREATE TABLE `plats` (
  `code_plat` varchar(8) NOT NULL,
  `nom_plat` varchar(150) DEFAULT NULL,
  `code_type_plat` varchar(8) NOT NULL,
  `prix_plat` decimal(5,0) DEFAULT NULL,
  `description_plat` varchar(500) DEFAULT NULL,
  `image_plat` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `plats`
--

INSERT INTO `plats` (`code_plat`, `nom_plat`, `code_type_plat`, `prix_plat`, `description_plat`, `image_plat`) VALUES
('PLAT0001', 'STRAWBERRY MARTINI ', 'TYPLAT01', '6', 'Une envie de fraise ? Un goût doux et agréable pour tous les amateurs de fruits rouges ! Venez découvrir ce cocktail qui rappelle l’esprit des fêtes en été !', 'STRAWBERRY MARTINI .jpg'),
('PLAT0002', 'MOJITO', 'TYPLAT01', '6', 'A base de menthe fraîche et de limonade dans un fond d’alcool. C\'est un incontournable lors de soirées évènementielles ! Une recette peine de charme qui saura en séduire plus d’un !', 'MOJITO.jpg'),
('PLAT0003', 'SANGRIA', 'TYPLAT01', '4', 'un savoureux mélange à l’espagnol ! Une envie de fruits rouge ? Une envie de fraîcheur ? Une envie de voyager vers les pays conviviaux ? Alors ce cocktail est parfait pour vous !', 'SANGRIA.jpg'),
('PLAT0004', 'ORANGE', 'TYPLAT01', '6', 'Cocktail sympathique à l’orange ! Un goût sucré tout en gardant une saveur naturelle. Pour tous les amateurs d’orange ce cocktail est parfait pour vous !', 'ORANGE.jpg'),
('PLAT0005', 'MARGARITA', 'TYPLAT01', '6', 'Une envie de fraîcheur ? Une envie de goût ? Une envie de cocktail revigorant ? La margarita est faite pour vous !', 'MARGARITA.jpg'),
('PLAT0006', 'BLOODY MARY', 'TYPLAT01', '6', 'Un cocktail fruité unique ! Pour tous ceux qui aiment déguster un panel de cocktails, celui-ci est tout particulièrement attrayant !', 'BLOODY MARY.jpg'),
('PLAT0007', 'LE SOUR', 'TYPLAT01', '6', 'Boisson fortement agréable ! Pour tous les amateurs de cocktails et pour les fans de cette boisson !', 'LE SOUR.jpg'),
('PLAT0008', 'LE DAÏQUIRI', 'TYPLAT01', '6', 'Un cocktail atypique que l\'on ne trouve pas partout ! Optez pour un petit moment de détente assuré avec cette consommation !', 'LE DAÏQUIRI.jpg'),
('PLAT0009', 'LA BANANE', 'TYPLAT02', '4', 'La banane une des spécialités clé de nos food trucks ! Venez découvrir tous les mariages possibles avec cette saveur ! Une envie de dessert innovant ? Choisissez cette glace là !', 'LA BANANE.jpg'),
('PLAT0010', 'LA FRAMBOISE', 'TYPLAT02', '4', 'Pour une glace spéciale. Ce dessert saura vous rappeler le goût naturel de la framboise ! Optez pour la douceur et le léger parfum qu’incarne ce dessert. Soyez 100% satisfaits !', 'LA FRAMBOISE.jpg'),
('PLAT0011', 'LA CARAMEL', 'TYPLAT02', '4', 'Un dessert sympathique de saison au doux caramel. Une dégustation agréable en tout simplicité. Le parfait mélange d’œufs sucrés au caramel vous emmènera loin de vos soucis !', 'LA CARAMEL.jpg'),
('PLAT0012', 'LA CHOCOLAT', 'TYPLAT02', '4', 'Un classique ! Le chocolat : célèbre saveur cotée chez les français. Venez découvrir nos variétés de saveurs au chocolat blanc, noir, nous vous garantissons une bonne dégustation !', 'LA CHOCOLAT.jpg'),
('PLAT0013', 'LA PISTACHE', 'TYPLAT02', '4', 'Une saveur pleine de fraîcheur et goût ! Venez être gargarisé par cette glace à la pistache des plus délectables !', 'LA PISTACHE.jpg'),
('PLAT0014', 'LA CITRON', 'TYPLAT02', '4', 'Un goût unique, une saveur transcendante, une douceur concentrée en un seul dessert ! Une glace 100% recommandée pour tous les affamés et les amateurs de citrons !', 'LA CITRON.jpg'),
('PLAT0015', 'LA VANILLE', 'TYPLAT02', '4', 'Un grand classique que tout le monde apprécie ; la glace à la vanille ne vous décevra certainement pas ! Pour une dégustation unique et faite maison, optez pour ce magnifique dessert !', 'LA VANILLE.jpg'),
('PLAT0016', 'GLACE AU YAOURT', 'TYPLAT02', '4', 'Un dessert appétissant et revigorant ! Rien de tel qu\'une bonne glace au yaourt maison pour se rafraîchir ou pour s\'accorder un moment de plaisir lors d\'un évènement !', 'GLACE AU YAOURT.jpg'),
('PLAT0017', 'Gâteau au yaourt', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteau au yaourt.jpg'),
('PLAT0018', 'Gâteau moelleux pommes/poires', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteau moelleux pommes/poires.jpg'),
('PLAT0019', 'Gâteau aux pommes-poires', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteau aux pommes-poires.jpg'),
('PLAT0020', 'Gâteau au chocolat magique', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteau au chocolat magique.jpg'),
('PLAT0021', 'Roulé à la fraise', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Roulé à la fraise.jpg'),
('PLAT0022', 'Cuisiner Desserts Gâteau\nFraisier', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Cuisiner Desserts Gâteau.jpg'),
('PLAT0023', 'Gâteau ananas', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteau ananas.jpg'),
('PLAT0024', 'Gâteaux à la noix de coco', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteaux à la noix de coco.jpg'),
('PLAT0025', 'BANANA SPLIT', 'TYPLAT04', '5', 'Petite crêpe pour raviver les papilles ! Venez déguster ce produit dans un style décontracté ! Ingrédients : Crêpe roulée, fraise, banane, coulis de fruits rouges et chantilly.', 'BANANA SPLIT.jpg'),
('PLAT0026', 'CLASSIQUE', 'TYPLAT04', '5', 'Une envie de crêpe aux douces saveurs ? La classique est parfaite pour vous ! Bon appétit ! Ingrédients : Galette de sarrasin, œuf, jambon, emmental, paprika, basilic.', 'CLASSIQUE.jpg'),
('PLAT0027', 'POMME CARAMEL', 'TYPLAT04', '5', 'Un dessert sucré et doux. Pour les amateurs de bons goûts cette crêpe est parfaite ! Ingrédients : Crêpe sucrée, pommes caramélisées, coulis de caramel au beurre salé, glace vanille.', 'POMME CARAMEL.jpg'),
('PLAT0028', 'FORESTIÈRE', 'TYPLAT04', '5', 'Une crêpe sur la nature. Une petite dégustation sympathique vous attend ! Ingrédients : Crêpe salée, poulet, champignons, œuf, crème, oignons caramélisés, salade.', 'FORESTIÈRE.jpg'),
('PLAT0029', 'LA FRAISE', 'TYPLAT04', '5', 'Une envie d\'un dessert harmonieux et plein de saveurs ? Un chef d\'oeuvre concentré en un seul dessert ! Bonne dégustation de cette crêpe à la fraise succulente !', 'LA FRAISE.jpg'),
('PLAT0030', 'CRÊPE AUX CHAMPIGNONS', 'TYPLAT04', '5', 'Une recette de crêpe inhabituelle ? La crêpe aux champignons est très bonne et très riche pour un repas des plus appréciables ! Optez pour cette saveur qui sort le l\'ordinaire !', 'CRÊPE AUX CHAMPIGNONS.jpg'),
('PLAT0031', 'CRÊTE DE CARNE', 'TYPLAT04', '5', 'Une recette originale des pays hispaniques ? La célèbre crêpe ayant pour garniture l\'emblématique carne ! Pour une dégustation sympathique, veuillez choisir ce plat !', 'CRÊTE DE CARNE.jpg'),
('PLAT0032', 'LE BAGHRIR', 'TYPLAT04', '5', 'Spécialité maghrébine à base de semoule, levure et farine, une crêpe légère pour les amateurs de nouveautés ! Venez déguster ce plat inédit avec un soupçon de beurre !', 'LE BAGHRIR.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `types_article`
--

CREATE TABLE `types_article` (
  `code_type_article` varchar(8) NOT NULL,
  `nom_type_article` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `types_article`
--

INSERT INTO `types_article` (`code_type_article`, `nom_type_article`) VALUES
('TYPART01', 'Communiqué'),
('TYPART02', 'Blog'),
('TYPART03', 'Presse');

-- --------------------------------------------------------

--
-- Structure de la table `types_menu`
--

CREATE TABLE `types_menu` (
  `code_type_menu` varchar(8) NOT NULL,
  `nom_type_menu` varchar(50) DEFAULT NULL,
  `image_type_menu` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `types_menu`
--

INSERT INTO `types_menu` (`code_type_menu`, `nom_type_menu`, `image_type_menu`) VALUES
('TYPMEN02', 'Pates', 'images/styles_culinaires/pates.jpg'),
('TYPMEN03', 'Pizzas', 'images/styles_culinaires/pizza.jpg'),
('TYPMEN04', 'Wraps', 'images/styles_culinaires/wraps.jpg'),
('TYPMEN05', 'Japonais', 'images/styles_culinaires/japonais.jpg'),
('TYPMEN06', 'Wok', 'images/styles_culinaires/wok.jpg'),
('TYPMEN08', 'Mexicain', 'images/styles_culinaires/mexicain.jpg'),
('TYPMEN09', 'Indien', 'images/styles_culinaires/indien.jpg'),
('TYPMEN10', 'Argentin', 'images/styles_culinaires/argentin.jpg'),
('TYPMEN11', 'Libanais', 'images/styles_culinaires/libanais.jpg'),
('TYPMEN12', 'Burgers', 'images/styles_culinaires/burgers.jpg'),
('TYPMEN01', 'Italien', 'images/styles_culinaires/italien.jpg'),
('TYPMEN07', 'Grec', 'images/styles_culinaires/grec.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `types_plat`
--

CREATE TABLE `types_plat` (
  `code_type_plat` varchar(8) NOT NULL,
  `nom_plat` varchar(50) DEFAULT NULL,
  `image_type_plat` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `types_plat`
--

INSERT INTO `types_plat` (`code_type_plat`, `nom_plat`, `image_type_plat`) VALUES
('TYPLAT03', 'Gâteaux', 'images/styles_culinaires/gâteau.jpg'),
('TYPLAT02', 'Glaces', 'images/styles_culinaires/glace.jpg'),
('TYPLAT01', 'Coktails', 'images/styles_culinaires/cocktails.jpg'),
('TYPLAT04', 'Crêpes', 'images/styles_culinaires/crepes.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `code_utilisateur` int(8) NOT NULL,
  `nom_utilisateur` varchar(100) NOT NULL,
  `prenom_utilisateur` varchar(50) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_inscription` datetime NOT NULL,
  `date_de_naissance` date NOT NULL,
  `telephone` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`code_article`,`code_type_article`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`code_evenement`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`code_membre`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`code_menu`,`code_type_menu`);

--
-- Index pour la table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`code_plat`,`code_type_plat`);

--
-- Index pour la table `types_article`
--
ALTER TABLE `types_article`
  ADD PRIMARY KEY (`code_type_article`);

--
-- Index pour la table `types_menu`
--
ALTER TABLE `types_menu`
  ADD PRIMARY KEY (`code_type_menu`);

--
-- Index pour la table `types_plat`
--
ALTER TABLE `types_plat`
  ADD PRIMARY KEY (`code_type_plat`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`code_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `code_utilisateur` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
