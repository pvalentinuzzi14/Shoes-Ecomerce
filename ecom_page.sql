-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2020 a las 01:11:20
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecom_page`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_titulo` varchar(255) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_titulo`) VALUES
(1, 'Casuales'),
(2, 'Deportivas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `orden_id` int(11) NOT NULL,
  `orden_precio` float NOT NULL,
  `orden_estado` varchar(255) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`orden_id`, `orden_precio`, `orden_estado`) VALUES
(2, 13050, 'Pendiente'),
(5, 4349.99, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `prod_id` int(11) NOT NULL,
  `prod_titulo` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `prod_categoria_id` int(11) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_descrip` text COLLATE utf16_spanish_ci NOT NULL,
  `prod_image` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `prod_cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`prod_id`, `prod_titulo`, `prod_categoria_id`, `prod_price`, `prod_descrip`, `prod_image`, `prod_cantidad`) VALUES
(1, 'Puma Enzo 2', 1, 4349.99, 'Descubra la dinastia Enzo con el nuevo Enzo 2, nuestra ultima incorporacion a este legado.', 'https://www.runnerinn.com/f/13735/137358729/puma-enzo-2.jpg', 10),
(2, 'adidas VL Court 2.0', 1, 3403.99, 'La emblematica zapatilla con puntera en forma de T salta de las pistas de tenis a la calle.', 'https://www.runnerinn.com/f/13690/136906896_3/adidas-vl-court-2.0.jpg', 6),
(3, 'Nike AIR Force I', 1, 120.5, 'Casual Shoes - White color', 'https://images.footlocker.com/is/image/EBFL2/24300657_a1?wid=640&hei=640&fmt=png-alpha', 20),
(5, 'Nike Air Zoom Pegasus 37', 2, 8493.99, 'Revitaliza tu paso con las Nike Air Zoom Pegasus 37.', 'https://www.runnerinn.com/f/13748/137483371/nike-air-zoom-pegasus-37.jpg', 15),
(6, 'adidas Ultraboost PB', 2, 9171.49, 'Saca la mejor version de ti en el camino y acaba con la competencia con las zapatillas de running adidas Ultraboost PB. ', 'https://www.runnerinn.com/f/13738/137381940/adidas-ultraboost-pb.jpg', 4),
(7, 'Nike Pegasus Trail 2', 2, 9482.49, 'Las Nike Pegasus Trail 2 ofrecen durabilidad y capacidad de respuesta a corredores, atletas de trail y entusiastas del aire libre', 'https://www.runnerinn.com/f/13748/137483182/nike-zoom-fly-3.jpg', 19),
(8, 'adidas Fluid Flow', 2, 5000, 'MantÃ©n el control y fluye en donde quieras con las zapatillas de running adidas Fluidflow', 'https://www.runnerinn.com/f/13738/137385632/adidas-fluidflow.jpg', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `username`, `user_email`, `user_pass`) VALUES
(1, 'admin', 'admin@shoes.com', 'admin'),
(2, 'pablo', 'pvalentinuzzi14@gmail.com', 'pablo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`orden_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `orden_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
