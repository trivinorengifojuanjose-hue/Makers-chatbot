-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2024 a las 23:51:04
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
-- Base de datos: `system innovation`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estampados`
--

CREATE TABLE `estampados` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estampados`
--

INSERT INTO `estampados` (`id`, `Nombre`) VALUES
(1, 'Estampado negro'),
(2, 'estampado (never look back)'),
(3, 'Estampado con diseño de arbol'),
(4, 'Estampado de astronauta'),
(5, 'Estampado enjoy the little THINGS'),
(6, 'Estampado 6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `CodigoProducto` int(20) NOT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `Proveedor` varchar(50) DEFAULT NULL,
  `Marca` varchar(20) DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CodigoProducto`, `valor`, `Proveedor`, `Marca`, `foto`) VALUES
(435435, '15600', '345443', 'Estampado mariposa', 'fotos/18.jpg'),
(453411, '14500', '345411', 'estampado creative', 'fotos/8.jpg'),
(456546, '16700', '56', 'Estampado  mariobros', 'fotos/17.jpg'),
(4534112, '14500', '3454112', 'estampado calabera', 'fotos/9.jpg'),
(4565462, '16700', '562', 'Estampado  deportivo', 'fotos/15.jpg'),
(45341121, '16700', '34541121', 'estampado mono', 'fotos/10.jpg'),
(456544562, '17500', '544562', 'estampado de flor', 'fotos/2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombredeusuario` text NOT NULL,
  `correo` text NOT NULL,
  `clave` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellido`, `cedula`, `nombredeusuario`, `correo`, `clave`) VALUES
(3, 'justin', 'meza', 123456789, 'justinmeza2', 'justinjacobmeza2@gmail.com', '123456'),
(4, 'cata', 'perez', 1234567890, 'cataydiego', 'catadiegomelamama@gmail.com', '12345'),
(9, 'warner ', 'meza', 123456, 'warner2', 'trivinorengifojuanjose@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosastreria`
--

CREATE TABLE `registrosastreria` (
  `id` int(11) NOT NULL,
  `nombresastreria` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `idsastrero` bigint(20) NOT NULL,
  `celulardellocal` bigint(10) NOT NULL,
  `coordenadas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registrosastreria`
--

INSERT INTO `registrosastreria` (`id`, `nombresastreria`, `direccion`, `idsastrero`, `celulardellocal`, `coordenadas`) VALUES
(17, 'Sastreria rengifo', 'calle 35h#29-a 02', 14, 3147995166, 'https://www.google.com/maps/place/Sastreria/@3.4247546,-76.5062504,17z/data=!3m1!4b1!4m6!3m5!1s0x8e30a6e01606ee1f:0x3aeceb6a32af164a!8m2!3d3.4247546!4d-76.5036701!16s%2Fg%2F11p65qs7pj?entry=ttu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint(20) NOT NULL,
  `idsastreria` bigint(20) NOT NULL,
  `idservicios` text NOT NULL,
  `idtipoprenda` text NOT NULL,
  `celular` bigint(10) NOT NULL,
  `descripcion` text NOT NULL,
  `calendario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `idsastreria`, `idservicios`, `idtipoprenda`, `celular`, `descripcion`, `calendario`) VALUES
(44, 13, 'areglos', 'Camisa', 3147995166, 'tiene un roto en la parte supérior de la misma', '2024-05-19'),
(45, 13, 'Estampados', 'estampado creative', 3185567898, 'me gustaria este estampado en camisa blanca talla M\r\n', '2024-05-31'),
(48, 0, 'Estampados', 'Estampado mariposa', 87654, 'gf', '2024-05-25'),
(51, 17, 'Estampados', 'estampado creative', 3147995166, 'quiero este estampado en blanco', '2024-05-31'),
(55, 17, 'Estampados', 'Estampado  deportivo', 4324, 'camisa negra', '2024-06-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseñas`
--

CREATE TABLE `reseñas` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `idsastreria` bigint(20) NOT NULL,
  `comentario` text NOT NULL,
  `idusuario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reseñas`
--

INSERT INTO `reseñas` (`id`, `nombre`, `idsastreria`, `comentario`, `idusuario`) VALUES
(16, 'Natalia', 13, 'Muy buena sastreria la recomiendo\r\n', 0),
(17, 'Juan', 13, 'La variedad de estampados que hay es la mejor\r\n', 0),
(18, 'David', 13, 'Buena sastreria recomiendo mejor calidad de telas', 0),
(19, 'marlon', 17, 'estuvo muy buen el sevicio', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripción` text NOT NULL,
  `ubicación` text NOT NULL,
  `membresia` int(5) NOT NULL,
  `dirección` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodepago`
--

CREATE TABLE `tipodepago` (
  `id` bigint(100) NOT NULL,
  `nombre` text NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` text NOT NULL,
  `clave` varchar(6) NOT NULL,
  `celular` bigint(15) NOT NULL,
  `nacimiento` date NOT NULL,
  `genero` text NOT NULL,
  `cedula` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `clave`, `celular`, `nacimiento`, `genero`, `cedula`) VALUES
(14, 'triviño rengifo', 'triviño@gmail.com', '12345', 3167173107, '2024-04-02', 'on', 12345678900);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estampados`
--
ALTER TABLE `estampados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`CodigoProducto`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrosastreria`
--
ALTER TABLE `registrosastreria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estampados`
--
ALTER TABLE `estampados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `registrosastreria`
--
ALTER TABLE `registrosastreria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
