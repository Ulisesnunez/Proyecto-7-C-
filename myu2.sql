-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2022 a las 15:49:37
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `nombre_a` varchar(30) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `clientes` (
  `ID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(30) DEFAULT NULL,
  `pass` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `catalogo` (
  `nro_producto` int(11) NOT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `talle` varchar(5) DEFAULT NULL,
  `colegio` varchar(30) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `precio` int(6) DEFAULT NULL,
  `imagen` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`, `imagen`) VALUES
(1, 'Chomba', '6', 'Juan XXIII', 50, 3000, NULL),
(2, 'Chomba', '8', 'Juan XXIII', 50, 3000, NULL),
(3, 'Chomba', '10', 'Juan XXIII', 50, 3000, NULL),
(4, 'Chomba', '12', 'Juan XXIII', 50, 3000, NULL),
(5, 'Chomba', '14', 'Juan XXIII', 50, 3000, NULL),
(6, 'Chomba', '16', 'Juan XXIII', 50, 3000, NULL),
(7, 'Chomba', 's', 'Juan XXIII', 50, 3000, NULL),
(8, 'Chomba', 'm', 'Juan XXIII', 50, 3000, NULL),
(9, 'Chomba', 'l', 'Juan XXIII', 50, 3000, NULL),
(10, 'Chomba', 'xl', 'Juan XXIII', 50, 3000, NULL),
(11, 'Chomba', 'xxl', 'Juan XXIII', 50, 3000, NULL),
(12, 'Chomba', 'xxxl', 'Juan XXIII', 50, 3000, NULL),
(13, 'Remera', '6', 'Juan XXIII', 50, 2900, NULL),
(14, 'Remera', '8', 'Juan XXIII', 50, 3000, NULL),
(15, 'Remera', '10', 'Juan XXIII', 50, 3000, NULL),
(16, 'Remera', '12', 'Juan XXIII', 50, 3000, NULL),
(17, 'Remera', '14', 'Juan XXIII', 50, 3000, NULL),
(18, 'Remera', '16', 'Juan XXIII', 50, 3000, NULL),
(19, 'Remera', 's', 'Juan XXIII', 50, 3000, NULL),
(20, 'Remera', 'm', 'Juan XXIII', 50, 3000, NULL),
(21, 'Remera', 'l', 'Juan XXIII', 50, 3000, NULL),
(22, 'Remera', 'xl', 'Juan XXIII', 50, 3000, NULL),
(23, 'Remera', 'xxl', 'Juan XXIII', 50, 3000, NULL),
(24, 'Remera', 'xxxl', 'Juan XXIII', 50, 3000, NULL),
(25, 'Campera de invierno', '6', 'Juan XXIII', 50, 5000, NULL),
(26, 'Campera de invierno', '8', 'Juan XXIII', 50, 5000, NULL),
(27, 'Campera de invierno', '10', 'Juan XXIII', 50, 5000, NULL),
(28, 'Campera de invierno', '12', 'Juan XXIII', 50, 5000, NULL),
(29, 'Campera de invierno', '14', 'Juan XXIII', 50, 5000, NULL),
(30, 'Campera de invierno', '16', 'Juan XXIII', 50, 5000, NULL),
(31, 'Campera de invierno', 's', 'Juan XXIII', 50, 5000, NULL),
(32, 'Campera de invierno', 'm', 'Juan XXIII', 50, 5000, NULL),
(33, 'Campera de invierno', 'l', 'Juan XXIII', 50, 5000, NULL),
(34, 'Campera de invierno', 'xl', 'Juan XXIII', 50, 5000, NULL),
(35, 'Campera de invierno', 'xxl', 'Juan XXIII', 50, 5000, NULL),
(36, 'Campera de invierno', 'xxxl', 'Juan XXIII', 50, 5000, NULL),
(37, 'Campera de Verano', '6', 'Juan XXIII', 5, 4500, NULL),
(38, 'Campera de Verano', '8', 'Juan XXIII', 5, 4500, NULL),
(39, 'Campera de Verano', '10', 'Juan XXIII', 5, 4500, NULL),
(40, 'Campera de Verano', '12', 'Juan XXIII', 5, 4500, NULL),
(41, 'Campera de Verano', '14', 'Juan XXIII', 5, 4500, NULL),
(42, 'Campera de Verano', '16', 'Juan XXIII', 5, 4500, NULL),
(43, 'Campera de Verano', 's', 'Juan XXIII', 5, 4500, NULL),
(44, 'Campera de Verano', 'm', 'Juan XXIII', 5, 4500, NULL),
(45, 'Campera de Verano', 'l', 'Juan XXIII', 5, 4500, NULL),
(46, 'Campera de Verano', 'xl', 'Juan XXIII', 5, 4500, NULL),
(47, 'Campera de Verano', 'xxl', 'Juan XXIII', 5, 4500, NULL),
(48, 'Campera de Verano', 'xxxl', 'Juan XXIII', 5, 4500, NULL),
(49, 'Buzo', '6', 'Juan XXIII', 5, 3500, NULL),
(50, 'Buzo', '8', 'Juan XXIII', 5, 3500, NULL),
(51, 'Buzo', '10', 'Juan XXIII', 5, 3500, NULL),
(52, 'Buzo', '12', 'Juan XXIII', 5, 3500, NULL),
(53, 'Buzo', '14', 'Juan XXIII', 5, 3500, NULL),
(54, 'Buzo', '16', 'Juan XXIII', 5, 3500, NULL),
(55, 'Buzo', 's', 'Juan XXIII', 5, 3500, NULL),
(56, 'Buzo', 'm', 'Juan XXIII', 5, 3500, NULL),
(57, 'Buzo', 'l', 'Juan XXIII', 5, 3500, NULL),
(58, 'Buzo', 'xl', 'Juan XXIII', 5, 3500, NULL),
(59, 'Buzo', 'xxl', 'Juan XXIII', 5, 3500, NULL),
(60, 'Buzo', 'xxxl', 'Juan XXIII', 5, 3500, NULL),
(61, 'Pantalón de invierno', '6', 'Juan XXXII', 5, 4000, NULL),
(62, 'Pantalón de invierno', '8', 'Juan XXXII', 5, 4000, NULL),
(63, 'Pantalón de invierno', '10', 'Juan XXXII', 5, 4000, NULL),
(64, 'Pantalón de invierno', '12', 'Juan XXXII', 5, 4000, NULL),
(65, 'Pantalón de invierno', '14', 'Juan XXXII', 5, 4000, NULL),
(66, 'Pantalón de invierno', '16', 'Juan XXXII', 5, 4000, NULL),
(67, 'Pantalón de invierno', 's', 'Juan XXXII', 5, 4000, NULL),
(68, 'Pantalón de invierno', 'm', 'Juan XXXII', 5, 4000, NULL),
(69, 'Pantalón de invierno', 'l', 'Juan XXXII', 5, 4000, NULL),
(70, 'Pantalón de invierno', 'xl', 'Juan XXXII', 5, 4000, NULL),
(71, 'Pantalón de invierno', 'xxl', 'Juan XXXII', 5, 4000, NULL),
(72, 'Pantalón de invierno', 'xxxl', 'Juan XXXII', 5, 4000, NULL),
(73, 'Pantalón de Verano', '6', 'Juan XXIII', 5, 4000, NULL),
(74, 'Pantalón de Verano', '8', 'Juan XXIII', 5, 4000, NULL),
(75, 'Pantalón de Verano', '10', 'Juan XXIII', 5, 4000, NULL),
(76, 'Pantalón de Verano', '12', 'Juan XXIII', 5, 4000, NULL),
(77, 'Pantalón de Verano', '14', 'Juan XXIII', 5, 4000, NULL),
(78, 'Pantalón de Verano', '16', 'Juan XXIII', 5, 4000, NULL),
(79, 'Pantalón de Verano', 's', 'Juan XXIII', 5, 4000, NULL),
(80, 'Pantalón de Verano', 'm', 'Juan XXIII', 5, 4000, NULL),
(81, 'Pantalón de Verano', 'l', 'Juan XXIII', 5, 4000, NULL),
(82, 'Pantalón de Verano', 'xl', 'Juan XXIII', 5, 4000, NULL),
(83, 'Pantalón de Verano', 'xxl', 'Juan XXIII', 5, 4000, NULL),
(84, 'Pantalón de Verano', 'xxxl', 'Juan XXIII', 5, 4000, NULL),
(85, 'Conjunto de Invierno', '6', 'Juan XXIII', 5, 8500, NULL),
(86, 'Conjunto de Invierno', '8', 'Juan XXIII', 5, 8500, NULL),
(87, 'Conjunto de Invierno', '10', 'Juan XXIII', 5, 8500, NULL),
(88, 'Conjunto de Invierno', '12', 'Juan XXIII', 5, 8500, NULL),
(89, 'Conjunto de Invierno', '14', 'Juan XXIII', 5, 8500, NULL),
(90, 'Conjunto de Invierno', '16', 'Juan XXIII', 5, 8500, NULL),
(91, 'Conjunto de Invierno', 's', 'Juan XXIII', 5, 8500, NULL),
(92, 'Conjunto de Invierno', 'm', 'Juan XXIII', 5, 8500, NULL),
(93, 'Conjunto de Invierno', 'l', 'Juan XXIII', 5, 8500, NULL),
(94, 'Conjunto de Invierno', 'xl', 'Juan XXIII', 5, 8500, NULL),
(95, 'Conjunto ', 'xxl', 'Juan XXIII', 5, 8500, NULL),
(96, 'Conjunto de Invierno', 'xxxl', 'Juan XXIII', 5, 8500, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_ventas`
--

CREATE TABLE `informe_ventas` (
  `mes` int(11) NOT NULL,
  `cant_ventas` int(11) DEFAULT NULL,
  `recaudado` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE pedidos2(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_cliente INT NOT NULL,
  fecha DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
  total FLOAT
);

CREATE TABLE puente(
  id_pedido INT NOT NULL,
  id_producto INT NOT NULL,
  cantidad_prod INT NOT NULL
);




CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `ref` INT(11) NOT NULL,
  `cliente` INT NOT NULL,
  `estado` varchar(50) NOT NULL,
  `medio` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_datos`
--

CREATE TABLE `pedidos_datos` (
  `id` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `articulo` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`nro_producto`);

--
-- Indices de la tabla `clientes`
--

--
-- Indices de la tabla `informe_ventas`
--
ALTER TABLE `informe_ventas`
  ADD PRIMARY KEY (`mes`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`);

--
-- Indices de la tabla `pedidos_datos`
--
ALTER TABLE `pedidos_datos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ref` (`ref`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `nro_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `informe_ventas`
--
ALTER TABLE `informe_ventas`
  MODIFY `mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos_datos`
--
ALTER TABLE `pedidos_datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos_datos`
--
ALTER TABLE `pedidos_datos`
  ADD CONSTRAINT `pedidos_datos_ibfk_1` FOREIGN KEY (`ref`) REFERENCES `pedido` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


INSERT INTO clientes (username, pass) VALUES('1', '$2y$10$rFNYI7vtTr7SqcxwHn2QFek7JDCMk6HnnyfGvki7d8ousNopnrA/y'),('2', '$2y$10$rFNYI7vtTr7SqcxwHn2QFek7JDCMk6HnnyfGvki7d8ousNopnrA/y');
INSERT INTO pedidos2 (id_cliente) VALUES (1),(1),(2);
INSERT INTO puente (id_pedido,id_producto,cantidad_prod) VALUES(1,1,3),(1,2,1),(1,3,2),(2,2,3);