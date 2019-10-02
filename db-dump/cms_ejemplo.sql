-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2019 a las 17:02:17
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms_ejemplo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'test', 'oscar@', '$2y$10$94Z50KnSx2ZB.cAjPH6zNuzy7AP3fjcYgKoWo20whzUvaWXmEbG/y'),
(2, 'dfadfsadfasEDIT', 'oscar@email.com', '$2y$10$day7wBwH/rViyxNG6QaTl./nkfPwUfdSFrQ96yrSGwIEtDtLQzw/y'),
(3, 'dfadfsadfasEDIT', 'oscar@email.com', '$2y$10$kQfLm9yHVRZQ5Y7zO0Uvd.4XXnv9UWZvMAWcd00a.cIdgGudHweRC'),
(4, 'dfadfsadfas', 'DS@DFS.CO', '$2y$10$13HAYHeysjEBTlzh4DK0jOJzdva3RUwwHL/0RUImqbs82WiVHrXnG'),
(5, '', 'DS@DFS.CO', '$2y$10$2aT3fQtGgAvOxBJz4NQfs.kEvVoYjivqNp0OefPSsoqVbSNd4l1Qq'),
(6, 'dfadfsadfas', 'oscar@email.com', '$2y$10$PE6cKHlrfYehJgTrvRnF..6hnWGFSAwde77AoWDe6JgGrM10V.9ui');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
