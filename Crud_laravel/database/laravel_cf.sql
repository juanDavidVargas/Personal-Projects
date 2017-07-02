-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2017 a las 19:01:20
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel_cf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'título', 'prueba de artículo', 1, 1, '2017-04-16 23:57:32', '2017-04-16 23:57:32', 'titulo'),
(2, 'Otro Artículo', 'Está es una prueba de registro de un artículo para comprobar que registra correctamente, aunque toca revisar porque no está cargando la imágen.', 1, 2, '2017-04-19 06:55:55', '2017-04-19 07:21:48', 'otro-articulo'),
(3, 'Otro artículo de prueba', 'Este es otro registro de prueba para comprobar la validación del campo imagen', 1, 1, '2017-04-20 06:05:55', '2017-04-20 06:05:55', 'otro-articulo-de-prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article_tag`
--

CREATE TABLE `article_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(4, 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 3, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PHP', '2017-04-15 22:19:40', '2017-04-15 22:19:40'),
(2, 'Programming', '2017-04-16 00:45:22', '2017-04-16 00:45:22'),
(3, 'Design web', '2017-04-16 00:45:40', '2017-04-16 00:45:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `name`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 'blog_1492369052.jpg', 1, '2017-04-16 23:57:32', '2017-04-16 23:57:32'),
(2, 'blog_1492566955.jpg', 2, '2017-04-19 06:55:55', '2017-04-19 06:55:55'),
(3, 'blog_1492566955.jpg', 3, '2017-04-19 06:55:55', '2017-04-19 06:55:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_04_023428_add_categories_table', 1),
('2017_04_04_024403_add_articles_table', 1),
('2017_04_04_025139_add_images_table', 1),
('2017_04_04_025445_add_tags_table', 1),
('2017_04_07_023514_add_slug_to_articles_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Design Web', '2017-04-15 23:18:46', '2017-04-15 23:27:16'),
(3, 'Symfony', '2017-04-16 00:13:42', '2017-04-16 00:13:42'),
(4, 'Codelgniter', '2017-04-16 00:14:09', '2017-04-16 00:14:09'),
(5, 'Laravel', '2017-04-16 00:14:21', '2017-04-16 00:14:21'),
(6, 'MySQL', '2017-04-16 00:14:50', '2017-04-16 00:14:50'),
(7, 'Rails', '2017-04-16 00:15:09', '2017-04-16 00:15:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('Member','Admin') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'juan@gmail.com', '$2y$10$Tb6XDerXdQNTxZwHdYdbyuTI2fE03eJVNKi3yKidj8V9cwabj8BS2', 'Admin', 'pPuIBos9MFtRyYJmlSHZS1lI0pE50eZpLC4wasa1AiHalBWWmRhSreph44Hp', '2017-04-15 22:19:08', '2017-04-25 08:13:48'),
(2, 'David', 'david@hotmail.com', '$2y$10$Bevhv1jVsd2mD1BBW3.EHel49I1gRIg3E32JtYnsBEtkOd/uodBVe', 'Member', 'VNxe0O7Q2iNRzIsjEYnMEo1dYpc0P9PxABsTuN6kxZcDjp4xs6VNkVy1RoUV', '2017-04-16 00:16:01', '2017-04-26 07:50:09'),
(3, 'Karen', 'karen@gmail.com', '$2y$10$5u7yUSQigUaIHBH4pXDGuenHM5aWUoYHX7EEF/l3ssSL2eHS1eXfC', 'Member', NULL, '2017-04-16 00:16:58', '2017-04-16 00:16:58'),
(4, 'Pedro Perez', 'pedrito@gmail.com', '$2y$10$suDAGbTFNRp8NTeslLEn1.xdI9iH.30cGCdSakuQp1AGjqUfs7vOS', 'Member', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Brandy Metz', 'gutkowski.enid@yahoo.com', '$2y$10$VUnm8r6WzL1RD2Wk01nAyuhL5t6VcOnyoY.b/ITtorB7lk.rsKwUa', 'Member', NULL, '2017-04-20 07:05:06', '2017-04-20 07:05:06'),
(6, 'Consuelo Abshire', 'kellie.wiegand@hills.com', '$2y$10$2Izi9blN6doPuhgggh38I.zLEzLvpLnBVcimORz.in694jVxt08Pm', 'Member', NULL, '2017-04-20 07:05:06', '2017-04-20 07:05:06'),
(7, 'Cheyanne Nicolas MD', 'bruen.deanna@gmail.com', '$2y$10$DMLp1gdxkDcIWBaWUY0BX.b3ko3v.SgFmfwRBiY9MNpniVTs9HdXq', 'Member', NULL, '2017-04-20 07:05:06', '2017-04-20 07:05:06'),
(8, 'Merle Kuhic', 'pkemmer@hotmail.com', '$2y$10$b4xbuuMOU/ChSGyZzS2ZVeFhmzVqpZb3Ertk76f5A5PsldA3DKTB2', 'Member', NULL, '2017-04-20 07:05:06', '2017-04-20 07:05:06'),
(9, 'Dr. Tyrel Klocko', 'runolfsdottir.walter@hotmail.com', '$2y$10$RVZWFuP9TBqXJhC/6HVDZuh2Z6lmdM02EoWP/NzhBQsDAc5eYn3Ym', 'Member', NULL, '2017-04-20 07:05:06', '2017-04-20 07:05:06'),
(10, 'Dr. Eliza Leannon', 'rudy.ullrich@hermann.com', '$2y$10$5kI4F0b0lC6yMQzXGfud/.mg4UesOrzQalB17bBs7vNa7WuYXjcNC', 'Member', NULL, '2017-04-20 07:05:06', '2017-04-20 07:05:06'),
(11, 'Valentina Schaefer', 'chelsie94@gmail.com', '$2y$10$aMcCCkzVcegPSVGS/M.hEeqFCFzSWuxhKRfbyHgQy6Hw18/CXBCVa', 'Member', NULL, '2017-04-20 07:05:06', '2017-04-20 07:05:06'),
(12, 'Jerrell Goyette', 'nbuckridge@yahoo.com', '$2y$10$REuUz7ZfS4EAQ4QmWO2EHu73Nr4YHAvpN2tISFw15DTAu1BklVpHG', 'Member', NULL, '2017-04-20 07:05:06', '2017-04-20 07:05:06'),
(13, 'Alberta Muller', 'devyn42@hotmail.com', '$2y$10$FS7F0xGGZOVlb59WmCRi4.PYSB5FLAVLhAIJ01ykUq0Uj7w4vz8..', 'Member', NULL, '2017-04-20 07:05:06', '2017-04-20 07:05:06'),
(14, 'Dr. Shana Weimann', 'elmore.parisian@gmail.com', '$2y$10$BfK3iXVD/H1JypL20hzy3etlX6FlMVBNBlCSwQ2VaDs1sNaidzfpS', 'Member', NULL, '2017-04-20 07:05:06', '2017-04-20 07:05:06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_tag_article_id_foreign` (`article_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_article_id_foreign` (`article_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
