-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2016 a las 22:18:45
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loading_ajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombre`, `pais`, `ciudad`) VALUES
(1, 'Juan', 'Colombia', 'Medellin'),
(2, 'Eduard', 'Colombia', 'Salgar'),
(3, 'Messi', 'Argentina', 'Buenos Aires'),
(4, 'Benzema', 'Francia', 'Paris'),
(5, 'James', 'Colombia', 'Cucuta'),
(6, 'Marcelo', 'Brasil', 'Sao Paulo'),
(7, 'Sergio Ramos', 'Espania', 'Madrid'),
(8, 'Pirlo', 'Italia', 'Venecia'),
(9, 'Casillas', 'Espania', 'Valencia'),
(10, 'Cristiano', 'Portugal', 'Braga'),
(11, 'Robben', 'Holanda', 'Amsterdam'),
(12, 'Van Persie', 'Holanda', 'Eindhoven'),
(13, 'Roberto Carlos', 'Brasil', 'Brasilia'),
(14, 'Ronaldo', 'Brasil', 'Rio de Janeiro'),
(15, 'Buffon', 'Italia', 'Milan'),
(16, 'Rooney', 'Inglaterra', 'Londres'),
(17, 'Giggs', 'Inglaterra', 'Liverpool'),
(18, 'Beckam', 'Inglaterra', 'Manchester'),
(19, 'Pele', 'Brasil', 'Belo Horizonte'),
(20, 'David Ospina', 'Colombia', 'Medellin'),
(21, 'Bale', 'Gales', 'Bangor'),
(22, 'Alexis sanchez', 'Chile', 'Santiago');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
