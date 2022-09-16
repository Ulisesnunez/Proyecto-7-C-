-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2022 a las 22:12:08
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
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `prendas` int(11) DEFAULT NULL,
  `cant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','6','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','8','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','10','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','12','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','14','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','16','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','s','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','m','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','l','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','xl','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','xxl','Juan XXIII',50, 3000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('1','Chomba Juan XXIII','xxxl','Juan XXIII',50, 3000)

INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','6','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','8','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','10','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','12','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','14','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','16','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','s','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','m','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','l','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','xl','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','xxl','Juan XXIII',50,2900);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('2','Remera Juan XXIII','xxxl','Juan XXIII',50,2900);

INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','6','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','8','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','10','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','12','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','14','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','16','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','s','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','m','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','l','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','xl','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','xxl','Juan XXIII',50,5000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('3','Campera de invierno Juan XXIII','xxxl','Juan XXIII',50,5000);

INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','6','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','8','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','10','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','12','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','14','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','16','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','s','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','m','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','l','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','xl','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','xxl','Juan XXIII',5,4500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('4','Campera de Verano Juan XXIII','xxxl','Juan XXIII',5,4500);

INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','6','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','8','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','10','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','12','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','14','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','16','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','s','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','m','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','l','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','xl','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','xxl','Juan XXIII',5,3500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('5','Buzo Juan XXIII','xxl','Juan XXIII',5,3500);

INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','6','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','8','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','10','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','12','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','14','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','16','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','s','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','m','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','l','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','xl','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','xxl','Juan XXXII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('6','Pantalón de invierno','xxxl','Juan XXXII',5,4000);

INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','6','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','8','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','10','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','12','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','14','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','16','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','s','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','m','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','l','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','xl','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','xxl','Juan XXIII',5,4000);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('7','Pantalón de Verano','xxxl','Juan XXIII',5,4000);

INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','6','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','8','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','10','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','12','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','14','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','16','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','s','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','m','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','l','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','xl','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','xxl','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('8','Conjunto de Invierno','xxxl','Juan XXIII',5,8500);


INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','6','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','8','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','10','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','12','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','14','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','16','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','s','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','m','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','l','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','xl','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','xxl','Juan XXIII',5,8500);
INSERT INTO `catalogo`(`nro_producto`, `producto`, `talle`, `colegio`, `stock`, `precio`) VALUES ('9','Conjunto de Verano','xxxl','Juan XXIII',5,8500);



) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID` varchar(100) NULL,
  `username` varchar(30) NULL,
  `pass` varchar(30) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `nro_pedido` int(11) DEFAULT NULL,
  `cliente` varchar(100) DEFAULT NULL,
  `metodo_de_pago` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informe_ventas`
--
ALTER TABLE `informe_ventas`
  ADD PRIMARY KEY (`mes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `informe_ventas`
--
ALTER TABLE `informe_ventas`
  MODIFY `mes` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
