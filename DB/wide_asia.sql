-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2018 at 01:21 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wide_asia`
--
CREATE DATABASE IF NOT EXISTS `wide_asia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wide_asia`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'Dhanushka', 'Wijesinghe', 'dhanushkaw@wideasia.lk', 'a9993e364706816aba3e25717850c26c9cd0d89d', '2018-09-04 04:14:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'Damith', 'Bannaka', 'damitheb@gmail.com', 'a9993e364706816aba3e25717850c26c9cd0d89d', '2018-10-02 06:50:39', 0),
(2, 'Dulini', 'Gunasekara', 'dulinig@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2018-10-02 06:43:10', 0),
(4, 'Himashani', 'Tharendra', 'himashineethareendra@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2018-10-01 21:32:51', 0),
(5, 'Thilina', 'Supun', 'thilinasupunw@gmail.com', '7f965560c9f2ce126407eda7c7dbbdb75037ef4d', '0000-00-00 00:00:00', 0),
(6, 'Buddika', 'Prasad', 'markanth@gmail.com', '6cd191d8c09c4f785d82bd94355e14f7ec16a382', '2018-09-30 23:11:58', 0),
(7, 'Dileep', 'Kariyawasam', 'parkhyun@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '0000-00-00 00:00:00', 0),
(8, 'Eranga', 'Prasad', 'erangap@gmail.com', '6cd191d8c09c4f785d82bd94355e14f7ec16a382', '0000-00-00 00:00:00', 0),
(9, 'sachini', 'piumali', 'sachinipiumali@gmail.com', 'd03b498c6babbaa6a0787f81e22738914fbf07ce', '0000-00-00 00:00:00', 0),
(10, 'Ishara', 'Withange', 'isharawi@gmail.com', '2a19af0e79a60879c22da7db7cbf2e37a9a2d67e', '0000-00-00 00:00:00', 0),
(11, 'Kapila', 'Silva', 'Kapilasilva@gmail.com', '81e8692e5dc94813ce253f3c7b252eaa2f4bace1', '0000-00-00 00:00:00', 0),
(12, 'Pawan', 'Somarathna', 'pavanpabs@gmail.com', '2a19af0e79a60879c22da7db7cbf2e37a9a2d67e', '0000-00-00 00:00:00', 0),
(13, 'Raveen', 'Jayasinghe', 'ravenj@gmail.com', 'e83e73c0bd162890dec69b2ad4a039002de84fb2', '0000-00-00 00:00:00', 0),
(14, 'Thilina', 'Perera', 'thilanaperera@gmail.com', 'f38cfe2e2facbcc742bad63f91ad55637300cb45', '0000-00-00 00:00:00', 0),
(15, 'Roshan', 'Jayawardana', 'roshanja@gmail.com', '2a19af0e79a60879c22da7db7cbf2e37a9a2d67e', '0000-00-00 00:00:00', 0),
(16, 'Avishka', 'Heshan', 'Avishkaheshan.exon.net@gmail.com', '6cd191d8c09c4f785d82bd94355e14f7ec16a382', '2018-10-01 10:54:05', 0),
(17, 'Dulitha', 'Lansakara', 'dulithal@gmail.com', '6cd191d8c09c4f785d82bd94355e14f7ec16a382', '2018-10-01 22:20:00', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
