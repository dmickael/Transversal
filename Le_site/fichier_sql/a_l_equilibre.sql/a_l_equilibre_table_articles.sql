
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
