-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2023 a las 01:23:09
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
-- Base de datos: `damas`
--
CREATE DATABASE IF NOT EXISTS `damas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `damas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `damas`
--
-- Creación: 19-11-2023 a las 06:52:26
-- Última actualización: 30-11-2023 a las 19:18:32
--

CREATE TABLE `damas` (
  `semana` int(30) NOT NULL,
  `dama1` varchar(20) NOT NULL,
  `dama2` varchar(20) NOT NULL,
  `dama3` varchar(20) NOT NULL,
  `dama4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `damas`
--

INSERT INTO `damas` (`semana`, `dama1`, `dama2`, `dama3`, `dama4`) VALUES
(1, 'Isabel', 'Marina', 'Aurora', 'Dianita');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `damas`
--
ALTER TABLE `damas`
  ADD PRIMARY KEY (`semana`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `damas`
--
ALTER TABLE `damas`
  MODIFY `semana` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
