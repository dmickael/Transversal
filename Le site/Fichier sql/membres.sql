SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for membres
-- ----------------------------
DROP TABLE IF EXISTS `membres`;
CREATE TABLE `membres` (
  `code_membre` varchar(8) NOT NULL,
  `nom_membre` varchar(100) DEFAULT NULL,
  `prenom_membre` varchar(50) DEFAULT NULL,
  `description_membre` varchar(255) DEFAULT NULL,
  `image_membre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`code_membre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
