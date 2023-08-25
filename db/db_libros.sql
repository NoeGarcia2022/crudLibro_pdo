-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2023 a las 05:45:27
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_libros`
--
CREATE DATABASE IF NOT EXISTS `db_libros` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_libros`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_libros`
--

CREATE TABLE `tb_libros` (
  `idLibro` int(10) NOT NULL,
  `nombreLibro` varchar(100) NOT NULL,
  `autorLibro` varchar(100) NOT NULL,
  `descripcionLibro` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_libros`
--

INSERT INTO `tb_libros` (`idLibro`, `nombreLibro`, `autorLibro`, `descripcionLibro`) VALUES
(6, 'Libro1', 'Autor1', 'Descripcion1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_libros`
--
ALTER TABLE `tb_libros`
  ADD PRIMARY KEY (`idLibro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_libros`
--
ALTER TABLE `tb_libros`
  MODIFY `idLibro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
