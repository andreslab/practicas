-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2016 a las 00:44:56
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uni_2016-1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `cod_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_tutor`
--

CREATE TABLE `docente_tutor` (
  `cod_doc` int(200) NOT NULL,
  `nom_doc` varchar(500) NOT NULL,
  `ape_doc` varchar(500) NOT NULL,
  `email_doc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `cod_empresa` int(200) NOT NULL,
  `nom_empresa` varchar(500) NOT NULL,
  `repre_empresa` varchar(500) NOT NULL,
  `cedula_repre` int(200) NOT NULL,
  `tipo_empre` varchar(500) NOT NULL,
  `direccion_empre` varchar(500) NOT NULL,
  `tele_empre` varchar(500) NOT NULL,
  `sitio_web` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `cod_estu` int(200) NOT NULL,
  `nombre_estu` varchar(500) NOT NULL,
  `apellido_estu` varchar(500) NOT NULL,
  `cedula` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `nom_facu` int(200) NOT NULL,
  `direccion_facu` varchar(500) NOT NULL,
  `tele_facu` varchar(500) NOT NULL,
  `email_facu` varchar(500) NOT NULL,
  `pag_facu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `cod_mate` int(150) NOT NULL,
  `nom_mate` varchar(200) NOT NULL,
  `curso_mate` varchar(200) NOT NULL,
  `hora_mate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `cod_semestre` int(200) NOT NULL,
  `nombre_semestre` varchar(500) NOT NULL,
  `inicio_semestre` varchar(500) NOT NULL,
  `final_semestre` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usu` int(50) NOT NULL,
  `id_usu` varchar(200) NOT NULL,
  `contra_usu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD UNIQUE KEY `cod_carrera` (`cod_carrera`);

--
-- Indices de la tabla `docente_tutor`
--
ALTER TABLE `docente_tutor`
  ADD UNIQUE KEY `cod_doc` (`cod_doc`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD UNIQUE KEY `cod_empresa` (`cod_empresa`),
  ADD UNIQUE KEY `cedula_repre` (`cedula_repre`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD UNIQUE KEY `cod_estu` (`cod_estu`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD UNIQUE KEY `nom_facu` (`nom_facu`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD UNIQUE KEY `cod_mate` (`cod_mate`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD UNIQUE KEY `cod_semestre` (`cod_semestre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `cod_usu` (`cod_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `cod_carrera` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `docente_tutor`
--
ALTER TABLE `docente_tutor`
  MODIFY `cod_doc` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cod_empresa` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `cod_estu` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `nom_facu` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `cod_mate` int(150) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `cod_semestre` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usu` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
