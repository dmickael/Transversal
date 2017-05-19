-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Mai 2017 à 14:01
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
