-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 22 2016 г., 22:02
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `land`
--

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE `data` (
  `ID` int(11) NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `header_img` text COLLATE utf8_bin NOT NULL,
  `firma` text COLLATE utf8_bin NOT NULL,
  `firma_style` text COLLATE utf8_bin NOT NULL,
  `slogan` text COLLATE utf8_bin NOT NULL,
  `slogan_style` text COLLATE utf8_bin NOT NULL,
  `service1` char(21) COLLATE utf8_bin NOT NULL,
  `service1_desc` char(55) COLLATE utf8_bin NOT NULL,
  `service2` char(21) COLLATE utf8_bin NOT NULL,
  `service2_desc` char(55) COLLATE utf8_bin NOT NULL,
  `service3` char(21) COLLATE utf8_bin NOT NULL,
  `service3_desc` char(55) COLLATE utf8_bin NOT NULL,
  `service4` char(21) COLLATE utf8_bin NOT NULL,
  `service4_desc` char(55) COLLATE utf8_bin NOT NULL,
  `img_portfolio1` text COLLATE utf8_bin NOT NULL,
  `img_portfolio2` text COLLATE utf8_bin NOT NULL,
  `img_portfolio3` text COLLATE utf8_bin NOT NULL,
  `img_portfolio4` text COLLATE utf8_bin NOT NULL,
  `about1` text COLLATE utf8_bin NOT NULL,
  `about2` text COLLATE utf8_bin NOT NULL,
  `callout1` text COLLATE utf8_bin NOT NULL,
  `callout2` text COLLATE utf8_bin NOT NULL,
  `footer_adr1` text COLLATE utf8_bin NOT NULL,
  `footer_adr2` text COLLATE utf8_bin NOT NULL,
  `footer_phone` text COLLATE utf8_bin NOT NULL,
  `footer_email` text COLLATE utf8_bin NOT NULL,
  `footer_copyright` text COLLATE utf8_bin NOT NULL,
  `map1` text COLLATE utf8_bin NOT NULL,
  `map2` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Очистить таблицу перед добавлением данных `data`
--

TRUNCATE TABLE `data`;
--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`ID`, `title`, `header_img`, `firma`, `firma_style`, `slogan`, `slogan_style`, `service1`, `service1_desc`, `service2`, `service2_desc`, `service3`, `service3_desc`, `service4`, `service4_desc`, `img_portfolio1`, `img_portfolio2`, `img_portfolio3`, `img_portfolio4`, `about1`, `about2`, `callout1`, `callout2`, `footer_adr1`, `footer_adr2`, `footer_phone`, `footer_email`, `footer_copyright`, `map1`, `map2`) VALUES
(1, 'Мое портфолио - Start Bootstrap Theme', 'big.jpg', 'Vova Soft', 'color:blue;text-align:middle;vertical-align:center;margin:30px', 'Фирма веников не вяжет!!!', 'color:yellow', 'Производство тучек', 'Качественно, в большом количестве.', 'Укажем путь', 'Расскажем куда Вам идти.', 'Гоним', 'Недоливаем.', 'Полузащита', 'Защищаем от покемонов.', '1.jpg', '2.jpg', '3.jpg', '4.jpg', 'Stylish Portfolio is the perfect theme for your next project!', 'This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo', 'Vertically Centered Text''', '(можем по другому, но дороже)', 'м.Кобеляки', 'вул. Геройська', '+380687778855', 'VovaSoft@example.com', 'Copyright &copy; Vova Soft 2016', '', ''),
(2, 'Мое портфолио', 'lapti4.jpg', 'Лапти.ру', 'color:red', 'Фирма веников не вяжет, а плетет лапти!', 'color:green', 'Производство тучек', 'Качественно, в большом количестве.', 'Укажем путь', 'Расскажем куда Вам идти.', 'Гоним', 'Недоливаем.', 'Полузащита', 'Защищаем от покемонов.', '1.jpg', '2.jpg', '3.jpg', '4.jpg', 'Stylish Portfolio is the perfect theme for your next project!', 'This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo', 'Vertically Centered Text''', '(можем по другому, но дороже)', 'м.Кобеляки', 'вул. Геройська', '+380687778855', 'VovaSoft@example.com', 'Copyright &copy; Vova Soft 2016', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.6211282488935!2d34.1950299515198!3d49.1508174879241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDA5JzAyLjkiTiAzNMKwMTEnNTAuMCJF!5e0!3m2!1suk!2sua!4v1471466092013', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.6211282488935!2d34.1950299515198!3d49.1508174879241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDA5JzAyLjkiTiAzNMKwMTEnNTAuMCJF!5e0!3m2!1suk!2sua!4v1471466092013');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(5) NOT NULL,
  `Login` varchar(20) COLLATE utf8_bin NOT NULL,
  `Pass` varchar(21) COLLATE utf8_bin NOT NULL,
  `FIO` varchar(100) COLLATE utf8_bin NOT NULL,
  `Birthday` date DEFAULT NULL,
  `City` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `ADM` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Очистить таблицу перед добавлением данных `users`
--

TRUNCATE TABLE `users`;
--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Login`, `Pass`, `FIO`, `Birthday`, `City`, `ADM`) VALUES
(1, 'CBA', '123456', 'Субота', '1968-12-09', 'Днепр', 1),
(2, 'CRB', '987456', 'Субота Я.В.', '1991-11-17', 'Львов', 1),
(3, 'CBB', '111111', 'Субота Б.В.', '2003-03-26', 'Днепр', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
