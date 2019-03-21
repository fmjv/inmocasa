-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-01-2017 a las 20:08:48
-- Versión del servidor: 5.1.73
-- Versión de PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inmocasa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmueble`
--

CREATE TABLE IF NOT EXISTS `inmueble` (
  `numin` int(11) NOT NULL AUTO_INCREMENT,
  `codin` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `localizacion` varchar(255) NOT NULL,
  `superficie` decimal(10,0) NOT NULL,
  `dormitorios` tinyint(11) NOT NULL,
  `cochera` tinyint(1) NOT NULL,
  `banco` tinyint(1) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`numin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `inmueble`
--

INSERT INTO `inmueble` (`numin`, `codin`, `tipo`, `localizacion`, `superficie`, `dormitorios`, `cochera`, `banco`, `precio`, `foto`) VALUES
(1, 'BN091342', 'PISO', 'BENALMÁDENA', '84', 2, 1, 1, '135800', 'piso.jpg'),
(2, 'VM978652', 'CHALET', 'VÉLEZ-MÁLAGA', '40', 1, 0, 1, '45000', 'chalet.jpg'),
(3, 'EST237589', 'CASA', 'ESTEPONA', '80', 2, 0, 1, '85000', 'casa.jpg'),
(4, 'MU235476', 'PISO', 'MURCIA', '144', 4, 1, 1, '96300', 'pisom.jpg'),
(6, 'AN479824', 'NAVE INDUSTRIAL', 'ANTEQUERA', '432', 0, 1, 1, '154000', 'nave.jpg'),
(9, '1', '1', '1', '1', 4, 1, 1, '0', '72.jpg'),
(10, '567894', 'CASA', 'aLHAURÍN EL GRANDE', '300', 4, 1, 1, '0', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `identificador` varchar(15) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo`, `identificador`, `pass`, `perfil`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(5, 'usuario', 'f8032d5cae3de20fcec887f395ec9a6a', 1),
(6, 'david', '172522ec1028ab781d9dfd17eaca4427', 1),
(7, 'javi', 'a14f8a540e78dae706d255750010a0f8', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
