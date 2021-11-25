-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2017 г., 12:32
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `faberlicengine`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lan_camps`
--

CREATE TABLE `lan_camps` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` bigint(20) NOT NULL,
  `utm_source` varchar(255) DEFAULT NULL,
  `utm_campaign` varchar(255) DEFAULT NULL,
  `utm_content` varchar(255) DEFAULT NULL,
  `utm_term` varchar(255) DEFAULT NULL,
  `ref` varchar(500) DEFAULT NULL,
  `date` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lan_camps`
--

INSERT INTO `lan_camps` (`id`, `ip`, `utm_source`, `utm_campaign`, `utm_content`, `utm_term`, `ref`, `date`) VALUES
(4, 2130706433, NULL, NULL, NULL, NULL, NULL, 1496305826),
(5, 2130706433, 'YandexDirect', '5355', NULL, NULL, NULL, 1496312150);

-- --------------------------------------------------------

--
-- Структура таблицы `lan_orders`
--

CREATE TABLE `lan_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_order` int(10) UNSIGNED NOT NULL,
  `ref_id` varchar(255) DEFAULT NULL,
  `camp_id` int(10) UNSIGNED DEFAULT NULL,
  `split` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lan_orders`
--

INSERT INTO `lan_orders` (`id`, `date_order`, `ref_id`, `camp_id`, `split`) VALUES
(32, 1496307570, 'shop', 4, 'no_wow'),
(31, 1496307060, 'shop', 4, 'no_wow'),
(30, 1496306135, 'shop', 4, 'no_wow'),
(29, 1496305823, 'shop', NULL, NULL),
(28, 1496305743, 'registration', 1, 'no_wow'),
(27, 1496305543, 'shop', 1, 'no_wow'),
(33, 1496308229, 'registration', 4, 'no_wow'),
(34, 1496312154, 'registration', 5, 'no_wow'),
(35, 1496995261, 'registration', 4, 'no_wow'),
(36, 1496995381, 'registration', 4, 'no_wow'),
(37, 1496995397, 'registration', 4, 'no_wow'),
(38, 1496995414, 'registration', 4, 'no_wow'),
(39, 1499325984, 'registration', 4, 'wow'),
(40, 1499326105, 'registration', 4, 'wow'),
(41, 1499326135, 'registration', 4, 'wow'),
(42, 1499326181, 'registration', 4, 'wow'),
(43, 1499328515, 'registration', 4, 'wow'),
(44, 1499587042, 'registration', 4, 'no_wow'),
(45, 1499587359, 'registration', 4, 'wow'),
(46, 1502262602, 'registration', 4, 'wow'),
(47, 1503072458, 'registration', 4, 'wow'),
(48, 1503072602, 'shop', 4, 'wow'),
(49, 1503072674, 'shop', 4, 'wow'),
(50, 1503073351, 'shop', 4, 'wow'),
(51, 1503073381, 'shop', 4, 'wow'),
(52, 1503073387, 'shop', 4, 'wow'),
(53, 1503086248, 'registration', 4, 'wow'),
(54, 1503087045, 'registration', 4, 'no_wow'),
(55, 1503087077, 'registration', 4, 'no_wow'),
(56, 1503087144, 'registration', 4, 'no_wow'),
(57, 1503087167, 'registration', 4, 'no_wow'),
(58, 1503087224, 'registration', 4, 'no_wow'),
(59, 1503087302, 'registration', 4, 'no_wow'),
(60, 1503087447, 'registration', 4, 'no_wow'),
(61, 1503087655, 'registration', 4, 'no_wow'),
(62, 1503089008, 'registration', 4, 'no_wow'),
(63, 1503089045, 'registration', 4, 'no_wow'),
(64, 1503089107, 'registration', 4, 'no_wow'),
(65, 1503089270, 'registration', 4, 'no_wow'),
(66, 1503089275, 'shop', 4, 'no_wow'),
(67, 1503089285, 'registration', 4, 'no_wow'),
(68, 1503089297, 'registration', 4, 'no_wow'),
(69, 1503089301, 'shop', 4, 'no_wow'),
(70, 1503089326, 'shop', NULL, NULL),
(71, 1503089331, 'shop', 4, 'no_wow'),
(72, 1503089344, 'shop', 4, 'no_wow'),
(73, 1503089463, 'shop', 4, 'no_wow'),
(74, 1503089467, 'shop', 4, 'no_wow'),
(75, 1503089481, 'shop', 4, 'no_wow'),
(76, 1503089609, 'registration', 4, 'no_wow'),
(77, 1503090350, 'registration', 4, 'no_wow'),
(78, 1503090871, 'registration', 4, 'wow'),
(79, 1503090879, 'registration', 4, 'wow'),
(80, 1503090881, 'shop', 4, 'wow'),
(81, 1503090896, 'registration', 4, 'wow'),
(82, 1503090902, 'registration', 4, 'wow'),
(83, 1503090919, 'registration', 4, 'wow'),
(84, 1503090929, 'registration', 4, 'wow'),
(85, 1503090935, 'shop', 4, 'wow'),
(86, 1503090954, 'registration', 4, 'wow'),
(87, 1503090984, 'registration', 4, 'wow'),
(88, 1503121141, 'registration', 4, 'wow'),
(89, 1503121228, 'shop', 4, 'wow'),
(90, 1503121271, 'shop', 4, 'wow'),
(91, 1503121506, 'shop', NULL, NULL),
(92, 1503121739, 'shop', 4, 'no_wow'),
(93, 1503121849, 'shop', 4, 'no_wow'),
(94, 1503121867, 'shop', NULL, NULL),
(95, 1503121901, 'shop', 4, 'no_wow'),
(96, 1503121910, 'registration', 4, 'no_wow'),
(97, 1503122084, 'registration', 4, 'no_wow'),
(98, 1503122282, 'registration', 4, 'no_wow'),
(99, 1503122346, 'registration', 4, 'no_wow'),
(100, 1503122366, 'registration', 4, 'no_wow'),
(101, 1503123050, 'registration', 4, 'no_wow'),
(102, 1503557343, 'registration', 4, 'wow'),
(103, 1503557454, 'registration', 4, 'wow'),
(104, 1503557676, 'registration', 4, 'wow'),
(105, 1503557796, 'registration', 4, 'wow'),
(106, 1503557882, 'registration', 4, 'wow'),
(107, 1503557979, 'registration', 4, 'wow'),
(108, 1503558083, 'registration', 4, 'wow'),
(109, 1503558327, 'registration', 4, 'wow'),
(110, 1503558471, 'registration', 4, 'wow'),
(111, 1503558508, 'registration', NULL, NULL),
(112, 1503558631, 'registration', 4, 'wow'),
(113, 1503558643, 'registration', 4, 'wow'),
(114, 1503558654, 'registration', NULL, NULL),
(115, 1503558675, 'registration', 4, 'no_wow'),
(116, 1503558687, 'registration', NULL, NULL),
(117, 1503558732, 'registration', 4, 'no_wow'),
(118, 1503558753, 'registration', 4, 'no_wow'),
(119, 1503558841, 'registration', 4, 'no_wow'),
(120, 1503559029, 'registration', 4, 'no_wow'),
(121, 1503559311, 'registration', 4, 'no_wow'),
(122, 1503559486, 'registration', 4, 'no_wow'),
(123, 1503559743, 'registration', 4, 'no_wow'),
(124, 1503559832, 'registration', 4, 'no_wow'),
(125, 1503559837, 'registration', 4, 'no_wow'),
(126, 1503560934, 'registration', 4, 'no_wow'),
(127, 1504357518, 'registration', 4, 'no_wow'),
(128, 1504357541, 'registration', 4, 'no_wow'),
(129, 1504357772, 'registration', 4, 'no_wow'),
(130, 1504358058, 'registration', 4, 'no_wow'),
(131, 1504358112, 'registration', 4, 'no_wow'),
(132, 1504358115, 'registration', 4, 'no_wow'),
(133, 1504358981, 'registration', 4, 'no_wow'),
(134, 1505126207, 'registration', 4, 'wow'),
(135, 1505126216, 'registration', 4, 'wow'),
(136, 1505126224, 'registration', 4, 'wow'),
(137, 1505126234, 'registration', 4, 'wow'),
(138, 1505126953, 'registration', 4, 'wow'),
(139, 1505642075, 'registration', 4, 'no_wow'),
(140, 1505642735, 'registration', 4, 'no_wow'),
(141, 1506850830, 'registration', 4, 'wow'),
(142, 1506853332, 'registration', 4, 'no_wow'),
(143, 1506853393, 'registration', 4, 'no_wow'),
(144, 1507022757, 'shop', 4, 'wow'),
(145, 1507036546, 'registration', 4, 'wow'),
(146, 1507036557, 'shop', 4, 'wow'),
(147, 1507283580, 'registration', 4, 'no_wow'),
(148, 1507285788, 'registration', 4, 'no_wow'),
(149, 1507285955, 'registration', 4, 'no_wow'),
(150, 1507286398, 'registration', 4, 'no_wow'),
(151, 1507286607, 'registration', 4, 'no_wow'),
(152, 1507286648, 'registration', 4, 'no_wow'),
(153, 1507287167, 'registration', 4, 'no_wow'),
(154, 1507287215, 'registration', 4, 'no_wow'),
(155, 1507287242, 'registration', 4, 'no_wow'),
(156, 1507287583, 'registration', 4, 'no_wow'),
(157, 1507287602, 'registration', 4, 'no_wow'),
(158, 1507287625, 'registration', 4, 'no_wow'),
(159, 1507287854, 'registration', 4, 'no_wow'),
(160, 1507287939, 'registration', 4, 'no_wow'),
(161, 1507287958, 'registration', 4, 'no_wow'),
(162, 1507287965, 'registration', 4, 'no_wow'),
(163, 1507288048, 'registration', 4, 'no_wow'),
(164, 1507288176, 'registration', 4, 'no_wow'),
(165, 1507288273, 'registration', 4, 'no_wow'),
(166, 1507288322, 'registration', 4, 'no_wow'),
(167, 1507288357, 'registration', 4, 'no_wow'),
(168, 1507288409, 'registration', 4, 'no_wow'),
(169, 1507288966, 'registration', 4, 'no_wow'),
(170, 1507289180, 'registration', 4, 'no_wow'),
(171, 1507289285, 'registration', 4, 'no_wow'),
(172, 1507289598, 'registration', 4, 'no_wow'),
(173, 1507289709, 'registration', 4, 'no_wow'),
(174, 1507289745, 'registration', 4, 'no_wow'),
(175, 1507289911, 'registration', 4, 'no_wow'),
(176, 1507289985, 'registration', 4, 'no_wow'),
(177, 1507290047, 'registration', 4, 'no_wow'),
(178, 1507290120, 'registration', 4, 'no_wow'),
(179, 1507290158, 'registration', 4, 'no_wow'),
(180, 1507290357, 'registration', 4, 'no_wow'),
(181, 1507290455, 'registration', 4, 'no_wow'),
(182, 1507290560, 'registration', 4, 'no_wow'),
(183, 1507290601, 'registration', 4, 'no_wow'),
(184, 1507304065, 'registration', 4, 'no_wow'),
(185, 1507304150, 'registration', 4, 'no_wow'),
(186, 1507304224, 'registration', 4, 'no_wow'),
(187, 1507304296, 'registration', 4, 'no_wow'),
(188, 1507304313, 'registration', 4, 'no_wow'),
(189, 1507304405, 'registration', 4, 'no_wow'),
(190, 1507304563, 'registration', 4, 'no_wow'),
(191, 1507304643, 'registration', 4, 'no_wow'),
(192, 1507304668, 'registration', 4, 'no_wow'),
(193, 1507304802, 'registration', 4, 'no_wow'),
(194, 1507304820, 'registration', 4, 'no_wow'),
(195, 1507304872, 'registration', 4, 'no_wow'),
(196, 1507304974, 'registration', 4, 'no_wow'),
(197, 1507305057, 'registration', 4, 'no_wow'),
(198, 1507305316, 'registration', 4, 'no_wow'),
(199, 1507306483, 'registration', 4, 'no_wow'),
(200, 1507306495, 'registration', 4, 'no_wow'),
(201, 1507306523, 'registration', 4, 'no_wow'),
(202, 1507306527, 'registration', 4, 'no_wow'),
(203, 1507306638, 'registration', 4, 'no_wow'),
(204, 1507306644, 'registration', 4, 'no_wow'),
(205, 1507306672, 'registration', 4, 'no_wow'),
(206, 1507306681, 'registration', 4, 'no_wow'),
(207, 1507306686, 'registration', 4, 'no_wow'),
(208, 1507306695, 'registration', 4, 'no_wow'),
(209, 1507306741, 'registration', 4, 'no_wow'),
(210, 1507306749, 'registration', 4, 'no_wow'),
(211, 1507306910, 'registration', 4, 'no_wow'),
(212, 1507306924, 'registration', 4, 'no_wow'),
(213, 1507306937, 'registration', 4, 'no_wow'),
(214, 1507307025, 'registration', 4, 'no_wow'),
(215, 1507307093, 'registration', 4, 'no_wow'),
(216, 1507307170, 'registration', 4, 'no_wow'),
(217, 1507634413, 'registration', 4, 'wow'),
(218, 1507728806, 'registration', 4, 'wow'),
(219, 1507728822, 'registration', 4, 'wow'),
(220, 1507728845, 'registration', 4, 'wow'),
(221, 1507729944, 'registration', 4, 'wow'),
(222, 1507729998, 'registration', 4, 'wow'),
(223, 1508073150, 'registration', 4, 'no_wow'),
(224, 1508760529, 'registration', 4, 'no_wow'),
(225, 1508760583, 'registration', 4, 'no_wow'),
(226, 1508763926, 'registration', 4, 'wow');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lan_camps`
--
ALTER TABLE `lan_camps`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lan_orders`
--
ALTER TABLE `lan_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lan_camps`
--
ALTER TABLE `lan_camps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `lan_orders`
--
ALTER TABLE `lan_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
