-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2018 a las 14:30:20
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `requerimiento`
--

-- --------------------------------------------------------
--
--Estructura de tabla para la tabla 'validaradmin'
--
------------------------------------------
CREATE TABLE `requerimiento`.`validaradmin` (
 `id` INT(11

  ) NOT NULL AUTO_INCREMENT ,
  `VIABILIDAD` VARCHAR(30) NOT NULL ,
   `fecha` VARCHAR(30) NOT NULL , 
   `SOLUCIONREQUERIMIENTO` VARCHAR(30) NOT NULL , 
   `REVIS1` VARCHAR(20) NOT NULL , `REVIS2` VARCHAR(20) NOT NULL ,
    `REVIS3` VARCHAR(20) NOT NULL , `REVIS4` VARCHAR(20) NOT NULL , 
    `revisado1` VARCHAR(20) NOT NULL , `revisado2` VARCHAR(20) NOT NULL , 
    `revisado3` VARCHAR(20) NOT NULL , `revisado4` VARCHAR(20) NOT NULL , 
    `PERSONAL` VARCHAR(20) NOT NULL , `PERSONAL2` VARCHAR(20) NOT NULL ,
     `PERSONAL3` VARCHAR(20) NOT NULL , 
     PRIMARY KEY (`id`(11))) ENGINE = InnoDB;

--
-- Estructura de tabla para la tabla `requerimiento_usuarios`
--


CREATE TABLE `requerimiento_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `procesos` varchar(20) COLLATE utf8_bin NOT NULL,
  `datefecha` date NOT NULL,
  `software` varchar(20) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(20) COLLATE utf8_bin NOT NULL,
  `requerimiento` varchar(20) COLLATE utf8_bin NOT NULL,
  `prioridad` varchar(20) COLLATE utf8_bin NOT NULL,
  `objetivorequerimiento` varchar(20) COLLATE utf8_bin NOT NULL,
  `alcancerequerimiento` varchar(20) COLLATE utf8_bin NOT NULL,
  `impactorequerimiento` varchar(20) COLLATE utf8_bin NOT NULL,
  `otrosprocesos` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `requerimiento_usuarios`
--

INSERT INTO `requerimiento_usuarios` (`id`, `usuario`, `procesos`, `datefecha`, `software`, `direccion`, `requerimiento`, `prioridad`, `objetivorequerimiento`, `alcancerequerimiento`, `impactorequerimiento`, `otrosprocesos`) VALUES
(1, 'carlos7', 'Software WEB', '2018-10-17', 'software', 'direccion', 'Reporte', 'Medio', 'objetivo', 'alcance', 'impacto', 'otrosprocesos'),
(2, 'carlos7', 'Software WEB', '2018-10-17', 'software', 'direccion', 'Reporte', 'Medio', 'objetivo', 'alcance', 'impacto', 'otrosprocesos'),
(3, 'carlos7', 'Software WEB', '2018-10-17', 'software', 'direccion', 'Reporte', 'Medio', 'objetivo', 'alcance', 'impacto', 'otrosprocesos'),
(4, 'carlos7', 'Software WEB', '2018-10-17', 'software', 'direccion', 'Reporte', 'Medio', 'objetivo', 'alcance', 'impacto', 'otrosprocesos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(5) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario` insertar datos
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `password`) VALUES
(1, 'carlos7', ''),
(2, 'camila8', ''),
(4, 'pedro1', 'pedro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `requerimiento_usuarios`
--
ALTER TABLE `requerimiento_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `requerimiento_usuarios`
--
ALTER TABLE `requerimiento_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
