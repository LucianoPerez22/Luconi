-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-10-2020 a las 23:52:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `luconi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `costo` float NOT NULL,
  `iva` float NOT NULL,
  `ganancia` float NOT NULL,
  `p_siva` float NOT NULL,
  `p_iva` float NOT NULL,
  `existencia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `codigo`, `id_proveedor`, `id_marca`, `descripcion`, `ubicacion`, `costo`, `iva`, `ganancia`, `p_siva`, `p_iva`, `existencia`) VALUES
(1, '003399887456', 2, 7, 'PEPSI X 1LTS', 'A3', 100, 10.5, 50, 150, 165.75, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_cuenta` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cod_postal` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `cuit` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_iva` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefonos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contacto` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `descripcion` varchar(180) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `id_prov`, `descripcion`) VALUES
(1, 0, ''),
(2, 7, 'COCA-COLA'),
(4, 8, 'CHEETOS1'),
(6, 8, 'RUFLES'),
(7, 2, 'PEPSI'),
(10, 1, 'QUILMES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `razon_social` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_cuenta` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cod_postal` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `cuit` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_iva` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefonos` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `contacto` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `fecha`, `razon_social`, `tipo_cuenta`, `cod_postal`, `provincia`, `localidad`, `direccion`, `cuit`, `tipo_iva`, `telefonos`, `email`, `contacto`) VALUES
(1, '0000-00-00', 'PEREZ LUCIANO', 'Credito', '8319', 'NEUQUEN', 'RINCON DE LOS SAUCES', 'JUJUY 1380', '20303910566', 'RI', '2995577433', 'bsoft2005@gmail.com', 'PEREZ LUCIANO'),
(2, '2020-09-26', 'SHARON ABRIL', 'CREDITO', '8319', 'RIO NEGRO', 'CINCO SALTOS', 'RIO BARRANCA 1882', '20303910566', 'MO', '2995577433', 'matias@matias.com', 'PEREZ LUCIANO'),
(7, '2020-09-27', 'MATIAS', 'CONTADO', '11111', 'SAN JUAN ', 'SAN JUAN', 'SU CASA EN SAN JUAN 738 PISO 2 DPTO 4', '99999999999', 'EX', '08003336589', 'matias@matias.com', 'MATIAS'),
(8, '2020-09-27', 'PABLO EMILIO', 'CONTADO', '22222', 'TUCUMAN', 'SAN MIGUEL DE TUCUMAN', 'TUCU 78', '66665444477', 'RI', '123654', 'pablo@pablo.com', 'PABLO EMILIO'),
(9, '2020-09-27', 'POMPOM', 'CONTADO', '5555', 'ENTRE RIOS', 'VICTORIA', 'BARTOLONI 45', '3332226655', 'MO', '98563247', 'pompon@pompon.com', 'POMPN'),
(10, '2020-09-27', 'CAMELLA GOMEZ', 'CONTADO', '7896', 'MISIONES', 'IGUAZU', 'IGUAZU 700', '65478963', 'RI', '123456', 'camella@camella.com', 'CAMELLA'),
(11, '2020-09-27', 'PICHITA', 'CONTADO', '8888', 'CHUBUT', 'COMODORO RIVADAVIA', 'COMODORO 1000', '12345678', 'RI', '321654', 'pichi@pichi.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
