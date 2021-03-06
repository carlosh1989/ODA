-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-08-2017 a las 00:11:37
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
-- Estructura de tabla para la tabla `banco_historias`
--

CREATE TABLE `banco_historias` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banco_historias`
--

INSERT INTO `banco_historias` (`id`, `pregunta`) VALUES
(1, 'Consume alcohol?'),
(2, 'Se ha hecho algun tatuaje?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco_sangre_personal`
--

CREATE TABLE `banco_sangre_personal` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `nombre_apellido` varchar(100) NOT NULL,
  `nacionalidad` varchar(1) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL,
  `telefono_fijo` varchar(50) NOT NULL,
  `telefono_celular` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banco_sangre_personal`
--

INSERT INTO `banco_sangre_personal` (`id`, `usuario_id`, `nombre_apellido`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `telefono_fijo`, `telefono_celular`, `direccion`, `cargo`) VALUES
(15, 37, 'dasdsa', 'V', '5156', '30/05/1989', '516515', '6516516', 'asdas', 'sfsd'),
(16, 38, 'asdas', 'V', '5161', '30/05/1989', '561516', '51651', 'adadasd', 'asdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes`
--

CREATE TABLE `donantes` (
  `id` int(11) NOT NULL,
  `nombre_apellido` varchar(50) NOT NULL,
  `nacionalidad` varchar(1) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha_nacimiento` varchar(100) NOT NULL,
  `telefono_fijo` varchar(100) NOT NULL,
  `telefono_celular` varchar(100) NOT NULL,
  `direccion` text NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `donantes`
--

INSERT INTO `donantes` (`id`, `nombre_apellido`, `nacionalidad`, `cedula`, `email`, `fecha_nacimiento`, `telefono_fijo`, `telefono_celular`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'daniel silva', 'V', '19881316', 'dani@gmail.com', '56156', '51561', '651651', '561651', '2017-08-04 20:23:04', '2017-08-04 20:23:04'),
(2, 'carlos silva', 'V', '19881316', 'elmorochez22@gmail.com', '30/05/1989', '02735338034', '04127624857', 'dominga oritz de paez', '2017-08-04 20:55:21', '2017-08-04 20:55:21'),
(3, 'maria abreu', 'V', '20000000', 'maria@gmail.com', '30/05/1989', '0515615', '05156156', 'asdjkas asklmdkasm askdnas', '2017-08-04 21:03:18', '2017-08-04 21:03:18');

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
  `respuesta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `donantes_historia`
--

INSERT INTO `donantes_historia` (`id`, `donante_id`, `historia_id`, `respuesta`) VALUES
(1, 1, 1, 'no'),
(2, 1, 2, 'yes');

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
(2, 'caritas', 'as@gmail.com', 'lorem ipsum', '04145632541'),
(3, 'asd', 'masd@gmail.com', 'asd', '56156156'),
(4, 'asdas', 'al@gmail.com', 'asda', '561561'),
(5, 'asdas', 'as@gmail.com', 'aasdas', '121561516');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorios_personal`
--

CREATE TABLE `laboratorios_personal` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `laboratorio_id` int(11) NOT NULL,
  `nombre_apellido` varchar(100) NOT NULL,
  `nacionalidad` varchar(1) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL,
  `telefono_fijo` varchar(50) NOT NULL,
  `telefono_celular` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` text NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `laboratorios_personal`
--

INSERT INTO `laboratorios_personal` (`id`, `usuario_id`, `laboratorio_id`, `nombre_apellido`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `telefono_fijo`, `telefono_celular`, `email`, `direccion`, `cargo`) VALUES
(10, 26, 2, 'kelly albarran', 'V', '21000000', '330/05/1989', '02735338034', '0412062044', '', 'lorem ipsum', 'asistente'),
(11, 40, 0, 'asdasas', 'V', '5161651', '30/05/1989', '5156156', '561561', '', 'ksdfklasndk', 'asasdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20170211144301, 'Usuarios', '2017-08-02 13:45:30', '2017-08-02 13:45:30', 0);

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
(9, 'Miss Margaret Fay MD', '$2y$10$hC1orwKyRe0y.Qr2eNzRxOu9UN2GLj2bZ6Q0ajto37WdJEpDi0csK', 'carlos@gmail.com', 'admin', '2017-08-02 11:09:10', '2017-08-02 11:09:10'),
(10, 'Prof. Morton Franecki', '$2y$10$rmDpxS7zzV6BY3N4oFr2Fe.0sguCQHzJziHFAk3EhS8RlIzhukYri', 'torphy.emily@bauch.info', 'admin', '2017-08-02 11:09:10', '2017-08-02 11:09:10'),
(11, 'Haleigh Maggio III', '$2y$10$zj9w36Zx36NMi.Hw00jJ/e4UFI29j7uCWgPp04vzN/b6FbmwKpmx.', 'sarai.doyle@ernser.com', 'admin', '2017-08-02 11:09:10', '2017-08-02 11:09:10'),
(12, 'Dr. Nathan Welch', '$2y$10$M16iC.HyMrhNqiNlFVSPuuPfWNBCozGc0QCwr2DViHRFKiS1C1gWm', 'yweissnat@gmail.com', 'admin', '2017-08-02 11:09:10', '2017-08-02 11:09:10'),
(13, 'Cody Walter', '$2y$10$Z2epyc2xhMukckgPDDHKW.QTJIYeUEjh/Yd4Pmy9zeSUllW9a9JEe', 'stiedemann.gavin@hotmail.com', 'admin', '2017-08-02 11:09:10', '2017-08-02 11:09:10'),
(26, 'kelly', '$2y$10$UQlTRUcZRwDpw7YyvcJ87eeaFeWFi27HXMEOtbeGkhuPshFYz3Lrq', 'kelly@gmail.com', 'laboratorio', '2017-08-02 16:01:01', '2017-08-02 16:01:01'),
(37, 'asdas', '$2y$10$v6oQxhUjH2fgPIlS/j34yOlvismRwGFPVQIfZ1zj5a71yisBzuc8a', 'aw@gmail.com', 'banco', '2017-08-03 13:20:21', '2017-08-03 13:20:21'),
(38, 'asdas', '$2y$10$yd6Fk2XjJCg5kFiR9O/E5ut2jc1s.D1to7zkRbRk.dEvonbWHopnK', 'a@gmail.com', 'banco', '2017-08-03 14:12:03', '2017-08-03 14:12:03'),
(39, 'as', '$2y$10$zYsJjc4h3KZtY3d8gSHJGO3rqsObwBR08wHA6soQghq18JlMTNiHS', 'ea@gmail.com', 'laboratorio', '2017-08-03 14:30:42', '2017-08-03 14:30:42'),
(40, 'as', '$2y$10$YFmmnKMFB7ws2g5yMhZfmewOcIZsRwS35yJJFo0Hpn3EZwFkpEhc6', 'ea@gmail.com', 'laboratorio', '2017-08-03 14:31:15', '2017-08-03 14:31:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banco_historias`
--
ALTER TABLE `banco_historias`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `banco_historias`
--
ALTER TABLE `banco_historias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `banco_sangre_personal`
--
ALTER TABLE `banco_sangre_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `donantes`
--
ALTER TABLE `donantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `donantes_historia`
--
ALTER TABLE `donantes_historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `laboratorios_personal`
--
ALTER TABLE `laboratorios_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
