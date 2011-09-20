-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2011 at 09:36 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `impormaq`
--

-- --------------------------------------------------------

--
-- Table structure for table `Promociones`
--

CREATE TABLE `Promociones` (
  `IdPromociones` int(11) NOT NULL AUTO_INCREMENT,
  `TextoPromocional` varchar(45) DEFAULT NULL,
  `IdMaquina` int(11) NOT NULL,
  `IdImagenes` int(11) NOT NULL,
  `PrecioPromocional` int(11) DEFAULT NULL,
  `IdUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`IdPromociones`),
  KEY `fk_Promociones_Maquinas1` (`IdMaquina`),
  KEY `fk_Promociones_Imagenes1` (`IdImagenes`),
  KEY `fk_Promociones_Usuarios1` (`IdUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Promociones`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `Promociones`
--
ALTER TABLE `Promociones`
  ADD CONSTRAINT `fk_Promociones_Imagenes1` FOREIGN KEY (`IdImagenes`) REFERENCES `Imagenes` (`IdImagenes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Promociones_Maquinas1` FOREIGN KEY (`IdMaquina`) REFERENCES `Maquinas` (`IdMaquina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Promociones_Usuarios1` FOREIGN KEY (`IdUsuarios`) REFERENCES `Usuarios` (`IdUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;
