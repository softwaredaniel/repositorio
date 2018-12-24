-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2018 a las 23:28:59
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

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
CREATE DATABASE  `requerimiento`;
----------------------------------------------------------



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento_usuarios`
--

CREATE TABLE `requerimiento_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `procesos` varchar(20) COLLATE utf8_bin NOT NULL,
  `datefecha` date NOT NULL,
  `software` varchar(100) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(100) COLLATE utf8_bin NOT NULL,
  `requerimiento` varchar(100) COLLATE utf8_bin NOT NULL,
  `prioridad` varchar(100) COLLATE utf8_bin NOT NULL,
  `objetivorequerimiento` varchar(200) COLLATE utf8_bin NOT NULL,
  `alcancerequerimiento` varchar(200) COLLATE utf8_bin NOT NULL,
  `impactorequerimiento` varchar(200) COLLATE utf8_bin NOT NULL,
  `otrosprocesos` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `requerimiento_usuarios`
--

INSERT INTO `requerimiento_usuarios` (`id`, `usuario`, `procesos`, `datefecha`, `software`, `direccion`, `requerimiento`, `prioridad`, `objetivorequerimiento`, `alcancerequerimiento`, `impactorequerimiento`, `otrosprocesos`) VALUES
(1, 'carlos7', 'procesos web', '2018-11-14', 'software', 'direccion tics', 'Falla', 'Alto', 'objetivo', 'alcance', 'impacto', 'otros procesos'),
(2, 'Andres', 'Sistemas', '2018-11-15', 'software web que se requiere', 'direccion tics', 'Falla', 'Alto', 'x', 'x', 'x', 'x'),
(3, 'jose daniel', 'Sistemas', '2018-11-16', 'software web que se requiere', 'direccion tics', 'Falla', 'Alto', 'm', 'm', 'm', 'm');

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
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `password`) VALUES
(1, 'carlos7', ''),
(2, 'camila8', ''),
(5, 'jose daniel', '123'),
(6, 'Andres', ''),
(8, 'administrador', 'Alianza2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validaradmin`
--

CREATE TABLE `validaradmin` (
  `id` int(11) NOT NULL,
  `VIABILIDAD` varchar(30) NOT NULL,
  `tiempo` varchar(30) NOT NULL,
  `SOLUCIONREQUERIMIENTO` varchar(30) NOT NULL,
  `comentarios` varchar(30) NOT NULL,
  `REVIS1` varchar(20) NOT NULL,
  `REVIS2` varchar(20) NOT NULL,
  `REVIS3` varchar(20) NOT NULL,
  `REVIS4` varchar(20) NOT NULL,
  `revisado` varchar(20) NOT NULL,
  `revisado2` varchar(20) NOT NULL,
  `revisado3` varchar(20) NOT NULL,
  `revisado4` varchar(20) NOT NULL,
  `PERSONAL` varchar(20) NOT NULL,
  `PERSONAL2` varchar(20) NOT NULL,
  `PERSONAL3` varchar(20) NOT NULL,
  `fecha1` varchar(20) NOT NULL,
  `fecha2` int(20) NOT NULL,
  `fecha3` int(20) NOT NULL,
  `fecha4` varchar(20) NOT NULL,
  `id_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `validaradmin`
--

INSERT INTO `validaradmin` (`id`, `VIABILIDAD`, `tiempo`, `SOLUCIONREQUERIMIENTO`, `comentarios`, `REVIS1`, `REVIS2`, `REVIS3`, `REVIS4`, `revisado`, `revisado2`, `revisado3`, `revisado4`, `PERSONAL`, `PERSONAL2`, `PERSONAL3`, `fecha1`, `fecha2`, `fecha3`, `fecha4`, `id_usuario`) VALUES
(8, 'viable', 'tiempo', 'solucion', 'comentarios', 'oscar', 'ana milena', 'jhonana', 'DR.jymmi carpeta', 'si', 'no', 'si', 'si', 'personal', 'victor andres ochoa', 'Ing.erika', '2018-10-29 ', 2018, 2018, '2018-10-28 ', '0'),
(9, 'viable', 'tiempo', 'solucion', 'comentarios', 'oscar', 'ana milena', 'jhonana', 'DR.jymmi carpeta', 'si', 'no', 'si', 'si', 'personal', 'victor andres ochoa', 'Ing.erika', '2018-10-29 ', 2018, 2018, '2018-10-28 ', '0'),
(10, 'viable', 'tiempo', 'solucion', 'comentarios', 'oscar', 'ana milena', 'jhonana', 'DR.jymmi carpeta', 'si', 'no', 'si', 'si', 'personal', 'victor andres ochoa', 'Ing.erika', '2018-10-29 ', 2018, 2018, '2018-10-28 ', '1'),
(11, 'desarrollo', 'tiempo', 'solucion', 'comentarios', 'Dr.JHOANA SARMIENTO', 'DR. BORIS MEJIA', 'Dr.Jimmy Carpeta', 'DR.OSCAR', 'si', 'si', 'si', 'no', 'personal', 'victor andres ochoa', 'DR.MARIA DEL PILAR', '2018-11-07 ', 2018, 2018, '2018-11-02 ', '<?php echo $id; ?>');

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
-- Indices de la tabla `validaradmin`
--
ALTER TABLE `validaradmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `requerimiento_usuarios`
--
ALTER TABLE `requerimiento_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `validaradmin`
--
ALTER TABLE `validaradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
