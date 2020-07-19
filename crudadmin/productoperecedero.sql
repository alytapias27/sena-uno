	-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2019 a las 21:25:35
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `antojos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoperecedero`
--

CREATE TABLE `productoperecedero` (
  `idProductoPerecedero` int(10) NOT NULL,
  `NombrePP` varchar(40) NOT NULL,
  `Precio` double NOT NULL,
  `idProveedorPP` int(10) NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `Presentacion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productoperecedero`
--

INSERT INTO `productoperecedero` (`idProductoPerecedero`, `NombrePP`, `Precio`, `idProveedorPP`, `FechaVencimiento`, `Presentacion`) VALUES
(3, 'Tomate', 1500, 1, '2023-08-19', 'bolsa'),
(4, 'Lechuga', 1300, 1, '2023-08-19', 'Bolsa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productoperecedero`
--
ALTER TABLE `productoperecedero`
  ADD PRIMARY KEY (`idProductoPerecedero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productoperecedero`
--
ALTER TABLE `productoperecedero`
  MODIFY `idProductoPerecedero` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
