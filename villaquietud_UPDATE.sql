-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2021 a las 22:50:40
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `mes_aportacion` int(5) NOT NULL,
  `anio_aportacion` int(6) NOT NULL,
  `cantidad` double NOT NULL,
  `status` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario_aportacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aportaciones`
--

INSERT INTO `aportaciones` (`id`, `fecharegistro`, `mes_aportacion`, `anio_aportacion`, `cantidad`, `status`, `id_usuario`, `comentario_aportacion`) VALUES
(1, '2021-03-07 00:00:00', 1, 2020, 4545, 1, 19, 'asdasd'),
(2, '2021-03-07 19:03:20', 1, 2021, 13123, 1, 19, 'asdasd'),
(3, '2021-03-07 19:03:20', 4, 2019, 587, 1, 19, 'asdasd'),
(4, '2021-03-07 19:03:20', 3, 2020, 8998, 1, 19, 'asdasd'),
(5, '2021-03-07 22:03:24', 3, 2021, 4500, 1, 18, 'Manuel Canul');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automobiles`
--

CREATE TABLE `automobiles` (
  `id` int(11) NOT NULL,
  `fecharegistro` date NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` int(10) NOT NULL,
  `anio` int(10) NOT NULL,
  `color` varchar(50) NOT NULL,
  `placas` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `automobiles`
--

INSERT INTO `automobiles` (`id`, `fecharegistro`, `marca`, `modelo`, `anio`, `color`, `placas`, `id_usuario`) VALUES
(1, '2021-03-07', 'dasd', 1122, 2133, 'Rojo', '1231-1313-321', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `calle` text NOT NULL,
  `numeroext` int(11) NOT NULL,
  `piso` int(11) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `alcaldia` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `id_usuario`, `calle`, `numeroext`, `piso`, `colonia`, `alcaldia`, `ciudad`) VALUES
(1, 19, 'Conocido Conocido Conocido Conocido Conocido Conocido Conocido Conocido Conocido Conocido Conocido C', 321, 789, 'Conocido', 'Conocido', 'Conocido'),
(2, 20, 'Conocido', 1, 1, 'Conocido', 'Conocido', 'Conocido'),
(3, 18, 'dadadadasdadasd', 12, 13, 'dasda', 'ada', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otraaportacion`
--

CREATE TABLE `otraaportacion` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `otraaportacion`
--

INSERT INTO `otraaportacion` (`id`, `descripcion`, `cantidad`, `fecha`, `id_usuario`) VALUES
(1, 'Macbook Pro', 2, '2021-03-07 19:03:48', 19);

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
(20, 'german sanchez', 'cheapdone@gmail.com', '1faaae7ec4089e5008678e27e832a716', 1, '5513221470'),
(23, 'Manuel Canul', 'manuel.canul109@gmail.com', 'b155dda921e5b841733a8c5404c8164c', 2, '9991714216');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aportaciones`
--
ALTER TABLE `aportaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `automobiles`
--
ALTER TABLE `automobiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `otraaportacion`
--
ALTER TABLE `otraaportacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aportaciones`
--
ALTER TABLE `aportaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `automobiles`
--
ALTER TABLE `automobiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `otraaportacion`
--
ALTER TABLE `otraaportacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aportaciones`
--
ALTER TABLE `aportaciones`
  ADD CONSTRAINT `aportaciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `automobiles`
--
ALTER TABLE `automobiles`
  ADD CONSTRAINT `automobiles_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `otraaportacion`
--
ALTER TABLE `otraaportacion`
  ADD CONSTRAINT `otraaportacion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
