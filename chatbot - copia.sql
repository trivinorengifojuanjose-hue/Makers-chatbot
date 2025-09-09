-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2022 a las 18:49:09
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Configuración de caracteres
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chatbot`
--
CREATE DATABASE IF NOT EXISTS `chatbot` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chatbot`;

-- --------------------------------------------------------
-- Estructura de tabla para la tabla `chatbot`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `chatbot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Estructura de tabla para la tabla `inventario`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Datos para la tabla `chatbot`
-- --------------------------------------------------------

-- --------------------------------------------------------
-- Datos para la tabla `inventario`
-- --------------------------------------------------------
INSERT INTO `inventario` (`producto`, `cantidad`, `descripcion`) VALUES
('Laptop', 10, 'Laptop marca XYZ modelo 2025'),
('Mouse', 50, 'Mouse inalámbrico'),
('Teclado', 30, 'Teclado mecánico retroiluminado');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;