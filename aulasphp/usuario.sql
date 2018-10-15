# Host: localhost  (Version 5.7.21)
# Date: 2018-07-11 10:28:58
# Generator: MySQL-Front 5.3  (Build 5.26)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "usuario"
#

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Marcos','marcosn.tads@gmail.com','12345');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
