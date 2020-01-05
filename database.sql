-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time:  5 яну 2020 в 07:45
-- Версия на сървъра: 8.0.18-0ubuntu0.19.10.1
-- PHP Version: 7.2.24-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlab1911`
--

-- --------------------------------------------------------

--
-- Структура на таблица `apps_countries`
--

CREATE TABLE `apps_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'SS', 'South Sudan'),
(203, 'ES', 'Spain'),
(204, 'LK', 'Sri Lanka'),
(205, 'SH', 'St. Helena'),
(206, 'PM', 'St. Pierre and Miquelon'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard and Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syrian Arab Republic'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania, United Republic of'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad and Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks and Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States minor outlying islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (U.S.)'),
(241, 'WF', 'Wallis and Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Структура на таблица `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `dependencies`
--

CREATE TABLE `dependencies` (
  `dependency_code` varchar(30) COLLATE utf8_bin NOT NULL,
  `dependency_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `dependency_alert` varchar(150) COLLATE utf8_bin NOT NULL,
  `dependency_type` int(11) NOT NULL,
  `dependency_adequacy` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура на таблица `doctors`
--

CREATE TABLE `doctors` (
  `doctor` varchar(50) COLLATE utf8_bin NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `uin` varchar(30) COLLATE utf8_bin NOT NULL,
  `phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `phone2` varchar(15) COLLATE utf8_bin NOT NULL,
  `specialty` varchar(30) COLLATE utf8_bin NOT NULL,
  `department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Схема на данните от таблица `doctors`
--

INSERT INTO `doctors` (`doctor`, `doctor_id`, `uin`, `phone`, `phone2`, `specialty`, `department`) VALUES
('д-р Еленкова', 1, '340000346', '123', '', '', 0),
('д-р Мачорски', 2, '', '', '', '', 0),
('д-р Мачорска', 3, '', '', '', '', 0),
('д-р Ф.Александрова', 4, '', '', '', '', 0),
('д-р Н.Александрова', 6, '', '', '', '', 0),
('д-р Й.Иванов', 7, '32423523', '', '', 'Орториноларинголог', 0),
('д-р А.Ваньова', 8, '', '', '', '', 0),
('д-р Йотова', 9, '324234', '', '', '', 0),
('д-р Струнджев', 10, '', '', '', '', 0),
('д-р Струнджева', 11, '', '', '', '', 0),
('д-р Маринова', 12, '', '', '', '', 0),
('д-р П.Петров', 13, '', '', '', '', 0),
('д-р К.Цеков', 14, '', '', '', '', 0),
('д-р И.Йорданов', 15, '', '', '', '', 0),
('д-р И.Симеонов', 16, '', '', '', '', 0),
('д-р С.Цветков', 17, '', '', '', '', 0),
('д-р П.Славчева', 18, '', '', '', '', 0),
('д-р Георгиев', 19, '', '', '', '', 0),
('д-р Г.Савков', 20, '', '', '', '', 0),
('д-р Савкова', 21, '', '', '', '', 0),
('д-р К.Михайлова', 22, '', '', '', '', 0),
('д-р Маринов', 24, '', '', '', '', 0),
('д-р Динчева', 25, '', '', '', '', 0),
('д-р Г.Филипова', 26, '', '', '', '', 0),
('д-р Л.Филипов', 27, '', '', '', '', 0),
('д-р Милутинов', 28, '', '', '', '', 0),
('д-р Кенарова', 29, '', '', '', '', 0),
('д-р Л.Горанова', 30, '', '', '', '', 0),
('д-р А.Александров', 38, '', '', '', '', 0),
('д-р Аджичева', 39, '', '', '', '', 0),
('д-р Райновски', 40, '', '', '', '', 0),
('д-р Аджичева', 41, '', '', '', '', 0),
('д-р Е.Богомилов', 42, '', '', '', '', 0),
('д-р Киров', 43, '', '', '', '', 0),
('д-р Б.Славчев', 44, '', '', '', '', 0),
('д-р Пейчева', 46, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Структура на таблица `exams`
--

CREATE TABLE `exams` (
  `exams_idn` varchar(10) NOT NULL,
  `exams_time` varchar(25) NOT NULL,
  `exams_note` text NOT NULL,
  `exams_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `hospital`
--

CREATE TABLE `hospital` (
  `name` varchar(100) NOT NULL,
  `doctor` varchar(60) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `web` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `default_lang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `hospital`
--

INSERT INTO `hospital` (`name`, `doctor`, `address`, `phone`, `mail`, `id`, `web`, `note`, `default_lang`) VALUES
('МБАЛ  СВ. Николай Чудотворец', 'д-р Мариана Попова', 'Лом, ул. „Каблешков“ 2', '097 160 051', 'bolnicalom@mballom.bg', 1, 'www.mballom.bg', 'Внимание : Лабораторните резултати не са диагноза, а основание за такава. Приемането на каквито и да било лекарствени средства без лекарско предписание, може да бъде опасно за Вашето здраве. Моля, обръщайте се за тълкуване на резултатите само към квалифицирани лекари. Препоръчваме винаги да показвате резултатите си на лекуващия си лекар !', 'bulgarian');

-- --------------------------------------------------------

--
-- Структура на таблица `mdds`
--

CREATE TABLE `mdds` (
  `num_mdd` int(11) NOT NULL,
  `out_date` date NOT NULL,
  `complete_date` date NOT NULL,
  `doctor_id` varchar(15) NOT NULL,
  `rzk` varchar(11) NOT NULL COMMENT 'рзц код',
  `zam_doc_id` varchar(5) DEFAULT NULL,
  `nzok_num` varchar(11) NOT NULL,
  `mkb` varchar(6) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `mkb2` varchar(6) DEFAULT NULL,
  `type_mdd_id` int(11) NOT NULL,
  `test_code1` varchar(5) DEFAULT NULL,
  `test_code2` varchar(5) DEFAULT NULL,
  `test_code3` varchar(5) DEFAULT NULL,
  `test_code4` varchar(5) DEFAULT NULL,
  `test_code5` varchar(5) DEFAULT NULL,
  `test_code6` varchar(5) DEFAULT NULL,
  `no_money` varchar(4) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `al_num` varchar(20) NOT NULL,
  `code1` varchar(11) NOT NULL,
  `code2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `mdds`
--

INSERT INTO `mdds` (`num_mdd`, `out_date`, `complete_date`, `doctor_id`, `rzk`, `zam_doc_id`, `nzok_num`, `mkb`, `paket_id`, `mkb2`, `type_mdd_id`, `test_code1`, `test_code2`, `test_code3`, `test_code4`, `test_code5`, `test_code6`, `no_money`, `id`, `patient_id`, `al_num`, `code1`, `code2`) VALUES
(21312, '2019-12-03', '2019-12-23', '1', '2323', '34', '234', '2342', 1, '', 1, '01.11', '', '', '', '', '', '1', 1, 5, '324', '11', ''),
(121, '2019-12-31', '2019-12-31', '1', '897', '987', '87', 'z00', 1, '', 2, '10.09', '01.09', '', '', '', '', '1', 2, 16, '897', '91', '9'),
(213, '2019-12-14', '2019-12-14', '1', '32990', '', '', 'Z00.0', 1, '', 1, '01.11', '01.09', '', '', '', '', '1', 3, 17, '213', '3600', '1'),
(213, '2019-12-04', '2019-12-12', '1', '32990', '', '', 'Z00.1', 1, '', 8, '01.01', '01.12', '', '', '', '', '1', 4, 17, '111', '3600', ''),
(213, '2019-12-18', '2019-12-18', '1', '32990', '', '', 'Z00.1', 1, '', 6, '01.11', '01.09', '', '', '', '', '1', 5, 4, '21', '33', ''),
(213, '2019-12-10', '2019-12-10', '1', '', '', '', 'Z00.0', 1, '', 1, '01.11', '', '', '', '', '', '1', 6, 20, '987', '1', ''),
(213, '2019-12-04', '2019-12-25', '1', '', '', '', 'Z00.0', 1, 'Z01.0', 2, '01.11', '', '', '', '', '', '1', 7, 20, '9', '3', '2');

-- --------------------------------------------------------

--
-- Структура на таблица `mdd_types`
--

CREATE TABLE `mdd_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `mdd_types`
--

INSERT INTO `mdd_types` (`id`, `name`, `number`) VALUES
(1, 'Остро заболяване или състояние извън останалите', 1),
(2, 'Хронично заболяване, неподходящо за диспансерно на', 2),
(3, 'Диспансерно интердисциплинарно заболяване', 4),
(4, 'Медицинска експертиза (ЛКК)', 6),
(5, 'Профилактика за ЗОЛ над 18г. с рискови фактори', 7),
(6, 'По искане на ТЕЛК (НЕЛК)', 8),
(7, 'По програма \"Майчино здравеопазване\"', 9),
(8, 'По програма \"Детско здравеопазване\"', 10);

-- --------------------------------------------------------

--
-- Структура на таблица `mkb`
--

CREATE TABLE `mkb` (
  `mkb_code` varchar(10) NOT NULL,
  `mkb_desc` varchar(250) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `patients`
--

CREATE TABLE `patients` (
  `number` bigint(5) NOT NULL,
  `names` varchar(100) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `over` varchar(5) NOT NULL,
  `comment` text,
  `pay` varchar(3) DEFAULT NULL,
  `idn` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mkb` varchar(10) DEFAULT NULL,
  `cito` varchar(3) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `note` text,
  `gender` int(1) DEFAULT NULL,
  `country_id` varchar(25) DEFAULT NULL,
  `municipality` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `mail` varchar(15) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `post_code` varchar(10) DEFAULT NULL,
  `blood_type` varchar(5) DEFAULT NULL,
  `work_place` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `patients`
--

INSERT INTO `patients` (`number`, `names`, `doctor`, `date`, `id`, `username`, `password`, `over`, `comment`, `pay`, `idn`, `address`, `mkb`, `cito`, `phone`, `note`, `gender`, `country_id`, `municipality`, `street`, `mail`, `area`, `post_code`, `blood_type`, `work_place`) VALUES
(1, 'драган драганов', '3', '2019-12-22', 20, 'FHKgGXw5td', 'osRDuuZd2P', 'off', '', '', '9308253229', NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ДРАГАН БОРИСОВ ДРАГАНОВ', '9', '2019-12-25', 22, '5mqNUIjFIq', 'sTemVQF8Fg', 'off', '', '', '9308253229', NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ДРАГАН ДРАГАНОВ', '7', '2019-12-26', 23, '0Yj44QHsHS', 'vSmox2Ete1', 'off', '', '', '9308253229', NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ДРАГАН ДРАГАНОВ', '3', '2019-12-28', 34, 'h6caq7Bzag', 'IqgkPZCYNB', 'off', '', '', '9308253229', NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ivan', '1', '2019-12-30', 36, 'YsuBbWgJIp', 'DMYmJmnpcr', 'off', '', '', '9308253229', NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `personal_info`
--

CREATE TABLE `personal_info` (
  `pi_address` varchar(50) NOT NULL,
  `pi_phone` varchar(20) NOT NULL,
  `pi_mail` varchar(50) NOT NULL,
  `pi_gender` int(1) NOT NULL,
  `pi_blood_type` varchar(5) NOT NULL,
  `pi_workplace` varchar(50) NOT NULL,
  `pi_id` int(11) NOT NULL,
  `pi_patient_idn` varchar(11) NOT NULL,
  `citizenship` varchar(25) NOT NULL,
  `zdr_knizkha_num` varchar(25) NOT NULL,
  `rec_knizkha_num` varchar(25) NOT NULL,
  `lak_num` varchar(10) NOT NULL,
  `pi_lk_num` varchar(15) DEFAULT NULL,
  `pi_out_date` date DEFAULT NULL,
  `pi_exp_date` date DEFAULT NULL,
  `pi_out_place` varchar(30) DEFAULT NULL,
  `pi_fam_anamneza` text,
  `pi_life_anamneza` text,
  `pi_alergi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `personal_info`
--

INSERT INTO `personal_info` (`pi_address`, `pi_phone`, `pi_mail`, `pi_gender`, `pi_blood_type`, `pi_workplace`, `pi_id`, `pi_patient_idn`, `citizenship`, `zdr_knizkha_num`, `rec_knizkha_num`, `lak_num`, `pi_lk_num`, `pi_out_date`, `pi_exp_date`, `pi_out_place`, `pi_fam_anamneza`, `pi_life_anamneza`, `pi_alergi`) VALUES
('a', '2', 'asd', 0, 'ab', 'sad', 3, '930825', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 0, '', '', 4, '9100293', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ул.Славейче 1', '0876755464', 'dbdraganov@gmail.com', 1, '5', 'Болницата', 5, '9308253229', 'България', '123123', '312312', '6646', '123', '2019-12-27', '2019-12-20', 'wqew', 'qqq', 'www', '111'),
('', '', '', 0, 'false', '', 6, '213123', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 0, 'false', '', 7, '1234', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 0, 'false', '', 8, '123', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `results`
--

CREATE TABLE `results` (
  `test_code` varchar(6) COLLATE utf8_bin NOT NULL,
  `result` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `patient_id` bigint(20) NOT NULL,
  `id` int(11) NOT NULL,
  `date` varchar(20) COLLATE utf8_bin NOT NULL,
  `patient_idn` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Схема на данните от таблица `results`
--

INSERT INTO `results` (`test_code`, `result`, `patient_id`, `id`, `date`, `patient_idn`) VALUES
('99.01', '', 20, 110, '2019-12-26', '9308253229'),
('99.02', '', 20, 111, '2019-12-26', '9308253229'),
('99.03', '', 20, 112, '2019-12-26', '9308253229'),
('99.04', '', 20, 113, '2019-12-26', '9308253229'),
('99.05', '', 20, 114, '2019-12-26', '9308253229'),
('99.06', '', 20, 115, '2019-12-26', '9308253229'),
('99.07', '', 20, 116, '2019-12-26', '9308253229'),
('99.08', '', 20, 117, '2019-12-26', '9308253229'),
('99.09', '', 20, 118, '2019-12-26', '9308253229'),
('99.010', '', 20, 119, '2019-12-26', '9308253229'),
('99.011', '', 20, 120, '2019-12-26', '9308253229'),
('99.012', '', 20, 121, '2019-12-26', '9308253229'),
('99.013', '', 20, 122, '2019-12-26', '9308253229'),
('99.014', '', 20, 123, '2019-12-26', '9308253229'),
('01.11', '90', 22, 214, '2019-12-30', '9308253229'),
('01.09', '', 23, 215, '2019-12-26', '9308253229'),
('88.01', '', 23, 216, '2019-12-26', '9308253229'),
('88.02', '', 23, 217, '2019-12-26', '9308253229'),
('88.03', '', 23, 218, '2019-12-26', '9308253229'),
('88.04', '', 23, 219, '2019-12-26', '9308253229'),
('88.05', '', 23, 220, '2019-12-26', '9308253229'),
('88.06', '', 23, 221, '2019-12-26', '9308253229'),
('88.07', '', 23, 222, '2019-12-26', '9308253229'),
('88.08', '', 23, 223, '2019-12-26', '9308253229'),
('01.17', '', 34, 247, '2019-12-28', '9308253229'),
('01.18', '', 34, 248, '2019-12-28', '9308253229'),
('01.19', '', 34, 249, '2019-12-28', '9308253229'),
('01.20', '', 34, 250, '2019-12-28', '9308253229'),
('01.21', '', 34, 251, '2019-12-28', '9308253229'),
('01.06', '', 36, 253, '2019-12-30', '9308253229');

-- --------------------------------------------------------

--
-- Структура на таблица `schedule`
--

CREATE TABLE `schedule` (
  `shift_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `note` varchar(100) NOT NULL,
  `schedual_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `settings`
--

CREATE TABLE `settings` (
  `setting_name` varchar(20) NOT NULL,
  `setting_selected` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `setting_desc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `settings`
--

INSERT INTO `settings` (`setting_name`, `setting_selected`, `id`, `setting_desc`) VALUES
('Панел изследвания', 'panel_1', 1, 'Изберете изглед на панела с изследвания, който ще се показва в \"Поликлиника\"');

-- --------------------------------------------------------

--
-- Структура на таблица `shifts`
--

CREATE TABLE `shifts` (
  `start_time` varchar(10) NOT NULL,
  `over_time` varchar(10) NOT NULL,
  `note` text NOT NULL,
  `shift_id` int(11) NOT NULL,
  `shift_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `shifts`
--

INSERT INTO `shifts` (`start_time`, `over_time`, `note`, `shift_id`, `shift_name`) VALUES
('7:00', '14:30', '', 1, 'Първа смяна'),
('12:30', '19:30', '', 2, 'Втора смяна'),
('19:30', '7:30', '', 3, 'Нощна смяна'),
('10:00', '17:00', '', 4, 'Дневна смяна');

-- --------------------------------------------------------

--
-- Структура на таблица `tests`
--

CREATE TABLE `tests` (
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `button` varchar(50) COLLATE utf8_bin NOT NULL,
  `code` varchar(6) COLLATE utf8_bin NOT NULL,
  `up` varchar(50) COLLATE utf8_bin NOT NULL,
  `down` varchar(50) COLLATE utf8_bin NOT NULL,
  `unit` varchar(10) COLLATE utf8_bin NOT NULL,
  `flag` varchar(20) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL,
  `price` varchar(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Схема на данните от таблица `tests`
--

INSERT INTO `tests` (`name`, `button`, `code`, `up`, `down`, `unit`, `flag`, `id`, `price`) VALUES
('ESR', 'ESR', '01.03', '<25', '', 'mm/h', 'blood', 2, ''),
('Време на кървене', 'Вр.кър', '01.04', '60', '300', 'sec.', 'coag', 3, ''),
('INR', 'INR', '01.05', '0.95', '1.20', 'INR.', 'coag', 4, ''),
('APTT', 'APTT', '01.06', '27', '35', 'sec', 'coag', 5, ''),
('Фибриноген', 'Fbg', '01.07', '2', '4', 'g/l', 'coag', 6, ''),
('Глюкоза', 'GLU', '01.11', '4.1', '6.2', 'mmol/L', 'blood', 10, ''),
('Креатинин', 'CRE', '01.13', '53', '88', 'µmol/l', 'blood', 12, ''),
('Урея', 'Urea', '01.14', '2.5', '6.4', 'mmol/l', 'blood', 13, ''),
('Общ билирубин', 'TBI', '01.15', '3.0', '17', 'μmol/l', 'blood', 14, ''),
('Директен билирубин', 'DBI', '01.16', '<3.4', '', 'μmol/l', 'blood', 15, ''),
('Общ белтък', 'TP', '01.17', '64', '82', 'g/l', 'blood', 16, ''),
('Албумин', 'ALB', '01.18', '34', '50', 'g/l', 'blood', 17, ''),
('Холестерол', 'CHOL', '01.19', '2.4', '5.2', 'mmol/l', 'blood', 18, '6'),
('HDL', 'HDL', '01.20', 'Мъже: >90\r\nЖени: >1.10', '', 'mmol/l', 'blood', 19, ''),
('Триглицериди', 'TGL', '01.21', '<2.2', '', 'mmol/l', 'blood', 20, ''),
('Гликиран хемоглобин', 'HbA1C', '01.22', '', '6.2', '%', 'blood', 21, ''),
('Пикочна киселина', 'UA', '01.23', '150', '428', 'μmol/l', 'blood', 22, ''),
('АСАТ', 'ASAT', '01.24', '<38', '', 'μmol/l', 'blood', 23, ''),
('АЛАТ', 'ALAT', '01.25', '<65 IU/L', '', 'IU/l', 'blood', 24, ''),
('Креатинкиназа', 'CK', '01.26', '26', '174', 'IU/l', 'blood', 25, ''),
('GGT', 'GGT', '01.27', '5.0', '85.0', ' IU/l', 'blood', 26, ''),
('Алкална фосфатаза', 'ALP', '01.28', '35', '129', ' IU/l', 'blood', 27, ''),
('Алфа-амилаза', 'AMY', '01.29', '22', '115', 'U/l', 'blood', 28, ''),
('Калций', 'Ca', '01.34', '2.12', '2.62', 'mmol/l', 'blood', 31, ''),
('Фосфор', 'Phos', '01.35', '0.87', '1.62', 'mmol/l', 'blood', 32, ''),
('Желязо', 'Fe', '01.36', '9.0', '33', 'μmo/l', 'blood', 33, ''),
('ЖСК', 'ЖСК', '01.37', '55', '77', 'μmo/l', 'blood', 34, ''),
('CRP', 'CRP', '01.38', '<6 mg/l', '', 'mg/l', 'blood', 35, ''),
('LDL', 'LDL', '01.39', '<4.11', '', 'mmol/l', 'blood', 36, ''),
('Морфология на еритроцити', 'Морфология', '01.41', '', '', '', 'mor', 37, ''),
('FT4', 'FT4', '10.08', '12.0 pmol/l', '22.0 pmol/ml', 'pmol/l', 'hormon', 38, ''),
('TSH', 'TSH', '10.09', '0.4', '4.0', 'mIU/l', 'hormon', 39, ''),
('PSA', 'PSA', '10.10', '0', '4.00', 'ng/ml', 'hormon', 40, ''),
('Progesteron', 'Progesteorn', '10.21', '', '', 'nmol/l', 'hormon', 41, ''),
('LH', 'LH', '10.22', '', '', 'IU/l', 'hormon', 42, ''),
('FSH', 'FSH', '10.23', '', '', 'IU/l', 'hormon', 44, ''),
('Prolactin', 'Prolactin', '10.24', '110.7', '780.3 ', 'mIU/ml', 'hormon', 45, ''),
('Estradiol', 'Estradiol', '10.25', '', '', 'pmol/l', 'hormon', 46, ''),
('Testosteron', 'Testosteron', '10.26', '0', '13', 'nmol/l', 'hormon', 47, ''),
('FT3', 'FT3', '10.30', '1.4', '4.5 ', 'ng/ml', 'hormon', 51, ''),
('WBC', '', '99.01', '3.5', '10', '10^9/l', 'cbc', 52, ''),
('RBC', '', '99.02', '3.8', '5.3', '10^12/l', 'cbc', 53, ''),
('Hb', '', '99.03', '120', '180', 'g/l', 'cbc', 54, ''),
('Htc', '', '99.04', '0.35', '0.50', 'l/l', 'cbc', 55, ''),
('PLT', '', '99.05', '150', '390', '10^9/l', 'cbc', 56, ''),
('MCV', '', '99.06', '80', '97', 'fl', 'cbc', 57, ''),
('MCH', '', '99.07', '26.5', '33.5', 'pg', 'cbc', 58, ''),
('MCHC', '', '99.08', '315', '350', 'g/l', 'cbc', 59, ''),
('Урина - ph', '', '88.01', '5.0', '6.5', '', 'ur', 60, ''),
('Урина - SG', '', '88.02', '1.005', '1.025', '', 'ur', 61, ''),
('Урина - BIL', '', '88.03', '(-) Neg.', '(-) Neg.', '', 'ur', 62, ''),
('Урина - URBIL', '', '88.04', '(n) Norm', '(n) Norm', '', 'ur', 63, ''),
('Урина - PRO', '', '88.05', '(-) Neg.', '(-) Neg.', '', 'ur', 64, ''),
('Урина - GLU', '', '88.06', '(-) Neg.', '(-) Neg.', '', 'ur', 65, ''),
('Урина - KET', '', '88.07', '(-) Neg.', '(-) Neg.', '', 'ur', 66, ''),
('Урина - NITR', '', '88.08', '(-) Neg.', '(-) Neg.', '', 'ur', 67, ''),
('Седимент', 'Седимент', '01.09', '1', '2', 'blood cell', 's', 68, ''),
('АКР - ph', '', '66.01', '7.35', '7.45', 'ph', 'akr', 69, ''),
('АКР - p02', '', '66.02', '10.67', '13.33', 'kPa', 'akr', 70, ''),
('АКР - pCO2', '', '66.03', '4.67', '6', 'kPa', 'akr', 71, ''),
('АКР - HCO3 act', '', '66.03', '18', '23', 'mmol/l', 'akr', 72, ''),
('АКР - BE(ecf)', '', '66.04', '-2', '2', 'mmol/l', 'akr', 73, ''),
('АКР - O2 SAT', '', '66.05', '', '', '', 'akr', 74, ''),
('St', '', '44.01', '', '', '%', 'dif', 75, ''),
('Sg', '', '44.02', '', '', '%', 'dif', 76, ''),
('Eo', '', '44.03', '', '', '%', 'dif', 77, ''),
('Mo', '', '44.04', '', '', '%', 'dif', 78, ''),
('Baso', '', '44.05', '', '', '%', 'dif', 79, ''),
('Lym', '', '44.06', '', '', '%', 'dif', 80, ''),
('АКР - tCO2', '', '66.06', '', '', '', 'akr', 81, ''),
('Време на съсирване', 'Вр.със', '98.01', '180', '360', 'sec', 'coag', 84, ''),
('D-Dimer', 'D-Dimer', '100.5', '<400 ng/mlIFEU', '', 'ng/mlIFEU', 'coag', 85, ''),
('Mg', 'Mg', '01.99', '0.66', '1.03', 'mmol/l', 'blood', 86, ''),
('Anti - TPO / MAT/', 'MAT', '10.27', '<34', '', 'IU/mL', 'hormon', 89, ''),
('A-TG-TAT', 'TAT', '10.28', '<117 ', '', 'IU/ml', 'hormon', 90, ''),
('Ретикулоцити', 'Retic.', '201.2', '', '', '', 'ret', 92, ''),
('LDH', 'LDH', '320.1', '207', '414', 'IU/l', 'blood', 93, ''),
('ОГТТ', 'ОГТТ', '321.1', '', '', 'mmol/l', 'blood', 94, ''),
('Урина - (Количество) белтък', 'Урина - К.Белтък', '100.3', '', '<0.1 g/l', 'g/l', 'blood', 96, ''),
('КК-МБ', 'КК-МБ', '100.9', '<25 IU/l', '', 'IU/l', 'blood', 97, ''),
('ТРОПОНИН I', 'ТРОПОНИН I', '100.4', '<0.8 ng/ml', '', 'ng/ml', 'blood', 98, ''),
('Липаза', 'LIPASE', '01.30', '', '<38 IU/L', 'IU/l', 'blood', 99, ''),
('Микроалбуминурия', 'MALB', '10.20', '', '20', 'mg/l', 'ourine', 100, ''),
('ОКУЛТНИ КРЪВОИЗЛИВИ', 'О.К.', '01.10', 'oтр(-)', 'oтр(-)', '', 'blood', 101, ''),
('RDW_CV', '', '99.012', '11.2', '14.7', '%', 'cbc', 102, ''),
('LYM%', '', '99.09', '22', '44', '%', 'cbc', 103, ''),
('NEUT%', '', '99.011', '40', '70', '%', 'cbc', 105, ''),
('PDW', '', '99.013', '15.5', '30.5', '', 'cbc', 106, ''),
('MPV', '', '99.014', '6.1', '12.5', 'fl', 'cbc', 107, ''),
('MXD%', 'MXD%', '99.010', '', '', '', 'cbc', 108, ''),
('Na', '', '15.01', '135', '145', 'mmol/l', 'ele', 110, ''),
('K', '', '15.02', '3.5', '5.1', 'mmol/l', 'ele', 111, ''),
('Cl', '', '15.03', '97', '107', 'mmol/l', 'ele', 112, ''),
('Глюкоза - 8ч:', '', '62.01', '', '', 'mmol/l', 'kzp', 113, ''),
('Глюкоза - 12ч:', '', '62.02', '', '', 'mmol/l', 'kzp', 114, ''),
('Глюкоза - 18ч:', '', '62.03', '', '', 'mmol/l', 'kzp', 115, ''),
('test', 'test', '15.04', '0.95', '1.20', 'eqe', 'ele', 116, '0');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `lvl` int(5) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `status` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`username`, `password`, `lvl`, `id`, `name`, `status`, `mail`) VALUES
('klab', '$2y$10$l4/S7oM3qbfpH/09rsG.4O0w3CnTQacCPywErV/FndtMoqU44OMk2', 2, 2, 'Laborant', 0, 'dadad'),
('admin', '$2y$10$NeIdmgIWP6/khouFcXUoXuBhJy8ehattxBG2bRA5V9rmBc9QpQUrG', 3, 3, 'admin', 0, 'sdasdasd@dfsf');

-- --------------------------------------------------------

--
-- Структура на таблица `workers`
--

CREATE TABLE `workers` (
  `worker_name` int(11) NOT NULL,
  `worker_position` int(11) NOT NULL,
  `worker_salary` int(11) NOT NULL,
  `worker_note` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps_countries`
--
ALTER TABLE `apps_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `id` (`doctor_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mdds`
--
ALTER TABLE `mdds`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mdd_types`
--
ALTER TABLE `mdd_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkb`
--
ALTER TABLE `mkb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`pi_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedual_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps_countries`
--
ALTER TABLE `apps_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mdds`
--
ALTER TABLE `mdds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mdd_types`
--
ALTER TABLE `mdd_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mkb`
--
ALTER TABLE `mkb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedual_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `shift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
