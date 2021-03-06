-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2021 a las 00:35:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `villaquietud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aportaciones`
--

CREATE TABLE `aportaciones` (
  `id` int(11) NOT NULL,
  `fecharegistro` datetime NOT NULL,
  `fecha` datetime NOT NULL,
  `cantidad` double NOT NULL,
  `status` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automobiles`
--

CREATE TABLE `automobiles` (
  `id` int(11) NOT NULL,
  `fecharegistro` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `modelo` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `placas` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numeroext` int(11) NOT NULL,
  `piso` int(11) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `alcaldia` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otraaportacion`
--

CREATE TABLE `otraaportacion` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(53) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Cobranza'),
(2, 'Administrador'),
(3, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `password` varchar(150) NOT NULL,
  `id_role` int(11) NOT NULL,
  `cel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `mail`, `password`, `id_role`, `cel`) VALUES
(18, 'victor manzanero', 'vctr.31@hotmail.com', '3d93a208cd3d1f190b9e52226dd4b538', 1, '9991925248'),
(19, 'alex lerma', 'alermax@gmail.com', '58dc439f93e996c9b164a9b40a0b720e', 1, '5538219866'),
(20, 'german sanchez', 'cheapdone@gmail.com', '1faaae7ec4089e5008678e27e832a716', 1, '5513221470');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aportaciones`
--
ALTER TABLE `aportaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `automobiles`
--
ALTER TABLE `automobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `otraaportacion`
--
ALTER TABLE `otraaportacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aportaciones`
--
ALTER TABLE `aportaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `automobiles`
--
ALTER TABLE `automobiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `otraaportacion`
--
ALTER TABLE `otraaportacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
