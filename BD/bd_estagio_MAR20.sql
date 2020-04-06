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
  `id_licenca` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Area_Licenca1_idx` (`id_licenca`),
  CONSTRAINT `fk_Area_Licenca1` FOREIGN KEY (`id_licenca`) REFERENCES `licenca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela managerlo.draga
CREATE TABLE IF NOT EXISTS `draga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `id_licenca` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Draga_Licenca_idx` (`id_licenca`),
  CONSTRAINT `fk_Draga_Licenca` FOREIGN KEY (`id_licenca`) REFERENCES `licenca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela managerlo.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

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
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela managerlo.pessoa
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela managerlo.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela managerlo.terminal
CREATE TABLE IF NOT EXISTS `terminal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_licenca` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Terminal_Licenca1_idx` (`id_licenca`),
  CONSTRAINT `fk_Terminal_Licenca1` FOREIGN KEY (`id_licenca`) REFERENCES `licenca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela managerlo.tipolicenca
CREATE TABLE IF NOT EXISTS `tipolicenca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela managerlo.tipousuario
CREATE TABLE IF NOT EXISTS `tipousuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
