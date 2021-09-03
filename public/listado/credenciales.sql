-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2015 a las 22:19:35
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `credenciales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Client_id` int(10) NOT NULL,
  `Client_nomb` varchar(30) NOT NULL,
  `Client_apelli` varchar(30) NOT NULL,
  `Client_tel` int(10) NOT NULL,
  `Client_direccion` varchar(30) NOT NULL,
  `Client_Cargo` int(20) NOT NULL,
  `Client_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Client_id`, `Client_nomb`, `Client_apelli`, `Client_tel`, `Client_direccion`, `Client_Cargo`, `Client_email`) VALUES
(12222, 'jose armando', 'rodriguez', 233, 'kr 8 c', 1, 'andres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_admin232`
--

CREATE TABLE `users_admin232` (
  `Users_id` int(10) NOT NULL,
  `User_name` varchar(40) NOT NULL,
  `Users_email` int(40) NOT NULL,
  `Users_contrase` varchar(42) NOT NULL,
  `Users_acti` enum('SI','NO') NOT NULL,
  `User_tip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_mysql_sdsq`
--

CREATE TABLE `user_mysql_sdsq` (
  `id_auto` int(10) NOT NULL,
  `id_user_` varchar(20) NOT NULL,
  `pass_` varchar(20) NOT NULL,
  `tipo_rol` enum('superadmin','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_mysql_sdsq`
--

INSERT INTO `user_mysql_sdsq` (`id_auto`, `id_user_`, `pass_`, `tipo_rol`) VALUES
(123123, 'fdfeterg345gh4345', 'hgfhjtjkukasthytr546', 'superadmin'),
(23451234, 'dfgfhyjtjkerty766e', 'tryetrytw56452345g', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Client_id`);

--
-- Indices de la tabla `user_mysql_sdsq`
--
ALTER TABLE `user_mysql_sdsq`
  ADD PRIMARY KEY (`id_auto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
