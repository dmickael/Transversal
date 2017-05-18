SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for types_plat
-- ----------------------------
DROP TABLE IF EXISTS `types_plat`;
CREATE TABLE `types_plat` (
  `code_type_plat` varchar(8) NOT NULL,
  `nom_plat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`code_type_plat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
