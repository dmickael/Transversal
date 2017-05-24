
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
