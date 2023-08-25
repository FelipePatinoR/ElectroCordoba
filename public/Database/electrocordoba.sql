-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2023 a las 02:14:50
-- Versión del servidor: 10.4.28-MariaDB-log
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `electrocordoba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'HERRAMIENTAS MANUALES'),
(2, 'EQUIPO DE SOLDADURA'),
(3, 'HERRAMIENTAS ELECTRICAS'),
(6, 'GENERAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_venta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `id_subcategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `cantidad`, `precio`, `id_venta`, `id_subcategoria`) VALUES
(1, 'PRENSA PINZA QUICK GRIP 1 PULG', 10, 5000, NULL, 1),
(2, 'ALICATE CORTE DIAGONAL STANLEY', 10, 12000, NULL, 1),
(3, 'ALICATE CORTE DIAGONAL STANLEY', 10, 13000, NULL, 1),
(4, 'DESTORNILLADOR BARRA REDONDA P', 10, 8000, NULL, 2),
(5, 'DESTORNILLADOR ESTRELLA 2.3/4X', 10, 9000, NULL, 2),
(6, 'DESTORNILLADOR PRO PUNTA ESTAN', 10, 11000, NULL, 2),
(7, 'MARTILLO CON MANGO DE MADERA C', 10, 16500, NULL, 3),
(8, 'MARTILLO DE BOLA 16 ONZAS STAN', 10, 14300, NULL, 3),
(9, 'MARTILLO DE BOLA ONZAS STANLEY', 10, 17500, NULL, 3),
(10, 'CARETA PARA SOLDAR INTELIGENTE', 10, 130000, NULL, 4),
(11, 'INVERSOR ELITE 160 AMP ELITE A', 10, 4333555, NULL, 5),
(12, 'SOLDADOR TIPO INVERSOR CON 220', 10, 1500000, NULL, 5),
(13, 'SOLDADOR HYUNDAI 180 AMP. 11/2', 10, 1800000, NULL, 6),
(14, 'ATORNILLADOR PARA DRYWALL 520W', 10, 130000, NULL, 7),
(15, 'ATORNILLADOR DE IMPACTO VVR 6.', 10, 150000, NULL, 7),
(16, 'TALADRO PERCUTOR 3/8 PULG 550W', 10, 130000, NULL, 8),
(17, 'TALADRO PERCUTOR 1/2\" 710 W EI', 10, 200000, NULL, 8),
(18, 'JUEGO DE 2 ACOPLES RAPIDOS ENT', 10, 13000, NULL, 12),
(19, 'ELECTROSIERRA MAKITA UC4051A 1', 10, 800000, NULL, 12),
(20, 'CORTASETOS MAKITA DUH551Z 18+1', 10, 600000, NULL, 12),
(21, 'MEDIDOR DE DISTANCIA LASER 20 ', 10, 250000, NULL, 13),
(22, 'TERMOMETRO INFRAROJO BOSCH GIS', 10, 350000, NULL, 13),
(23, 'REGLA DE MEDICION PARA NIVEL O', 10, 200000, NULL, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id_subcategoria` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id_subcategoria`, `nombre`, `id_categoria`) VALUES
(1, 'ALICATES Y PINZAS', 1),
(2, 'DESTORNILLADORES', 1),
(3, 'MARTILLOS', 1),
(4, 'ACCESORIOS Y CONSUMIBLES', 2),
(5, 'PROCESO ARCO MANUAL', 2),
(6, 'PROCESO MIG', 2),
(7, 'ATORNILLADORES', 3),
(8, 'TALADROS', 3),
(12, 'EQUIPO PARA JARDINERIA', 6),
(13, 'EQUIPOS DE MEDICION Y NIVELACION', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `imagen` blob NOT NULL,
  `contraseña` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_subcategoria` (`id_subcategoria`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id_subcategoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `compra` (`id_venta`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_subcategoria`) REFERENCES `subcategoria` (`id_subcategoria`);

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
