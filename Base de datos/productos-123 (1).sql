-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2021 a las 05:04:38
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos-123`
--
CREATE DATABASE IF NOT EXISTS `productos-123` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `productos-123`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `nombre`) VALUES
(1, 'Pescados'),
(2, 'Carnes Rojas'),
(3, 'Abarrotes'),
(4, 'Quesos y Fiambres'),
(5, 'Vinos Cervezas y Licores'),
(6, 'Verduras'),
(7, 'pera'),
(8, 'Abarrotes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `producto_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `stock_minimo` int(11) NOT NULL,
  `imagen` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto_id`, `categoria_id`, `nombre`, `precio_compra`, `precio_venta`, `codigo`, `fecha_vencimiento`, `cantidad`, `stock_minimo`, `imagen`) VALUES
(1, 1, 'Filetes de Reineta congelados Jumbo 500 g', 5100, 5290, 458236, '2021-06-23', 100, 5, 'Reineta-congelados-Jumbo'),
(2, 1, 'Salmón congelado 5 trozos 500 g ', 6190, 6300, 523659, '2021-10-20', 230, 5, 'Salmón-congelado'),
(3, 1, 'Salmón granel', 11780, 11990, 256325, '2022-04-04', 120, 5, 'Salmón-granel'),
(4, 1, 'Atún Cuisine & Co congelado 500 g', 5690, 5990, 854215, '2021-10-30', 210, 5, 'Atún-Cuisine'),
(5, 1, 'Filetes de Reineta congelados Minuto Azul 500 g', 6020, 6050, 963256, '2022-12-25', 312, 5, 'Filetes-de-Reineta'),
(6, 2, 'Carne Molida 5% materia grasa 500 g ', 3990, 4090, 452369, '2021-11-25', 274, 7, 'Carne-Molida'),
(7, 2, 'Tártaro 3% mg elaboración local kg', 5490, 4595, 542185, '2021-10-30', 120, 7, 'Tártaro-mg'),
(8, 2, 'Carne Molida 10% materia grasa 500 g', 3090, 3190, 326598, '2022-10-20', 58, 7, 'Carne-Molida2'),
(9, 2, 'Posta Negra desgrasado envasado Cat. V  ', 4620, 4795, 452659, '2021-10-01', 212, 7, 'Posta-Negra-desgrasado'),
(10, 2, 'Chuleta Super Cerdo Centro 550 g ', 4320, 4490, 452369, '2022-03-01', 100, 7, 'Chuleta-Super-Cerdo'),
(11, 3, 'Spaghetti Vivo Carozzi sin gluten, 250 g', 990, 1090, 652326, '2022-10-12', 120, 3, 'Spaghetti-Vivo-Carozzi'),
(12, 3, 'Spaghetti integral Lucchetti 400 g', 690, 720, 852369, '2022-01-20', 420, 3, 'paghetti-integral'),
(13, 3, 'Rigati Talliani 400 g, tres sabores: huevos fresco...', 620, 730, 421547, '2022-12-03', 70, 3, 'Rigati-Talliani'),
(14, 3, 'Arroz Jumbo grado 2 largo delgado 1 kg', 785, 890, 326987, '2021-12-05', 200, 3, 'Arroz-Jumbo-grado-2'),
(15, 3, 'Aceite de Maravilla,Natura,900 ml', 1495, 1590, 256983, '2022-01-23', 98, 3, 'Aceite de Maravilla'),
(16, 4, 'Queso mantecoso Quilque resellable 28 láminas 500 soprole', 4220, 4300, 214587, '2022-02-25', 96, 5, 'Queso-mantecoso-Quilque'),
(17, 4, 'Pechuga de pavo cocida Sopraval granel', 1890, 1990, 232323, '2022-12-23', 150, 6, 'Pechuga de pavo cocida'),
(18, 4, 'Queso mantecoso trozo Las Parcelas valdivia 500 g', 4230, 4390, 369513, '2022-03-21', 236, 6, 'Queso-mantecoso-trozo'),
(19, 4, 'Queso rallado Colun parmesano 80 g', 1192, 1290, 215489, '2022-08-28', 145, 6, 'Queso-rallado-Colun-parmesano'),
(20, 4, 'Queso mantecoso Las Parcelas Valdivia granel', 1720, 1890, 326589, '2021-12-25', 230, 6, 'Queso-mantecoso-Las-Parcelas'),
(21, 5, 'Pack cerveza Stella Artois 12 unid. 354 cc c/u', 7800, 8090, 362541, '2021-12-12', 147, 10, 'Pack-cerveza-Stella'),
(22, 5, 'Pack cerveza Heineken 6 unid. 330 ml c/u', 4980, 5890, 326589, '2021-11-25', 452, 10, 'Pack-cerveza-Heineken'),
(23, 5, 'Espumante Viñamar brut 12.5° 750 cc', 3990, 4890, 326596, '2023-09-27', 230, 10, 'Espumante-Viñamar-brut'),
(24, 5, 'Carmenere Secreto Viña Viu Manent 750 ml', 8100, 9140, 452147, '2030-06-10', 210, 10, 'Carmenere-Secreto-Viña-Viu'),
(25, 5, 'Carmenere Viña Porta 750 cc Reserva', 4260, 5280, 121232, '2025-07-06', 526, 10, 'Carmenere-Viña-Porta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `fk_productos` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `producto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`categoria_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
