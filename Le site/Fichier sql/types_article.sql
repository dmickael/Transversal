SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for types_article
-- ----------------------------
DROP TABLE IF EXISTS `types_article`;
CREATE TABLE `types_article` (
  `code_type_article` varchar(8) NOT NULL,
  `nom_type_article` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`code_type_article`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
