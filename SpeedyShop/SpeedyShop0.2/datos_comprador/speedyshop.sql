-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2025 a las 06:16:45
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
-- Estructura de tabla para la tabla `compradores`
--

CREATE TABLE `compradores` (
  `id_compradores` int(11) NOT NULL,
  `Nombre` varchar(200) DEFAULT NULL,
  `Apellido` varchar(200) DEFAULT NULL,
  `Correo` varchar(300) DEFAULT NULL,
  `Contraseña` varchar(300) DEFAULT NULL,
  `Departamento` varchar(300) DEFAULT NULL,
  `Municipio` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compradores`
--

INSERT INTO `compradores` (`id_compradores`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `Departamento`, `Municipio`) VALUES
(1, 'Tralalero', 'Tralala', 'tralalerin@gmail.com', '12345678', 'San Salvador', 'Soyapango'),
(2, 'Tralalero', 'Tralala', 'tralalerin@gmail.com', '12345678', 'San Salvador', 'Soyapango'),
(3, 'Kathy', 'Zuniga', 'kathy@gmail.com', 'Kathyfife', 'San Salvador', 'Soyapango'),
(4, 'Bangchan', 'Chancito', 'Bangchancito@gmail.com', 'SKZ', 'San Salvador', 'San Martin');

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
  `Municipio` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id_vendedores`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `Agromercado`, `Departamento`, `Municipio`) VALUES
(1, 'Tralalero', 'Tralala', 'tralalerin@gmail.com', '12345678', 'Soya', 'San Salvador', 'Soyapango'),
(2, 'Tralalero', 'Tralala', 'tralalerin@gmail.com', '12345678', 'Soya', 'San Salvador', 'Soyapango'),
(3, 'Eme', 'Marroquin', 'mrtnz@gmail.com', 'emepotaxie', 'Soya', 'San Salvador', 'Soyapango');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compradores`
--
ALTER TABLE `compradores`
  ADD PRIMARY KEY (`id_compradores`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id_vendedores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compradores`
--
ALTER TABLE `compradores`
  MODIFY `id_compradores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id_vendedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
