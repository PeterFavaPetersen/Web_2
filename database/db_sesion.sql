-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2022 a las 16:26:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_sesion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesadejuego`
--

CREATE TABLE `mesadejuego` (
  `id_mesadejuego` int(11) NOT NULL,
  `juego` varchar(100) NOT NULL,
  `director` varchar(50) DEFAULT NULL,
  `cantidadJugadores` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesadejuego`
--

INSERT INTO `mesadejuego` (`id_mesadejuego`, `juego`, `director`, `cantidadJugadores`) VALUES
(1, 'Monopoly', 'El Banco', 10),
(26, 'Truco', 'no', 12),
(27, 'Catan', 'Ladron', 8),
(28, 'La vida', 'La Suerte', 1),
(30, 'Cobra', 'La Cobra', 4),
(31, 'Uno', 'no', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mesadejuego`
--
ALTER TABLE `mesadejuego`
  ADD PRIMARY KEY (`id_mesadejuego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mesadejuego`
--
ALTER TABLE `mesadejuego`
  MODIFY `id_mesadejuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
