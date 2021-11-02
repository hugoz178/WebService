-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2021 a las 23:33:29
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
-- Base de datos: `webservice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_web`
--

CREATE TABLE `t_web` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `p_apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `s_apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_web`
--

INSERT INTO `t_web` (`id`, `nombre`, `p_apellido`, `s_apellido`) VALUES
(1, 'Hugo', 'Hernandez', 'Lopez'),
(2, 'Diego', 'Fernandez', 'Adan'),
(3, 'David', 'Celestino', 'Narvaez'),
(4, 'Miriam', 'Rodriguez', 'Ramirez'),
(5, 'Diego', 'Mendoza', 'Romero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_web`
--
ALTER TABLE `t_web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_web`
--
ALTER TABLE `t_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
