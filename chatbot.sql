-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 2024-06-xx
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
-- Tabla para preguntas y respuestas del chatbot
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `chatbot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabla para inventario
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabla para recomendaciones personalizadas
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `recomendaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `recomendacion` varchar(500) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`producto_id`) REFERENCES `inventario`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabla para métricas de stock (para administradores)
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `metricas_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `stock_minimo` int(11) NOT NULL DEFAULT 0,
  `stock_maximo` int(11) NOT NULL DEFAULT 0,
  `alerta_bajo_stock` tinyint(1) NOT NULL DEFAULT 0,
  `fecha_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`producto_id`) REFERENCES `inventario`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Datos de ejemplo para inventario
-- --------------------------------------------------------
INSERT INTO `inventario` (`producto`, `cantidad`, `descripcion`, `precio_unitario`, `categoria`) VALUES
('Laptop', 10, 'Laptop marca XYZ modelo 2025', 1200.00, 'Electrónica'),
('Mouse', 50, 'Mouse inalámbrico', 25.00, 'Accesorios'),
('Teclado', 30, 'Teclado mecánico retroiluminado', 70.00, 'Accesorios');

-- --------------------------------------------------------
-- Datos de ejemplo para recomendaciones
-- --------------------------------------------------------
INSERT INTO `recomendaciones` (`producto_id`, `recomendacion`) VALUES
(1, 'Considera ofrecer un descuento para laptops con más de 5 unidades en stock.'),
(3, 'Promocionar teclados mecánicos en temporada de regreso a clases.');

-- --------------------------------------------------------
-- Datos de ejemplo para métricas de stock
-- --------------------------------------------------------
INSERT INTO `metricas_stock` (`producto_id`, `stock_minimo`, `stock_maximo`, `alerta_bajo_stock`) VALUES
(1, 5, 20, 0),
(2, 10, 100, 0),
(3, 5, 50, 0);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;