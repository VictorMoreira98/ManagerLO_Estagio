-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.6-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para managerlo
CREATE DATABASE IF NOT EXISTS `managerlo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `managerlo`;

-- Copiando estrutura para tabela managerlo.area
CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dnpm` int(255) NOT NULL DEFAULT 0,
  `dnpm1` int(255) DEFAULT 0,
  `dnpm2` int(255) DEFAULT 0,
  `dnpm3` int(255) DEFAULT 0,
  `dnpm4` int(255) DEFAULT 0,
  `dnpm5` int(255) DEFAULT 0,
  `dnpm6` int(255) DEFAULT 0,
  `id_licenca` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Area_Licenca1_idx` (`id_licenca`),
  CONSTRAINT `fk_Area_Licenca1` FOREIGN KEY (`id_licenca`) REFERENCES `licenca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.area: ~30 rows (aproximadamente)
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` (`id`, `dnpm`, `dnpm1`, `dnpm2`, `dnpm3`, `dnpm4`, `dnpm5`, `dnpm6`, `id_licenca`) VALUES
	(3, 8778, 1, 2, 3, NULL, NULL, NULL, 78),
	(4, 767767, 0, 0, 0, NULL, NULL, NULL, 79),
	(5, 6767, NULL, NULL, NULL, NULL, NULL, NULL, 80),
	(6, 76767, NULL, NULL, NULL, NULL, NULL, NULL, 81),
	(7, 0, NULL, NULL, NULL, NULL, NULL, NULL, 82),
	(8, 0, NULL, NULL, NULL, NULL, NULL, NULL, 83),
	(10, 767676, NULL, NULL, NULL, NULL, NULL, NULL, 87),
	(11, 887878, NULL, NULL, NULL, NULL, NULL, NULL, 88),
	(12, 767676, NULL, NULL, NULL, NULL, NULL, NULL, 89),
	(13, 7777, NULL, NULL, NULL, NULL, NULL, NULL, 90),
	(14, 6565, NULL, NULL, NULL, NULL, NULL, NULL, 91),
	(15, 656565, NULL, NULL, NULL, NULL, NULL, NULL, 92),
	(16, 65656, NULL, NULL, NULL, NULL, NULL, NULL, 93),
	(17, 7676, NULL, NULL, NULL, NULL, NULL, NULL, 94),
	(18, 7676, NULL, NULL, NULL, NULL, NULL, NULL, 95),
	(19, 67676, NULL, NULL, NULL, NULL, NULL, NULL, 96),
	(20, 77623, 123, 123, NULL, NULL, NULL, NULL, 97),
	(21, 656565, NULL, NULL, NULL, NULL, NULL, NULL, 100),
	(22, 65656, NULL, NULL, NULL, NULL, NULL, NULL, 101),
	(23, 65656, NULL, NULL, NULL, NULL, NULL, NULL, 102),
	(24, 787878, NULL, NULL, NULL, NULL, NULL, NULL, 103),
	(25, 76767, NULL, NULL, NULL, NULL, NULL, NULL, 104),
	(26, 988989, NULL, NULL, NULL, NULL, NULL, NULL, 110),
	(29, 344343, 123, 123, NULL, NULL, NULL, NULL, 162),
	(30, 23232, 2323, 2323, 2323, 2323, 23232, 23232, 165),
	(31, 23223, 232323, 878787, 9898, 989898, 989898, 989898, 171),
	(32, 8787, 87877, NULL, NULL, NULL, NULL, NULL, 173),
	(33, 87787, NULL, NULL, NULL, NULL, NULL, NULL, 177);
/*!40000 ALTER TABLE `area` ENABLE KEYS */;

-- Copiando estrutura para tabela managerlo.dnpm
CREATE TABLE IF NOT EXISTS `dnpm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nDnpm` int(11) NOT NULL DEFAULT 0,
  `idArea` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `idArea` (`idArea`),
  CONSTRAINT `idArea` FOREIGN KEY (`idArea`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.dnpm: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `dnpm` DISABLE KEYS */;
/*!40000 ALTER TABLE `dnpm` ENABLE KEYS */;

-- Copiando estrutura para tabela managerlo.draga
CREATE TABLE IF NOT EXISTS `draga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `id_licenca` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Draga_Licenca_idx` (`id_licenca`),
  CONSTRAINT `fk_Draga_Licenca` FOREIGN KEY (`id_licenca`) REFERENCES `licenca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.draga: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `draga` DISABLE KEYS */;
INSERT INTO `draga` (`id`, `nome`, `id_licenca`) VALUES
	(2, 'Anita', 98),
	(3, 'Amaropolis', 99),
	(4, 'Leopoldo', 105),
	(5, 'Anira', 106),
	(6, 'Adriana', 108),
	(7, '98989', 120),
	(8, 'Theotonia', 175),
	(9, 'Anita', 176);
/*!40000 ALTER TABLE `draga` ENABLE KEYS */;

-- Copiando estrutura para tabela managerlo.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.empresa: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id`, `nome`, `cnpj`) VALUES
	(13, 'Gente e Terra', '14266474584'),
	(15, 'teste', '666'),
	(16, 'testeRST', '343535366');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Copiando estrutura para tabela managerlo.licenca
CREATE TABLE IF NOT EXISTS `licenca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nlicenca` int(11) NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `dtaVenc` varchar(50) NOT NULL DEFAULT '',
  `anexoLO` varchar(255) DEFAULT NULL,
  `anexoProrrogacao` varchar(255) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idEmpresa` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Licenca_Users1_idx` (`idUser`),
  KEY `fk_Licenca_Tipo` (`tipo`),
  KEY `fk_Licenca_Empresa` (`idEmpresa`),
  KEY `FK_status` (`status`),
  CONSTRAINT `FK_status` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Licenca_Empresa` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Licenca_Tipo` FOREIGN KEY (`tipo`) REFERENCES `tipolicenca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Licenca_Users1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.licenca: ~97 rows (aproximadamente)
/*!40000 ALTER TABLE `licenca` DISABLE KEYS */;
INSERT INTO `licenca` (`id`, `nlicenca`, `empresa`, `dtaVenc`, `anexoLO`, `anexoProrrogacao`, `tipo`, `idUser`, `idEmpresa`, `status`) VALUES
	(78, 8778, 'Gente e Terra', '13-04-2020', '../anexos/CasoUso_Estagio.png', '../anexos/CasoUso_Estagio.png', 1, 35, 13, 5),
	(79, 8778, 'Gente e Terra', '13-04-2020', '../anexos/teste.png', '../anexos/', 1, 35, 13, 1),
	(80, 78787, 'Gente e Terra', '13-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(81, 8878, 'victor moreiraAltera', '13-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(82, 8778, 'victor moreiraAltera', '13-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(83, 877878, 'victor moreiraAltera', '13-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(87, 767676, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(88, 676767, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(89, 76767, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(90, 66556, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(91, 6565, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(92, 665656, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(93, 65565, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(94, 67676, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(95, 776767, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(96, 76767, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(97, 762262, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(98, 287827, 'Gente e Terra', '22-04-2020', '../anexos/', '../anexos/', 2, 35, 13, 1),
	(99, 65656, 'Gente e Terra', '21-04-2020', '../anexos/', '../anexos/', 2, 35, 13, 1),
	(100, 65656, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(101, 6565, 'victor moreiraAltera', '21-04-2020', '../anexos/EscalaCorona.pdf', '../anexos/', 1, 35, 13, 1),
	(102, 5665, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(103, 767676, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(104, 65665, 'victor moreiraAltera', '21-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(105, 878787, 'Gente e Terra', '22-04-2020', '../anexos/', '../anexos/', 2, 35, 13, 1),
	(106, 990, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 2, 35, 13, 1),
	(107, 8787, 'Gente e Terra', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(108, 98989, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 2, 35, 13, 1),
	(109, 8787, 'Gente e Terra', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(110, 66666, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(111, 87878, 'Gente e Terra', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(112, 98989, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(113, 8774, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(114, 87878, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(115, 878, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(116, 8989, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(117, 989898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(118, 99898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(119, 9898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(120, 89889, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 2, 35, 13, 1),
	(121, 9898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(122, 8989, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(123, 9898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(124, 8909, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(125, 998, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(126, 98989, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(127, 8778, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(128, 9898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(129, 9898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(130, 898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(131, 98898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(132, 98898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(133, 98983, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(134, 9898, 'victor moreiraAltera', '22-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(135, 989, 'victor moreiraAltera', '23-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(136, 98989, 'victor moreiraAltera', '23-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(137, 898, 'victor moreiraAltera', '23-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(138, 989898, 'victor moreiraAltera', '23-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(139, 988, 'victor moreiraAltera', '23-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(140, 98989, 'victor moreiraAltera', '23-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(141, 98989, 'victor moreiraAltera', '23-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(142, 87878, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(143, 7989, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(144, 9898, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(145, 99898, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(146, 9898, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(147, 9898, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(148, 9898, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(149, 78787, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(150, 98989, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(151, 9898, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(152, 87787, 'victor moreiraAltera', '25-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(153, 8787, 'victor moreiraAltera', '26-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(154, 8787, 'victor moreiraAltera', '26-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(155, 99898, 'victor moreiraAltera', '26-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(156, 98989, 'victor moreiraAltera', '26-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(157, 5454, 'victor moreiraAltera', '26-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(158, 43453, 'victor moreiraAltera', '26-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(159, 8989, 'victor moreiraAltera', '26-04-2020', '../anexos/', '../anexos/', 3, 35, 13, 1),
	(162, 4545454, 'victor moreiraAltera', '26-04-2020', '../anexos/', '../anexos/', 1, 35, 13, 4),
	(163, 878732, 'victor moreiraAltera', '12-05-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(164, 545456, 'victor moreiraAltera', '04-06-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(165, 878732, 'victor moreiraAltera', '12-05-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(169, 545456, 'victor moreiraAltera', '04-06-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(171, 4343, 'victor moreiraAltera', '12-05-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(172, 545456, 'victor moreiraAltera', '04-06-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(173, 78787, 'victor moreiraAltera', '12-05-2020', '../anexos/', '../anexos/', 1, 35, 13, 1),
	(174, 98989, 'Gente e Terra', '03-06-2020', '../anexos/', '../anexos/', 3, 35, 13, 4),
	(175, 988899, 'Gente e Terra', '02-06-2020', '../anexos/', '../anexos/', 2, 35, 13, 1),
	(176, 343434, 'Gente e Terra', '23-06-2020', '../anexos/', '../anexos/', 2, 35, 13, 2),
	(177, 78787, 'Gente e Terra', '02-06-2020', '../anexos/home.PNG', '../anexos/', 1, 35, 13, 1);
/*!40000 ALTER TABLE `licenca` ENABLE KEYS */;

-- Copiando estrutura para tabela managerlo.pessoa
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.pessoa: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` (`id`, `nome`, `cpf`) VALUES
	(1, 'victor moreira', 66),
	(13, 'victor moreira', 54545),
	(14, 'victor moreira', 76767),
	(15, 'victor moreira', 4545),
	(16, 'Victor Moreira Correa', 2147483647),
	(17, 'victor moreira', 656565),
	(28, 'Luiza Moreira', 98989),
	(30, 'Luiza Fernanda', 9889898),
	(31, 'Luiz Fernando', 98989),
	(32, 'victor moreira', 878787),
	(33, 'testeRSTTR', 989898),
	(34, 'victor moreira agora', 98988);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;

-- Copiando estrutura para tabela managerlo.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.status: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` (`id`, `nome`) VALUES
	(1, 'Licença Vigor'),
	(2, 'Licença Prorrogada'),
	(3, 'Licença Vencida'),
	(4, 'Licença Solicitada'),
	(5, 'Licença Suspensa');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;

-- Copiando estrutura para tabela managerlo.terminal
CREATE TABLE IF NOT EXISTS `terminal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_licenca` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Terminal_Licenca1_idx` (`id_licenca`),
  CONSTRAINT `fk_Terminal_Licenca1` FOREIGN KEY (`id_licenca`) REFERENCES `licenca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.terminal: ~51 rows (aproximadamente)
/*!40000 ALTER TABLE `terminal` DISABLE KEYS */;
INSERT INTO `terminal` (`id`, `id_licenca`) VALUES
	(2, 107),
	(3, 109),
	(4, 111),
	(5, 112),
	(6, 113),
	(7, 114),
	(8, 115),
	(9, 116),
	(10, 117),
	(11, 118),
	(12, 119),
	(13, 121),
	(14, 122),
	(15, 123),
	(16, 124),
	(17, 125),
	(18, 126),
	(19, 127),
	(20, 128),
	(21, 129),
	(22, 130),
	(23, 131),
	(24, 132),
	(25, 133),
	(26, 134),
	(27, 135),
	(28, 136),
	(29, 137),
	(30, 138),
	(31, 139),
	(32, 140),
	(33, 141),
	(34, 142),
	(35, 143),
	(36, 144),
	(37, 145),
	(38, 146),
	(39, 147),
	(40, 148),
	(41, 149),
	(42, 150),
	(43, 151),
	(44, 152),
	(45, 153),
	(46, 154),
	(47, 155),
	(48, 156),
	(49, 157),
	(50, 158),
	(51, 159),
	(52, 174);
/*!40000 ALTER TABLE `terminal` ENABLE KEYS */;

-- Copiando estrutura para tabela managerlo.tipolicenca
CREATE TABLE IF NOT EXISTS `tipolicenca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.tipolicenca: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipolicenca` DISABLE KEYS */;
INSERT INTO `tipolicenca` (`id`, `nome`) VALUES
	(1, 'area'),
	(2, 'draga'),
	(3, 'terminal');
/*!40000 ALTER TABLE `tipolicenca` ENABLE KEYS */;

-- Copiando estrutura para tabela managerlo.tipousuario
CREATE TABLE IF NOT EXISTS `tipousuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.tipousuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` (`id`, `nome`) VALUES
	(1, 'pessoa'),
	(2, 'empresa');
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;

-- Copiando estrutura para tabela managerlo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` int(20) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `idEmpresa` int(11) DEFAULT NULL,
  `idPessoa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Users_Empresa1_idx` (`idEmpresa`),
  KEY `idPessoa` (`idPessoa`),
  KEY `tipo` (`tipo`),
  CONSTRAINT `fk_Users_Empresa` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_Pessoa1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_Tipo` FOREIGN KEY (`tipo`) REFERENCES `tipousuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela managerlo.users: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `usuario`, `email`, `telefone`, `senha`, `tipo`, `idEmpresa`, `idPessoa`) VALUES
	(35, 'genteterra', 'rastreamento@genteterra.com.br', 2147483647, '12AMcqWIqBpbU', 2, 13, 1),
	(41, 'victorM', 'victor@gmail', 666, '12AMcqWIqBpbU', 1, NULL, 13),
	(42, 'victor', 'victormoreiracorrea@gmail.com', 8676767, '12.WH7wXYpbGs', 1, NULL, 14),
	(44, 'victorMoreira', 'victor@gmail', 5188787, '12AMcqWIqBpbU', 1, 13, 16),
	(45, 'victor', 'victormoreiracorrea@gmail.com', 656565, '12AMcqWIqBpbU', 1, 13, 17),
	(49, 'victor', 'victormoreiracorrea@gmail.com', 666, '12AMcqWIqBpbU', 2, 15, NULL),
	(50, 'victorRST', 'victormoreiracorreaT@gmail.com', 3434366, '12AMcqWIqBpbU', 2, 16, NULL),
	(58, 'luiza', 'luiza@gmail.com', 898898, '12AMcqWIqBpbU', 1, 13, 28),
	(60, 'luiza', 'victor@gmail', 989898, '12AMcqWIqBpbU', 1, 13, 30),
	(61, 'luiz', 'victor@gmail', 878787, '12AMcqWIqBpbU', 1, 13, 31),
	(62, 'teste', 'victor@gmail', 90987, '12AMcqWIqBpbU', 1, 13, 32),
	(63, 'teste', 'victor@gmail', 787878, '12AMcqWIqBpbU', 1, 13, 33),
	(64, 'teste', 'victor@gmail', 99898, '12AMcqWIqBpbU', 1, 13, 34);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
