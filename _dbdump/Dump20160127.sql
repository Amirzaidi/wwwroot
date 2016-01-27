-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 27 jan 2016 om 13:56
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `cso`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `content` mediumtext,
  `ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`id`, `mail`, `subject`, `content`, `ip`) VALUES
(1, 'azaidi@live.nl', 'xx', 'xx', '127.0.0.1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contests`
--

DROP TABLE IF EXISTS `contests`;
CREATE TABLE IF NOT EXISTS `contests` (
`id` int(11) NOT NULL,
  `active` enum('0','1') DEFAULT '0',
  `name` varchar(45) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `start` int(11) DEFAULT '-1',
  `end` int(11) DEFAULT '-1',
  `type` enum('auto','manual') NOT NULL DEFAULT 'auto',
  `repeats` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `contests`
--

INSERT INTO `contests` (`id`, `active`, `name`, `desc`, `start`, `end`, `type`, `repeats`) VALUES
(1, '1', 'Army', 'Fighting', 0, 1453898248, 'manual', 6),
(2, '1', 'Army', 'Fighting', 1453898248, 1453898248, 'auto', 0),
(3, '1', 'Army', 'Fighting', 1453898249, 1453898320, 'auto', 0),
(4, '1', 'Army', 'Fighting', 1453898320, 1453898412, 'auto', 0),
(5, '1', 'Food', 'Delicious', 1453898412, 1453898501, 'manual', 7),
(6, '1', 'Food', 'Delicious', 1453898501, 1453898686, 'auto', 0),
(7, '1', 'Food', 'Delicious', 1453898686, 1453898686, 'auto', 0),
(8, '1', 'Food', 'Delicious', 1453898686, 1453898857, 'auto', 0),
(9, '1', 'Food', 'Delicious', 1453898857, 1453898965, 'auto', 0),
(10, '1', 'Army', 'Fighting', 1453898965, 1453898965, 'auto', 0),
(11, '1', 'Food', 'Delicious', 1453898965, 1453899151, 'auto', 0),
(12, '1', 'Army', 'Fighting', 1453899151, 1453899152, 'auto', 0),
(13, '1', 'Food', 'Delicious', 1453899152, 1453899248, 'auto', 0),
(14, '1', 'Army', 'Fighting', 1453899248, 1453899328, 'auto', 0),
(15, '1', 'Food', 'Delicious', 1453899328, -1, 'auto', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `continents`
--

DROP TABLE IF EXISTS `continents`;
CREATE TABLE IF NOT EXISTS `continents` (
`id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `continents`
--

INSERT INTO `continents` (`id`, `name`, `desc`) VALUES
(1, 'Europe', NULL),
(2, 'North America', NULL),
(3, 'South America', NULL),
(4, 'Africa', NULL),
(5, 'Asia', NULL),
(6, 'Oceania', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
`id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `continent` int(11) NOT NULL,
  `desc` mediumtext,
  `votes` int(11) DEFAULT '0',
  `state` enum('queue','active','won','lost') DEFAULT 'queue'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `countries`
--

INSERT INTO `countries` (`id`, `name`, `continent`, `desc`, `votes`, `state`) VALUES
(1, 'The Netherlands', 1, 'The cheesiest country', 0, 'won'),
(2, 'United Kingdom', 1, 'Lets all drink tea!yes!', 0, 'lost'),
(3, 'United States', 2, 'Trump4Prez', 0, 'active'),
(4, 'Brazil', 3, 'Got some more of that coca cola?', 0, 'lost'),
(5, 'South Africa', 4, 'WK20??', 0, 'active'),
(6, 'Japan', 5, 'Weeaboo!', 0, 'active'),
(7, 'China', 5, 'Coal factories everywhere', 0, 'lost'),
(8, 'Australia', 6, 'Too damn hot', 0, 'lost');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cronjobs`
--

DROP TABLE IF EXISTS `cronjobs`;
CREATE TABLE IF NOT EXISTS `cronjobs` (
`id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `interval` int(11) DEFAULT NULL,
  `lastrun` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `cronjobs`
--

INSERT INTO `cronjobs` (`id`, `name`, `interval`, `lastrun`) VALUES
(1, 'clearvotes', 5, 1453899340),
(2, 'pickrandom', 30, 1453899340);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ipvotes`
--

DROP TABLE IF EXISTS `ipvotes`;
CREATE TABLE IF NOT EXISTS `ipvotes` (
  `ip` varchar(45) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medals`
--

DROP TABLE IF EXISTS `medals`;
CREATE TABLE IF NOT EXISTS `medals` (
`id` int(11) NOT NULL,
  `contest` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `rank` enum('1','2','3') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `medals`
--

INSERT INTO `medals` (`id`, `contest`, `country`, `votes`, `rank`) VALUES
(1, 1, 1, 0, '1'),
(2, 1, 2, 0, '2'),
(3, 2, 1, 0, '1'),
(4, 2, 2, 0, '2'),
(5, 3, 6, 3, '1'),
(6, 3, 1, 2, '2'),
(7, 4, 2, 4, '1'),
(8, 4, 1, 1, '2'),
(9, 5, 3, 2, '1'),
(10, 5, 4, 2, '2'),
(11, 6, 1, 0, '1'),
(12, 6, 3, 0, '2'),
(13, 7, 1, 0, '1'),
(14, 7, 2, 0, '2'),
(15, 8, 1, 0, '1'),
(16, 8, 2, 0, '2'),
(17, 9, 1, 0, '1'),
(18, 9, 3, 0, '2'),
(19, 10, 1, 0, '1'),
(20, 10, 3, 0, '2'),
(21, 11, 1, 0, '1'),
(22, 11, 2, 0, '2'),
(23, 12, 1, 0, '1'),
(24, 12, 3, 0, '2'),
(25, 13, 1, 0, '1'),
(26, 13, 2, 0, '2'),
(27, 14, 1, 0, '1'),
(28, 14, 2, 0, '2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `slang`
--

DROP TABLE IF EXISTS `slang`;
CREATE TABLE IF NOT EXISTS `slang` (
  `text` varchar(45) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `slang`
--

INSERT INTO `slang` (`text`, `country`) VALUES
('nl', 1),
('uk', 2),
('netherlands', 1),
('england', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ip_UNIQUE` (`ip`);

--
-- Indexen voor tabel `contests`
--
ALTER TABLE `contests`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `continents`
--
ALTER TABLE `continents`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexen voor tabel `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexen voor tabel `cronjobs`
--
ALTER TABLE `cronjobs`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexen voor tabel `ipvotes`
--
ALTER TABLE `ipvotes`
 ADD UNIQUE KEY `ip_UNIQUE` (`ip`);

--
-- Indexen voor tabel `medals`
--
ALTER TABLE `medals`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `contests`
--
ALTER TABLE `contests`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT voor een tabel `continents`
--
ALTER TABLE `continents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `cronjobs`
--
ALTER TABLE `cronjobs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `medals`
--
ALTER TABLE `medals`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
