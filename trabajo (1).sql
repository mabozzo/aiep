-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2019 a las 01:49:42
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `rut_ad` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`rut_ad`, `nombre`, `apellidos`, `username`, `password`) VALUES
(1111, 'gabriel', 'rios', 'gaa', '2222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `rut_alu` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `edad` varchar(30) NOT NULL,
  `fechanaci` varchar(30) NOT NULL,
  `nacionalidad` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `sexo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`rut_alu`, `nombre`, `apellidos`, `edad`, `fechanaci`, `nacionalidad`, `ciudad`, `provincia`, `telefono`, `direccion`, `sexo`) VALUES
(10, 'ccc', 'rios ', 'u', 'jj', 'a', 'aa', 'a', '88888888', 'maipu 222', 'a'),
(18, 'ccc', 'rios ', 'u', 'jj', 'a', 'aa', 'a', '', 'maipu 222', 'a'),
(29, 'orlando', 'rios', 'm', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(444, 'ccc', 'rios ', 'u', 'jj', 'a', 'aa', 'a', '88888888', 'maipu 222', 'a'),
(2424, 'gabriel', 'rios ', '222', '3 de enero', 'chile', 'concepcion', 'asas', '88888888', 'maipu 222', 'masculino'),
(2425, '', '', '', '', '', '', '', '', '', ''),
(2426, '', '', '', '', '', '', '', '', '', ''),
(2427, '', '', '', '', '', '', '', '', '', ''),
(2428, '', '', '', '', '', '', '', '', '', ''),
(2429, '', '', '', '', '', '', '', '', '', ''),
(2430, '', '', '', '', '', '', '', '', '', ''),
(2431, '', '', '', '', '', '', '', '', '', ''),
(2432, '', '', '', '', '', '', '', '', '', ''),
(2433, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `rut_doc` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `edad` varchar(30) NOT NULL,
  `fecha_nac` varchar(30) NOT NULL,
  `nacionalidad` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `profesion` varchar(30) NOT NULL,
  `posgrados` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`rut_doc`, `nombre`, `apellidos`, `edad`, `fecha_nac`, `nacionalidad`, `ciudad`, `telefono`, `direccion`, `sexo`, `profesion`, `posgrados`) VALUES
(8, 'fabian', 'reyes', '20', '3 enero', 'chilena', 'concepcion', '23232323', 'maipu 222', 'masculino', 'profesor', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `id_modulo` int(10) NOT NULL,
  `rut_ad` int(10) NOT NULL,
  `rut_alu` int(10) NOT NULL,
  `rut_doc` int(10) NOT NULL,
  `carrera` varchar(30) NOT NULL,
  `semestre` varchar(30) NOT NULL,
  `fecha_inicio` varchar(30) NOT NULL,
  `fecha_termino` varchar(30) NOT NULL,
  `sala` varchar(10) NOT NULL,
  `bloque` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`id_modulo`, `rut_ad`, `rut_alu`, `rut_doc`, `carrera`, `semestre`, `fecha_inicio`, `fecha_termino`, `sala`, `bloque`) VALUES
(1, 1111, 10, 8, 'programacion', '2sementre', '3 marzo 2019', '20 dic 2019', '3', 'd-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_nota` int(2) NOT NULL,
  `id_modulo` int(2) NOT NULL,
  `nota1` int(2) NOT NULL,
  `nota2` int(2) NOT NULL,
  `nota3` int(2) NOT NULL,
  `notaexamen` int(2) NOT NULL,
  `examen1` int(2) NOT NULL,
  `examen2` int(2) NOT NULL,
  `notafinal` int(2) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id_nota`, `id_modulo`, `nota1`, `nota2`, `nota3`, `notaexamen`, `examen1`, `examen2`, `notafinal`, `estado`) VALUES
(1, 1, 60, 60, 60, 60, 60, 60, 60, 'aprobado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `rut_apo` int(11) NOT NULL,
  `rut_alu` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `profesion` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`rut_apo`, `rut_alu`, `nombre`, `apellidos`, `profesion`, `telefono`, `direccion`) VALUES
(1, 10, 'roberto', 'canela mata', 'profesor', '22222222', ' freire 222 concepcion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`rut_ad`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`rut_alu`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`rut_doc`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id_modulo`),
  ADD KEY `rut_ad` (`rut_ad`),
  ADD KEY `rut_alu` (`rut_alu`),
  ADD KEY `rut_doc` (`rut_doc`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_modulo` (`id_modulo`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`rut_apo`),
  ADD KEY `rut_alu` (`rut_alu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `rut_alu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2434;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `rut_doc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id_nota` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `rut_apo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD CONSTRAINT `fk_modulo_adminis` FOREIGN KEY (`rut_ad`) REFERENCES `administrador` (`rut_ad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_modulo_alumno` FOREIGN KEY (`rut_alu`) REFERENCES `alumno` (`rut_alu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_modulo_docente` FOREIGN KEY (`rut_doc`) REFERENCES `docente` (`rut_doc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_notas_modulo` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id_modulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `fk_padres-alumno` FOREIGN KEY (`rut_alu`) REFERENCES `alumno` (`rut_alu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
