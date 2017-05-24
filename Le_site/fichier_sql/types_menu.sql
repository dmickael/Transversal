SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for types_menu
-- ----------------------------
DROP TABLE IF EXISTS `types_menu`;
CREATE TABLE `types_menu` (
  `code_type_menu` varchar(8) NOT NULL,
  `nom_type_menu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`code_type_menu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
