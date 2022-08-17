-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 17 2022 г., 14:28
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `room_reservation`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `room` int(11) NOT NULL,
  `date` date NOT NULL,
  `slot` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `reservations`
--

INSERT INTO `reservations` (`id`, `room`, `date`, `slot`, `name`, `email`, `phone`) VALUES
(1, 2, '2022-08-11', 3, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(3, 3, '2022-09-13', 3, 'Bakhtiyor', 'b.yakubov@gmail.com', '+998909871234'),
(4, 3, '2022-12-11', 3, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(5, 4, '2022-09-12', 4, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(8, 3, '2022-12-24', 3, 'Bunyod', 'khakimov.bunyod@gmail.com', '+998336961169'),
(10, 3, '2022-09-12', 7, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(11, 3, '2022-10-05', 3, 'Zebo', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(12, 3, '2022-12-03', 3, 'Sofia', 'khakimov.bunyod@gmail.com', '+998336961169'),
(13, 4, '2022-11-04', 6, 'Aziz', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(14, 2, '2022-12-09', 1, 'Bunik', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(15, 2, '2022-12-02', 8, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(16, 4, '2022-12-03', 5, 'Bunyod', 'khakimov.bunyod@gmail.com', '+998336961169'),
(17, 5, '2022-08-30', 5, 'Bunyod', 'khakimov.bunyod@gmail.com', '+998336961169'),
(18, 4, '2022-12-12', 8, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(19, 1, '2022-12-12', 3, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(20, 4, '2022-11-11', 4, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(21, 4, '2022-01-12', 3, 'Bunik', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(22, 3, '2022-01-01', 3, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(23, 3, '2022-11-10', 3, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(24, 4, '2022-04-02', 4, 'Bunyod', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(25, 1, '2022-03-09', 3, 'Nailya', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(26, 4, '2022-08-08', 4, 'Kamila', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(27, 3, '2022-05-21', 3, 'Zebo', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(29, 2, '2022-07-05', 5, 'Sofia', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(30, 2, '2022-12-03', 8, 'Bunya', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(31, 2, '2022-12-08', 9, 'Bunchik', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(35, 3, '2022-06-06', 8, 'Anna', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(36, 5, '2022-01-01', 7, 'David', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(37, 4, '2022-12-09', 2, 'George', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(38, 3, '2022-12-14', 4, 'Kassandra', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(39, 3, '2022-12-12', 7, 'Kavabanga', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(40, 4, '2022-12-12', 7, 'Sevilya', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(41, 3, '2020-02-14', 1, 'Shamsiddin', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(42, 4, '2022-09-13', 4, 'Farangiz', 'farangiz.s@gmail.com', '+998941238121'),
(43, 5, '2022-07-18', 3, 'Farruh', 'khakimov.bunyod99@gmail.com', '+998121222211'),
(46, 3, '2022-03-18', 2, 'Firdavs', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(47, 3, '2021-02-01', 3, 'George', 'khakimov.bunyod99@gmail.com', '+998336961169'),
(49, 3, '2021-08-19', 2, 'Feruza', 'khakimov.bunyod99@gmail.com', '+998336961169');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
