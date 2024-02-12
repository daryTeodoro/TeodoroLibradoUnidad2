-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2023 a las 20:48:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musicas`
--

CREATE TABLE `musicas` (
  `id` int(10) NOT NULL,
  `nombre` text NOT NULL,
  `autor` text NOT NULL,
  `rutaaudio` text NOT NULL,
  `rutaportada` text NOT NULL,
  `genero` text NOT NULL,
  `album` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `musicas`
--

INSERT INTO `musicas` (`id`, `nombre`, `autor`, `rutaaudio`, `rutaportada`, `genero`, `album`) VALUES
(1, 'Dramaturgy', 'Eve', 'audiosMusic\\Dramaturgy.mp3', 'portadasMusic\\Bunka.jpg', 'J-Rock', 'Bunka'),
(2, 'Kaishingeki', 'Eve', 'audiosMusic\\Kaishingeki.mp3', 'portadasMusic\\Bunka.jpg', 'J-Rock', 'Bunka'),
(3, 'Inochi no Tabekata', 'Eve', 'audiosMusic\\Inochi-No-Tabekata.mp3', 'portadasMusic\\Smile.jpg', 'J-Rock', 'Smile'),
(4, 'Leo', 'Eve', 'audiosMusic\\Leo.mp3', 'portadasMusic\\Smile.jpg', 'J-Rock', 'Smile'),
(5, 'Mellow', 'Eve', 'audiosMusic\\Mellow.mp3', 'portadasMusic\\Smile.jpg', 'J-Rock', 'Smile'),
(6, 'Kokoroyohou', 'Eve', 'audiosMusic\\Kokoroyohou.mp3', 'portadasMusic\\Smile.jpg', 'J-Rock', 'Smile'),
(7, 'Kororon', 'Eve', 'audiosMusic\\Kororon.mp3', 'portadasMusic\\Bokurano.jpg', 'J-Rock', 'Bokurano'),
(8, 'Canción Desafinada', 'Andrea Bocelli', 'audiosMusic\\Cancion-Desafinada.mp3', 'portadasMusic\\Amor.jpg', 'Música Clasica', 'Amor'),
(9, 'Cure For Me', 'Aurora', 'audiosMusic\\Cure-For-Me.mp3', 'portadasMusic\\The-Gods-We-Can-Touch.jpg', 'Pop', 'The Gods We Can Touch'),
(10, 'Exhale Inhale', 'Aurora', 'audiosMusic\\Exhale-Inhale.mp3', 'portadasMusic\\The-Gods-We-Can-Touch.jpg', 'Pop', 'The Gods We Can Touch');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(2, 'darinel', 'darinel.teodoro@gmail.com', 'dary'),
(10, 'Dary', 'dary_nel_3@hotmail.com', 'dary');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `musicas`
--
ALTER TABLE `musicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `musicas`
--
ALTER TABLE `musicas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
