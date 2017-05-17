SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for utilisateurs
-- ----------------------------
DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_inscription` datetime NOT NULL,
  `date_de_naissance` date NOT NULL,
  `telephone` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
