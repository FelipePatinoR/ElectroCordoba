-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2023 a las 18:01:52
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
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombrecli` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo_cl`
--

CREATE TABLE `correo_cl` (
  `id_correo` int(11) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo_pr`
--

CREATE TABLE `correo_pr` (
  `id_correo` int(11) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion_pr`
--

CREATE TABLE `direccion_pr` (
  `id_direccion` int(11) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dirección_cl`
--

CREATE TABLE `dirección_cl` (
  `id_direccion` int(11) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_cl`
--

CREATE TABLE `imagen_cl` (
  `id_imagen` int(11) NOT NULL,
  `imagen_cl` blob NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_pr`
--

CREATE TABLE `imagen_pr` (
  `id_imagen` int(11) NOT NULL,
  `imagen` blob NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` double NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_compra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombrepro` varchar(30) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categoria`
--

CREATE TABLE `sub_categoria` (
  `id_subcategoria` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_cl`
--

CREATE TABLE `telefono_cl` (
  `id_telefono` int(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_pr`
--

CREATE TABLE `telefono_pr` (
  `id_telefono` int(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_ad`
--

CREATE TABLE `usuario_ad` (
  `id_usuario` int(11) NOT NULL,
  `usuario_ad` varchar(30) NOT NULL,
  `contraseña` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_cl`
--

CREATE TABLE `usuario_cl` (
  `id_usuario` int(11) NOT NULL,
  `usuario_cl` varchar(30) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `id_usuario_ad` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
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
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `correo_cl`
--
ALTER TABLE `correo_cl`
  ADD PRIMARY KEY (`id_correo`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `correo_pr`
--
ALTER TABLE `correo_pr`
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `direccion_pr`
--
ALTER TABLE `direccion_pr`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `dirección_cl`
--
ALTER TABLE `dirección_cl`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `imagen_cl`
--
ALTER TABLE `imagen_cl`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `imagen_pr`
--
ALTER TABLE `imagen_pr`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_compra` (`id_compra`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  ADD PRIMARY KEY (`id_subcategoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `telefono_cl`
--
ALTER TABLE `telefono_cl`
  ADD PRIMARY KEY (`id_telefono`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `telefono_pr`
--
ALTER TABLE `telefono_pr`
  ADD PRIMARY KEY (`id_telefono`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `usuario_ad`
--
ALTER TABLE `usuario_ad`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_cl`
--
ALTER TABLE `usuario_cl`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_usuario_ad` (`id_usuario_ad`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `correo_cl`
--
ALTER TABLE `correo_cl`
  ADD CONSTRAINT `correo_cl_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `correo_pr`
--
ALTER TABLE `correo_pr`
  ADD CONSTRAINT `correo_pr_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `direccion_pr`
--
ALTER TABLE `direccion_pr`
  ADD CONSTRAINT `direccion_pr_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `dirección_cl`
--
ALTER TABLE `dirección_cl`
  ADD CONSTRAINT `dirección_cl_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `imagen_cl`
--
ALTER TABLE `imagen_cl`
  ADD CONSTRAINT `imagen_cl_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario_cl` (`id_usuario`);

--
-- Filtros para la tabla `imagen_pr`
--
ALTER TABLE `imagen_pr`
  ADD CONSTRAINT `imagen_pr_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario_ad` (`id_usuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario_ad` (`id_usuario`);

--
-- Filtros para la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  ADD CONSTRAINT `sub_categoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `telefono_cl`
--
ALTER TABLE `telefono_cl`
  ADD CONSTRAINT `telefono_cl_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `telefono_pr`
--
ALTER TABLE `telefono_pr`
  ADD CONSTRAINT `telefono_pr_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `usuario_cl`
--
ALTER TABLE `usuario_cl`
  ADD CONSTRAINT `usuario_cl_ibfk_1` FOREIGN KEY (`id_usuario_ad`) REFERENCES `usuario_ad` (`id_usuario`),
  ADD CONSTRAINT `usuario_cl_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
