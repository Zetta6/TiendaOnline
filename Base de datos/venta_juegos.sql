-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2021 a las 05:02:22
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
-- Base de datos: `venta_juegos`
--
CREATE DATABASE IF NOT EXISTS `venta_juegos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `venta_juegos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `CATEGORIA_ID` int(11) NOT NULL,
  `NOMBRE_CATEGORIA` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `DESCRIPCION_CATEGORIA` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`CATEGORIA_ID`, `NOMBRE_CATEGORIA`, `DESCRIPCION_CATEGORIA`) VALUES
(1, 'Aventura', 'Explora, descubre e investiga nuevos lugares mientras te diviertes haciéndolo. '),
(3, 'Acción ', 'Juegos que se enfoca principalmente en batallas contra los enemigos'),
(4, 'Fantasía ', 'Juegos que tienen una mezcla entre realidad pero mayormente ficción '),
(5, 'Terror ', 'Juegos que en su mayoría los personajes y/o el ambiente es de terror '),
(6, 'Plataforma ', 'Videojuegos que se caracterizan por tener que caminar, correr, saltar o escalar sobre una serie de plataformas y acantilados, con enemigos, mientras se recogen objetos para poder completar el juego');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `CLIENTE_ID` int(11) NOT NULL,
  `NOMBRE_CLIENTE` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `APELLIDO_CLIENTE` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `EMAIL` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `RUN` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `TELEFONO` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`CLIENTE_ID`, `NOMBRE_CLIENTE`, `APELLIDO_CLIENTE`, `EMAIL`, `RUN`, `TELEFONO`) VALUES
(1, 'Brian ', 'Rojas', 'b.rojas123@gmail.com', '20.456.789-0', '9 12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `PRODUCTO_ID` int(11) NOT NULL,
  `CATEGORIA_ID` int(11) NOT NULL,
  `NOMBRE_PRODUCTO` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `CODIGO_PRODUCTO` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `STOCK` int(11) NOT NULL,
  `DESCRIPCION_PRODUCTO` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `IMAGEN` mediumtext COLLATE utf8mb4_spanish_ci NOT NULL,
  `ESTADO` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`PRODUCTO_ID`, `CATEGORIA_ID`, `NOMBRE_PRODUCTO`, `PRECIO`, `CODIGO_PRODUCTO`, `STOCK`, `DESCRIPCION_PRODUCTO`, `IMAGEN`, `ESTADO`) VALUES
(1, 1, 'Minecraft Java Edition', 21000, 'CICPC6', 25, 'Explora un mundo generado infinitamente en el cual recoger recursos para sobrevivir a la par que vas mejorando tu equipamiento y construyendo todo lo que permita tu imaginación.', '', 'Disponible'),
(2, 1, 'God of War ', 20000, '456Gse', 10, 'Es un juego de acción y aventura que narra por lo que atraviesa Kratos  ', '', 'Disponible '),
(3, 1, 'Grand Theft Auto: San Andreas ', 20000, '278F52', 15, 'Es un juego de conducir cualquier vehículo y se pueden realizar misiones una vez llegando al destino  ', '', 'Disponible '),
(4, 1, 'Grand Theft Auto 5', 15000, '687BHN', 10, 'Es un juego con una ciudad creada con lujo de detalles y mas viva que nunca, además viene con tres personajes nuevos ', '', 'Disponible '),
(5, 1, 'Subway Surfers', 15000, '9567VD', 5, 'Es un juego donde el chico es perseguido por un policía por hacer un graffiti en un tren', '', 'Disponible '),
(6, 3, ' Battlefield™ 2042 ', 25000, '59VGsa', 20, 'Es un shooter en primera persona que marca el regreso a la emblemática guerra total de la franquicia. En un mundo en un futuro cercano transformado por el desorden, adáptate y sobrevive con la ayuda de tu patrulla y un arsenal de vanguardia en campos de batalla en constante cambio.', '', 'Disponible '),
(7, 3, 'Back 4 Blood', 15000, 'FBD235', 15, 'Es un juego de disparos en primera persona multijugador en línea desarrollado por Turtle Rock Studios y publicado por Warner Bros.', '', 'Disponible '),
(8, 3, 'CyberPunk 2077', 30000, 'ASV234', 20, 'Es una historia de acción y aventura en mundo abierto ambientada en Night City, una megalópolis obsesionada con el poder, el glamur y la modificación corporal. Tu personaje es V, un mercenario que persigue un implante único que permite alcanzar la inmortalidad.', '', 'Disponible '),
(9, 3, 'Marvel\'s Guardians of the Galaxy ', 30000, 'BGHN45', 30, 'Se permite incluso el lujo de romper con la libertad de los mundos abiertos para evitar caer en situaciones absurdas o en misiones secundarias de perseguir globos por la ciudad.', '', 'Disponible '),
(10, 3, 'PAYDAY 2', 25000, 'GNYT56', 20, 'El juego consiste en una serie de \"atracos\", en donde el jugador puede optar por llevarlos a cabo por su cuenta, o en una partida multijugador, en donde puede jugar con compañeros manejados mediante inteligencia artificial, o con otros jugadores.', '', 'Disponible '),
(11, 4, 'The Legend of Zelda: Breath of the Wild', 30000, '14BGBR', 30, 'Es la nueva aventura de acción de Nintendo para Wii U y Nintendo Switch que nos presenta el título más ambicioso de la saga con un mundo abierto por explorar y en el que realizar todo tipo de acciones como escalar además de otras clásicas como nadar o montar a caballo.', '', 'Disponible '),
(12, 4, 'Minecraft Dungeons', 25000, 'BGREDS23', 20, 'Se trata de un título más centrado en el rol, la personalización y el cooperativo a lo largo de una historia épica. Cada usuario podrá adaptar su personaje al estilo de juego que quiera y formar un grupo de hasta cuatro personas para explorar las mazmorras.', '', 'Disponible '),
(13, 4, 'Cuphead', 15000, 'BGDRSE', 15, 'Es un videojuego de plataformas de scroll lateral en 2D de tipo \"shot \'em up\" ya que se pueden recolectar poderes y modificarlos. Los niveles están divididos en: Run \'n Gun y Boss Battle y estos se pueden jugar de manera individual o de 2 jugadores.', '', 'Disponible '),
(14, 4, 'Hollow Knight', 25000, 'GBFD43', 10, 'Es una aventura de acción clásica en 2D ambientada en un vasto mundo interconectado. Explora cavernas tortuosas, ciudades antiguas y páramos mortales. Combate contra criaturas corrompidas, haz nuevas amistades con extraños insectos y resuelve los antiguos misterios que yacen en el corazón del reino.', '', 'Disponible '),
(15, 4, 'Mario Party Superstars', 20000, 'NGRE56', 15, 'Una colección superestrella de tableros clásicos para Nintendo 64™: ¡Llamando a todos los seguidores! ¡Regresan 100 minijuegos clásicos de los juegos para las consolas Nintendo 64 y Nintendo GameCube™ y más!: Prueba una colección estelar de minijuegos de la serie de Mario Party.', '', 'Disponible '),
(16, 5, 'Resident Evil Village', 35000, 'CDHY45', 30, 'Tiene como objetivo crear una innovadora experiencia de survival horror como nunca antes. Años después de la pesadilla, Ethan Winters ha conseguido cierta estabilidad y una vida normal con su familia. Una vida que no tardará en ser destruida por un héroe de antaño, Chris Redfield.', '', 'Disponible '),
(17, 5, 'Five Nights at Freddy\'s Fecurity Breach', 30000, '34vfgh', 30, 'El jugador que trabaja como un guardia de seguridad nocturno, debiendo utilizar varias herramientas (sobre todo revisar cámaras de seguridad) para sobrevivir contra los animales animatrónicos del restaurante, que cobran vida y se vuelven asesinos desquiciados durante la madrugada. ', '', 'Disponible '),
(18, 5, 'Friday the 13th: The Game', 20000, 'FVD487', 20, 'Es un videojuego multijugador de acción asimétrico 1 contra 7, en el que un usuario encarna a Jason y los demás a diferentes adolescentes y personajes. El juego busca que los jugadores realicen trampas, usen diferentes señuelos y se escondan de la presencia del imponente personaje.', '', 'Disponible '),
(19, 5, 'Poppy Playtime ', 25000, 'BG433D', 20, 'Es un juego de supervivencia, terror y puzle. Durante el primer episodio, el jugador se encontrará mas tarde con Huggy Wuggy, que es el juguete más vendido de la compañía, y el jugador tendrá que escapar por un conducto, pero no será fácil, ya que Huggy se moverá durante soportes de conductos.', '', 'Disponible '),
(20, 5, 'Left 4 Dead 2', 30000, 'BGNUYT', 20, 'Es la secuela del título multijugador de Valve en el que hasta cuatro jugadores deberán cooperar para sobrevivir a un apocalipsis zombi que nos enfrentará a oleadas incesantes de muertos vivientes. El trabajo en equipo resulta vital para ser capaces de llegar a los refugios.', '', 'Disponible '),
(21, 6, 'New super Mario Bros ', 30000, 'NHFR45', 30, 'Es un videojuego de plataformas desarrollado y publicado por Nintendo para la consola portátil Nintendo DS y sus variantes. ', '', 'Disponible '),
(22, 6, 'Yoshi\'s Crafted World', 35000, 'FVRT5y', 30, 'Resuelve rompecabezas y enfréntate a desafíos mientras exploras diferentes maneras de interactuar con un mundo hecho con objetos cotidianos. Podrás jugar ciertos niveles al reverso para descubrir nuevas perspectivas y encontrar objetos ingeniosamente escondidos.', '', 'Disponible '),
(23, 6, 'Super Mario Odyssey', 25000, 'BTBER2', 30, 'El juego muestra a Mario viajando a través de varios mundos conocidos como «reinos», en una nave con forma de sombrero llamada odyssey. La odyssey usa como combustible unos objetos con forma de lunas llamados energilunas, las cuales se reparten entre los 17 reinos y se obtienen al hacer ciertas acciones.', '', 'Disponible '),
(24, 6, 'Super Smash Bros Ultimate', 35000, 'TRRTGF', 30, 'Ultimate es la nueva entrega para Nintendo Switch de la popular saga de Nintendo centrada en el género de lucha, en la que personajes como Super Mario, Zelda, Samus de Metroid, Donkey Kong o Pikachu de Pokémon por citar algunos, combaten en los más variados escenarios extraídos del legado digital de la empresa japonesa. ', '', 'Disponible '),
(25, 6, 'Rayman Adventures\r\n', 25000, 'BGBHTR', 20, 'Es una nueva incursión del personaje de Ubisoft en el ecosistema móvil, narrándonos una nueva aventura en la que los Incrediballs han sido capturados por fuerzas malignas, poniendo en peligro todo el mágico mundo.', '', 'Disponible '),
(31, 4, 'Terraria', 6000, 'A8S8A2', 25, 'si', 'C:\\xampp\\tmp\\php39C4.tmp', 'Disponible'),
(32, 1, 'minecraft 2', 6000, 'A8S8A2', 25, 'yes', 'C:\\xampp\\tmp\\phpE955.tmp', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_venta`
--

CREATE TABLE `producto_venta` (
  `PRODUCTOVENTA_ID` int(11) NOT NULL,
  `VENTA_ID` int(11) NOT NULL,
  `PRODUCTO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `VENTA_ID` int(11) NOT NULL,
  `CLIENTE_ID` int(11) NOT NULL,
  `SERIE_COMPROBANTE` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `FECHA_HORA` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CANTIDAD` int(11) NOT NULL,
  `SUB_TOTAL` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`VENTA_ID`, `CLIENTE_ID`, `SERIE_COMPROBANTE`, `FECHA_HORA`, `CANTIDAD`, `SUB_TOTAL`, `TOTAL`) VALUES
(1, 1, '234567', '2021-11-03 21:04:43', 1, 14990, 15000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CATEGORIA_ID`),
  ADD UNIQUE KEY `CATEGORIAS_PK` (`CATEGORIA_ID`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`CLIENTE_ID`),
  ADD UNIQUE KEY `CLIENTES_PK` (`CLIENTE_ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`PRODUCTO_ID`),
  ADD UNIQUE KEY `PRODUCTOS_PK` (`PRODUCTO_ID`),
  ADD KEY `CATEGORIA_PRODUCTO_FK` (`CATEGORIA_ID`);

--
-- Indices de la tabla `producto_venta`
--
ALTER TABLE `producto_venta`
  ADD PRIMARY KEY (`PRODUCTOVENTA_ID`,`VENTA_ID`,`PRODUCTO_ID`),
  ADD UNIQUE KEY `PRODUCTO_VENTA_PK` (`PRODUCTOVENTA_ID`,`VENTA_ID`,`PRODUCTO_ID`),
  ADD KEY `PRODUCTO_VENTA1_FK` (`PRODUCTO_ID`),
  ADD KEY `PRODUCTO_VENTA2_FK` (`VENTA_ID`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`VENTA_ID`),
  ADD UNIQUE KEY `VENTAS_PK` (`VENTA_ID`),
  ADD KEY `VENTA_CLIENTE_FK` (`CLIENTE_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CATEGORIA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `CLIENTE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `PRODUCTO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `producto_venta`
--
ALTER TABLE `producto_venta`
  MODIFY `PRODUCTOVENTA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `VENTA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_PRODUCTO_CATEGORIA_CATEGORI` FOREIGN KEY (`CATEGORIA_ID`) REFERENCES `categorias` (`CATEGORIA_ID`);

--
-- Filtros para la tabla `producto_venta`
--
ALTER TABLE `producto_venta`
  ADD CONSTRAINT `FK_PRODUCTO_PRODUCTO__PRODUCTO` FOREIGN KEY (`PRODUCTO_ID`) REFERENCES `productos` (`PRODUCTO_ID`),
  ADD CONSTRAINT `FK_PRODUCTO_PRODUCTO__VENTAS` FOREIGN KEY (`VENTA_ID`) REFERENCES `ventas` (`VENTA_ID`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `FK_VENTAS_VENTA_CLI_CLIENTES` FOREIGN KEY (`CLIENTE_ID`) REFERENCES `clientes` (`CLIENTE_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
