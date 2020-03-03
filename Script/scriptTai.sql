/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 5.7.29-0ubuntu0.18.04.1 : Database - TAI
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`TAI` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `TAI`;

/*Table structure for table `colheita` */

DROP TABLE IF EXISTS `colheita`;

CREATE TABLE `colheita` (
  `idCultura` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `lucro` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `colheita` */

/*Table structure for table `culturas` */

DROP TABLE IF EXISTS `culturas`;

CREATE TABLE `culturas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valorMedio` int(255) DEFAULT NULL,
  `tempoDeColheitaEmDia` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `culturas` */

/*Table structure for table `plantio` */

DROP TABLE IF EXISTS `plantio`;

CREATE TABLE `plantio` (
  `idProduto` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `custo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `plantio` */

/*Table structure for table `productBacklog` */

DROP TABLE IF EXISTS `productBacklog`;

CREATE TABLE `productBacklog` (
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `tempo` varchar(255) DEFAULT NULL,
  `prioridade` enum('importante','normal','baixa') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `productBacklog` */

insert  into `productBacklog`(`titulo`,`descricao`,`tempo`,`prioridade`) values 
('cadastrar uma cultura','O usuario teria que ter um local onde cafastraria uma cultura','3 horas','importante');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
