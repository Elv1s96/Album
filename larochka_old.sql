-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 22 2020 г., 12:08
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `larochka_old`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `name`, `image`, `created_at`, `updated_at`, `category_id`) VALUES
(43, 'Simon Stalenhag-1', 'album/Cf3qGckFEyRKFz86o1uljLG1YkLglajNRCunkjKi.jpeg', '2020-07-22 06:48:31', '2020-07-22 06:48:31', 11),
(44, 'Simon Stalenhag-2', 'album/GmVXApNs6C7BKEUV0pDouyJuiLRQF1pAliwgl8yV.jpeg', '2020-07-22 06:48:47', '2020-07-22 06:48:47', 11),
(45, 'Simon Stalenhag-3', 'album/FXFguSzZuk829nMQlwNxZr1TVL1qqQJz9n4MZd5r.jpeg', '2020-07-22 06:48:59', '2020-07-22 06:48:59', 11),
(46, 'Simon Stalenhag-4', 'album/gpOjXKfUE0BeS6qsOXCS2a4DjU6ZFaqc669TSqph.jpeg', '2020-07-22 06:49:28', '2020-07-22 06:49:28', 11),
(47, 'Simon Stalenhag-5', 'album/qUqwEsmubeTnbXkt5VNhvAHakoER5koZEaqJAOe8.jpeg', '2020-07-22 06:49:40', '2020-07-22 06:49:40', 11),
(48, 'Simon Stalenhag-6', 'album/nTJZnFqzqTyFkZGZxkVzEADkcvojZstzTVdrAJAG.jpeg', '2020-07-22 06:49:54', '2020-07-22 06:49:54', 11),
(49, 'Witcher-1', 'album/EGZJdgXinNWKcyx7V1OSHG59Dm7zEOZL9Jl18DAm.jpeg', '2020-07-22 06:51:59', '2020-07-22 06:51:59', 6),
(50, 'Witcher-2', 'album/Vc2mrHaOcOgYuJrbUBFXbW8njgIxQdFZaKf2sn1h.jpeg', '2020-07-22 06:52:11', '2020-07-22 06:52:11', 6),
(51, 'Witcher-3', 'album/z9QyPi2QY6xOHhqP1QdxlydADm8Y7A7JbDyPFkdu.png', '2020-07-22 06:52:22', '2020-07-22 06:52:22', 6),
(52, 'Jean-Michel Basquiat-1', 'album/xApe1uVjg7DJix38pKyNCadq0uYvEYX2PWWeemQK.png', '2020-07-22 06:54:23', '2020-07-22 06:54:23', 12),
(53, 'Jean-Michel Basquiat-2', 'album/mCbkdTvTPCjfxrHCf6awau2uw6sKpAYKGtqezsm5.jpeg', '2020-07-22 06:54:34', '2020-07-22 06:54:34', 12),
(54, 'Jean-Michel Basquiat-3', 'album/ICFkG7yrT722zv4e8HnTcsIueRcjvawsGlVJtwEs.jpeg', '2020-07-22 06:54:43', '2020-07-22 06:54:43', 12),
(55, 'Jean-Michel Basquiat-4', 'album/5wNlBTu4H6kYizsG3YIlX8NpzulZllp0aCm1A8Bl.jpeg', '2020-07-22 06:54:54', '2020-07-22 06:54:54', 12),
(56, 'Expressionism-1', 'album/kTjJB5CDIZwpinKyRkNHCQN03RTVrVVSMaPoUPiS.jpeg', '2020-07-22 06:56:43', '2020-07-22 06:56:43', 13),
(57, 'Expressionism-2', 'album/Hlj525HqNko0nh9mVfOLH4CRmGpPAnXC2C9KiLNy.jpeg', '2020-07-22 06:56:55', '2020-07-22 06:56:55', 13),
(58, 'Expressionism-3', 'album/iIhx9pCJ643UNIuSMotSD5Nik6lM7qHUFQFpxp8X.jpeg', '2020-07-22 06:57:05', '2020-07-22 06:57:05', 13),
(59, 'Expressionism-4', 'album/gfhmnLW0pYKFWKyColg8vBpL8CVMaY6Q9C7ujEya.jpeg', '2020-07-22 06:57:15', '2020-07-22 06:57:15', 13);

-- --------------------------------------------------------

--
-- Структура таблицы `cards_models`
--

CREATE TABLE `cards_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(5, 'Рандом', 'random', '2020-05-21 06:33:36', '2020-05-21 06:33:36'),
(6, 'Ведьмак 3', 'Witcher 3', '2020-05-21 06:33:53', '2020-05-21 06:33:53'),
(11, 'Simon Stalenhag', 'Simon Stalenhag', '2020-07-22 06:46:55', '2020-07-22 06:46:55'),
(12, 'Jean-Michel Basquiat', 'jean-michel-basquiat', '2020-07-22 06:54:09', '2020-07-22 06:54:09'),
(13, 'Expressionism', 'Expressionism', '2020-07-22 06:56:29', '2020-07-22 06:56:29');

-- --------------------------------------------------------

--
-- Структура таблицы `contact_models`
--

CREATE TABLE `contact_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact_models`
--

INSERT INTO `contact_models` (`id`, `created_at`, `updated_at`, `name`, `email`, `subject`, `message`) VALUES
(1, '2020-05-12 17:00:44', '2020-05-12 17:00:44', 'Buy WoW Classic Mounts from a trusted boosting service provider', 'blablabla@gmail.com', 'hfghgfhhgf', 'Buy WoW Classic Mounts from a trusted boosting service providerBuy WoW Classic Mounts from a trusted boosting service provider'),
(2, '2020-05-25 04:50:10', '2020-05-25 04:50:10', 'Форсаж 8', 'danylevskyegor@gmail.com', 'fdsfdsf', 'fdsfdsfdsf');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_25_074931_create_cards_models_table', 1),
(5, '2020_03_25_121348_create_contact_models_table', 2),
(6, '2020_05_09_055054_create_albums_table', 2),
(7, '2014_10_12_100000_create_password_resets_table', 3),
(8, '2020_05_15_130208_alter_table_users', 3),
(11, '2020_05_18_080250_alter_table_albums', 4),
(15, '2020_05_18_081947_create_categories_table', 5),
(16, '2020_05_21_092250_alter_table_albums', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'admin', 'tushkanchik756@gmail.com', NULL, '$2y$10$m9gn5FminxMxZHF/bshwwOHXaOAmWiwvwPEYwCkbzhCl2WXIzGu4i', 'vhi2wzxKinOdQ4yhRpJ76Wb5qn3w8BylSEzsDntrchuttGEstEACNhqcDjaN', '2020-05-10 12:45:53', '2020-05-10 12:45:53', 1),
(5, 'Egor', 'danilevskiy@semalt.com', NULL, '$2y$10$Uz6paZFZxEABMlZjQpkj/uxonkNOhO9tWmFM0ZTx7whbNkQ9mcZ3W', NULL, '2020-05-25 04:27:02', '2020-05-25 04:27:02', 0),
(6, 'kek', 'kek@gmail.com', NULL, '$2y$10$meQ7R3Y.TH5kh2onDCVNiuGjwKzn5Fk/00UZ56Lx76JfsbHCAXqNu', NULL, '2020-07-22 07:05:07', '2020-07-22 07:05:07', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cards_models`
--
ALTER TABLE `cards_models`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact_models`
--
ALTER TABLE `contact_models`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT для таблицы `cards_models`
--
ALTER TABLE `cards_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `contact_models`
--
ALTER TABLE `contact_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
