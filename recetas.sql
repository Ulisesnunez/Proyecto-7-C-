-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 22:02:34
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
-- Base de datos: `recetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id`, `nombre`) VALUES
(1, 'cebolla'),
(2, 'zanahoria'),
(3, 'zapallito'),
(4, 'morron rojo'),
(5, 'ajo'),
(6, 'brocoli'),
(7, 'perejil'),
(8, 'huevo'),
(9, 'avena'),
(10, 'pollo'),
(11, 'carne vacuna'),
(12, 'romero'),
(13, 'oregano'),
(14, 'vinagre'),
(15, 'aceite'),
(16, 'limon'),
(17, 'jegibre'),
(18, 'pimenton rojo'),
(19, 'sal'),
(20, 'pimienta'),
(21, 'tapas de empanada'),
(22, 'lechuga'),
(23, 'tomate'),
(24, 'cebolla morada'),
(25, 'palta'),
(26, 'queso blanco'),
(27, 'arroz'),
(28, 'queso de rayar'),
(29, 'leche'),
(30, 'harina leudante'),
(31, 'harina integral'),
(32, 'jamon cocido'),
(33, 'nuez moscada'),
(34, 'lentejas'),
(35, 'aji'),
(36, 'papa'),
(37, 'caldo'),
(38, 'porotos'),
(39, 'calabaza'),
(40, 'champignones'),
(41, 'berenjena'),
(42, 'pan rallado'),
(43, 'pescado'),
(44, 'albahaca'),
(45, 'tomates cherry'),
(46, 'aceite de oliva'),
(47, 'acelga'),
(48, 'levadura'),
(49, 'azucar'),
(50, 'rucula'),
(51, 'salsa fileto'),
(52, 'agua'),
(53, 'salmon'),
(54, 'puerro'),
(55, 'cebolla de verdeo'),
(56, 'crema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intermedia`
--

CREATE TABLE `intermedia` (
  `id_receta` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `nombre`) VALUES
(1, 'Albondigas veggies'),
(2, 'anticuchos de pollo'),
(3, 'arrolladitos de palta'),
(4, 'budin de arroz y verduras'),
(5, 'canelones de hojas verdes'),
(6, 'fideos con brocoli y salsa blanca '),
(7, 'guiso de lentejas'),
(8, 'guiso vegetariano'),
(9, 'hamburguesas de lentejas'),
(10, 'milanesas de berenjena'),
(11, 'paquetitos de acelga'),
(12, 'pizzeta vegetariana'),
(13, 'tortillas alemanas'),
(14, 'Albondigas veggies'),
(15, 'anticuchos de pollo'),
(16, 'arrolladitos de palta'),
(17, 'budin de arroz y verduras'),
(18, 'canelones de hojas verdes'),
(19, 'fideos con brocoli y salsa blanca '),
(20, 'guiso de lentejas'),
(21, 'guiso vegetariano'),
(22, 'hamburguesas de lentejas'),
(23, 'milanesas de berenjena'),
(24, 'paquetitos de acelga'),
(25, 'pizzeta vegetariana'),
(26, 'tortillas alemanas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
