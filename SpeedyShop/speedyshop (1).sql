-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2025 a las 15:39:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `speedyshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(1, 'Verduras'),
(2, 'Frutas'),
(3, 'Carnes'),
(4, 'Lacteos'),
(5, 'Semillas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compradores`
--

CREATE TABLE `compradores` (
  `id_compradores` int(11) NOT NULL,
  `Nombre` varchar(200) DEFAULT NULL,
  `Apellido` varchar(200) DEFAULT NULL,
  `Correo` varchar(300) DEFAULT NULL,
  `Contraseña` varchar(300) DEFAULT NULL,
  `Departamento` varchar(300) DEFAULT NULL,
  `Municipio` varchar(300) DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT 'img/default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compradores`
--

INSERT INTO `compradores` (`id_compradores`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `Departamento`, `Municipio`, `foto_perfil`) VALUES
(1, 'Tralalero', 'Tralala', 'tralalerin@gmail.com', '12345678', 'San Salvador', 'Soyapango', 'img/default.jpg'),
(2, 'Tralalero', 'Tralala', 'tralalerin@gmail.com', '12345678', 'San Salvador', 'Soyapango', 'img/default.jpg'),
(3, 'Kathy', 'Zuniga', 'kathy@gmail.com', 'Kathyfife', 'San Salvador', 'Soyapango', 'img/default.jpg'),
(4, 'Bangchan', 'Chancito', 'Bangchancito@gmail.com', 'SKZ', 'San Salvador', 'San Martin', 'img/default.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `descuento` tinyint(4) DEFAULT NULL,
  `id_vendedores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id_vendedores` int(11) NOT NULL,
  `Nombre` varchar(200) DEFAULT NULL,
  `Apellido` varchar(200) DEFAULT NULL,
  `Correo` varchar(300) DEFAULT NULL,
  `Contraseña` varchar(300) DEFAULT NULL,
  `Agromercado` varchar(300) DEFAULT NULL,
  `Departamento` varchar(300) DEFAULT NULL,
  `Municipio` varchar(300) DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT 'img/default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id_vendedores`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `Agromercado`, `Departamento`, `Municipio`, `foto_perfil`) VALUES
(4, 'prueda', 'xd', 'prueda@gmail.com', '12345', 'Central de Abastos', 'San Salvador', 'San Martin', 'img/default.jpg'),
(5, 'Katy', 'Zuniga', 'katy@gmail.com', '123456', 'Central de Abastos', 'San Salvador', 'Soyapango', 'img/default.jpg'),
(6, 'Katherine', 'Zuniga', 'Kathherine@gmail.com', '12345', 'Central de Abastos', 'San Salvador', 'Soyapango', 'img/default.jpg'),
(7, 'Hola', 'xs', 'holas@gmaiil.com', '1234', 'Central de Abastos', 'San Salvador', 'Soyapango', 'img/default.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `compradores`
--
ALTER TABLE `compradores`
  ADD PRIMARY KEY (`id_compradores`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `fk_vendedores` (`id_vendedores`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id_vendedores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `compradores`
--
ALTER TABLE `compradores`
  MODIFY `id_compradores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id_vendedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_vendedores` FOREIGN KEY (`id_vendedores`) REFERENCES `vendedores` (`id_vendedores`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
