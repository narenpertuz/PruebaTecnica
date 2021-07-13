-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2021 a las 00:46:32
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idregistro` int(11) NOT NULL,
  `numerodocumento` int(20) NOT NULL,
  `primernombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `segundonombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `primerapellido` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `segundoapellido` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(40) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idregistro`, `numerodocumento`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `telefono`, `correo`) VALUES
(70, 1085123456, 'CESAR', 'ANDRES', 'CUELLAR', 'MOLINA', 2147483647, 'CESARCUELLARAM@GMAIL.COM'),
(72, 39017543, 'ANDRES', 'CAROLINA', 'PEREZ', 'ARIZA', 2147483647, 'ANDRESPEREZCA@GMAIL.COM'),
(74, 2147483647, 'YULIANA', 'PAOLA', 'VILLA', 'LOPEZ', 2147483647, 'YULIANAVILLAPL@GMAIL.COM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', NULL),
(2, 'Invitado', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `primernombre` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `last_sesion` datetime DEFAULT NULL,
  `activacion` int(11) DEFAULT 0,
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) NOT NULL,
  `password_request` int(11) DEFAULT 0,
  `id_tipo` int(11) NOT NULL,
  `numerodocumento` int(11) NOT NULL,
  `segundonombre` varchar(45) DEFAULT NULL,
  `primerapellido` varchar(45) NOT NULL,
  `segundoapellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `rh` varchar(45) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `idrol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `password`, `primernombre`, `email`, `last_sesion`, `activacion`, `token`, `token_password`, `password_request`, `id_tipo`, `numerodocumento`, `segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `telefono`, `rh`, `foto`, `idrol`) VALUES
(2, 'admin', 'admin', 'Naren', 'narenpertuz@gmail.com', NULL, 0, '', '25d2a28b79156551b4c7758dc1baeba7', 1, 0, 132, 'David', 'Pertuz', 'Vides', 'Calle 5 Kra 9', 4131698, 'O+', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idregistro`) USING BTREE,
  ADD UNIQUE KEY `numerodocumento` (`numerodocumento`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_Usuario_Rol1_idx` (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idregistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
