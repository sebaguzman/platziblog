-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-03-2018 a las 17:57:41
-- Versión del servidor: 5.7.21-0ubuntu0.16.04.1
-- Versión de PHP: 7.2.2-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `platziblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`) VALUES
(1, 'El titulo 1', 'En este articulo vamos a enseñarte cómo actualizar Telegram a la última versión si acaso tienes dudas sobre este asunto. Es un proceso sencillo dado que esta aplicación, a diferencia de su principal rival, solamente se puede actualizar a través de las tiendas de aplicación, Google Play en el caso de Android, App Store en el caso de iOS o Microsot Store en el caso de Windows Phone. Eso si hablamos de móvil, porque en escritorio hay más opciones. ¡Toma nota!'),
(2, 'Titulo del 2', 'Personalmente he seguido la vida de esta distribución más de cerca que la de ninguna otra desde sus inicios. He probado todas las versiones, pero hace más de un año que no me emociono con elementary OS, entre Freya y Loki si bien hubo mucho trabajo, los usuarios no sentimos muchos cambios o novedades, y actualmente la distro se siente vieja y un tanto estancada.\r\n\r\nelementary OS Juno huele fresco, huele a novedad, y si bien ya han explicado que no llegará en ningún momento antes del lanzamiento de Ubuntu 18.04 en abril de 2018, seguramente sí sea este año, algunos meses después de la llegada de última versión LTS de su distro madre. ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
