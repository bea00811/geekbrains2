-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2021 г., 13:01
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `photo_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `photo_main`
--

CREATE TABLE `photo_main` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `Title_good` text NOT NULL,
  `descriptione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `photo_main`
--

INSERT INTO `photo_main` (`id`, `filename`, `price`, `path`, `Title_good`, `descriptione`) VALUES
(15, '', '23', 'images', 'papa1', 'papa1'),
(75, '', '', 'images', 'ryruy', 'papa2'),
(77, 'images.jpg', '', 'images', 'ноутбук aplle', 'описание ноутбук apple'),
(98, '4444.png', '', 'images', 'pasa', 'pasha'),
(102, '66666.png', '', 'images', 'new8_new', 'new8_new'),
(104, '', '', 'images', 'ira', 'papa2'),
(113, 'gazeta_1-2.png', '', 'images', 'ira', '66666'),
(116, 'text_201601210000111.jpg', '', 'images', 'new2', 'new2'),
(118, 'text_201601210000111.jpg', '', 'images', 'new2', 'new2'),
(119, 'Playback_Desktop-2.jpg', '', 'images', 'new7', 'new7'),
(121, 'Playback_Desktop-2.jpg', '', 'images', 'new777', 'new777'),
(123, 'Playback_Desktop-2.jpg', '', 'images', 'new10', 'lida'),
(124, 'gazeta_1-2.png', '', 'images', 'new2', 'description_of_new_noutbook'),
(125, '66229d5d6b.jpg', '', 'images', 'new222', 'new222'),
(127, '66229d5d6b.jpg', '', 'images', 'new222', 'new222'),
(140, 'Playback_Desktop-2.jpg', '', 'images', 'new7', 'new7'),
(141, 'gazeta_1-2.png', '', 'images', 'new10', 'lida'),
(143, 'Playback_Desktop-2.jpg', '', 'images', 'lida', 'new9'),
(149, 'Playback_Desktop-2.jpg', '', 'images', 'new2', 'description_of_new_noutbook'),
(150, '', '', 'images', 'ira', 'papa2'),
(156, 'gazeta_1-2.png', '25', 'images', 'lida', 'lida'),
(157, 'gazeta_1-2.png', '25', 'images', 'lida', 'lida');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `photo_main`
--
ALTER TABLE `photo_main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `photo_main`
--
ALTER TABLE `photo_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
