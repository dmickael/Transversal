
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
