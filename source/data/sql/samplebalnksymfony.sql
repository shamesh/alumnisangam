/*
SQLyog - Free MySQL GUI v5.01
Host - 5.0.22 : Database - stratycon
*********************************************************************
Server version : 5.0.22
*/


create database if not exists `stratycon`;

USE `stratycon`;

SET FOREIGN_KEY_CHECKS=0;

/*Data for the table `role` */

insert into `role` values 
(1,'admin','Can Manage the system'),
(2,'sales','Marketing dealing '),
(3,'tech','Technical Assistant');

/*Data for the table `user` */

insert into `user` values 
(1,'admin','73a301bbf7bf1e3c53419114e29d37d32d5e31d2','admin','ahmermunir@neevtech.com','Bangalore',1,'Ahmer','Munir',0,0);

/*Data for the table `userRole` */

insert into `userRole` values 
(1,1,1);

SET FOREIGN_KEY_CHECKS=1;
