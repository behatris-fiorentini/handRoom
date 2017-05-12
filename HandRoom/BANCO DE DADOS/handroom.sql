/*
SQLyog Community Edition- MySQL GUI v6.54
MySQL - 5.6.17 : Database - handroom
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`handroom` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `handroom`;

/*Table structure for table `controle_acesso` */

DROP TABLE IF EXISTS `controle_acesso`;

CREATE TABLE `controle_acesso` (
  `id_acesso` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_acesso`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `controle_acesso` */

insert  into `controle_acesso`(`id_acesso`,`data`,`usuario`) values (1,'2016-12-15 03:55:09',1),(2,'2016-12-15 05:00:40',1),(3,'2016-12-15 05:17:07',1),(4,'2016-12-15 05:17:22',2),(5,'2016-12-15 05:40:13',1),(6,'2016-12-15 13:54:28',1),(7,'2016-12-15 13:56:57',1),(8,'2016-12-15 14:19:28',1),(9,'2016-12-15 14:39:46',1),(10,'2016-12-15 19:50:29',1),(11,'2016-12-15 20:19:12',1);

/*Table structure for table `estado` */

DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `id_sensor` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `data` varchar(20) DEFAULT NULL,
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

/*Data for the table `estado` */

insert  into `estado`(`id_sensor`,`estado`,`data`,`id_estado`) values (1,1,'2016-15-03 23:15:35 ',1),(1,1,'2016-04-04 03:04:46 ',2),(1,0,'2016-05-04 03:05:12 ',3),(1,0,'2016-05-04 03:05:42 ',4),(1,1,'2016-50-04 21:50:45 ',5),(1,1,'2016-51-04 21:51:13 ',6),(1,1,'2016-51-04 21:51:43 ',7),(1,0,'2016-52-04 21:52:14 ',8),(1,0,'2016-52-04 21:52:44 ',9),(1,1,'2016-11-04 22:11:40 ',10),(1,1,'2016-13-04 22:13:17 ',11),(1,0,'2016-13-04 22:13:47 ',12),(1,0,'2016-14-04 22:14:17 ',13),(1,0,'2016-14-04 22:14:48 ',14),(1,1,'2016-15-04 22:15:17 ',15),(1,0,'2016-36-04 22:36:40 ',16),(1,0,'2016-37-04 22:37:09 ',17),(1,0,'2016-37-04 22:37:39 ',18),(1,1,'2016-40-04 22:40:22 ',19),(1,1,'2016-03-04 23:03:06 ',20),(1,1,'2016-03-04 23:03:36 ',21),(1,0,'2016-04-04 23:04:06 ',22),(1,1,'2016-04-04 23:04:36 ',23),(1,1,'2016-05-04 23:05:06 ',24),(1,1,'2016-05-04 23:05:36 ',25),(1,0,'2016-06-04 23:06:06 ',26),(1,1,'2016-06-04 23:06:36 ',27),(1,1,'2016-07-04 23:07:06 ',28),(1,1,'2016-07-04 23:07:36 ',29),(1,1,'2016-08-04 23:08:06 ',30),(1,1,'2016-08-04 23:08:36 ',31),(1,1,'2016-09-04 23:09:06 ',32),(1,1,'2016-09-04 23:09:36 ',33),(1,1,'2016-10-04 23:10:06 ',34),(1,0,'2016-10-04 23:10:36 ',35),(1,1,'2016-11-04 23:11:06 ',36),(1,0,'2016-11-04 23:11:36 ',37),(1,1,'2016-21-05 01:21:52 ',38),(1,1,'2016-22-05 01:22:59 ',39),(1,1,'2016-23-05 01:23:28 ',40),(1,1,'2016-23-05 01:23:58 ',41),(1,0,'2016-25-05 01:25:18 ',42),(1,0,'2016-24-11 19:24:41 ',43),(2,0,'2016-24-11 19:24:41 ',44),(1,0,'2016-24-11 19:24:41 ',45),(2,0,'2016-24-11 19:24:41 ',46),(1,0,'2016-24-11 19:24:42 ',47),(2,0,'2016-24-11 19:24:42 ',48),(1,0,'2016-28-11 19:28:07 ',49),(2,0,'2016-28-11 19:28:07 ',50),(1,0,'2016-31-11 19:31:02 ',51),(2,0,'2016-31-11 19:31:02 ',52),(1,0,'2016-31-11 19:31:32 ',53),(2,0,'2016-31-11 19:31:32 ',54),(1,0,'2016-32-11 19:32:02 ',55),(2,0,'2016-32-11 19:32:02 ',56),(1,0,'2016-36-11 19:36:12 ',57),(2,0,'2016-36-11 19:36:12 ',58),(1,0,'2016-43-11 19:43:19 ',59),(2,0,'2016-43-11 19:43:20 ',60),(1,0,'2016-43-11 19:43:49 ',61),(2,0,'2016-43-11 19:43:49 ',62),(1,0,'2016-44-11 19:44:32 ',63),(2,0,'2016-44-11 19:44:32 ',64),(1,1,'2016-11-15 20:11:01 ',65),(2,1,'2016-11-15 20:11:02 ',66),(1,1,'2016-11-15 20:11:30 ',67),(2,1,'2016-11-15 20:11:30 ',68),(1,1,'2016-12-15 20:12:00 ',69),(2,1,'2016-12-15 20:12:00 ',70),(1,1,'2016-12-15 20:12:30 ',71),(2,1,'2016-12-15 20:12:30 ',72),(1,1,'2016-13-15 20:13:00 ',73),(2,1,'2016-13-15 20:13:00 ',74),(1,1,'2016-13-15 20:13:30 ',75),(2,1,'2016-13-15 20:13:30 ',76),(1,1,'2016-14-15 20:14:00 ',77),(2,1,'2016-14-15 20:14:00 ',78),(1,1,'2016-14-15 20:14:30 ',79),(2,1,'2016-14-15 20:14:30 ',80),(1,1,'2016-15-15 20:15:00 ',81),(2,1,'2016-15-15 20:15:00 ',82),(1,1,'2016-15-15 20:15:31 ',83),(2,1,'2016-15-15 20:15:31 ',84),(1,1,'2016-16-15 20:16:01 ',85),(2,1,'2016-16-15 20:16:01 ',86),(1,1,'2016-16-15 20:16:31 ',87),(2,1,'2016-16-15 20:16:31 ',88),(1,1,'2016-17-15 20:17:01 ',89),(2,1,'2016-17-15 20:17:01 ',90),(1,1,'2016-17-15 20:17:31 ',91),(2,1,'2016-17-15 20:17:31 ',92),(1,1,'2016-18-15 20:18:01 ',93),(2,1,'2016-18-15 20:18:01 ',94),(1,1,'2016-18-15 20:18:31 ',95),(2,1,'2016-18-15 20:18:31 ',96),(1,1,'2016-19-15 20:19:01 ',97),(2,1,'2016-19-15 20:19:01 ',98),(1,1,'2016-19-15 20:19:31 ',99),(2,1,'2016-19-15 20:19:31 ',100),(1,1,'2016-20-15 20:20:01 ',101),(2,1,'2016-20-15 20:20:01 ',102),(1,1,'2016-21-15 20:21:57 ',103),(2,1,'2016-21-15 20:21:57 ',104),(1,1,'2016-22-15 20:22:27 ',105),(2,1,'2016-22-15 20:22:27 ',106),(1,1,'2016-24-15 20:24:19 ',107),(2,1,'2016-24-15 20:24:19 ',108),(1,1,'2016-24-15 20:24:49 ',109),(2,1,'2016-24-15 20:24:49 ',110),(1,1,'2016-25-15 20:25:19 ',111),(2,1,'2016-25-15 20:25:19 ',112),(1,1,'2016-25-15 20:25:49 ',113),(2,1,'2016-25-15 20:25:49 ',114),(1,1,'2016-26-15 20:26:19 ',115),(2,1,'2016-26-15 20:26:19 ',116),(1,1,'2016-28-15 20:28:52 ',117),(2,1,'2016-28-15 20:28:52 ',118),(1,1,'2016-29-15 20:29:22 ',119),(2,1,'2016-29-15 20:29:22 ',120),(1,1,'2016-29-15 20:29:52 ',121),(2,1,'2016-29-15 20:29:52 ',122),(1,1,'2016-30-15 20:30:22 ',123),(2,1,'2016-30-15 20:30:22 ',124),(1,1,'2016-30-15 20:30:52 ',125),(2,1,'2016-30-15 20:30:52 ',126);

/*Table structure for table `sensor` */

DROP TABLE IF EXISTS `sensor`;

CREATE TABLE `sensor` (
  `id_sensor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_sensor` varchar(70) NOT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id_sensor`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `sensor` */

insert  into `sensor`(`id_sensor`,`nome_sensor`,`data`) values (1,'Lab. Informatica I','2016-11-29 00:27:27'),(2,'Lab. Quimica','2016-12-06 14:10:16'),(6,'Coor. TADS','2016-12-07 03:16:10'),(7,'Coor. Ensino','2016-12-11 06:31:50');

/*Table structure for table `tipo_estado` */

DROP TABLE IF EXISTS `tipo_estado`;

CREATE TABLE `tipo_estado` (
  `estado` tinyint(1) DEFAULT NULL,
  `nome_estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tipo_estado` */

insert  into `tipo_estado`(`estado`,`nome_estado`) values (0,'Ausente'),(1,'Presente');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificação unica do usuário do sitema',
  `nome` varchar(70) NOT NULL COMMENT 'Nome do usuário completo',
  `email` varchar(50) NOT NULL COMMENT 'E-mail do usuario para cadastro no sistema',
  `senha` varchar(50) NOT NULL COMMENT 'Senha escolhida pelo usuário para acesso ao sistema',
  `data` datetime DEFAULT NULL COMMENT 'Data em que o usuário se cadastrou no sistema',
  `data_alteracao` datetime DEFAULT NULL COMMENT 'Mostra a data da ultima alteração realizada',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id_usuario`,`nome`,`email`,`senha`,`data`,`data_alteracao`) values (1,'Admin handRoom','handroom@gmail.com','202cb962ac59075b964b07152d234b70','2016-11-20 00:47:21',NULL),(2,'testando','testando@teste.com','202cb962ac59075b964b07152d234b70','0000-00-00 00:00:00',NULL),(10,'Maria','maria@teste.com','202cb962ac59075b964b07152d234b70','2016-11-25 01:58:22',NULL),(23,'jbjbjb','asadad@sdasdas.com','1234','2016-12-15 02:53:30','2016-12-15 05:00:57'),(24,'teste5','teste5@teste.com','827ccb0eea8a706c4c34a16891f84e7b','2016-12-15 03:02:26',NULL),(25,'asdfg','rrewrwead@sdasdas.com','65bb86549756830caa529e032f829eb2','2016-12-15 03:15:10',NULL),(26,'testte','asdfgs@zsdfsdfa','qwer','2016-12-15 13:52:56','2016-12-15 13:53:16'),(27,'qqqq','teste5@teste.com','202cb962ac59075b964b07152d234b70','2016-12-15 14:03:47',NULL),(28,'qweqwe','testando@teste.com','202cb962ac59075b964b07152d234b70','2016-12-15 14:06:11',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
