SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for evenements
-- ----------------------------
DROP TABLE IF EXISTS `evenements`;
CREATE TABLE `evenements` (
  `code_evenement` varchar(8) NOT NULL,
  `nom_evenement` varchar(100) DEFAULT NULL,
  `description_evenement` varchar(500) DEFAULT NULL,
  `image_evenement` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`code_evenement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
