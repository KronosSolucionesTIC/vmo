-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2019 a las 18:39:51
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vmo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idArea` int(11) NOT NULL COMMENT 'Id del area',
  `nombreArea` varchar(100) NOT NULL COMMENT 'Nombre del area',
  `fkID_ciudad` int(4) NOT NULL COMMENT 'Fk ID de la ciudad'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idArea`, `nombreArea`, `fkID_ciudad`) VALUES
(1, 'Bogota Norte', 1),
(2, 'Bogota Centro', 1),
(3, 'Bogota Sur', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idCiudad` int(4) NOT NULL COMMENT 'Id de la ciudad',
  `nombreCiudad` varchar(100) NOT NULL COMMENT 'Nombre de la ciudad',
  `fkID_departamento` int(2) NOT NULL COMMENT 'Fk ID del departamento'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idCiudad`, `nombreCiudad`, `fkID_departamento`) VALUES
(1, 'Bogota', 1),
(2, 'Chia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `idDepartamento` int(2) NOT NULL COMMENT 'Id del departamento',
  `nombreDepartamento` varchar(200) NOT NULL COMMENT 'Nombre del departamento'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `nombreDepartamento`) VALUES
(1, 'Cundinamarca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) NOT NULL COMMENT 'Id del usuario',
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre del usuario',
  `email` varchar(100) NOT NULL COMMENT 'Email del usuario',
  `fkID_departamento` int(2) NOT NULL COMMENT 'FK de departamento',
  `fkID_ciudad` int(4) NOT NULL COMMENT 'FK de ciudad',
  `fkID_area` int(4) NOT NULL COMMENT 'FK de area',
  `estado` int(1) NOT NULL DEFAULT 1 COMMENT 'Estado en sistema del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de usuarios';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `email`, `fkID_departamento`, `fkID_ciudad`, `fkID_area`, `estado`) VALUES
(1, 'PRUEBA', 'correo@gmail.com', 1, 1, 1, 1),
(2, 'ok', 'correo@gmail.com', 0, 0, 0, 1),
(3, 'prueba 3', 'correo@gmail.com', 0, 0, 0, 1),
(4, 'asdfas', 'correo@gmail.com', 0, 0, 0, 1),
(5, 'prueba', 'correo@gmail.com', 0, 0, 0, 1),
(6, 'prueba', 'correo@gmail.com', 0, 0, 0, 1),
(7, 'prueba1', 'correo@gmail.com', 0, 0, 0, 1),
(8, 'prueba1', 'correo@gmail.com', 0, 0, 0, 1),
(9, 'prueba2', 'correo@gmail.com', 1, 1, 1, 1),
(10, 'prueba3', 'correo@gmail.com', 1, 1, 1, 1),
(11, 'prueba', 'correo@gmail.com', 1, 1, 1, 1),
(12, 'prueba', 'correo@gmail.com', 1, 1, 1, 1),
(13, 'prueba1', 'correo@gmail.com', 1, 1, 1, 1),
(14, 'prueba1', 'correo@gmail.com', 1, 1, 1, 1),
(15, 'prueba1', 'correo@gmail.com', 1, 1, 1, 1),
(16, 'prueba', 'correo@gmail.com', 1, 1, 1, 1),
(17, 'prueba1', 'kronossolucionestic@gmail.com', 1, 1, 1, 1),
(18, 'prueba1', 'kronossolucionestic@gmail.com', 1, 1, 1, 1),
(19, 'prueba1', 'kronossolucionestic@gmail.com', 1, 1, 1, 1),
(20, 'PRUEBA', 'correo@gmail.com', 1, 1, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idArea`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idCiudad`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`idDepartamento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del area', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idCiudad` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Id de la ciudad', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `idDepartamento` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Id del departamento', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Id del usuario', AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
