/*
Navicat MySQL Data Transfer

Source Server         : local_xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : rsk

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2025-02-06 15:40:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for baterias
-- ----------------------------
DROP TABLE IF EXISTS `baterias`;
CREATE TABLE `baterias` (
  `round` int(11) DEFAULT NULL,
  `heat` int(11) DEFAULT NULL,
  `atleta` int(11) DEFAULT NULL,
  `nota_1` float DEFAULT NULL,
  `nota_2` float DEFAULT NULL,
  `somatorio` float DEFAULT NULL,
  `nota_faltando` float DEFAULT NULL,
  KEY `id_atleta` (`atleta`),
  CONSTRAINT `id_atleta` FOREIGN KEY (`atleta`) REFERENCES `atletas` (`id_atletas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
