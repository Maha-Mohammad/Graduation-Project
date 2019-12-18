-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 02:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--  
 -- Table structure for table `users`  
 --  
 CREATE TABLE IF NOT EXISTS `users` ( 
  `user_email` varchar(250) NOT NULL,
  `user_name` varchar(250) COLLATE utf8_general_ci NOT NULL,  
  `user_password` varchar(250) NOT NULL,
 `user_phone` varchar(250) NOT NULL,
  `user_status` enum('employee','company') NOT NULL,  
  PRIMARY KEY (`user_email`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;  

 




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
