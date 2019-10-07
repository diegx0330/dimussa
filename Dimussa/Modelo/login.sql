-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2019 a las 23:32:17
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autorprueba`
--

CREATE TABLE `autorprueba` (
  `idAutor` int(10) NOT NULL,
  `NombreAutor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autorprueba`
--

INSERT INTO `autorprueba` (`idAutor`, `NombreAutor`) VALUES
(1, 'Anónimo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `idPregunta` int(11) NOT NULL,
  `DescrPregunta` varchar(255) DEFAULT NULL,
  `ImgPregunta` varchar(255) NOT NULL,
  `idPrueba` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idPregunta`, `DescrPregunta`, `ImgPregunta`, `idPrueba`) VALUES
(1, '¿Qué palabra es más general o comprende a las otras cuatro?', '', 1),
(4, '¿Qué palabra completa mejor la frase siguiente?  LIBRO es a BIBLIOTECA como DIARIO es a  ……', '3.1.png', 1),
(5, '¿Qué figura de la derecha continúa la serie de la izquierda?', '3.2.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `IdPrueba` int(11) NOT NULL,
  `NombPrueba` varchar(150) DEFAULT NULL,
  `DescrPrueba` varchar(255) DEFAULT NULL,
  `idAutor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`IdPrueba`, `NombPrueba`, `DescrPrueba`, `idAutor`) VALUES
(1, 'Test de Inteligencia General IG-2', ' El Test IG-2 tiene como objetivo la medición de la inteligencia cristalizada, es decir, la capacidad cognitiva desarrollada en un contexto sociocultural.\r\n \r\nEl Test IG-2 consta de 50 ítems, formados por preguntas heterogéneas, cada uno de los cuales pre', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idRespuesta` int(11) NOT NULL,
  `idPregunta` int(11) DEFAULT NULL,
  `DescrPreg` varchar(255) DEFAULT NULL,
  `Valor` int(10) DEFAULT NULL,
  `Imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idRespuesta`, `idPregunta`, `DescrPreg`, `Valor`, `Imagen`) VALUES
(1, 5, 'A.', 0, '3.A'),
(2, 5, 'B.', 0, '3.B'),
(3, 5, 'C.', 1, '3.C'),
(4, 5, 'D.', 0, '3.D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idTipoDoc` int(11) NOT NULL,
  `DescripTipoDoc` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`idTipoDoc`, `DescripTipoDoc`) VALUES
(1, 'Cédula'),
(2, 'Pasaporte'),
(3, 'Tarjeta de Identidad'),
(4, 'Cédula de extranjería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL,
  `DescripTipoUsua` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `DescripTipoUsua`) VALUES
(1, 'Administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `IdTipoDoc` int(11) NOT NULL,
  `idTipoUsuario` int(11) NOT NULL,
  `NombreUsuario` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ApellidoUsuario` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `GeneroUsua` varchar(1) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `FechaNacUsua` date NOT NULL,
  `ClaveUsua` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `DireccionUsua` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `CelUsua` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `CorreoUsua` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `IdTipoDoc`, `idTipoUsuario`, `NombreUsuario`, `ApellidoUsuario`, `GeneroUsua`, `FechaNacUsua`, `ClaveUsua`, `DireccionUsua`, `CelUsua`, `CorreoUsua`) VALUES
(1000084552, 1, 1, 'juan david ', 'ossa lopez', 'F', '2002-03-12', 'ossalopez123', 'carrera#34', '3023287813', 'ossalopez2002@gmail.com'),
(1001034871, 1, 1, 'ANTHONY', 'OSORIO', 'M', '2001-02-26', '1001034871', 'carrera#34', '3004478613', 'anthonyosorio726@gmail.com'),
(1001404447, 1, 1, 'Diego', 'Velez', 'M', '2003-03-30', 'diegovelez', 'cr28', '3216078365', 'velez.diego0330@gmail.com'),
(1004012494, 1, 1, 'Stiven ', 'Mosquera', 'M', '2001-06-06', '57226171a', 'Cll 106', '3003596778', 'Mosquera12345678930@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autorprueba`
--
ALTER TABLE `autorprueba`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`idPregunta`),
  ADD KEY `idPrueba` (`idPrueba`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`IdPrueba`),
  ADD KEY `idAutor` (`idAutor`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idRespuesta`),
  ADD KEY `idPregunta` (`idPregunta`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`idTipoDoc`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `Fk_Usuario_Tipo_Usuarui_idx` (`idTipoUsuario`),
  ADD KEY `FK_Usuario_TipoDoc_idx` (`IdTipoDoc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autorprueba`
--
ALTER TABLE `autorprueba`
  MODIFY `idAutor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `IdPrueba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`idPrueba`) REFERENCES `prueba` (`IdPrueba`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD CONSTRAINT `prueba_ibfk_1` FOREIGN KEY (`idAutor`) REFERENCES `autorprueba` (`idAutor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`idPregunta`) REFERENCES `preguntas` (`idPregunta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_Usuario_TipoDoc` FOREIGN KEY (`IdTipoDoc`) REFERENCES `tipodocumento` (`idTipoDoc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_Usuario_Tipo_Usuarui` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
