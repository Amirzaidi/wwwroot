-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 14 jun 2016 om 13:30
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `csodb`
--
CREATE DATABASE IF NOT EXISTS `csodb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `csodb`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(64) NOT NULL,
  `contact_mail` varchar(64) NOT NULL,
  `contact_subject` varchar(128) NOT NULL,
  `contact_content` text NOT NULL,
  `contact_ip` varchar(15) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_mail`, `contact_subject`, `contact_content`, `contact_ip`) VALUES
(1, '', 'test@test.nl', 'test', 'idk', '127.0.0.1'),
(2, '', 'test@test.nl', 'test', 'idk', '127.0.0.1'),
(3, '', 'test@test.nl', 'test', 'idk', '127.0.0.1'),
(4, '', 'test@test.nl', 'test', 'idk', '127.0.0.1'),
(5, 'Amir Zaidi', 'azaidi@live.nl', 'I want to test something', 'Ayy\r\nLmao', '192.168.2.11');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contest`
--

CREATE TABLE IF NOT EXISTS `contest` (
  `contest_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contest_name` varchar(64) NOT NULL,
  `contest_desc` varchar(255) NOT NULL,
  `contest_start` int(10) unsigned DEFAULT '0',
  `contest_end` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`contest_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=224 ;

--
-- Gegevens worden uitgevoerd voor tabel `contest`
--

INSERT INTO `contest` (`contest_id`, `contest_name`, `contest_desc`, `contest_start`, `contest_end`) VALUES
(1, 'Test1', 'Test1', 1460835240, 1460835240),
(2, 'Test1', 'Test1', 1460835240, 1460835270),
(3, 'Test2', 'Test2', 1460835270, 1460835300),
(4, 'Test3', 'Test3', 1460835300, 1460835330),
(5, 'Test3', 'Test3', 1460835330, 1460835360),
(6, 'Test2', 'Test2', 1460835360, 1460835390),
(7, 'Test1', 'Test1', 1460835390, 1460835420),
(8, 'Test3', 'Test3', 1460835420, 1460835540),
(9, 'Test2', 'Test2', 1460835540, 1460835600),
(10, 'Test1', 'Test1', 1460835600, 1460835660),
(11, 'Test2', 'Test2', 1460835660, 1460835720),
(12, 'Test3', 'Test3', 1460835720, 1460835840),
(13, 'Test1', 'Test1', 1460835840, 1460835960),
(14, 'Test3', 'Test3', 1460835960, 1460836080),
(15, 'Test2', 'Test2', 1460836080, 1460836200),
(16, 'Test1', 'Test1', 1460836200, 1460836320),
(17, 'Test3', 'Test3', 1460836320, 1460836440),
(18, 'Test2', 'Test2', 1460836440, 1460836560),
(19, 'Test2', 'Test2', 1460836560, 1460836680),
(20, 'Test1', 'Test1', 1460836680, 1460836800),
(21, 'Test3', 'Test3', 1460836800, 1460836920),
(22, 'Test1', 'Test1', 1460836920, 1460837040),
(23, 'Test2', 'Test2', 1460837040, 1460837160),
(24, 'Test3', 'Test3', 1460837160, 1460837280),
(25, 'Test3', 'Test3', 1460837280, 1460837400),
(26, 'Test2', 'Test2', 1460837400, 1460837640),
(27, 'Test1', 'Test1', 1460837640, 1460837760),
(28, 'Test3', 'Test3', 1460837760, 1460837880),
(29, 'Test2', 'Test2', 1460837880, 1460838000),
(30, 'Test1', 'Test1', 1460838000, 1460899080),
(31, 'Test2', 'Test2', 1460899080, 1460899200),
(32, 'Test1', 'Test1', 1460899200, 1460899320),
(33, 'Test3', 'Test3', 1460899320, 1460899440),
(34, 'Test2', 'Test2', 1460899440, 1460900100),
(35, 'Test1', 'Test1', 1460900100, 1460900220),
(36, 'Test3', 'Test3', 1460900220, 1460900340),
(37, 'Test2', 'Test2', 1460900340, 1460900460),
(38, 'Test3', 'Test3', 1460900460, 1460901660),
(39, 'Test1', 'Test1', 1460901660, 1460901780),
(40, 'Test1', 'Test1', 1460901780, 1460901900),
(41, 'Test2', 'Test2', 1460901900, 1460902020),
(42, 'Test3', 'Test3', 1460902020, 1460902140),
(43, 'Test3', 'Test3', 1460902140, 1460902260),
(44, 'Test1', 'Test1', 1460902260, 1460902380),
(45, 'Test2', 'Test2', 1460902380, 1460902500),
(46, 'Test2', 'Test2', 1460902500, 1460902620),
(47, 'Test3', 'Test3', 1460902620, 1460902740),
(48, 'Test1', 'Test1', 1460902740, 1460903430),
(49, 'Test3', 'Test3', 1460903430, 1460903550),
(50, 'Test1', 'Test1', 1460903550, 1460903670),
(51, 'Test2', 'Test2', 1460903670, 1460903790),
(52, 'Test3', 'Test3', 1460903790, 1460903910),
(53, 'Test1', 'Test1', 1460903910, 1460904030),
(54, 'Test2', 'Test2', 1460904030, 1460904150),
(55, 'Test1', 'Test1', 1460904150, 1460904270),
(56, 'Test3', 'Test3', 1460904270, 1460904390),
(57, 'Test2', 'Test2', 1460904390, 1460904510),
(58, 'Test1', 'Test1', 1460904510, 1460904630),
(59, 'Test3', 'Test3', 1460904630, 1460997990),
(60, 'Test2', 'Test2', 1460997990, 1460998110),
(61, 'Test2', 'Test2', 1460998110, 1460998230),
(62, 'Test3', 'Test3', 1460998230, 1460998350),
(63, 'Test1', 'Test1', 1460998350, 1460999010),
(64, 'Test3', 'Test3', 1460999010, 1460999130),
(65, 'Test1', 'Test1', 1460999130, 1460999250),
(66, 'Test2', 'Test2', 1460999250, 1460999370),
(67, 'Test3', 'Test3', 1460999370, 1460999490),
(68, 'Test1', 'Test1', 1460999490, 1460999610),
(69, 'Test2', 'Test2', 1460999610, 1460999730),
(70, 'Test2', 'Test2', 1460999730, 1460999850),
(71, 'Test1', 'Test1', 1460999850, 1460999970),
(72, 'Test3', 'Test3', 1460999970, 1461000090),
(73, 'Test2', 'Test2', 1461000090, 1461000210),
(74, 'Test3', 'Test3', 1461000210, 1461000330),
(75, 'Test1', 'Test1', 1461000330, 1461000450),
(76, 'Test3', 'Test3', 1461000450, 1461000570),
(77, 'Test1', 'Test1', 1461000570, 1461000690),
(78, 'Test2', 'Test2', 1461000690, 1461000810),
(79, 'Test1', 'Test1', 1461000810, 1461000930),
(80, 'Test3', 'Test3', 1461000930, 1461001050),
(81, 'Test2', 'Test2', 1461001050, 1461001410),
(82, 'Test3', 'Test3', 1461001410, 1461001530),
(83, 'Test1', 'Test1', 1461001530, 1461001650),
(84, 'Test2', 'Test2', 1461001650, 1461001770),
(85, 'Test3', 'Test3', 1461001770, 1461001890),
(86, 'Test1', 'Test1', 1461001890, 1461002010),
(87, 'Test2', 'Test2', 1461002010, 1461002130),
(88, 'Test3', 'Test3', 1461002130, 1461002250),
(89, 'Test2', 'Test2', 1461002250, 1461002370),
(90, 'Test1', 'Test1', 1461002370, 1461002490),
(91, 'Test3', 'Test3', 1461002490, 1461002610),
(92, 'Test1', 'Test1', 1461002610, 1461002730),
(93, 'Test2', 'Test2', 1461002730, 1461002850),
(94, 'Test1', 'Test1', 1461002850, 1461002970),
(95, 'Test3', 'Test3', 1461002970, 1461003090),
(96, 'Test2', 'Test2', 1461003090, 1461003210),
(97, 'Test1', 'Test1', 1461003210, 1461003330),
(98, 'Test2', 'Test2', 1461003330, 1461003450),
(99, 'Test3', 'Test3', 1461003450, 1461003570),
(100, 'Test2', 'Test2', 1461003570, 1461003810),
(101, 'Test3', 'Test3', 1461003810, 1461003930),
(102, 'Test1', 'Test1', 1461003930, 1461004050),
(103, 'Test1', 'Test1', 1461004050, 1461004170),
(104, 'Test3', 'Test3', 1461004170, 1461004290),
(105, 'Test2', 'Test2', 1461004290, 1461006030),
(106, 'Test2', 'Test2', 1461006030, 1461006150),
(107, 'Test3', 'Test3', 1461006150, 1461006270),
(108, 'Test1', 'Test1', 1461006270, 1461006390),
(109, 'Test1', 'Test1', 1461006390, 1461006510),
(110, 'Test3', 'Test3', 1461006510, 1461006690),
(111, 'Test2', 'Test2', 1461006690, 1461006810),
(112, 'Test2', 'Test2', 1461006810, 1461006930),
(113, 'Test3', 'Test3', 1461006930, 1461007050),
(114, 'Test1', 'Test1', 1461007050, 1461007170),
(115, 'Test1', 'Test1', 1461007170, 1461007680),
(116, 'Test2', 'Test2', 1461007680, 1461007800),
(117, 'Test3', 'Test3', 1461007800, 1461007920),
(118, 'Test3', 'Test3', 1461007920, 1461008040),
(119, 'Test1', 'Test1', 1461008040, 1461008160),
(120, 'Test2', 'Test2', 1461008160, 1461008280),
(121, 'Test1', 'Test1', 1461008280, 1461008400),
(122, 'Test2', 'Test2', 1461008400, 1461008520),
(123, 'Test3', 'Test3', 1461008520, 1461008790),
(124, 'Test2', 'Test2', 1461008790, 1461008910),
(125, 'Test1', 'Test1', 1461008910, 1461009030),
(126, 'Test3', 'Test3', 1461009030, 1461009150),
(127, 'Test3', 'Test3', 1461009150, 1461009270),
(128, 'Test1', 'Test1', 1461009270, 1461009390),
(129, 'Test2', 'Test2', 1461009390, 1461009510),
(130, 'Test2', 'Test2', 1461009510, 1461009630),
(131, 'Test3', 'Test3', 1461009630, 1461009750),
(132, 'Test1', 'Test1', 1461009750, 1461009870),
(133, 'Test2', 'Test2', 1461009870, 1461009990),
(134, 'Test1', 'Test1', 1461009990, 1461010110),
(135, 'Test3', 'Test3', 1461010110, 1463131050),
(136, 'Test2', 'Test2', 1463131050, 1463131170),
(137, 'Test1', 'Test1', 1463131170, 1463131290),
(138, 'Test3', 'Test3', 1463131290, 1463131410),
(139, 'Test3', 'Test3', 1463131410, 1463131530),
(140, 'Test1', 'Test1', 1463131530, 1463131650),
(141, 'Test2', 'Test2', 1463131650, 1463131770),
(142, 'Test1', 'Test1', 1463131770, 1463131890),
(143, 'Test2', 'Test2', 1463131890, 1463132010),
(144, 'Test3', 'Test3', 1463132010, 1463132130),
(145, 'Test1', 'Test1', 1463132130, 1463132250),
(146, 'Test3', 'Test3', 1463132250, 1463132520),
(147, 'Test2', 'Test2', 1463132520, 1463135430),
(148, 'Test3', 'Test3', 1463135430, 1463135550),
(149, 'Test1', 'Test1', 1463135550, 1463135670),
(150, 'Test2', 'Test2', 1463135670, 1463135790),
(151, 'Test1', 'Test1', 1463135790, 1463135910),
(152, 'Test3', 'Test3', 1463135910, 1464095340),
(153, 'Test2', 'Test2', 1464095340, 1464095460),
(154, 'Test1', 'Test1', 1464095460, 1464095580),
(155, 'Test2', 'Test2', 1464095580, 1464095700),
(156, 'Test3', 'Test3', 1464095700, 1464095820),
(157, 'Test3', 'Test3', 1464095820, 1464698730),
(158, 'Test1', 'Test1', 1464698730, 1464698850),
(159, 'Test2', 'Test2', 1464698850, 1464698970),
(160, 'Test1', 'Test1', 1464698970, 1464699090),
(161, 'Test2', 'Test2', 1464699090, 1464699210),
(162, 'Test3', 'Test3', 1464699210, 1465891380),
(163, 'Test3', 'Test3', 1465891380, 1465891500),
(164, 'Test1', 'Test1', 1465891500, 1465891620),
(165, 'Test2', 'Test2', 1465891620, 1465891740),
(166, 'Test3', 'Test3', 1465891740, 1465891860),
(167, 'Test1', 'Test1', 1465891860, 1465891980),
(168, 'Test2', 'Test2', 1465891980, 1465893930),
(169, 'Test3', 'Test3', 1465893930, 1465894050),
(170, 'Test2', 'Test2', 1465894050, 1465894170),
(171, 'Test1', 'Test1', 1465894170, 1465894290),
(172, 'Test3', 'Test3', 1465894290, 1465897050),
(173, 'Test2', 'Test2', 1465897050, 1465897170),
(174, 'Test1', 'Test1', 1465897170, 1465897290),
(175, 'Test1', 'Test1', 1465897290, 1465897410),
(176, 'Test2', 'Test2', 1465897410, 1465897530),
(177, 'Test3', 'Test3', 1465897530, 1465897650),
(178, 'Test2', 'Test2', 1465897650, 1465897770),
(179, 'Test3', 'Test3', 1465897770, 1465897890),
(180, 'Test1', 'Test1', 1465897890, 1465898010),
(181, 'Test3', 'Test3', 1465898010, 1465898130),
(182, 'Test1', 'Test1', 1465898130, 1465898250),
(183, 'Test2', 'Test2', 1465898250, 1465898370),
(184, 'Test3', 'Test3', 1465898370, 1465898490),
(185, 'Test1', 'Test1', 1465898490, 1465898610),
(186, 'Test2', 'Test2', 1465898610, 1465898730),
(187, 'Test3', 'Test3', 1465898730, 1465898850),
(188, 'Test2', 'Test2', 1465898850, 1465898970),
(189, 'Test1', 'Test1', 1465898970, 1465899090),
(190, 'Test3', 'Test3', 1465899090, 1465899210),
(191, 'Test2', 'Test2', 1465899210, 1465899330),
(192, 'Test1', 'Test1', 1465899330, 1465899450),
(193, 'Test2', 'Test2', 1465899450, 1465899570),
(194, 'Test1', 'Test1', 1465899570, 1465899690),
(195, 'Test3', 'Test3', 1465899690, 1465899810),
(196, 'Test3', 'Test3', 1465899810, 1465899930),
(197, 'Test1', 'Test1', 1465899930, 1465900050),
(198, 'Test2', 'Test2', 1465900050, 1465900170),
(199, 'Test1', 'Test1', 1465900170, 1465900290),
(200, 'Test2', 'Test2', 1465900290, 1465900410),
(201, 'Test3', 'Test3', 1465900410, 1465900530),
(202, 'Test2', 'Test2', 1465900530, 1465907250),
(203, 'Test3', 'Test3', 1465907250, 1465907370),
(204, 'Test1', 'Test1', 1465907370, 1465907490),
(205, 'Test1', 'Test1', 1465907490, 1465907610),
(206, 'Test3', 'Test3', 1465907610, 1465908390),
(207, 'Test2', 'Test2', 1465908390, 1465908510),
(208, 'Test2', 'Test2', 1465908510, 1465908630),
(209, 'Test3', 'Test3', 1465908630, 1465908750),
(210, 'Test1', 'Test1', 1465908750, 1465908990),
(211, 'Test1', 'Test1', 1465908990, 1465909170),
(212, 'Test2', 'Test2', 1465909170, 1465909350),
(213, 'Test3', 'Test3', 1465909350, 1465909530),
(214, 'Test1', 'Test1', 1465909530, 1465909710),
(215, 'Test2', 'Test2', 1465909710, 1465909770),
(216, 'Test3', 'Test3', 1465909770, 1465909920),
(217, 'Test2', 'Test2', 1465909920, 1465910070),
(218, 'Test3', 'Test3', 1465910070, 1465910220),
(219, 'Test1', 'Test1', 1465910220, 1465910370),
(220, 'Test1', 'Test1', 1465910370, 1465910520),
(221, 'Test3', 'Test3', 1465910520, 1465910670),
(222, 'Test2', 'Test2', 1465910670, 1465910820),
(223, 'Test2', 'Test2', 1465910820, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `continent`
--

CREATE TABLE IF NOT EXISTS `continent` (
  `continent_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `continent_name` varchar(64) NOT NULL,
  `continent_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`continent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Gegevens worden uitgevoerd voor tabel `continent`
--

INSERT INTO `continent` (`continent_id`, `continent_name`, `continent_desc`) VALUES
(1, 'Europe', 'Where cso was born'),
(2, 'Africa', 'Gold... gold everywhere!'),
(3, 'North America', 'The bigger, the better'),
(4, 'South America', 'Partying through the night'),
(5, 'Asia', 'Most productive continent ever'),
(6, 'Oceania', 'My islands are as big as your continent');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(64) NOT NULL,
  `country_desc` varchar(255) NOT NULL,
  `country_state` enum('active','queued','finale','eliminated') DEFAULT 'eliminated',
  `country_votes` int(11) DEFAULT '0',
  `continent` int(10) unsigned NOT NULL,
  PRIMARY KEY (`country_id`),
  KEY `continent` (`continent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Gegevens worden uitgevoerd voor tabel `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_desc`, `country_state`, `country_votes`, `continent`) VALUES
(1, 'China', 'The best country to fabricate stuff!', 'finale', 0, 5),
(2, 'India', 'Colourful culture', 'finale', 0, 5),
(3, 'United States', 'Everything should be big', 'finale', 0, 3),
(4, 'Indonesia', 'The kings of the jungle', 'eliminated', 0, 5),
(5, 'Brazil', 'It is carnival yet?', 'eliminated', 0, 4),
(6, 'Pakistan', 'Hot spices that will burn you', 'eliminated', 0, 5),
(7, 'Bangladesh', 'We can make everything with electronics', 'eliminated', 0, 5),
(8, 'Russian Federation', 'Comrade, we do what we want!', 'eliminated', 0, 5),
(9, 'Japan', 'We love technology', 'eliminated', 0, 5),
(10, 'Vietnam', 'Get into the choppa!', 'finale', 0, 5),
(11, 'Egypt', 'The land of the Pharaohs, Emperors and Kings', 'eliminated', 0, 2),
(12, 'Iran', 'The country where nothing is allowed, but everything still happens', 'eliminated', 0, 5),
(13, 'Germany', 'Just give me beer dude', 'eliminated', 0, 1),
(14, 'Turkey', 'Turkish delight!', 'eliminated', 0, 1),
(15, 'France', 'You cannot compete with our cheese and wine', 'eliminated', 0, 1),
(16, 'United Kingdom', 'Tea, the Queen and London. Nothing more', 'eliminated', 0, 1),
(17, 'Italy', 'If you touch my pancetta, I will hurt you', 'eliminated', 0, 1),
(18, 'South Korea', 'Kimchi masterrace', 'eliminated', 0, 5),
(19, 'Spain', 'GRAB YOUR TOMATOES', 'eliminated', 0, 1),
(20, 'Afghanistan', 'We produce top quality drugs', 'eliminated', 0, 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cronjob`
--

CREATE TABLE IF NOT EXISTS `cronjob` (
  `cronjob_name` varchar(64) NOT NULL,
  `cronjob_interval` int(10) unsigned NOT NULL,
  `cronjob_lastrun` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cronjob_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `cronjob`
--

INSERT INTO `cronjob` (`cronjob_name`, `cronjob_interval`, `cronjob_lastrun`) VALUES
('clearvotes', 5, 1465910965),
('pickrandom', 30, 1465910940);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medal`
--

CREATE TABLE IF NOT EXISTS `medal` (
  `medal_type` enum('gold','silver','bronze') NOT NULL,
  `medal_votes` int(10) unsigned DEFAULT '0',
  `contest` int(10) unsigned NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`contest`,`country`),
  KEY `country` (`country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `medal`
--

INSERT INTO `medal` (`medal_type`, `medal_votes`, `contest`, `country`) VALUES
('gold', 0, 210, 1),
('silver', 0, 210, 2),
('bronze', 0, 210, 3),
('gold', 0, 211, 1),
('silver', 0, 211, 2),
('bronze', 0, 211, 3),
('gold', 0, 212, 1),
('silver', 0, 212, 2),
('bronze', 0, 212, 5),
('gold', 0, 213, 1),
('silver', 0, 213, 2),
('bronze', 0, 213, 4),
('gold', 0, 214, 1),
('silver', 0, 214, 2),
('bronze', 0, 214, 4),
('gold', 0, 216, 1),
('silver', 0, 216, 2),
('bronze', 0, 216, 3),
('gold', 0, 217, 2),
('silver', 0, 217, 3),
('bronze', 0, 217, 9),
('gold', 0, 218, 2),
('silver', 0, 218, 3),
('bronze', 0, 218, 4),
('gold', 0, 219, 1),
('silver', 0, 219, 2),
('bronze', 0, 219, 4),
('gold', 0, 220, 1),
('silver', 0, 220, 2),
('bronze', 0, 220, 3),
('gold', 0, 221, 1),
('silver', 0, 221, 2),
('bronze', 0, 221, 3),
('gold', 0, 222, 1),
('silver', 0, 222, 2),
('bronze', 0, 222, 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reason`
--

CREATE TABLE IF NOT EXISTS `reason` (
  `reason_id` int(11) NOT NULL AUTO_INCREMENT,
  `reason_name` varchar(64) NOT NULL,
  `reason_desc` varchar(255) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`reason_name`),
  UNIQUE KEY `reason_id` (`reason_id`),
  KEY `country` (`country`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `reason`
--

INSERT INTO `reason` (`reason_id`, `reason_name`, `reason_desc`, `country`) VALUES
(5, 'Kekevi', 'Nice kekz', 14);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `slang`
--

CREATE TABLE IF NOT EXISTS `slang` (
  `slang_name` varchar(64) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`slang_name`),
  KEY `country` (`country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `slang`
--

INSERT INTO `slang` (`slang_name`, `country`) VALUES
('communism', 1),
('2d', 9),
('erdogan', 14);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `vote_ip` varchar(15) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`vote_ip`),
  KEY `country` (`country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`continent`) REFERENCES `continent` (`continent_id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `medal`
--
ALTER TABLE `medal`
  ADD CONSTRAINT `medal_ibfk_1` FOREIGN KEY (`contest`) REFERENCES `contest` (`contest_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medal_ibfk_2` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `reason`
--
ALTER TABLE `reason`
  ADD CONSTRAINT `reason_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `slang`
--
ALTER TABLE `slang`
  ADD CONSTRAINT `slang_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
