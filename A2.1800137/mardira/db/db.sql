/*
SQLyog Professional v12.09 (64 bit)
MySQL - 10.1.19-MariaDB : Database - mardira
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mardira` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mardira`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(3) NOT NULL AUTO_INCREMENT,
  `nim` int(10) DEFAULT NULL,
  `nama_mhs` varchar(30) DEFAULT NULL,
  `id_prodi` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id_mahasiswa`,`nim`,`nama_mhs`,`id_prodi`) values (2,18112321,'Mahasiswa1',1),(3,18112323,'Mahasiswa2',2),(4,18112392,'Mahasiswa3',1);

/*Table structure for table `prodi` */

DROP TABLE IF EXISTS `prodi`;

CREATE TABLE `prodi` (
  `id_prodi` int(3) NOT NULL AUTO_INCREMENT,
  `nama_prodi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `prodi` */

insert  into `prodi`(`id_prodi`,`nama_prodi`) values (1,'Tehnik Informatika'),(2,'Manajemen Informatika');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_users` int(3) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `nama_lengkap` varchar(35) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_users`,`email`,`nama_lengkap`,`pwd`) values (2,'admin@gmail.com','administrator','21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
