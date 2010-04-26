-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-04-2010 a las 15:39:19
-- Versión del servidor: 5.1.30
-- Versión de PHP: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `buyigoco_clasififb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificado`
--

CREATE TABLE IF NOT EXISTS `clasificado` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contenido` text COLLATE utf8_unicode_ci,
  `subcategoria` int(11) DEFAULT NULL,
  `usuario` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clasificado_usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clasificado` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clasificado` (`clasificado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciudad` int(11) DEFAULT NULL,
  `fbid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_inscripcion` date DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `clasificado`
--
ALTER TABLE `clasificado`
  ADD CONSTRAINT `clasificado_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`clasificado`) REFERENCES `clasificado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
