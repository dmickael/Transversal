
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
