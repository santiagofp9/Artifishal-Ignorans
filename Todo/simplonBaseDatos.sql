-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2019 a las 12:39:15
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simplon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `ciudad` varchar(32) DEFAULT NULL,
  `fk_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `ciudad`, `fk_pais`) VALUES
(1, 'Madrid', 1),
(2, 'Barcelona', 1),
(3, 'Bilbao', 1),
(4, 'Sevilla', 1),
(5, 'París', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coder`
--

CREATE TABLE `coder` (
  `id_coders` int(11) NOT NULL,
  `nombre` varchar(24) DEFAULT NULL,
  `apellido1` varchar(24) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `nacionalidad` int(11) NOT NULL,
  `fk_promocion` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `apellido2` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coder`
--

INSERT INTO `coder` (`id_coders`, `nombre`, `apellido1`, `dni`, `nacimiento`, `nacionalidad`, `fk_promocion`, `status`, `apellido2`) VALUES
(1, 'a', 'a', '1', '1992-12-12', 1, 1, 1, 'm'),
(2, 'b', 'b', '2', '1992-11-12', 1, 1, 1, 'l'),
(3, 'c', 'c', '3', '1992-10-12', 2, 3, 1, 'k'),
(4, 'd', 'd', '4', '1992-09-12', 1, 1, 1, 'j'),
(5, 'e', 'e', '5', '1992-08-12', 4, 2, 1, 'f'),
(6, 'f', 'f', '6', '1992-07-12', 1, 1, 1, 'e'),
(7, 'j', 'j', '7', '1992-06-12', 2, 3, 1, 'd'),
(8, 'k', 'k', '8', '1992-05-12', 1, 1, 1, 'c'),
(9, 'l', 'l', '9', '1992-04-12', 3, 3, 1, 'b'),
(10, 'm', 'm', '10', '1992-03-12', 1, 1, 1, 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabrica`
--

CREATE TABLE `fabrica` (
  `id_fabrica` int(11) NOT NULL,
  `fabrica` varchar(32) DEFAULT NULL,
  `fk_ciudad` int(11) NOT NULL,
  `fabricaStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fabrica`
--

INSERT INTO `fabrica` (`id_fabrica`, `fabrica`, `fk_ciudad`, `fabricaStatus`) VALUES
(1, 'Tomillo F5', 1, 1),
(2, 'ParisLab', 5, 1),
(3, 'Prueba', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `pais` varchar(32) DEFAULT NULL,
  `nacionalidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `pais`, `nacionalidad`) VALUES
(1, 'España', 'española'),
(2, 'Francia', 'francesa'),
(3, 'Venezuela', 'venezolana'),
(4, 'Perú', 'peruana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id_promocion` int(11) NOT NULL,
  `promocion` varchar(32) DEFAULT NULL,
  `fk_promoyear` int(11) NOT NULL,
  `fk_fabrica` int(11) NOT NULL,
  `statusPromocion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`id_promocion`, `promocion`, `fk_promoyear`, `fk_fabrica`, `statusPromocion`) VALUES
(1, 'Full stack', 1, 1, 1),
(2, 'Ciberseguridad', 1, 1, 1),
(3, 'Cybersécurité ', 1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promoyear`
--

CREATE TABLE `promoyear` (
  `id_promoyear` int(11) NOT NULL,
  `promoyear` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promoyear`
--

INSERT INTO `promoyear` (`id_promoyear`, `promoyear`) VALUES
(1, 2019);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `fk_pais` (`fk_pais`);

--
-- Indices de la tabla `coder`
--
ALTER TABLE `coder`
  ADD PRIMARY KEY (`id_coders`),
  ADD KEY `nacionalidad` (`nacionalidad`),
  ADD KEY `fk_promocion` (`fk_promocion`);

--
-- Indices de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  ADD PRIMARY KEY (`id_fabrica`),
  ADD KEY `fk_ciudad` (`fk_ciudad`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`id_promocion`),
  ADD KEY `fk_promoyear` (`fk_promoyear`),
  ADD KEY `fk_fabrica` (`fk_fabrica`);

--
-- Indices de la tabla `promoyear`
--
ALTER TABLE `promoyear`
  ADD PRIMARY KEY (`id_promoyear`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `coder`
--
ALTER TABLE `coder`
  MODIFY `id_coders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  MODIFY `id_fabrica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id_promocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `promoyear`
--
ALTER TABLE `promoyear`
  MODIFY `id_promoyear` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`fk_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `coder`
--
ALTER TABLE `coder`
  ADD CONSTRAINT `coder_ibfk_1` FOREIGN KEY (`nacionalidad`) REFERENCES `pais` (`id_pais`),
  ADD CONSTRAINT `coder_ibfk_2` FOREIGN KEY (`fk_promocion`) REFERENCES `promocion` (`id_promocion`);

--
-- Filtros para la tabla `fabrica`
--
ALTER TABLE `fabrica`
  ADD CONSTRAINT `fabrica_ibfk_1` FOREIGN KEY (`fk_ciudad`) REFERENCES `ciudad` (`id_ciudad`);

--
-- Filtros para la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD CONSTRAINT `promocion_ibfk_1` FOREIGN KEY (`fk_promoyear`) REFERENCES `promoyear` (`id_promoyear`),
  ADD CONSTRAINT `promocion_ibfk_2` FOREIGN KEY (`fk_fabrica`) REFERENCES `fabrica` (`id_fabrica`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
