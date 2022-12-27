-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2022 a las 14:23:34
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `masgps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `latitude` varchar(10) DEFAULT NULL,
  `longitud` varchar(10) DEFAULT NULL,
  `e_Acumulada` int(11) DEFAULT NULL,
  `s_Acumulada` int(11) DEFAULT NULL,
  `aforo` int(11) DEFAULT NULL,
  `direccion_usuario` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `fecha`, `latitude`, `longitud`, `e_Acumulada`, `s_Acumulada`, `aforo`, `direccion_usuario`) VALUES
(12, '2022-12-26 20:18:51', '3', '-70.681149', 41241, 12412, 12412, '4 oriente 8012'),
(13, '2022-12-26 20:19:02', '-33.461582', '-70.681149', 43345, 2147483647, 6454, '4 oriente 8012'),
(14, '2022-12-26 20:32:34', '-33.461582', '-70.681149', 123123, 34534, 2147483647, '4 oriente 8012'),
(15, '2022-12-27 13:10:13', '-33.461582', '-70.681149', 5, 5, 10, 'linares');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
