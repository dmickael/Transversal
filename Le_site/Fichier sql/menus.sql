SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `code_menu` varchar(8) NOT NULL,
  `nom_menu` varchar(150) DEFAULT NULL,
  `code_type_menu` varchar(8) NOT NULL,
  `prix_menu` decimal(5,0) DEFAULT NULL,
  `description_menu` varchar(500) DEFAULT NULL,
  `image_menu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`code_menu`,`code_type_menu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
