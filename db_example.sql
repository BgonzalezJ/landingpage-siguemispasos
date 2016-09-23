-- phpMyAdmin SQL Dump
-- version 4.4.13
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-09-2016 a las 20:44:29
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgmp_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(10) unsigned NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pictures`
--

INSERT INTO `pictures` (`id`, `image_url`, `link`, `active`, `created_at`, `updated_at`) VALUES
(2, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14309813_168682696869998_7188013114321797120_n.jpg', 'https://www.instagram.com/p/BKl_NGNAInb/', 0, '2016-09-23 05:57:54', '2016-09-23 17:06:14'),
(3, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14369039_1277879718912182_1525149186_n.jpg', 'https://www.instagram.com/p/BKjlnKQgf7y/', 1, '2016-09-23 05:57:54', '2016-09-23 07:15:23'),
(4, 'https://scontent.cdninstagram.com/t51.2885-15/sh0.08/e35/p640x640/14310710_955926661203217_621728257_n.jpg', 'https://www.instagram.com/p/BKjjVQlAbV5/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:19'),
(5, 'https://scontent.cdninstagram.com/t51.2885-15/sh0.08/e35/p640x640/14262694_291557007894219_1201544509_n.jpg', 'https://www.instagram.com/p/BKjS4KLAFsx/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:18'),
(6, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14295427_1768357320098798_1523484750_n.jpg', 'https://www.instagram.com/p/BKg3sOvgCCT/', 1, '2016-09-23 05:57:54', '2016-09-23 07:04:23'),
(7, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14334422_1805225209708940_1055305870_n.jpg', 'https://www.instagram.com/p/BKgjaVGgN_8/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:22'),
(8, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14309884_308262736207944_2130560147_n.jpg', 'https://www.instagram.com/p/BKgDty3gZxK/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:23'),
(9, 'https://scontent.cdninstagram.com/t51.2885-15/sh0.08/e35/p640x640/14279146_300034787033554_1284682102_n.jpg', 'https://www.instagram.com/p/BKeWVuOA6o7/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:24'),
(10, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14280642_1662254014090422_325941754_n.jpg', 'https://www.instagram.com/p/BKeTefXBppC/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:26'),
(11, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14334354_822390287860474_2029050088_n.jpg', 'https://www.instagram.com/p/BKdF_IHjTGZ/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:26'),
(12, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14295574_728702273934399_1845777654_n.jpg', 'https://www.instagram.com/p/BKbpBmlA-39/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:25'),
(13, 'https://scontent.cdninstagram.com/t51.2885-15/sh0.08/e35/p640x640/14279046_1807508879528640_1831933882_n.jpg', 'https://www.instagram.com/p/BKZdj6whQYI/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:27'),
(14, 'https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/14310662_304390333255569_1435095752_n.jpg', 'https://www.instagram.com/p/BKZOPJAAv3W/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:28'),
(15, 'https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/14287953_293367461045244_2122228373_n.jpg', 'https://www.instagram.com/p/BKY5tq2BIlq/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:30'),
(16, 'https://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/14309802_1045416748912843_1707866472_n.jpg', 'https://www.instagram.com/p/BKY5sTyBcec/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:33'),
(17, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14360154_161161867663592_1981752979_n.jpg', 'https://www.instagram.com/p/BKX5SCjA0wi/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:33'),
(18, 'https://scontent.cdninstagram.com/t51.2885-15/sh0.08/e35/p640x640/14280476_719128408245963_1429377867_n.jpg', 'https://www.instagram.com/p/BKT_9PphiwO/', 1, '2016-09-23 05:57:54', '2016-09-23 07:57:32'),
(19, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14280471_891298357681473_1666420607_n.jpg', 'https://www.instagram.com/p/BKQbPINAOQ7/', 1, '2016-09-23 05:57:54', '2016-09-23 08:17:39'),
(20, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14288011_832156406885077_1637319308_n.jpg', 'https://www.instagram.com/p/BKPFzPHgcwv/', 1, '2016-09-23 05:57:54', '2016-09-23 08:17:38'),
(21, 'https://scontent.cdninstagram.com/t51.2885-15/sh0.08/e35/p640x640/14240839_1783067311961980_1387220281_n.jpg', 'https://www.instagram.com/p/BKOQ3YpAUH2/', 1, '2016-09-23 05:57:54', '2016-09-23 07:15:32'),
(22, 'https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14269159_1600421510258975_910419220053884928_n.jpg', 'https://www.instagram.com/p/BKqlloXhR4b/', 1, '2016-09-23 07:08:55', '2016-09-23 13:58:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
