/*
Navicat MySQL Data Transfer

Source Server         : local_xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : rsk

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2025-02-06 17:03:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for atletas
-- ----------------------------
DROP TABLE IF EXISTS `atletas`;
CREATE TABLE `atletas` (
  `id_atletas` int(2) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_atletas`),
  UNIQUE KEY `id_atletas_UNIQUE` (`id_atletas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of atletas
-- ----------------------------
INSERT INTO `atletas` VALUES ('1', 'Kbeca');
INSERT INTO `atletas` VALUES ('2', 'Caxa');
INSERT INTO `atletas` VALUES ('3', 'Guedera');
INSERT INTO `atletas` VALUES ('4', 'Burns');
INSERT INTO `atletas` VALUES ('5', 'Milho');
INSERT INTO `atletas` VALUES ('6', 'Nariga');
INSERT INTO `atletas` VALUES ('7', 'Vaqueiro');
INSERT INTO `atletas` VALUES ('8', 'Kombi');
INSERT INTO `atletas` VALUES ('9', 'Maca');
INSERT INTO `atletas` VALUES ('10', 'Davala');
INSERT INTO `atletas` VALUES ('11', 'Chines');
INSERT INTO `atletas` VALUES ('12', 'Guto');
INSERT INTO `atletas` VALUES ('13', 'Gigante');
INSERT INTO `atletas` VALUES ('14', 'Marcio');
INSERT INTO `atletas` VALUES ('15', 'Lingue');
INSERT INTO `atletas` VALUES ('16', 'Drup');

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

-- ----------------------------
-- Records of baterias
-- ----------------------------
INSERT INTO `baterias` VALUES ('1', '1', '16', '10', '9.75', '19.75', null);
INSERT INTO `baterias` VALUES ('1', '1', '10', '9.8', '9.75', '19.55', '10.05');
INSERT INTO `baterias` VALUES ('1', '2', '8', '8.5', '7', '15.5', '9.1');
INSERT INTO `baterias` VALUES ('1', '2', '15', '9.5', '8', '17.5', null);
INSERT INTO `baterias` VALUES ('1', '3', '4', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '3', '11', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '4', '13', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '4', '14', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '5', '2', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '5', '12', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '6', '5', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '6', '7', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '7', '6', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '7', '9', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '8', '3', null, null, null, null);
INSERT INTO `baterias` VALUES ('1', '8', '14', null, null, null, null);

-- ----------------------------
-- Table structure for juizes
-- ----------------------------
DROP TABLE IF EXISTS `juizes`;
CREATE TABLE `juizes` (
  `id_juiz` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `teste` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `data_criacao` datetime DEFAULT current_timestamp(),
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_juiz`),
  UNIQUE KEY `id_UNIQUE` (`id_juiz`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of juizes
-- ----------------------------
INSERT INTO `juizes` VALUES ('1', 'marcio', '123', null, '2019-03-03 07:24:35', '127.0.0.7');
INSERT INTO `juizes` VALUES ('2', 'teste', 'teste', null, '2019-03-15 20:02:28', '127.0.0.7');

-- ----------------------------
-- Table structure for notas
-- ----------------------------
DROP TABLE IF EXISTS `notas`;
CREATE TABLE `notas` (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `juiz` varchar(45) CHARACTER SET big5 COLLATE big5_chinese_ci DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `hora` datetime DEFAULT current_timestamp(),
  `round` int(11) DEFAULT NULL,
  `heat` int(11) DEFAULT NULL,
  `atleta` int(2) NOT NULL,
  `onda` int(11) DEFAULT NULL,
  `nota` float DEFAULT NULL,
  `chave` double GENERATED ALWAYS AS (`round` * 100 + `heat`) VIRTUAL,
  PRIMARY KEY (`id_nota`),
  UNIQUE KEY `id_nota_UNIQUE` (`id_nota`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of notas
-- ----------------------------
INSERT INTO `notas` VALUES ('77', 'marcio', '::1', '2025-02-06 15:09:16', '1', '1', '16', '1', '4', '101');
INSERT INTO `notas` VALUES ('78', 'marcio', '::1', '2025-02-06 15:09:33', '1', '1', '10', '1', '7', '101');
INSERT INTO `notas` VALUES ('79', '', '', '2025-02-06 15:16:15', '1', '1', '10', '2', '4.75', '101');
INSERT INTO `notas` VALUES ('80', 'marcio', '::1', '2025-02-06 15:17:13', '1', '1', '10', '2', '4.25', '101');
INSERT INTO `notas` VALUES ('81', 'marcio', '::1', '2025-02-06 15:54:44', '1', '1', '16', '2', '2', '101');
INSERT INTO `notas` VALUES ('82', 'marcio', '::1', '2025-02-06 15:55:30', '1', '1', '10', '3', '6', '101');
INSERT INTO `notas` VALUES ('83', 'marcio', '::1', '2025-02-06 15:56:53', '1', '1', '16', '3', '9', '101');
INSERT INTO `notas` VALUES ('84', 'marcio', '::1', '2025-02-06 15:57:32', '1', '1', '10', '4', '8', '101');
INSERT INTO `notas` VALUES ('85', 'marcio', '::1', '2025-02-06 16:02:44', '1', '1', '10', '5', '8.75', '101');
INSERT INTO `notas` VALUES ('86', 'marcio', '::1', '2025-02-06 16:09:35', '1', '1', '16', '4', '5.5', '101');
INSERT INTO `notas` VALUES ('87', 'marcio', '::1', '2025-02-06 16:10:06', '1', '1', '10', '6', '7', '101');
INSERT INTO `notas` VALUES ('88', 'marcio', '::1', '2025-02-06 16:14:50', '1', '1', '10', '7', '9.5', '101');
INSERT INTO `notas` VALUES ('89', 'marcio', '::1', '2025-02-06 16:15:13', '1', '1', '16', '5', '3', '101');
INSERT INTO `notas` VALUES ('90', 'marcio', '::1', '2025-02-06 16:16:24', '1', '1', '16', '6', '1', '101');
INSERT INTO `notas` VALUES ('91', 'marcio', '::1', '2025-02-06 16:25:32', '1', '1', '16', '7', '9.4', '101');
INSERT INTO `notas` VALUES ('92', 'marcio', '::1', '2025-02-06 16:26:34', '1', '1', '10', '8', '1', '101');
INSERT INTO `notas` VALUES ('93', 'marcio', '::1', '2025-02-06 16:31:33', '1', '1', '10', '9', '9', '101');
INSERT INTO `notas` VALUES ('94', 'marcio', '::1', '2025-02-06 16:31:56', '1', '1', '10', '10', '9.75', '101');
INSERT INTO `notas` VALUES ('95', 'marcio', '::1', '2025-02-06 16:34:27', '1', '1', '10', '11', '9.8', '101');
INSERT INTO `notas` VALUES ('96', 'marcio', '::1', '2025-02-06 16:35:06', '1', '1', '16', '8', '9.75', '101');
INSERT INTO `notas` VALUES ('97', 'marcio', '::1', '2025-02-06 16:35:35', '1', '1', '16', '9', '10', '101');
INSERT INTO `notas` VALUES ('98', 'marcio', '::1', '2025-02-06 16:36:23', '1', '2', '8', '1', '4', '102');
INSERT INTO `notas` VALUES ('99', 'marcio', '::1', '2025-02-06 16:36:47', '1', '2', '15', '1', '8', '102');
INSERT INTO `notas` VALUES ('100', 'marcio', '::1', '2025-02-06 16:37:03', '1', '2', '15', '2', '6', '102');
INSERT INTO `notas` VALUES ('101', 'marcio', '::1', '2025-02-06 16:37:36', '1', '2', '8', '2', '7', '102');
INSERT INTO `notas` VALUES ('102', 'marcio', '::1', '2025-02-06 16:37:45', '1', '2', '8', '3', '8.5', '102');
INSERT INTO `notas` VALUES ('103', 'marcio', '::1', '2025-02-06 16:38:19', '1', '2', '15', '3', '9.5', '102');
INSERT INTO `notas` VALUES ('104', 'marcio', '::1', '2025-02-06 16:48:06', '1', '2', '8', '4', '3', '102');
INSERT INTO `notas` VALUES ('105', 'marcio', '::1', '2025-02-06 16:53:14', '1', '2', '8', '5', '1', '102');
INSERT INTO `notas` VALUES ('106', 'marcio', '::1', '2025-02-06 16:54:06', '1', '2', '8', '6', '2', '102');

-- ----------------------------
-- Table structure for sorteio_round1
-- ----------------------------
DROP TABLE IF EXISTS `sorteio_round1`;
CREATE TABLE `sorteio_round1` (
  `idsorteio_round1` int(11) NOT NULL,
  `atleta` int(2) NOT NULL,
  `resultado` int(2) NOT NULL,
  UNIQUE KEY `atleta_UNIQUE` (`atleta`),
  CONSTRAINT `atleta` FOREIGN KEY (`atleta`) REFERENCES `atletas` (`id_atletas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of sorteio_round1
-- ----------------------------
INSERT INTO `sorteio_round1` VALUES ('8', '1', '8');
INSERT INTO `sorteio_round1` VALUES ('9', '2', '9');
INSERT INTO `sorteio_round1` VALUES ('15', '3', '15');
INSERT INTO `sorteio_round1` VALUES ('5', '4', '5');
INSERT INTO `sorteio_round1` VALUES ('11', '5', '11');
INSERT INTO `sorteio_round1` VALUES ('13', '6', '13');
INSERT INTO `sorteio_round1` VALUES ('12', '7', '12');
INSERT INTO `sorteio_round1` VALUES ('3', '8', '3');
INSERT INTO `sorteio_round1` VALUES ('14', '9', '14');
INSERT INTO `sorteio_round1` VALUES ('2', '10', '2');
INSERT INTO `sorteio_round1` VALUES ('6', '11', '6');
INSERT INTO `sorteio_round1` VALUES ('10', '12', '10');
INSERT INTO `sorteio_round1` VALUES ('7', '13', '7');
INSERT INTO `sorteio_round1` VALUES ('16', '14', '16');
INSERT INTO `sorteio_round1` VALUES ('4', '15', '4');
INSERT INTO `sorteio_round1` VALUES ('1', '16', '1');

-- ----------------------------
-- Table structure for teste
-- ----------------------------
DROP TABLE IF EXISTS `teste`;
CREATE TABLE `teste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `juiz` varchar(30) DEFAULT NULL,
  `nota` varchar(5) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of teste
-- ----------------------------
INSERT INTO `teste` VALUES ('1', 'marcio', '10', '127.0.0.1');
INSERT INTO `teste` VALUES ('2', 'teste', '9', '127.0.0.2');
INSERT INTO `teste` VALUES ('3', 'marcio', '8', '127.0.0.1');
INSERT INTO `teste` VALUES ('4', 'marcio', '1', '127.0.0.1');
INSERT INTO `teste` VALUES ('5', 'marcio', '1', '127.0.0.1');
INSERT INTO `teste` VALUES ('6', 'marcio', '8', '127.0.0.1');
INSERT INTO `teste` VALUES ('7', 'marcio', '0,25', '127.0.0.1');
