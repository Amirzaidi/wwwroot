-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `contact_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(64) NOT NULL,
  `contact_mail` varchar(64) NOT NULL,
  `contact_subject` varchar(128) NOT NULL,
  `contact_content` text NOT NULL,
  `contact_ip` varchar(15) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `contest`;
CREATE TABLE `contest` (
  `contest_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contest_name` varchar(64) NOT NULL,
  `contest_desc` varchar(255) NOT NULL,
  `contest_start` int(10) unsigned DEFAULT '0',
  `contest_end` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`contest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `continent`;
CREATE TABLE `continent` (
  `continent_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `continent_name` varchar(64) NOT NULL,
  `continent_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`continent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `country_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(64) NOT NULL,
  `country_desc` varchar(255) NOT NULL,
  `country_state` enum('active','queued','finale','eliminated') DEFAULT 'eliminated',
  `country_votes` int(11) DEFAULT '0',
  `continent` int(10) unsigned NOT NULL,
  PRIMARY KEY (`country_id`),
  KEY `continent` (`continent`),
  CONSTRAINT `country_ibfk_1` FOREIGN KEY (`continent`) REFERENCES `continent` (`continent_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `cronjob`;
CREATE TABLE `cronjob` (
  `cronjob_name` varchar(64) NOT NULL,
  `cronjob_interval` int(10) unsigned NOT NULL,
  `cronjob_lastrun` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cronjob_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `medal`;
CREATE TABLE `medal` (
  `medal_type` enum('gold','silver','bronze') NOT NULL,
  `medal_votes` int(10) unsigned DEFAULT '0',
  `contest` int(10) unsigned NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`contest`,`country`),
  KEY `country` (`country`),
  CONSTRAINT `medal_ibfk_1` FOREIGN KEY (`contest`) REFERENCES `contest` (`contest_id`) ON DELETE CASCADE,
  CONSTRAINT `medal_ibfk_2` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `reason`;
CREATE TABLE `reason` (
  `reason_id` int(11) NOT NULL AUTO_INCREMENT,
  `reason_name` varchar(64) NOT NULL,
  `reason_desc` varchar(255) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`reason_name`),
  UNIQUE KEY `reason_id` (`reason_id`),
  KEY `country` (`country`),
  CONSTRAINT `reason_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `slang`;
CREATE TABLE `slang` (
  `slang_name` varchar(64) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`slang_name`),
  KEY `country` (`country`),
  CONSTRAINT `slang_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `vote`;
CREATE TABLE `vote` (
  `vote_ip` varchar(15) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`vote_ip`),
  KEY `country` (`country`),
  CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2016-06-13 21:25:55
