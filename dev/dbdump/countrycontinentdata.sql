-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 14 jun 2016 om 12:48
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
-- Tabelstructuur voor tabel `continent`
--

DROP TABLE IF EXISTS `continent`;
CREATE TABLE IF NOT EXISTS `continent` (
  `continent_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `continent_name` varchar(64) NOT NULL,
  `continent_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`continent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

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

DROP TABLE IF EXISTS `country`;
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
(1, 'China', 'The best country to fabricate stuff!', 'queued', 0, 5),
(2, 'India', 'Colourful culture', 'queued', 0, 5),
(3, 'United States', 'Everything should be big', 'active', 0, 3),
(4, 'Indonesia', 'The kings of the jungle', 'queued', 0, 5),
(5, 'Brazil', 'It is carnival yet?', 'queued', 0, 4),
(6, 'Pakistan', 'Hot spices that will burn you', 'queued', 0, 5),
(7, 'Bangladesh', 'We can make everything with electronics', 'queued', 0, 5),
(8, 'Russian Federation', 'Comrade, we do what we want!', 'queued', 0, 5),
(9, 'Japan', 'We love technology', 'queued', 0, 5),
(10, 'Vietnam', 'Get into the choppa!', 'active', 0, 5),
(11, 'Egypt', 'The land of the Pharaohs, Emperors and Kings', 'queued', 0, 2),
(12, 'Iran', 'The country where nothing is allowed, but everything still happens', 'active', 0, 5),
(13, 'Germany', 'Just give me beer dude', 'queued', 0, 1),
(14, 'Turkey', 'Want to wrestle with me?', 'active', 0, 1),
(15, 'France', 'You cannot compete with our cheese and wine', 'queued', 0, 1),
(16, 'United Kingdom', 'Tea, the Queen and London. Nothing more', 'queued', 0, 1),
(17, 'Italy', 'If you touch my pancetta, I will hurt you', 'queued', 0, 1),
(18, 'South Korea', 'Kimchi masterrace', 'queued', 0, 5),
(19, 'Spain', 'GRAB YOUR TOMATOES', 'queued', 0, 1),
(20, 'Afghanistan', 'We produce top quality drugs', 'queued', 0, 5);

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`continent`) REFERENCES `continent` (`continent_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
