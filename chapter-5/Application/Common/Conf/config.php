<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_PORT' => 3307,
	'DB_USER' => 'root',
	'DB_PWD' => 'usbw',
	'DB_NAME' => 'thinkphp_ex5',
	'DB_PREFIX' => 'c5_'
);
/*
CREATE DATABASE IF NOT EXISTS `thinkphp_ex5` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thinkphp_ex5`;

CREATE TABLE `c5_user`(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(40) NOT NULL,
	`password` char(32) NOT NULL,
	PRIMARY KEY(`id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `c5_user` (`id`, `name`, `password`) VALUES
(1, 'jash.liao', '12345'),
(2, 'jashliao', '54321');
*/