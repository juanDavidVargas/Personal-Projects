-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2016 a las 23:30:49
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `Cedula` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombres` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Direccion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`Cedula`, `Nombres`, `Apellidos`, `Fecha_Nacimiento`, `Direccion`, `Telefono`) VALUES
('1128453257', 'Juan', 'Vargas', '1990-12-23', 'Medellin', '3429078'),
('1234567890', 'Eduard', 'Vargas', '1993-03-17', 'Clle 51 A Sur # 67-40', '1239034');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`Cedula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
