-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-09-2016 a las 15:20:29
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

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
  `codigo_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`codigo_carrera`, `nombre_carrera`) VALUES
(1, 'audiovisuales'),
(2, 'musica'),
(3, 'lengua'),
(4, 'geometria'),
(6, 'matematicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_tutor`
--

CREATE TABLE `docente_tutor` (
  `codigo_docente` int(200) NOT NULL,
  `nombre_docente` varchar(500) NOT NULL,
  `apellido_docente` varchar(500) NOT NULL,
  `email_docente` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `codigo_empresa` int(200) NOT NULL,
  `nombre_empresa` varchar(500) NOT NULL,
  `representante_empresa` varchar(500) NOT NULL,
  `cedula_representante` int(200) NOT NULL,
  `tipo_empresa` varchar(500) NOT NULL,
  `direccion_empresa` varchar(500) NOT NULL,
  `telefono_empresa` varchar(500) NOT NULL,
  `web_empresa` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`codigo_empresa`, `nombre_empresa`, `representante_empresa`, `cedula_representante`, `tipo_empresa`, `direccion_empresa`, `telefono_empresa`, `web_empresa`) VALUES
(1, 'qbit', 'jose', 984235235, 'natural', 'los andes', '22124353', 'qbit.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `codigo_estado` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `codigo_estudiante` int(200) NOT NULL,
  `nombre_estudiante` varchar(500) NOT NULL,
  `apellido_estudiante` varchar(500) NOT NULL,
  `cedula_estudiante` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `codigo_facultad` int(200) NOT NULL,
  `nombre_facultad` varchar(250) NOT NULL,
  `direccion_facultad` varchar(500) NOT NULL,
  `telefono_facultad` varchar(500) NOT NULL,
  `email_facultad` varchar(500) NOT NULL,
  `web_facultad` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `codigo_materia` int(150) NOT NULL,
  `nombre_materia` varchar(200) NOT NULL,
  `curso_materia` varchar(200) NOT NULL,
  `hora_materia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `codigo_semestre` int(200) NOT NULL,
  `nombre_semestre` varchar(500) NOT NULL,
  `inicio_semestre` varchar(500) NOT NULL,
  `final_semestre` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codigo_usuario` int(50) NOT NULL,
  `nombre_usuario` varchar(200) NOT NULL,
  `pass_usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo_usuario`, `nombre_usuario`, `pass_usuario`) VALUES
(1, 'jaime', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD UNIQUE KEY `cod_carrera` (`codigo_carrera`);

--
-- Indices de la tabla `docente_tutor`
--
ALTER TABLE `docente_tutor`
  ADD UNIQUE KEY `cod_doc` (`codigo_docente`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD UNIQUE KEY `cod_empresa` (`codigo_empresa`),
  ADD UNIQUE KEY `cedula_repre` (`cedula_representante`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD UNIQUE KEY `cod_estu` (`codigo_estudiante`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD UNIQUE KEY `nom_facu` (`codigo_facultad`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD UNIQUE KEY `cod_mate` (`codigo_materia`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD UNIQUE KEY `cod_semestre` (`codigo_semestre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `cod_usu` (`codigo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `codigo_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `docente_tutor`
--
ALTER TABLE `docente_tutor`
  MODIFY `codigo_docente` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `codigo_empresa` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `codigo_estudiante` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `codigo_materia` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `codigo_semestre` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo_usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
