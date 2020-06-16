
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tai` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tai`;

/*Table structure for table `colheita` */

DROP TABLE IF EXISTS `colheita`;

CREATE TABLE `colheita` (
  `idCultura` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `lucro` float DEFAULT NULL,
  `inativo` tinyint(1) DEFAULT '0'
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
  `inativo` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`,`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `culturas` */

insert  into `culturas`(`id`,`nome`,`descricao`,`valorMedio`,`tempoDeColheitaEmDia`,`inativo`) values 
(1,'milho','milho',10,10,1),
(2,'açucar','açucar',20,2,0),
(3,'alface','alfaceaonsdiof asf asmdfa',10,20,1);

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

/*Table structure for table `productbacklog` */

DROP TABLE IF EXISTS `productbacklog`;

CREATE TABLE `productbacklog` (
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `tempo` varchar(255) DEFAULT NULL,
  `prioridade` enum('importante','normal','baixa') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `productbacklog` */

insert  into `productbacklog`(`titulo`,`descricao`,`tempo`,`prioridade`) values 
('cadastrar uma cultura','O usuario teria que ter um local onde cafastraria uma cultura','3 horas','importante');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
