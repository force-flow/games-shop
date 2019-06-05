-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2019 г., 13:50
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gamebasket`
--

CREATE TABLE `gamebasket` (
  `id` int(10) NOT NULL,
  `img` varchar(355) NOT NULL,
  `title` varchar(355) NOT NULL,
  `price` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `gamesshop`
--

CREATE TABLE `gamesshop` (
  `id` int(10) NOT NULL,
  `img` varchar(355) NOT NULL,
  `title` varchar(355) NOT NULL,
  `price` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gamesshop`
--

INSERT INTO `gamesshop` (`id`, `img`, `title`, `price`) VALUES
(1, '1.jpg', 'Just cause 4', '2500'),
(2, '2.jpg', 'Far cry 5: New Dawn', '1999'),
(3, '3.jpg', 'Jagged Alliance ', '1999'),
(4, '4.jpg', 'HellBlade', '1500'),
(5, '5.jpg', 'Red Dead Redemption 2', '2999'),
(6, '6.jpg', 'Assassin\'s creed', '1333'),
(8, '7.jpg', 'FIFA 19', '2499');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gamebasket`
--
ALTER TABLE `gamebasket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gamesshop`
--
ALTER TABLE `gamesshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gamebasket`
--
ALTER TABLE `gamebasket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `gamesshop`
--
ALTER TABLE `gamesshop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
