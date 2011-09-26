-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 26, 2011 at 03:19 a.m.
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `getit`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('bbfe1b71a67ecfc4b4c063660e73c820', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', 1316999728, 'a:3:{s:8:"username";s:8:"garrison";s:6:"UserId";s:1:"1";s:12:"is_logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `IdClientes` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(255) DEFAULT NULL,
  `APaterno` varchar(45) DEFAULT NULL,
  `AMaterno` varchar(45) DEFAULT NULL,
  `Empresa` varchar(100) NOT NULL,
  `Calle` varchar(50) DEFAULT NULL,
  `NumeroExt` varchar(6) DEFAULT NULL,
  `NumeroInt` varchar(6) DEFAULT NULL,
  `Colonia` varchar(255) DEFAULT NULL,
  `CodigoPostal` varchar(7) DEFAULT NULL,
  `Municipio` varchar(45) DEFAULT NULL,
  `Estado` varchar(45) DEFAULT NULL,
  `Pais` varchar(45) DEFAULT NULL,
  `Celular` varchar(45) DEFAULT NULL,
  `Oficina` varchar(45) DEFAULT NULL,
  `Radio` varchar(45) DEFAULT NULL,
  `CorreoElectronico` varchar(200) DEFAULT NULL,
  `RazonSocial` varchar(45) DEFAULT NULL,
  `RFC` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdClientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`IdClientes`, `Nombres`, `APaterno`, `AMaterno`, `Empresa`, `Calle`, `NumeroExt`, `NumeroInt`, `Colonia`, `CodigoPostal`, `Municipio`, `Estado`, `Pais`, `Celular`, `Oficina`, `Radio`, `CorreoElectronico`, `RazonSocial`, `RFC`) VALUES
(1, 'Victor', 'Valenzuela', 'Martinez', 'Sanders', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Carlos', 'Bolaños', 'Lopez', 'Garrita Co.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contenido`
--

CREATE TABLE IF NOT EXISTS `contenido` (
  `IdContenido` int(11) NOT NULL,
  `Mision` varchar(45) DEFAULT NULL,
  `Vision` varchar(45) DEFAULT NULL,
  `Politicas` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdContenido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contenido`
--


-- --------------------------------------------------------

--
-- Table structure for table `idiomas`
--

CREATE TABLE IF NOT EXISTS `idiomas` (
  `IdIdiomas` int(11) NOT NULL,
  `Idioma` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdIdiomas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idiomas`
--

INSERT INTO `idiomas` (`IdIdiomas`, `Idioma`) VALUES
(1, 'Ingles'),
(2, 'Espanol');

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `IdImagenes` int(11) NOT NULL AUTO_INCREMENT,
  `idMaquina` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `full_path` varchar(255) NOT NULL,
  `raw_name` varchar(255) NOT NULL,
  `orig_name` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `file_ext` varchar(5) NOT NULL,
  `file_size` varchar(10) NOT NULL,
  `is_image` varchar(2) NOT NULL,
  `image_width` varchar(5) NOT NULL,
  `image_height` varchar(5) NOT NULL,
  `image_type` varchar(10) NOT NULL,
  `image_size_str` varchar(55) NOT NULL,
  `promo` bit(1) DEFAULT NULL,
  PRIMARY KEY (`IdImagenes`),
  KEY `fk_Imagenes_Maquinas` (`idMaquina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `imagenes`
--

INSERT INTO `imagenes` (`IdImagenes`, `idMaquina`, `file_name`, `file_type`, `file_path`, `full_path`, `raw_name`, `orig_name`, `client_name`, `file_ext`, `file_size`, `is_image`, `image_width`, `image_height`, `image_type`, `image_size_str`, `promo`) VALUES
(128, 26, 'images.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/26/', '/Users/Garrison/Sites/impormaq/images/26/images.jpg', 'images', 'images.jpg', 'images.jpg', '.jpg', '8.33', '1', '242', '208', 'jpeg', 'width="242" height="208"', '0');

-- --------------------------------------------------------

--
-- Table structure for table `maquinas`
--

CREATE TABLE IF NOT EXISTS `maquinas` (
  `IdMaquina` int(11) NOT NULL AUTO_INCREMENT,
  `Maquina` varchar(45) NOT NULL,
  `Modelo` varchar(10) DEFAULT NULL,
  `Especificaciones` text,
  `Precio` int(11) DEFAULT NULL,
  `VideoUrl` text NOT NULL,
  `IdTipos` int(11) NOT NULL,
  `IdMarcas` int(11) NOT NULL,
  `promo` bit(1) DEFAULT NULL,
  `venta` bit(1) DEFAULT NULL,
  PRIMARY KEY (`IdMaquina`),
  KEY `fk_Maquinas_Tipos1` (`IdTipos`),
  KEY `fk_Maquinas_Marcas1` (`IdMarcas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `maquinas`
--

INSERT INTO `maquinas` (`IdMaquina`, `Maquina`, `Modelo`, `Especificaciones`, `Precio`, `VideoUrl`, `IdTipos`, `IdMarcas`, `promo`, `venta`) VALUES
(26, 'Grua Case', '2011', '1000 horas de uso, seminueva de paquete.', 35000, 'http://localhost', 13, 53, '0', '0'),
(27, 'Tractor Case', '2005', 'whatever', 2005, 'http://google.com', 16, 53, '0', '1'),
(28, 'Breaker Case', '2008', 'Whatever 2', 1000, 'http://youtube.com', 15, 53, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `IdMarca` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdMarca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`IdMarca`, `Marca`) VALUES
(53, 'Case'),
(54, 'Caterpillar'),
(55, 'NewHolland');

-- --------------------------------------------------------

--
-- Table structure for table `movimientos`
--

CREATE TABLE IF NOT EXISTS `movimientos` (
  `IdMovimientos` int(11) NOT NULL AUTO_INCREMENT,
  `Movimiento` varchar(45) DEFAULT NULL,
  `IdUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`IdMovimientos`),
  KEY `fk_Movimientos_Usuarios1` (`IdUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `movimientos`
--


-- --------------------------------------------------------

--
-- Table structure for table `promociones`
--

CREATE TABLE IF NOT EXISTS `promociones` (
  `IdPromociones` int(11) NOT NULL AUTO_INCREMENT,
  `TextoPromocional` varchar(45) DEFAULT NULL,
  `IdMaquina` int(11) NOT NULL,
  `IdImagenes` int(11) DEFAULT NULL,
  `PrecioPromocional` int(11) DEFAULT NULL,
  `IdUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`IdPromociones`),
  KEY `fk_Promociones_Maquinas1` (`IdMaquina`),
  KEY `fk_Promociones_Imagenes1` (`IdImagenes`),
  KEY `fk_Promociones_Usuarios1` (`IdUsuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `promociones`
--

INSERT INTO `promociones` (`IdPromociones`, `TextoPromocional`, `IdMaquina`, `IdImagenes`, `PrecioPromocional`, `IdUsuarios`) VALUES
(5, 'asdasd', 28, NULL, 13132, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `idTipos` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(45) DEFAULT NULL,
  `Type` varchar(50) NOT NULL,
  PRIMARY KEY (`idTipos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tipos`
--

INSERT INTO `tipos` (`idTipos`, `Tipo`, `Type`) VALUES
(13, 'Grua', 'Crane'),
(14, 'RetroExcavadora', 'Backhoe'),
(15, 'Martillo Hidraulico', 'Breaker'),
(16, 'Tractor', 'Tractor');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `IdUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(45) DEFAULT NULL COMMENT '		',
  `Password` varchar(32) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdUsuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`IdUsuarios`, `Username`, `Password`, `Nombre`) VALUES
(1, 'garrison', 'gameover', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `IdVentas` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` datetime DEFAULT NULL,
  `Monto` int(11) DEFAULT NULL,
  `IdMaquina` int(11) NOT NULL,
  `IdClientes` int(11) NOT NULL,
  `IdUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`IdVentas`),
  KEY `fk_Ventas_Maquinas1` (`IdMaquina`),
  KEY `fk_Ventas_Clientes1` (`IdClientes`),
  KEY `fk_Ventas_Usuarios1` (`IdUsuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`IdVentas`, `Fecha`, `Monto`, `IdMaquina`, `IdClientes`, `IdUsuarios`) VALUES
(2, '2011-09-26 00:00:00', 10, 27, 2, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `fk_Imagenes_Maquinas` FOREIGN KEY (`idMaquina`) REFERENCES `maquinas` (`IdMaquina`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `maquinas`
--
ALTER TABLE `maquinas`
  ADD CONSTRAINT `fk_Maquinas_Marcas1` FOREIGN KEY (`IdMarcas`) REFERENCES `marcas` (`IdMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Maquinas_Tipos1` FOREIGN KEY (`IdTipos`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `fk_Movimientos_Usuarios1` FOREIGN KEY (`IdUsuarios`) REFERENCES `usuarios` (`IdUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `promociones`
--
ALTER TABLE `promociones`
  ADD CONSTRAINT `fk_Promociones_Imagenes1` FOREIGN KEY (`IdImagenes`) REFERENCES `imagenes` (`IdImagenes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Promociones_Maquinas1` FOREIGN KEY (`IdMaquina`) REFERENCES `maquinas` (`IdMaquina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Promociones_Usuarios1` FOREIGN KEY (`IdUsuarios`) REFERENCES `usuarios` (`IdUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_Ventas_Clientes1` FOREIGN KEY (`IdClientes`) REFERENCES `clientes` (`IdClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Ventas_Maquinas1` FOREIGN KEY (`IdMaquina`) REFERENCES `maquinas` (`IdMaquina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Ventas_Usuarios1` FOREIGN KEY (`IdUsuarios`) REFERENCES `usuarios` (`IdUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;
