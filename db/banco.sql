-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-08-2017 a las 07:31:06
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco_sangre_personal`
--

CREATE TABLE `banco_sangre_personal` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `nacionalidad` varchar(1) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL,
  `telefono_fijo` varchar(50) NOT NULL,
  `telefono_celular` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banco_sangre_personal`
--

INSERT INTO `banco_sangre_personal` (`id`, `usuario_id`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `telefono_fijo`, `telefono_celular`, `cargo`) VALUES
(2, 6, 'V', '19881315', '30/05/1989', '04127624857', '02735338034', 'secretaria'),
(3, 2, 'V', '1561651', '30/05/1989', '04565656', '6565151561', 'secretaria'),
(4, 3, 'V', '156156', '30/05/1989', '1561561561', '56156165161', 'secretaria'),
(5, 7, 'V', '561516', '30/05/1989', '056465456', '54654564', 'secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes`
--

CREATE TABLE `donantes` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `edad` int(2) NOT NULL,
  `telefono_fijo` int(100) NOT NULL,
  `telefono_celular` int(100) NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes_estatus`
--

CREATE TABLE `donantes_estatus` (
  `id` int(11) NOT NULL,
  `donante_id` int(11) NOT NULL,
  `estatus` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes_historia`
--

CREATE TABLE `donantes_historia` (
  `id` int(11) NOT NULL,
  `donante_id` int(11) NOT NULL,
  `historia_id` int(11) NOT NULL,
  `repuesta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes_serologia`
--

CREATE TABLE `donantes_serologia` (
  `id` int(11) NOT NULL,
  `donante_id` int(11) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `VIH` varchar(50) NOT NULL,
  `HBSAG` varchar(50) NOT NULL,
  `ANTIVHC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes_tipeaje`
--

CREATE TABLE `donantes_tipeaje` (
  `id` int(11) NOT NULL,
  `donante_id` int(11) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `ABO` varchar(50) NOT NULL,
  `RH` varchar(50) NOT NULL,
  `PPII` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historias`
--

CREATE TABLE `historias` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorios`
--

CREATE TABLE `laboratorios` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `laboratorios`
--

INSERT INTO `laboratorios` (`id`, `razon_social`, `email`, `direccion`, `telefono`) VALUES
(1, 'asdasd', 'aqsd@gmail.com', 'asdasd', 'asdasdas'),
(2, 'asdas', 'la@gmail.com', 'asdas', '04245555');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorios_personal`
--

CREATE TABLE `laboratorios_personal` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `laboratorio_id` int(11) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL,
  `telefono_fijo` varchar(50) NOT NULL,
  `telefono_celular` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `laboratorios_personal`
--

INSERT INTO `laboratorios_personal` (`id`, `usuario_id`, `laboratorio_id`, `cedula`, `fecha_nacimiento`, `telefono_fijo`, `telefono_celular`, `cargo`) VALUES
(3, 0, 1, '19881316', '30/05/1989', '02735338034', '04120622044', 'analista'),
(4, 9, 1, '19881316', '30/05/1989', '02735338034', '04120622044', 'analista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `password`, `email`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Lucile Okuneva', '$2y$10$Zk5rXDvw1bSHk3Jo0kWjx.hnkoquOtylC7RfYrLdHtWMrmN6U2SIC', 'stiedemann.ricky@gmail.com', 'admin', '2017-07-29 13:46:09', '2017-07-29 13:46:09'),
(2, 'Dr. Otto McGlynn', '$2y$10$LyJj/.28AADGOetjF7ghHOakU1TF1FUfZPnf4iKgY776xqvLTpbR2', 'dickinson.vincenzo@brekke.com', 'banco', '2017-07-29 13:46:09', '2017-07-29 13:46:09'),
(3, 'Miss Savanah Bosco Jr.', '$2y$10$yvpKWvWPqiBaH5RCBnWPpeqmm5pjprEsJ43MOexivVTRO4Bu4V8cO', 'ykoss@hotmail.com', 'admin', '2017-07-29 13:46:09', '2017-07-29 13:46:09'),
(4, 'Princess Abbott', '$2y$10$9soYaY0F4xNulurny6llvO/eRJRxsCFrq8yD98NZyXCyfaEnofRhO', 'katlynn.stoltenberg@yahoo.com', 'admin', '2017-07-29 13:46:09', '2017-07-29 13:46:09'),
(5, 'Daija Harber', '$2y$10$Dg/WrgHBThh5TWQGP6Sv5.9JSgQPsfjkRZEDJlulA6IdrKAKiU9N2', 'vnitzsche@hotmail.com', 'admin', '2017-07-29 13:46:09', '2017-07-29 13:46:09'),
(6, 'carlos', '$2y$10$BKhNQdtLS/Z9N/cKXTVxc.eQgTMhD8X3SaHf6dcZ6Z0i5z/S9R5CC', 'moro@gmail.com', 'banco', '2017-07-29 20:04:52', '2017-07-29 20:04:52'),
(7, 'magdalena', '$2y$10$xj5pFKkdhZSIeeD6ASen/.FLo7RJM0lNCBa6wZwuucpWHDS5eJ6hq', 'mag@gmail.com', 'banco', '2017-07-29 20:05:31', '2017-07-29 20:05:31'),
(8, 'daniel silva', '123456', 'daniel@gmail.com', 'laboratorio', '2017-07-30 19:20:24', '2017-07-30 19:20:24'),
(9, 'daniel silva', '$2y$10$KZBTMWEOcdELn/55QCbn4OXtqWSvL.YSpp552hG3LGTD8s7uBni26', 'daniel@gmail.com', 'laboratorio', '2017-07-30 19:35:55', '2017-07-30 19:35:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banco_sangre_personal`
--
ALTER TABLE `banco_sangre_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donantes`
--
ALTER TABLE `donantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donantes_estatus`
--
ALTER TABLE `donantes_estatus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donantes_historia`
--
ALTER TABLE `donantes_historia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donantes_serologia`
--
ALTER TABLE `donantes_serologia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donantes_tipeaje`
--
ALTER TABLE `donantes_tipeaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historias`
--
ALTER TABLE `historias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `laboratorios_personal`
--
ALTER TABLE `laboratorios_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banco_sangre_personal`
--
ALTER TABLE `banco_sangre_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `donantes`
--
ALTER TABLE `donantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `donantes_estatus`
--
ALTER TABLE `donantes_estatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `donantes_historia`
--
ALTER TABLE `donantes_historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `donantes_serologia`
--
ALTER TABLE `donantes_serologia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `donantes_tipeaje`
--
ALTER TABLE `donantes_tipeaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historias`
--
ALTER TABLE `historias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `laboratorios_personal`
--
ALTER TABLE `laboratorios_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
