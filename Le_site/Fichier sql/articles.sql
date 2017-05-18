SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `code_article` int(8) NOT NULL,
  `nom_article` varchar(150) DEFAULT NULL,
  `code_type_article` varchar(8) NOT NULL,
  `date` date DEFAULT NULL,
  `auteur` varchar(150) DEFAULT NULL,
  `lien` varchar(255) DEFAULT NULL,
  `description_article` varchar(5000) DEFAULT NULL,
  `image_article` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`code_article`,`code_type_article`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
