
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
