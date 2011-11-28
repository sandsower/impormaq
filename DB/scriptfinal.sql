-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2011 at 11:16 AM
-- Server version: 5.1.58
-- PHP Version: 5.3.6-13ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
('be1ca921407de83572c1a9f8d1e0468d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686; rv:7.0.1) Gecko/20100101 Firefox/7.0.1', 1322494558, 'a:4:{s:8:"username";s:8:"garrison";s:6:"UserId";s:1:"1";s:12:"is_logged_in";b:1;s:13:"cart_contents";a:6:{s:32:"3416a75f4cea9109507cacd8e2f2aefc";a:6:{s:5:"rowid";s:32:"3416a75f4cea9109507cacd8e2f2aefc";s:2:"id";s:2:"41";s:4:"name";s:3:"797";s:3:"qty";s:1:"1";s:5:"price";s:6:"135000";s:8:"subtotal";i:135000;}s:32:"a1d0c6e83f027327d8461063f4ac58a6";a:6:{s:5:"rowid";s:32:"a1d0c6e83f027327d8461063f4ac58a6";s:2:"id";s:2:"42";s:4:"name";s:4:"Reno";s:3:"qty";s:1:"1";s:5:"price";s:5:"76000";s:8:"subtotal";i:76000;}s:32:"17e62166fc8586dfa4d1bc0e1742c08b";a:6:{s:5:"rowid";s:32:"17e62166fc8586dfa4d1bc0e1742c08b";s:2:"id";s:2:"43";s:4:"name";s:5:"Volvo";s:3:"qty";s:1:"1";s:5:"price";s:6:"125000";s:8:"subtotal";i:125000;}s:32:"2838023a778dfaecdc212708f721b788";a:6:{s:5:"rowid";s:32:"2838023a778dfaecdc212708f721b788";s:2:"id";s:2:"51";s:4:"name";s:4:"W20E";s:3:"qty";s:1:"1";s:5:"price";s:6:"500000";s:8:"subtotal";i:500000;}s:11:"total_items";i:4;s:10:"cart_total";i:836000;}}');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`IdClientes`, `Nombres`, `APaterno`, `AMaterno`, `Empresa`, `Calle`, `NumeroExt`, `NumeroInt`, `Colonia`, `CodigoPostal`, `Municipio`, `Estado`, `Pais`, `Celular`, `Oficina`, `Radio`, `CorreoElectronico`, `RazonSocial`, `RFC`) VALUES
(1, 'Victor', 'Valenzuela', 'Martinez', 'Sanders', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Carlos', 'Bolaños', 'Lopez', 'Garrita Co.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'David', 'Diaz', 'Avalos', 'LOL Co.', 'askldjasokj', '101', '282', 'laksdlak', '20990', 'apdkpasd', 'pokaspodk', 'okaspdoa', '1093891293', '918929381', '81279387198', 'ksjaldkjsa@kjnsadka.com', 'ASMDKSQOWMDSA', 'ASDOQKWO900'),
(4, 'Fernando Ulises', 'Medrano', 'Hernandez', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Esteban', 'Uscanga', 'Algo mas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contenido`
--

CREATE TABLE IF NOT EXISTS `contenido` (
  `IdContenido` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(200) NOT NULL,
  `Texto` text NOT NULL,
  `Area` int(11) NOT NULL,
  PRIMARY KEY (`IdContenido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contenido`
--

INSERT INTO `contenido` (`IdContenido`, `Titulo`, `Texto`, `Area`) VALUES
(1, 'Nosotros', 'Somos una empresa dedicada a la distribución de portales web que publicitan PYMES estatales y nacionales por medio de internet, al mismo tiempo que gestiona la relación cliente-empresa a través de un CRM que será el núcleo administrativo, en el que se incluirá una tienda electrónica con una interfaz de usuario amigable.', 1),
(2, 'Objetivo', 'Getit está desarrollado pensando en las PYMES mexicanas que necesiten tener presencia en internet para mejorar sus ventas y aumentar su cartera de clientes. Pensamos que cualquier sector industrial puede ser beneficiado con este producto, ya que es un sistema flexible, el cual se adapta a las necesidades de todas y cada una de las empresas.', 1),
(3, 'Misión', 'GetIt es una empresa comprometida con las PYMES mexicanas, ayudándolas a sobresalir entre sus competidores a través de productos y servicios vanguardistas y de alta calidad que le permite publicitarse y vender sus productos por medio de internet.', 1),
(4, 'Visión', 'Ser una empresa que sea reconocida a nivel nacional, con el respaldo de las pequeñas y medianas empresas, buscando una mejora continua para elevar la calidad y vanguardia de sus servicios y productos, cumpliendo con las necesidades tecnológicas que cada empresa requiera.', 1);

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
  `default` bit(1) DEFAULT NULL,
  PRIMARY KEY (`IdImagenes`),
  KEY `fk_Imagenes_Maquinas` (`idMaquina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=207 ;

--
-- Dumping data for table `imagenes`
--

INSERT INTO `imagenes` (`IdImagenes`, `idMaquina`, `file_name`, `file_type`, `file_path`, `full_path`, `raw_name`, `orig_name`, `client_name`, `file_ext`, `file_size`, `is_image`, `image_width`, `image_height`, `image_type`, `image_size_str`, `promo`, `default`) VALUES
(165, 34, 'images.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/34/', '/Users/Garrison/Sites/impormaq/images/34/images.jpg', 'images', 'images.jpg', 'images.jpg', '.jpg', '8.33', '1', '242', '208', 'jpeg', 'width="242" height="208"', b'1', b'1'),
(166, 35, 'maquinaria-pesada-construccion_05b7830_3.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/35/', '/Users/Garrison/Sites/impormaq/images/35/maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3', 'maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3.jpg', '.jpg', '99.1', '1', '500', '375', 'jpeg', 'width="500" height="375"', b'1', b'1'),
(169, 34, 'transportamos-maquinaria-pesada_b862425_3.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/34/promo/', '/Users/Garrison/Sites/impormaq/images/34/promo/transportamos-maquinaria-pesada_b862425_3.jpg', 'transportamos-maquinaria-pesada_b862425_3', 'transportamos-maquinaria-pesada_b862425_3.jpg', 'transportamos-maquinaria-pesada_b862425_3.jpg', '.jpg', '78.56', '1', '500', '375', 'jpeg', 'width="500" height="375"', b'1', b'1'),
(170, 37, '_maq-pesada.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/37/', '/Users/Garrison/Sites/impormaq/images/37/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', b'1', b'1'),
(171, 37, '34190370_3.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/37/', '/Users/Garrison/Sites/impormaq/images/37/34190370_3.jpg', '34190370_3', '34190370_3.jpg', '34190370_3.jpg', '.jpg', '42.53', '1', '625', '469', 'jpeg', 'width="625" height="469"', b'1', b'1'),
(172, 37, 'archcolorfd.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/37/promo/', '/Users/Garrison/Sites/impormaq/images/37/promo/archcolorfd.jpg', 'archcolorfd', 'archcolorfd.jpg', 'archcolorfd.jpg', '.jpg', '1154.75', '1', '1440', '900', 'jpeg', 'width="1440" height="900"', b'1', b'1'),
(181, 38, '_maq-pesada.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/38/', '/Users/Garrison/Sites/impormaq/images/38/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', b'1', b'1'),
(182, 38, 'images.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/38/', '/Users/Garrison/Sites/impormaq/images/38/images.jpg', 'images', 'images.jpg', 'images.jpg', '.jpg', '8.33', '1', '242', '208', 'jpeg', 'width="242" height="208"', b'1', b'1'),
(185, 39, '_maq-pesada.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/39/', '/Users/Garrison/Sites/impormaq/images/39/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', b'1', b'1'),
(186, 39, 'maquinaria-pesada-construccion_05b7830_3.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/39/', '/Users/Garrison/Sites/impormaq/images/39/maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3', 'maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3.jpg', '.jpg', '99.1', '1', '500', '375', 'jpeg', 'width="500" height="375"', b'1', b'1'),
(187, 39, 'transportamos-maquinaria-pesada_b862425_3.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/39/promo/', '/Users/Garrison/Sites/impormaq/images/39/promo/transportamos-maquinaria-pesada_b862425_3.jpg', 'transportamos-maquinaria-pesada_b862425_3', 'transportamos-maquinaria-pesada_b862425_3.jpg', 'transportamos-maquinaria-pesada_b862425_3.jpg', '.jpg', '78.56', '1', '500', '375', 'jpeg', 'width="500" height="375"', b'1', NULL),
(188, 36, '_maq-pesada.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/36/promo/', '/Users/Garrison/Sites/impormaq/images/36/promo/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', b'0', b'0'),
(189, 36, '_maq-pesada.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/36/', '/Users/Garrison/Sites/impormaq/images/36/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', b'1', b'0'),
(190, 36, '34190370_31.jpg', 'image/jpeg', '/Users/Garrison/Sites/impormaq/images/36/', '/Users/Garrison/Sites/impormaq/images/36/34190370_31.jpg', '34190370_31', '34190370_3.jpg', '34190370_3.jpg', '.jpg', '42.53', '1', '625', '469', 'jpeg', 'width="625" height="469"', b'0', b'1'),
(191, 40, 'Tractor.jpg', 'image/jpeg', '/var/www/impormaq/images/40/', '/var/www/impormaq/images/40/Tractor.jpg', 'Tractor', 'Tractor.jpg', 'Tractor.jpg', '.jpg', '17.69', '1', '302', '302', 'jpeg', 'width="302" height="302"', b'0', NULL),
(192, 40, 'Tractor.jpg', 'image/jpeg', '/var/www/impormaq/images/40/promo/', '/var/www/impormaq/images/40/promo/Tractor.jpg', 'Tractor', 'Tractor.jpg', 'Tractor.jpg', '.jpg', '17.69', '1', '302', '302', 'jpeg', 'width="302" height="302"', b'1', NULL),
(193, 41, '_maq-pesada.jpg', 'image/jpeg', '/var/www/impormaq/images/41/', '/var/www/impormaq/images/41/_maq-pesada.jpg', '_maq-pesada', '_maq-pesada.jpg', '_maq-pesada.jpg', '.jpg', '30.21', '1', '360', '290', 'jpeg', 'width="360" height="290"', b'0', b'1'),
(194, 43, 'maquinaria_pesada1.jpg', 'image/jpeg', '/var/www/impormaq/images/43/', '/var/www/impormaq/images/43/maquinaria_pesada1.jpg', 'maquinaria_pesada1', 'maquinaria_pesada1.jpg', 'maquinaria_pesada1.jpg', '.jpg', '150.68', '1', '537', '408', 'jpeg', 'width="537" height="408"', b'0', b'1'),
(195, 42, 'images.jpg', 'image/jpeg', '/var/www/impormaq/images/42/', '/var/www/impormaq/images/42/images.jpg', 'images', 'images.jpg', 'images.jpg', '.jpg', '8.33', '1', '242', '208', 'jpeg', 'width="242" height="208"', b'0', b'1'),
(196, 44, 'maquinaria-pesada-construccion_05b7830_3.jpg', 'image/jpeg', '/var/www/impormaq/images/44/', '/var/www/impormaq/images/44/maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3', 'maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3.jpg', '.jpg', '99.1', '1', '500', '375', 'jpeg', 'width="500" height="375"', b'0', b'1'),
(197, 45, 'cargadora-frontal-w20e-red.gif', 'image/gif', '/var/www/impormaq/images/45/', '/var/www/impormaq/images/45/cargadora-frontal-w20e-red.gif', 'cargadora-frontal-w20e-red', 'cargadora-frontal-w20e-red.gif', 'cargadora-frontal-w20e-red.gif', '.gif', '20.17', '1', '250', '172', 'gif', 'width="250" height="172"', b'0', b'1'),
(198, 46, 'cargador-compacto-465.gif', 'image/gif', '/var/www/impormaq/images/46/', '/var/www/impormaq/images/46/cargador-compacto-465.gif', 'cargador-compacto-465', 'cargador-compacto-465.gif', 'cargador-compacto-465.gif', '.gif', '48.76', '1', '500', '454', 'gif', 'width="500" height="454"', b'0', b'1'),
(199, 47, 'motoniveladora.jpg', 'image/jpeg', '/var/www/impormaq/images/47/', '/var/www/impormaq/images/47/motoniveladora.jpg', 'motoniveladora', 'motoniveladora.jpg', 'motoniveladora.jpg', '.jpg', '3.36', '1', '148', '100', 'jpeg', 'width="148" height="100"', b'0', b'1'),
(200, 48, 'nivoruga.jpg', 'image/jpeg', '/var/www/impormaq/images/48/', '/var/www/impormaq/images/48/nivoruga.jpg', 'nivoruga', 'nivoruga.jpg', 'nivoruga.jpg', '.jpg', '4.22', '1', '150', '113', 'jpeg', 'width="150" height="113"', b'0', b'1'),
(201, 49, 'cat.jpg', 'image/jpeg', '/var/www/impormaq/images/49/', '/var/www/impormaq/images/49/cat.jpg', 'cat', 'cat.jpg', 'cat.jpg', '.jpg', '6.44', '1', '280', '210', 'jpeg', 'width="280" height="210"', b'0', b'1'),
(203, 44, 'maquinaria-pesada-construccion_05b7830_3.jpg', 'image/jpeg', '/var/www/impormaq/images/44/promo/', '/var/www/impormaq/images/44/promo/maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3', 'maquinaria-pesada-construccion_05b7830_3.jpg', 'maquinaria-pesada-construccion_05b7830_3.jpg', '.jpg', '99.1', '1', '500', '375', 'jpeg', 'width="500" height="375"', b'1', NULL),
(204, 46, 'cargador-compacto-465.gif', 'image/gif', '/var/www/impormaq/images/46/promo/', '/var/www/impormaq/images/46/promo/cargador-compacto-465.gif', 'cargador-compacto-465', 'cargador-compacto-465.gif', 'cargador-compacto-465.gif', '.gif', '48.76', '1', '500', '454', 'gif', 'width="500" height="454"', b'1', NULL),
(205, 48, 'nivoruga.jpg', 'image/jpeg', '/var/www/impormaq/images/48/promo/', '/var/www/impormaq/images/48/promo/nivoruga.jpg', 'nivoruga', 'nivoruga.jpg', 'nivoruga.jpg', '.jpg', '4.22', '1', '150', '113', 'jpeg', 'width="150" height="113"', b'1', NULL),
(206, 47, 'motoniveladora.jpg', 'image/jpeg', '/var/www/impormaq/images/47/promo/', '/var/www/impormaq/images/47/promo/motoniveladora.jpg', 'motoniveladora', 'motoniveladora.jpg', 'motoniveladora.jpg', '.jpg', '3.36', '1', '148', '100', 'jpeg', 'width="148" height="100"', b'1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `imagenes_contenido`
--

CREATE TABLE IF NOT EXISTS `imagenes_contenido` (
  `IDImagenes_Contenido` int(11) NOT NULL AUTO_INCREMENT,
  `IDContenido` int(11) NOT NULL,
  `Filename` varchar(200) NOT NULL,
  `Posicion` int(11) NOT NULL,
  `IsLogo` int(11) NOT NULL,
  PRIMARY KEY (`IDImagenes_Contenido`),
  UNIQUE KEY `IDContenido` (`IDContenido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `maquinas`
--

INSERT INTO `maquinas` (`IdMaquina`, `Maquina`, `Modelo`, `Especificaciones`, `Precio`, `VideoUrl`, `IdTipos`, `IdMarcas`, `promo`, `venta`) VALUES
(34, 'Grua Case', '2010', 'Especificaciones<span class="Apple-tab-span" style="white-space:pre">	</span>', 1000, 'Google.com', 13, 53, b'1', b'1'),
(35, 'Retro Caterpillar', '2009', 'Especificaciones<span class="Apple-tab-span" style="white-space:pre">	</span>', 2000, 'google.com', 14, 54, b'1', b'1'),
(36, 'Tractor New Holand', '2009', 'Especificaciones<span class="Apple-tab-span" style="white-space:pre">	</span>', 3000, 'Google.com', 16, 55, b'0', b'0'),
(37, 'maquina de lalo', '2010', 'aksdjhjashdfjklashdjfkhasldf<span class="Apple-tab-span" style="white-space:pre">	</span>', 10000, '', 14, 56, b'1', b'1'),
(38, 'MaquinaD', 'sdada', '', 10000, '', 16, 54, b'1', b'1'),
(39, 'machina', '12786', 'asdlkjhalksh<span class="Apple-tab-span" style="white-space:pre">	</span>', 12378, 'asdasd', 16, 55, b'1', b'1'),
(40, 'Maquila liz', '2008', '', 12768, '', 14, 53, b'1', b'0'),
(41, '797', '2004', '', 135000, '', 16, 57, b'0', b'0'),
(42, 'Reno', '2002', '', 76000, '', 17, 53, b'0', b'0'),
(43, 'Volvo', '2001', '', 125000, '', 14, 58, b'0', b'0'),
(44, '330C', '2008', '', 175000, '', 18, 57, b'1', b'0'),
(45, 'W20E', '2009', '', 500000, '', 18, 53, b'0', b'1'),
(46, '465', '2002', '', 200000, '', 18, 53, b'1', b'0'),
(47, '845', '2000', '', 650000, '', 15, 53, b'1', b'0'),
(48, '650K Series 3', '1998', '', 750000, '', 16, 53, b'1', b'0'),
(49, '420 B', '2003', '', 465000, '', 14, 57, b'0', b'1'),
(50, '330C', '2008', '', 175000, '', 18, 57, b'0', b'0'),
(51, 'W20E', '2009', '', 500000, '', 18, 53, b'0', b'0'),
(52, '465', '2002', '', 200000, '', 18, 53, b'0', b'0'),
(53, '845', '2000', '', 650000, '', 15, 53, b'0', b'0'),
(54, '650K Series 3', '1998', '', 750000, '', 16, 53, b'0', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `IdMarca` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdMarca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`IdMarca`, `Marca`) VALUES
(53, 'Case'),
(54, 'Caterpillar'),
(55, 'NewHolland'),
(56, 'JohnDeer'),
(57, 'CAT'),
(58, 'BM'),
(59, 'Deere'),
(60, 'Homatsu');

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

-- --------------------------------------------------------

--
-- Table structure for table `promociones`
--

CREATE TABLE IF NOT EXISTS `promociones` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `promociones`
--

INSERT INTO `promociones` (`IdPromociones`, `TextoPromocional`, `TituloPromocional`, `IdMaquina`, `IdImagenes`, `PrecioPromocional`, `IdUsuarios`) VALUES
(1, 'Solo por promoción una rebaja de 100 dolares en esta Grua Case hasta el 1ero de enero', 'Grua Case $900', 34, NULL, 900, 1),
(2, 'ASDJAGSDHJGASJHDGKExcavadoraExcavadoraExcavadoraExcavadoraExcavadoraExcavadoraExcavadoraExcavadoraExcavadora', 'PROMOCION 123', 37, NULL, 9500, 1),
(3, 'Solo por este mes, Grua Caterpillar 2008, 4000 horas, llantas nuevas a un precio especial.', 'Promocion de verano', 39, NULL, 28716, 1),
(4, 'la promo del año', 'super peso', 40, 192, 1, 1),
(6, '¡Aproveche!', 'Precio especial de fin de año', 44, 203, 120000, 1),
(7, '¡Aproveche!', 'Precio especial de fin de año', 46, 204, 175000, 1),
(8, 'Aproveche!', 'Precio especial de fin de año', 48, 205, 500000, 1),
(9, 'Aproveche!', 'Precio especial de fin de año', 47, 206, 250000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `idTipos` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(45) DEFAULT NULL,
  `Type` varchar(50) NOT NULL,
  PRIMARY KEY (`idTipos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tipos`
--

INSERT INTO `tipos` (`idTipos`, `Tipo`, `Type`) VALUES
(13, 'Grua', 'Crane'),
(14, 'RetroExcavadora', 'Backhoe'),
(15, 'Martillo Hidraulico', 'Breaker'),
(16, 'Tractor', 'Tractor'),
(17, 'Montacargas', ''),
(18, 'Excavadora', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`IdVentas`, `Fecha`, `Monto`, `IdMaquina`, `IdClientes`, `IdUsuarios`) VALUES
(1, '2011-10-30 00:00:00', 1900, 35, 2, 1),
(2, '2011-10-31 00:00:00', 9500, 38, 1, 1),
(3, '2011-11-28 00:00:00', 465000, 49, 1, 1),
(4, '2011-11-28 00:00:00', 650000, 53, 1, 1),
(5, '2011-11-28 00:00:00', 76000, 42, 1, 1),
(6, '2011-11-28 00:00:00', 500000, 45, 1, 1),
(7, '2011-11-28 00:00:00', 200000, 52, 1, 1);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
