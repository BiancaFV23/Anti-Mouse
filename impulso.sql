-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2023 a las 01:23:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `impulso`
--
CREATE DATABASE IF NOT EXISTS `impulso` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `impulso`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impulso`
--
-- Creación: 19-11-2023 a las 07:28:27
-- Última actualización: 30-11-2023 a las 19:21:59
--

CREATE TABLE `impulso` (
  `semana` int(30) NOT NULL,
  `impulso1` varchar(20) NOT NULL,
  `impulso2` varchar(20) NOT NULL,
  `impulso3` varchar(20) NOT NULL,
  `impulso4` varchar(20) NOT NULL,
  `impulso5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `impulso`
--

INSERT INTO `impulso` (`semana`, `impulso1`, `impulso2`, `impulso3`, `impulso4`, `impulso5`) VALUES
(1, 'Bianca', 'Yesica', 'Wendy', 'Yoselin', 'Janeth');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `impulso`
--
ALTER TABLE `impulso`
  ADD PRIMARY KEY (`semana`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `impulso`
--
ALTER TABLE `impulso`
  MODIFY `semana` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
