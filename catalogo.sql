-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2022 a las 20:58:08
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `nro_producto` int(11) NOT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `talle` varchar(5) DEFAULT NULL,
  `colegio` varchar(30) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `precio` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES
(1, 'Chomba', '06', 'Juan XXIII', 50, 3000),
(2, 'Chomba', '08', 'Juan XXIII', 50, 3000),
(3, 'Chomba', '10', 'Juan XXIII', 50, 3000),
(4, 'Chomba', '12', 'Juan XXIII', 50, 3000),
(5, 'Chomba', '14', 'Juan XXIII', 50, 3000),
(6, 'Chomba', '16', 'Juan XXIII', 50, 3000),
(7, 'Chomba', 's', 'Juan XXIII', 50, 3000),
(8, 'Chomba', 'm', 'Juan XXIII', 50, 3000),
(9, 'Chomba', 'l', 'Juan XXIII', 50, 3000),
(10, 'Chomba', 'xl', 'Juan XXIII', 50, 3000),
(11, 'Chomba', 'xxl', 'Juan XXIII', 50, 3000),
(12, 'Chomba', 'xxxl', 'Juan XXIII', 50, 3000),
(13, 'Remera', '06', 'Juan XXIII', 50, 2900),
(14, 'Remera', '08', 'Juan XXIII', 50, 3000),
(15, 'Remera', '10', 'Juan XXIII', 50, 3000),
(16, 'Remera', '12', 'Juan XXIII', 50, 3000),
(17, 'Remera', '14', 'Juan XXIII', 50, 3000),
(18, 'Remera', '16', 'Juan XXIII', 50, 3000),
(19, 'Remera', 's', 'Juan XXIII', 50, 3000),
(20, 'Remera', 'm', 'Juan XXIII', 50, 3000),
(21, 'Remera', 'l', 'Juan XXIII', 50, 3000),
(22, 'Remera', 'xl', 'Juan XXIII', 50, 3000),
(23, 'Remera', 'xxl', 'Juan XXIII', 50, 3000),
(24, 'Remera', 'xxxl', 'Juan XXIII', 50, 3000),
(25, 'Campera de invierno', '06', 'Juan XXIII', 50, 5000),
(26, 'Campera de invierno', '08', 'Juan XXIII', 50, 5000),
(27, 'Campera de invierno', '10', 'Juan XXIII', 50, 5000),
(28, 'Campera de invierno', '12', 'Juan XXIII', 50, 5000),
(29, 'Campera de invierno', '14', 'Juan XXIII', 50, 5000),
(30, 'Campera de invierno', '16', 'Juan XXIII', 50, 5000),
(31, 'Campera de invierno', 's', 'Juan XXIII', 50, 5000),
(32, 'Campera de invierno', 'm', 'Juan XXIII', 50, 5000),
(33, 'Campera de invierno', 'l', 'Juan XXIII', 50, 5000),
(34, 'Campera de invierno', 'xl', 'Juan XXIII', 50, 5000),
(35, 'Campera de invierno', 'xxl', 'Juan XXIII', 50, 5000),
(36, 'Campera de invierno', 'xxxl', 'Juan XXIII', 50, 5000),
(37, 'Campera de Verano', '06', 'Juan XXIII', 5, 4500),
(38, 'Campera de Verano', '08', 'Juan XXIII', 5, 4500),
(39, 'Campera de Verano', '10', 'Juan XXIII', 5, 4500),
(40, 'Campera de Verano', '12', 'Juan XXIII', 5, 4500),
(41, 'Campera de Verano', '14', 'Juan XXIII', 5, 4500),
(42, 'Campera de Verano', '16', 'Juan XXIII', 5, 4500),
(43, 'Campera de Verano', 's', 'Juan XXIII', 5, 4500),
(44, 'Campera de Verano', 'm', 'Juan XXIII', 5, 4500),
(45, 'Campera de Verano', 'l', 'Juan XXIII', 5, 4500),
(46, 'Campera de Verano', 'xl', 'Juan XXIII', 5, 4500),
(47, 'Campera de Verano', 'xxl', 'Juan XXIII', 5, 4500),
(48, 'Campera de Verano', 'xxxl', 'Juan XXIII', 5, 4500),
(49, 'Buzo', '06', 'Juan XXIII', 5, 3500),
(50, 'Buzo', '08', 'Juan XXIII', 5, 3500),
(51, 'Buzo', '10', 'Juan XXIII', 5, 3500),
(52, 'Buzo', '12', 'Juan XXIII', 5, 3500),
(53, 'Buzo', '14', 'Juan XXIII', 5, 3500),
(54, 'Buzo', '16', 'Juan XXIII', 5, 3500),
(55, 'Buzo', 's', 'Juan XXIII', 5, 3500),
(56, 'Buzo', 'm', 'Juan XXIII', 5, 3500),
(57, 'Buzo', 'l', 'Juan XXIII', 5, 3500),
(58, 'Buzo', 'xl', 'Juan XXIII', 5, 3500),
(59, 'Buzo', 'xxl', 'Juan XXIII', 5, 3500),
(60, 'Buzo', 'xxxl', 'Juan XXIII', 5, 3500),
(61, 'Pantalón de invierno', '06', 'Juan XXXII', 5, 4000),
(62, 'Pantalón de invierno', '08', 'Juan XXXII', 5, 4000),
(63, 'Pantalón de invierno', '10', 'Juan XXXII', 5, 4000),
(64, 'Pantalón de invierno', '12', 'Juan XXXII', 5, 4000),
(65, 'Pantalón de invierno', '14', 'Juan XXXII', 5, 4000),
(66, 'Pantalón de invierno', '16', 'Juan XXXII', 5, 4000),
(67, 'Pantalón de invierno', 's', 'Juan XXXII', 5, 4000),
(68, 'Pantalón de invierno', 'm', 'Juan XXXII', 5, 4000),
(69, 'Pantalón de invierno', 'l', 'Juan XXXII', 5, 4000),
(70, 'Pantalón de invierno', 'xl', 'Juan XXXII', 5, 4000),
(71, 'Pantalón de invierno', 'xxl', 'Juan XXXII', 5, 4000),
(72, 'Pantalón de invierno', 'xxxl', 'Juan XXXII', 5, 4000),
(73, 'Pantalón de Verano', '06', 'Juan XXIII', 5, 4000),
(74, 'Pantalón de Verano', '08', 'Juan XXIII', 5, 4000),
(75, 'Pantalón de Verano', '10', 'Juan XXIII', 5, 4000),
(76, 'Pantalón de Verano', '12', 'Juan XXIII', 5, 4000),
(77, 'Pantalón de Verano', '14', 'Juan XXIII', 5, 4000),
(78, 'Pantalón de Verano', '16', 'Juan XXIII', 5, 4000),
(79, 'Pantalón de Verano', 's', 'Juan XXIII', 5, 4000),
(80, 'Pantalón de Verano', 'm', 'Juan XXIII', 5, 4000),
(81, 'Pantalón de Verano', 'l', 'Juan XXIII', 5, 4000),
(82, 'Pantalón de Verano', 'xl', 'Juan XXIII', 5, 4000),
(83, 'Pantalón de Verano', 'xxl', 'Juan XXIII', 5, 4000),
(84, 'Pantalón de Verano', 'xxxl', 'Juan XXIII', 5, 4000),
(85, 'Conjunto de Invierno', '06', 'Juan XXIII', 5, 8500),
(86, 'Conjunto de Invierno', '08', 'Juan XXIII', 5, 8500),
(87, 'Conjunto de Invierno', '10', 'Juan XXIII', 5, 8500),
(88, 'Conjunto de Invierno', '12', 'Juan XXIII', 5, 8500),
(89, 'Conjunto de Invierno', '14', 'Juan XXIII', 5, 8500),
(90, 'Conjunto de Invierno', '16', 'Juan XXIII', 5, 8500),
(91, 'Conjunto de Invierno', 's', 'Juan XXIII', 5, 8500),
(92, 'Conjunto de Invierno', 'm', 'Juan XXIII', 5, 8500),
(93, 'Conjunto de Invierno', 'l', 'Juan XXIII', 5, 8500),
(94, 'Conjunto de Invierno', 'xl', 'Juan XXIII', 5, 8500),
(95, 'Conjunto de Invierno', 'xxl', 'Juan XXIII', 5, 8500),
(96, 'Conjunto de Invierno', 'xxxl', 'Juan XXIII', 5, 8500);


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`nro_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `nro_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
