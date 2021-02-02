-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-02-2021 a las 01:18:11
-- Versión del servidor: 5.7.31
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ci4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Moises', 'mvelasquez@pictoric.com', '2021-02-01 17:17:06', '2021-02-01 17:17:06', NULL),
(2, 'Maria', 'info@maria.com', '2021-02-01 19:10:29', '2021-02-01 19:10:29', NULL),
(3, 'Juan', 'juan@test.com', '2021-02-01 19:10:29', '2021-02-01 19:10:29', NULL),
(4, 'Peter', 'peter@test.com', '2021-02-01 19:11:11', '2021-02-01 19:11:11', NULL),
(5, 'Jorge', 'jorge@test.com', '2021-02-01 19:11:11', '2021-02-01 19:11:11', NULL),
(6, 'Veronika', 'veronika@test.com', '2021-02-01 19:47:24', '2021-02-01 19:47:24', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
