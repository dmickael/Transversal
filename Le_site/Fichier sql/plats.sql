SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for plats
-- ----------------------------
DROP TABLE IF EXISTS `plats`;
CREATE TABLE `plats` (
  `code_plat` varchar(8) NOT NULL,
  `nom_plat` varchar(150) DEFAULT NULL,
  `code_type_plat` varchar(8) NOT NULL,
  `prix_plat` decimal(5,0) DEFAULT NULL,
  `description_plat` varchar(500) DEFAULT NULL,
  `image_plat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`code_plat`,`code_type_plat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
