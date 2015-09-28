-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-09-2015 a las 08:14:17
-- Versión del servidor: 5.5.44
-- Versión de PHP: 5.6.13-1+deb.sury.org~precise+3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `apptarea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE IF NOT EXISTS `listas` (
  `id_lista` int(11) NOT NULL,
  `id_usuario` varchar(50) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `fechacreacion` datetime NOT NULL,
  `fechamodificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_lista`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listas`
--

INSERT INTO `listas` (`id_lista`, `id_usuario`, `titulo`, `fechacreacion`, `fechamodificacion`) VALUES
(1, 'ierai', 'Prueba', '2015-09-23 12:00:00', NULL),
(2, 'ierai', 'prueba2', '2015-09-25 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listascompartidas`
--

CREATE TABLE IF NOT EXISTS `listascompartidas` (
  `id_lista` int(11) NOT NULL,
  `id_usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`id_lista`,`id_usuario`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listascompartidas`
--

INSERT INTO `listascompartidas` (`id_lista`, `id_usuario`) VALUES
(1, 'chris');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `id_tarea` int(11) NOT NULL,
  `id_lista` int(11) NOT NULL,
  `estado` char(1) NOT NULL COMMENT '0->Pendiente/1->En curso/2->Sin finalizar/3->Finalizado',
  `contenido` varchar(600) NOT NULL,
  PRIMARY KEY (`id_tarea`),
  KEY `id_lista` (`id_lista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id_tarea`, `id_lista`, `estado`, `contenido`) VALUES
(1, 1, '0', 'Realizar formularios'),
(2, 1, '0', 'Diseño de BD'),
(3, 2, '0', 'contenido de la prueba 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` varchar(25) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `pass`, `nombre`, `apellido1`, `apellido2`, `email`) VALUES
('chris', 'chris', 'Chris', 'Kwiatkowski', '', 'chris@gmail.com'),
('ierai', 'ierai', 'ierai', 'Elizondo', 'Fernandez', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `listas`
--
ALTER TABLE `listas`
  ADD CONSTRAINT `listas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `listascompartidas`
--
ALTER TABLE `listascompartidas`
  ADD CONSTRAINT `listascompartidas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `tareas_ibfk_1` FOREIGN KEY (`id_lista`) REFERENCES `listas` (`id_lista`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
