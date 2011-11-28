-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2011 at 10:35 AM
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
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
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

INSERT INTO `ci_sessions` VALUES('4cacc75939da45dfa297b9bd3f38a1b0', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/15.0.874.121 Safari/535.2', 1322152381, 'a:3:{s:8:"username";s:8:"garrison";s:6:"UserId";s:1:"1";s:12:"is_logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
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

INSERT INTO `clientes` VALUES(1, 'Victor', 'Valenzuela', 'Martinez', 'Sanders', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clientes` VALUES(2, 'Carlos', 'Bolaños', 'Lopez', 'Garrita Co.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contenido`
--

CREATE TABLE `contenido` (
  `IdContenido` int(11) NOT NULL AUTO_INCREMENT,
  `Mision` varchar(500) DEFAULT NULL,
  `Vision` varchar(500) DEFAULT NULL,
  `Politicas` varchar(500) DEFAULT NULL,
  `Nosotros` varchar(500) NOT NULL,
  `Objetivo` varchar(500) NOT NULL,
  `Bienvenido` varchar(500) NOT NULL,
  PRIMARY KEY (`IdContenido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contenido`
--

INSERT INTO `contenido` VALUES(1, 'GetIt es una empresa comprometida con las PYMES mexicanas, ayudándolas a sobresalir entre sus competidores a través de productos y servicios vanguardistas y de alta calidad que les permite publicitarse y vender sus productos por medio de internet. 	Asi es.																																', 'Ser una empresa que en 10 años sea reconocida a nivel nacional, con el respaldo de las pequeñas y medianas empresas, buscando una mejora continua para elevar la calidad y vanguardia de sus servicios y productos, cumpliendo con las necesidades tecnológicas que cada empresa requiera. 																																								', NULL, 'GetIt está desarrollado pensado en las pymes mexicanas las cuales necesiten tener presencia en internet para mejorar sus ventas y aumentar su cartera de clientes. Pensamos que cualquier sector industrial puede ser beneficiado con este producto, ya que es un sistema flexible, el cual se adapta a las necesidades de todas y cada una de las empresas.																																								', 'Ofrecerá sistemas que se adecuen a las necesidades de pequeñas y medianas empresas, lo suficientemente flexibles los cuales permitirán agregar funcionalidades extras por un precio accesible. 																																								', 'CAMBIO DE SALUDO');

-- --------------------------------------------------------

--
-- Table structure for table `idiomas`
--

CREATE TABLE `idiomas` (
  `IdIdiomas` int(11) NOT NULL,
  `Idioma` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdIdiomas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idiomas`
--

INSERT INTO `idiomas` VALUES(1, 'Ingles');
INSERT INTO `idiomas` VALUES(2, 'Espanol');

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

CREATE TABLE `imagenes` (
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
  `default` bit(1) DEFAULT NULL,
  PRIMARY KEY (`IdImagenes`),
  KEY `fk_Imagenes_Maquinas` (`idMaquina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=191 ;

--
-- Dumping data for table `imagenes`
--

INSERT INTO `imagenes` VALUES(165, 34, 'images.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/34/', '/Users/Garrison/Sites/impormaq/images/34/images.jpg', 'images', 'images.jpg', 'images.jpg', '.jpg', '8.33', '1', '242', '208', 'jpeg', 'width="242" height="208"', '\0', '');
INSERT INTO `imagenes` VALUES(166, 35, 'maquinaria-pesada-construccion_05b7830_3.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/35/', '/Users/Garrison/Sites/impormaq/images/35/maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3', 'maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3.jpg', '.jpg', '99.1', '1', '500', '375', 'jpeg', 'width="500" height="375"', '\0', '');
INSERT INTO `imagenes` VALUES(169, 34, 'transportamos-maquinaria-pesada_b862425_3.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/34/promo/', '/Users/Garrison/Sites/impormaq/images/34/promo/transportamos-maquinaria-pesada_b862425_3.jpg', 'transportamos-maquinaria-pesada_b862425_3', 'transportamos-maquinaria-pesada_b862425_3.jpg', 'transportamos-maquinaria-pesada_b862425_3.jpg', '.jpg', '78.56', '1', '500', '375', 'jpeg', 'width="500" height="375"', '', '\0');
INSERT INTO `imagenes` VALUES(170, 37, '_maq-pesada.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/37/', '/Users/Garrison/Sites/impormaq/images/37/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', '\0', '');
INSERT INTO `imagenes` VALUES(171, 37, '34190370_3.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/37/', '/Users/Garrison/Sites/impormaq/images/37/34190370_3.jpg', '34190370_3', '34190370_3.jpg', '34190370_3.jpg', '.jpg', '42.53', '1', '625', '469', 'jpeg', 'width="625" height="469"', '\0', '\0');
INSERT INTO `imagenes` VALUES(172, 37, 'archcolorfd.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/37/promo/', '/Users/Garrison/Sites/impormaq/images/37/promo/archcolorfd.jpg', 'archcolorfd', 'archcolorfd.jpg', 'archcolorfd.jpg', '.jpg', '1154.75', '1', '1440', '900', 'jpeg', 'width="1440" height="900"', '', '\0');
INSERT INTO `imagenes` VALUES(181, 38, '_maq-pesada.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/38/', '/Users/Garrison/Sites/impormaq/images/38/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', '\0', '');
INSERT INTO `imagenes` VALUES(182, 38, 'images.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/38/', '/Users/Garrison/Sites/impormaq/images/38/images.jpg', 'images', 'images.jpg', 'images.jpg', '.jpg', '8.33', '1', '242', '208', 'jpeg', 'width="242" height="208"', '\0', '\0');
INSERT INTO `imagenes` VALUES(185, 39, '_maq-pesada.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/39/', '/Users/Garrison/Sites/impormaq/images/39/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', '\0', '');
INSERT INTO `imagenes` VALUES(186, 39, 'maquinaria-pesada-construccion_05b7830_3.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/39/', '/Users/Garrison/Sites/impormaq/images/39/maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3', 'maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3.jpg', '.jpg', '99.1', '1', '500', '375', 'jpeg', 'width="500" height="375"', '\0', '\0');
INSERT INTO `imagenes` VALUES(187, 39, 'transportamos-maquinaria-pesada_b862425_3.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/39/promo/', '/Users/Garrison/Sites/impormaq/images/39/promo/transportamos-maquinaria-pesada_b862425_3.jpg', 'transportamos-maquinaria-pesada_b862425_3', 'transportamos-maquinaria-pesada_b862425_3.jpg', 'transportamos-maquinaria-pesada_b862425_3.jpg', '.jpg', '78.56', '1', '500', '375', 'jpeg', 'width="500" height="375"', '', NULL);
INSERT INTO `imagenes` VALUES(188, 36, '_maq-pesada.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/36/promo/', '/Users/Garrison/Sites/impormaq/images/36/promo/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', '', NULL);
INSERT INTO `imagenes` VALUES(189, 36, '_maq-pesada.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/36/', '/Users/Garrison/Sites/impormaq/images/36/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', '\0', '');
INSERT INTO `imagenes` VALUES(190, 36, '34190370_31.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/36/', '/Users/Garrison/Sites/impormaq/images/36/34190370_31.jpg', '34190370_31', '34190370_3.jpg', '34190370_3.jpg', '.jpg', '42.53', '1', '625', '469', 'jpeg', 'width="625" height="469"', '\0', '\0');

-- --------------------------------------------------------

--
-- Table structure for table `maquinas`
--

CREATE TABLE `maquinas` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `maquinas`
--

INSERT INTO `maquinas` VALUES(34, 'Grua Case', '2010', 'Especificaciones<span class="Apple-tab-span" style="white-space:pre">	</span>', 1000, 'Google.com', 13, 53, '', '\0');
INSERT INTO `maquinas` VALUES(35, 'Retro Caterpillar', '2009', 'Especificaciones<span class="Apple-tab-span" style="white-space:pre">	</span>', 2000, 'google.com', 14, 54, '\0', '');
INSERT INTO `maquinas` VALUES(36, 'Tractor New Holand', '2009', 'Especificaciones<span class="Apple-tab-span" style="white-space:pre">	</span>', 3000, 'Google.com', 16, 55, '\0', '\0');
INSERT INTO `maquinas` VALUES(37, 'maquina de lalo', '2010', 'aksdjhjashdfjklashdjfkhasldf<span class="Apple-tab-span" style="white-space:pre">	</span>', 10000, '', 14, 56, '', '\0');
INSERT INTO `maquinas` VALUES(38, 'MaquinaD', 'sdada', '', 10000, '', 16, 54, '\0', '');
INSERT INTO `maquinas` VALUES(39, 'machina', '12786', 'asdlkjhalksh<span class="Apple-tab-span" style="white-space:pre">	</span>', 12378, 'asdasd', 16, 55, '', '\0');

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `IdMarca` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdMarca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` VALUES(53, 'Case');
INSERT INTO `marcas` VALUES(54, 'Caterpillar');
INSERT INTO `marcas` VALUES(55, 'NewHolland');
INSERT INTO `marcas` VALUES(56, 'JohnDeer');

-- --------------------------------------------------------

--
-- Table structure for table `movimientos`
--

CREATE TABLE `movimientos` (
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

CREATE TABLE `promociones` (
  `IdPromociones` int(11) NOT NULL AUTO_INCREMENT,
  `TextoPromocional` text,
  `TituloPromocional` varchar(155) NOT NULL,
  `IdMaquina` int(11) NOT NULL,
  `IdImagenes` int(11) DEFAULT NULL,
  `PrecioPromocional` int(11) DEFAULT NULL,
  `IdUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`IdPromociones`),
  KEY `fk_Promociones_Maquinas1` (`IdMaquina`),
  KEY `fk_Promociones_Imagenes1` (`IdImagenes`),
  KEY `fk_Promociones_Usuarios1` (`IdUsuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `promociones`
--

INSERT INTO `promociones` VALUES(1, 'Solo por promoción una rebaja de 100 dolares en esta Grua Case hasta el 1ero de enero', 'Grua Case $900', 34, NULL, 900, 1);
INSERT INTO `promociones` VALUES(2, 'ASDJAGSDHJGASJHDGKExcavadoraExcavadoraExcavadoraExcavadoraExcavadoraExcavadoraExcavadoraExcavadoraExcavadora', 'PROMOCION 123', 37, NULL, 9500, 1);
INSERT INTO `promociones` VALUES(3, 'Solo por este mes, Grua Caterpillar 2008, 4000 horas, llantas nuevas a un precio especial.', 'Promocion de verano', 39, NULL, 28716, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipos`
--

CREATE TABLE `tipos` (
  `idTipos` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(45) DEFAULT NULL,
  `Type` varchar(50) NOT NULL,
  PRIMARY KEY (`idTipos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tipos`
--

INSERT INTO `tipos` VALUES(13, 'Grua', 'Crane');
INSERT INTO `tipos` VALUES(14, 'RetroExcavadora', 'Backhoe');
INSERT INTO `tipos` VALUES(15, 'Martillo Hidraulico', 'Breaker');
INSERT INTO `tipos` VALUES(16, 'Tractor', 'Tractor');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(45) DEFAULT NULL COMMENT '		',
  `Password` varchar(32) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdUsuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` VALUES(1, 'garrison', 'gameover', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
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

INSERT INTO `ventas` VALUES(1, '2011-10-30 00:00:00', 1900, 35, 2, 1);
INSERT INTO `ventas` VALUES(2, '2011-10-31 00:00:00', 9500, 38, 1, 1);

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
