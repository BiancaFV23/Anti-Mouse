-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2023 a las 01:26:23
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
-- Base de datos: `registro`
--
CREATE DATABASE IF NOT EXISTS `registro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `registro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienvenido`
--
-- Creación: 19-11-2023 a las 06:39:01
--

CREATE TABLE `bienvenido` (
  `semana` int(30) NOT NULL,
  `gerente` varchar(20) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `inventario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bienvenido`
--

INSERT INTO `bienvenido` (`semana`, `gerente`, `mes`, `inventario`) VALUES
(1, 'Martha', 'Noviembre', 'Zapatería');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bienvenido`
--
ALTER TABLE `bienvenido`
  ADD PRIMARY KEY (`semana`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bienvenido`
--
ALTER TABLE `bienvenido`
  MODIFY `semana` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
