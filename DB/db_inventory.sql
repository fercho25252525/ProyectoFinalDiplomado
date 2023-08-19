-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-08-2023 a las 20:56:10
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_inventory`
--

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int NOT NULL,
  `url_producto` varchar(250) NOT NULL,
  `cantidad_total` int NOT NULL,
  `cantidad_maxima` int NOT NULL,
  `cantidad_minima` int NOT NULL,
  `detalle` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `nombre`, `precio`, `url_producto`, `cantidad_total`, `cantidad_maxima`, `cantidad_minima`, `detalle`) VALUES
(8, 'Producto1', 23423, '../images_product/homeVerde.png', 4234234, 234234234, 234234, 'Producto de prueba proyecro diplomado'),
(9, 'Producto1', 234234, '../images_product/cumpleaños.jpg', 234234, 234234, 234234, 'Producto de prueba proyecro diplomado'),
(10, 'Producto1', 34534, '../images_product/puntoDosBackground.jpg', 345345, 345345, 34534, 'Producto de prueba proyecro diplomado'),
(11, 'Producto1', 234234, '../images_product/', 234234, 2342, 34234234, 'Producto de prueba proyecro diplomado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo` int UNSIGNED NOT NULL COMMENT 'Llabe primaria',
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `num_documento` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contrasena` varchar(250) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `nombre`, `apellido`, `num_documento`, `usuario`, `correo`, `contrasena`, `estado`) VALUES
(17, 'Juan', 'Guzman', '12345698', 'jGuzman', 'jGuzman@hotmail.com', '123', 'Activo'),
(18, 'Ana', 'Gariela', '12345698', 'AGarbiela', 'AGarbiela@hotmail.com', '123', 'Activo'),
(19, 'Lina', 'Perez', '987654321', 'LPerez', 'LPerez@hotmail.com', '123', 'Activo'),
(20, 'Mario', 'Sandoval', '987654321', 'MSandoval', 'MSandoval@hotmail.com', '123', 'Activo'),
(21, 'Diana', 'Zapata', '5632147898', 'DZapata', 'DZapata@hotmail.com', '154654623', 'Inactivo'),
(22, 'Camilo', 'Pirales', '32165749845', 'CPirales', 'CPirales@hotmail.com', '4sdf654623', 'Inactivo'),
(23, 'Tania', 'Grian', '6354654153621', 'TanGrian', 'TGrian@hotmail.com', '123456', 'Activo');

--
-- Índices para tablas volcadas
--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Llabe primaria', AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
