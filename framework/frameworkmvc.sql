-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2021 a las 20:30:54
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `frameworkmvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblejemplo`
--

CREATE TABLE `tblejemplo` (
  `id` int(11) NOT NULL,
  `campo1` varchar(50) NOT NULL,
  `campo2` varchar(50) NOT NULL,
  `campo3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblejemplo`
--

INSERT INTO `tblejemplo` (`id`, `campo1`, `campo2`, `campo3`) VALUES
(1, 'Dato-1', 'Dato-1', 'Dato-1'),
(2, 'Dato-2', 'Dato-2', 'Dato-2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblejemplo`
--
ALTER TABLE `tblejemplo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblejemplo`
--
ALTER TABLE `tblejemplo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
