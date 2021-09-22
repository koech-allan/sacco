DROP DATABASE IF EXISTS `silibwet`;
CREATE DATABASE `silibwet`;
USE `silibwet`;
SET NAMES utf8;
SET character_set_client=utf8mb4;

CREATE TABLE `registration`(
	`registrationid` int(255) NOT NULL AUTO_INCREMENT,
	`firstname` varchar(30) NOT NULL,
	`lastname` varchar(30) NOT NULL,
	`gender` varchar(15) NOT NULL,
	`email` varchar(50) NOT NULL,
	`date` varchar(20) NOT NULL,
	`status` varchar(30) NOT NULL,
	`NID` int(8) NOT NULL,
	`tel` int(10) NOT NULL,
	`loc` varchar(50) NOT NULL,
	`password` varchar(50)NOT NULL,
PRIMARY KEY (`registrationid`)
	)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

INSERT INTO `registration`(`registrationid`,`firstname`,`lastname`,`gender`,`email`,`date`,`status`,`NID`,`tel`,`loc`,`password`) 
VALUES (NULL,'Kipkirui','Allan','male','koechkipkirui00@gmail.com','12/12/2021','single',37245534,0706162365,'Bomet','allan2021');

CREATE TABLE `loan`(
	`loanid` int(255) NOT NULL AUTO_INCREMENT,
	`firstname` varchar(30) NOT NULL,
	`lastname` varchar(30) NOT NULL,
	`gender` varchar(15) NOT NULL,
	`email` varchar(50) NOT NULL,
	`date` varchar(20) NOT NULL,
	`status` varchar(30) NOT NULL,
	`NID` int(8) NOT NULL,
	`tel` int(10) NOT NULL,
	`loc` varchar(50) NOT NULL,
	`password` varchar(50) NOT NULL,
	`amount` int(255) NOT NULL,
	`period` varchar(30) NOT NULL,
	`security`varchar(70) NOT NULL,
	`loan status` varchar(60) NOT NULL,
PRIMARY KEY (`loanid`)
	)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

INSERT INTO `loan`(`loanid`,`firstname`,`lastname`,`gender`,`email`,`date`,`status`,`NID`,`tel`,`loc`,`password`,`amount`,`period`,`security`) 
VALUES (NULL,'Kipkirui','Allan','male','koechkipkirui00@gmail.com','12/12/2021','single',37245534,0706162365,'Bomet','allan2021',60000,'2 year','salary');

CREATE TABLE `admin`(
	`adminid` int(255) NOT NULL AUTO_INCREMENT,
	`firstname` varchar(30) NOT NULL,
	`lastname` varchar(30) NOT NULL,
	`email` varchar(50) NOT NULL,
	`password` varchar(50) NOT NULL,
	
PRIMARY KEY (`adminid`)
	)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin`(`adminid`,`firstname`,`lastname`,`email`,`password`) 
VALUES (NULL,'Kipkirui','Allan','koechkipkirui00@gamil.com','allan2021');


CREATE TABLE `farm`(
	`farmid` int(255) NOT NULL AUTO_INCREMENT,
	`date` varchar(30) NOT NULL,
	`weight` varchar(30) NOT NULL,
	`email` varchar(50) NOT NULL,
	
PRIMARY KEY (`farmid`)
	)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

INSERT INTO `farm`(`farmid`,`date`,`weight`,`email`)
 VALUES (NULL,'12/12/2021','250kg','koechkipkirui@gmail.com');
 

 CREATE TABLE `alert`(
	`alertid` int(255) NOT NULL AUTO_INCREMENT,
	`date` varchar(30) NOT NULL,
	`message` varchar(255) NOT NULL,
	
	PRIMARY KEY (`alertid`)
	)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

CREATE TABLE `news`(
	`id` int(255) NOT NULL AUTO_INCREMENT,
	`date` varchar(30) NOT NULL,
	`news` LONGTEXT NOT NULL,
	
	PRIMARY KEY (`id`)
	)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;
