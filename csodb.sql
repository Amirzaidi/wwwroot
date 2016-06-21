-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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

INSERT INTO `contest` (`contest_id`, `contest_name`, `contest_desc`, `contest_start`, `contest_end`) VALUES
(1,	'Army',	'The strength of the army matters. Even if they are a peaceful country, they need it to stay peaceful.',	1466467200,	0);

DROP TABLE IF EXISTS `continent`;
CREATE TABLE `continent` (
  `continent_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `continent_name` varchar(64) NOT NULL,
  `continent_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`continent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `continent` (`continent_id`, `continent_name`, `continent_desc`) VALUES
(1,	'Europe',	'Where cso was born'),
(2,	'Africa',	'Gold... gold everywhere!'),
(3,	'North America',	'The bigger, the better'),
(4,	'South America',	'Partying through the night'),
(5,	'Asia',	'Most productive continent ever'),
(6,	'Oceania',	'My islands are as big as your continent');

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

INSERT INTO `country` (`country_id`, `country_name`, `country_desc`, `country_state`, `country_votes`, `continent`) VALUES
(1,	'China',	'The best country to fabricate stuff!',	'queued',	0,	5),
(2,	'India',	'Colourful culture',	'queued',	0,	5),
(3,	'United States',	'Everything should be big',	'queued',	0,	3),
(4,	'Indonesia',	'The kings of the jungle',	'queued',	0,	5),
(5,	'Brazil',	'It is carnival yet?',	'queued',	0,	4),
(6,	'Pakistan',	'Hot spices that will burn you',	'queued',	0,	5),
(7,	'Bangladesh',	'We can make everything with electronics',	'queued',	0,	5),
(8,	'Russian Federation',	'Comrade, we do what we want!',	'queued',	0,	5),
(9,	'Japan',	'We love technology',	'queued',	0,	5),
(10,	'Vietnam',	'Get into the choppa!',	'queued',	0,	5),
(11,	'Egypt',	'The land of the Pharaohs, Emperors and Kings',	'queued',	0,	2),
(12,	'Iran',	'The country where nothing is allowed, but everything still happens',	'queued',	0,	5),
(13,	'Germany',	'Just give me beer dude',	'queued',	0,	1),
(14,	'Turkey',	'Turkish delight!',	'queued',	0,	1),
(15,	'France',	'You cannot compete with our cheese and wine',	'queued',	0,	1),
(16,	'United Kingdom',	'Tea, the Queen and London. Nothing more',	'queued',	0,	1),
(17,	'Italy',	'If you touch my pancetta, I will hurt you',	'queued',	0,	1),
(18,	'South Korea',	'Kimchi masterrace',	'queued',	0,	5),
(19,	'Spain',	'GRAB YOUR TOMATOES',	'queued',	0,	1),
(20,	'Afghanistan',	'We produce top quality drugs',	'queued',	0,	5);

DROP TABLE IF EXISTS `cronjob`;
CREATE TABLE `cronjob` (
  `cronjob_name` varchar(64) NOT NULL,
  `cronjob_interval` int(10) unsigned NOT NULL,
  `cronjob_lastrun` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cronjob_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `cronjob` (`cronjob_name`, `cronjob_interval`, `cronjob_lastrun`) VALUES
('clearvotes',	86400,	1465862400),
('pickrandom',	604800,	1465862400);

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

INSERT INTO `reason` (`reason_id`, `reason_name`, `reason_desc`, `country`) VALUES
(18,	'Air Force',	'The largest air force in the world is the U.S. Air Force. The world’s second-largest air force is the U.S. Navy and Marine Corps combined.',	3),
(27,	'Airports',	'Brazil has more than 4,000 airports – more than any other country other than the US. ',	5),
(76,	'Alcohol',	'French people are the second biggest consumers of alcohol per capita in the Western world - after Luxembourg... ',	15),
(35,	'Ambulances',	'Edhi Foundation is the world’s largest non-profit social welfare organization. This organization provides 24-hour emergency services, medical & healthcare services and shelter for orphans.',	6),
(48,	'Anime',	'Animated Japanese films and television shows (i.e., anime) account for 60% of the world’s animation.',	9),
(12,	'B.C. Tech',	'By the fourth century B.C., the Chinese were drilling for natural gas and using it as a heat source, preceding Western natural gas drilling by about 2,300 years.',	1),
(51,	'Balanced cuisine',	'Their cuisine is well known for its balance of the five Asian elements; spicy, sour, bitter, salty and sweet.',	10),
(101,	'Bamiyan',	'Did you know that the world’s two largest standing Buddhas once stood in Bamiyan, Afghanistan  until the Taliban destroyed them in 2001. ',	20),
(63,	'Beer',	'German people are the second biggest consumers of beer in the world (after the Czechs), with an average of 107 litres per person per year in 2010 (or 0.30 l per day). ',	13),
(36,	'Bengal Tiger',	'The Royal Bengal Tiger is Bangladesh’s national animal. This majestic creature has a roar that can be heard up to 3 kilometers away. Unfortunately, it is now an endangered species.',	7),
(42,	'Billionaires',	'Moscow actually has more billionaires living in the area than any other city in the world. With a total of 74 billionaires, Moscow beats New York City\'s statistic by three.',	8),
(22,	'Biodiversity',	'Indonesia is home to thousands of different flora and fauna, making it the country with the second highest level of biodiversity in the world.',	4),
(56,	'Calendar',	'The ancient Egyptians were the first people to have a year consisting of 365 days divided into 12 months. They also invented clocks.',	11),
(49,	'Cashews',	'Vietnam is the largest exporter of cashews in the world, and the second largest exporter of rice.',	10),
(78,	'Cheese',	'There are over 300 kinds of cheese made in France. ',	15),
(77,	'Cheques',	'France is the only continental European country or Eurozone member where cheques are still used as one of the main forms of payment. Most of European countries stopped using them since the 1990\'s because it was not deemed a safe method of payment. ',	15),
(7,	'Civilization',	'China is often considered the longest continuous civilization, with some historians marking 6000 B.C. as the dawn of Chinese civilization. It also has the world’s longest continuously used written language.',	1),
(31,	'Coffee',	'Brazil has been the world’s largest exporter of coffee for 150 years. It supplied around 80 per cent of the world’s coffee in the 1920s; that figure has fallen to around a third. ',	5),
(39,	'Cricket',	'Cricket is the most popular sport in Bangladesh, closely followed by football.',	7),
(41,	'Cyrillic',	'Russian language uses the Cyrillic alphabet instead of the Latin and is one of the 5 most spoken languages in the world',	8),
(95,	'Density',	'Spain is the least densely populated country in Europe, with just 202 inhabitants per square mile.',	19),
(28,	'Descendance',	'Some 1.5 million-2.5 million Brazilians are of Japanese descent. Many immigrants brought with them seedlings of cherry trees and cherry blossoms can be viewed outside homes in Sao Paulo, and in public parks in Curitiba.',	5),
(33,	'Desert',	'The Thar desert is located on the border between Pakistan and India. It’s the world’s ninth largest sub-tropical desert. This desert is about 10,000 years old and was once a water source for the Indus Valley Civilization.',	6),
(70,	'Discovery',	'The Germans can be credited for the discovery of insulin, the invention of the clarinet, the pocket watch, the automated calculator, the light bulb, television (partly), paraffin, petrol/gasoline & Diesel engines, the automobile and lots more!',	13),
(46,	'Earthquakes',	'There are over 1,500 earthquakes in Japan each year, though most of them are very minor.',	9),
(23,	'Ethnic groups',	'Indonesia is extremely culturally diverse. In fact, there are over 300 ethnic groups in Indonesia, each with their own customs, traditions, and dialects.',	4),
(47,	'Exercise',	'Many Japanese companies have morning exercise sessions for their workers.',	9),
(68,	'Exporter',	'Since 2003, Germany is the world\'s largest exporter of goods with $1.016 trillion exported in 2005. 10.1% of world exports come from Germany. ',	13),
(37,	'Farmers',	'More than half of Bangladesh’s population is composed of farmers.',	7),
(87,	'Fashion',	'Italy is among the world’s leaders of the fashion industry. In the 1950s, Italian designers such as Nino Cerruti and Valentino led the world in creating stylish fashions. Armani, Versace, Gucci, Prada, Ferrari etc. have become internationally recognized.',	17),
(19,	'Fire Fighters',	'Case in point: Slightly more than 69 percent of firefighters in the United States are volunteers.',	3),
(17,	'Flag',	'The current 50-star American flag was designed by a 17-year-old as a school project in 1958. He got a B-.',	3),
(82,	'Football',	'United Kingdom is the only country in the world with four national football teams - England, Scotland, Wales and Northern Ireland. ',	16),
(40,	'Forests',	'Bangladesh has one of the largest coastal mangrove forests in the world; it forms part of the Sundarbans National Park, a World Heritage site. ',	7),
(94,	'Gold',	'Spain has some of the largest gold deposits in Europe. It is also one of the world\'s biggest producers of granite and marble.',	19),
(30,	'Heritage',	'Rio de Janeiro became a World Heritage Site in 2012. Its annual Carnival attracts around 2 million revellers each day. ',	5),
(20,	'Highway 550',	'US Highway 550 in Colorado became known as Million Dollar Highway because its roadbed was paved with low-grade gold ore.',	3),
(57,	'Imhotep',	'The Egyptian polymath Imhotep (“the one who comes in peace”) is known as the first physician, the first engineer, and the first architect.',	11),
(44,	'Intelligence',	'The intelligency level is of Russian people is considered up to 99%. There are more than 600 universities in the country.',	8),
(8,	'Inventions',	'The Chinese invented paper, the compass, gunpowder, and printing. Toilet paper was also invented in China in the late 1300s. It was for emperors only.',	1),
(34,	'Irrigation',	'The world’s largest irrigation network is present in Pakistan. It serves 14.4 million hectares of cultivated land. The irrigation system is fed by water from the Indus River.',	6),
(21,	'Islands',	'Indonesia is huge. Composed of 17,508 islands covering approximately 1,919,440 square kilometers, it takes over 12 hours of flying time to get from one end of the country (say, Northern Sumatra) to the other end (West Papua Guinea).',	4),
(90,	'Kimchi',	'South Korea’s national dish is kimchi, which is a combination of vegetables and spices that have been fermented underground for months. It is served with almost everything.',	18),
(81,	'Library',	'British Library in London is the largest library in the world. It has more than 170 million items catalogued.',	16),
(80,	'London',	'More languages (300) are spoken in London than in any other country in the world.',	16),
(14,	'Martial Arts',	'Martial Arts were first created in India, and later spread to Asia by Buddhist missionaries. ',	2),
(16,	'Medicine',	'Ayurveda is the earliest school of medicine known to mankind. The Father of Medicine, Charaka, consolidated Ayurveda 2500 years ago. ',	2),
(26,	'Mines',	'The Grasberg mine, located near Puncak Jaya, is the largest gold mine and the third largest copper mine in the world.',	4),
(13,	'Mosques',	'There are 300,000 active mosques in India , more than in any other country, including the Muslim world ',	2),
(50,	'Motor bikes',	'An estimated ten million motor bikes travel on the roads of Vietnam every day.',	10),
(32,	'Mountains',	'Pakistan is home to some of the world’s highest mountain ranges. They include the Himalayas and the Hindu Kush range, in which four mountains out of the fourteen highest peaks in the world are located. K-2, the world’s second highest peak, is also located',	6),
(64,	'Nature',	'Germany has nearly 700 zoological gardens, wildlife parks, aquariums, bird parks, animal reserves, or safari parks, including 414 registered zoos (more than the USA).',	13),
(102,	'Nowruz',	'Afghans celebrate their new year, Nowruz, on 21 March, the first day of spring. Thousands travel to the northern city of Mazar-e-Sharif to welcome in Nawroz, a pre-Islamic festival. Nowruz is also celebrated in Iran.',	20),
(100,	'Oil paintings',	'The world\'s first oil paintings were drawn not in Renaissance Europe but in the caves of Bamiyan, in the central highlands of Afghanistan around 650BC.',	20),
(73,	'Oil wrestling',	'The spectacle of two bulky men stripped to the waist, doused with olive oil, and grappling under the hot Thracian sun is a 654-year-old sporting tradition and sight to behold.',	14),
(58,	'Oldest civilization',	'Iran is the world’s oldest continuous major civilization, with historical and urban settlements dating back to 4000 BC.',	12),
(43,	'Outer space',	'Soviet Cosmonaut Yuri Gagarin was the first human to journey into  outer space when his Vostok spacecraft  completed an  orbit of the Earth on April 12, 1961.',	8),
(83,	'Parmesan',	'Parmesan cheese originated in the area around Parma, Italy. Italians also created many other cheeses, including gorgonzola, mozzarella, provolone, and ricotta. No one knows when the pizza was invented, but the people of Naples made it popular.',	17),
(79,	'Pesticide free',	'According to the Soil Association, a leading organic-food campaign, more than 85% of the people in Britain want pesticide-free food.',	16),
(99,	'Poetry',	' Poetry is a cherished part of Afghan culture. Afghans have told their stories in verse for more than 1,000 years. ',	20),
(55,	'Population',	'As of July 2011, the population of Egypt was 82,079,663, making it the 15th most populated country in the world. Approximately 99% of the population lives on about 5.5% of the land.',	11),
(54,	'Pyramids',	'The shape of ancient Egyptian pyramids is thought to have been inspired by the spreading rays of the sun.',	11),
(15,	'Railways',	'One of the largest employer in the world is the Indian Railways , employing over a million people.',	2),
(89,	'Relationship',	'South Koreans enjoy showing off their relationship statuses publically. It is common to see couples holding hands, kissing, and even wearing matching outfits.',	18),
(59,	'Religion',	'Islam is the dominant religion in Iran. Other religions, such as Zoroastrianism, Judaism, Christianity, and the Baha’i have their fans in Iran.',	12),
(62,	'Resources',	'Iran holds the world’s fourth-largest proven oil reserves and the world’s second-largest natural gas reserves.',	12),
(75,	'Rivers',	'Rivers played a major role in French history, acting as the main transportation routes before the advent of the railway. 24 rivers in France exceed 300 km in length',	15),
(85,	'Rome',	'The capital of Italy is Rome (also known as the Eternal City) and is almost 3,000 years old. It has been the capital since 1871 and is home to the Dome of St. Peter\'s, the Sistine Chapel, the Coliseum, and the famous Trevi Fountain.',	17),
(53,	'Ruou ran',	'A Vietnamese speciality is ruou ran, a rice wine with a pickled snake in it that is said to cure all illnesses.',	10),
(88,	'Samsung',	'The microchips for Apple’s iPhones are made by the South Korean company Samsung.',	18),
(72,	'Santa Claus',	'Saint Nicholas was born far from the North Pole, in Patara. And he’s not the only saint with connections to Turkey — the Virgin Mary’s resting place could be near Ephesus, while Saint Paul was from Tarsus in the south.',	14),
(45,	'Slurping',	'Slurping your food is a sign that the food is delicious and is considered a compliment to the cook.',	9),
(84,	'Spaghetti',	'When McDonald\'s opened in 1986 in Rome, food purists outside the restaurant gave away free spaghetti to remind people of their culinary heritage.',	17),
(71,	'Tavuk Gogsu',	'The signature Ottoman treat is tavuk göğsü, or chicken breast pudding. It’s a strange blend of boiled chicken, milk, and sugar, dusted with cinnamon. And it’s delicious. Look for it on menus across the country.',	14),
(93,	'Teeth',	'When a child loses a tooth in Spain, a small mouse called “Ratoncito Pérez” leaves a surprise under the pillow.',	19),
(97,	'The Macaque',	'Spain is home to a type of tailless monkey, the macaque, which is the only type of wild monkey that lives in Europe.',	19),
(74,	'Turkish Airlines',	'You can fly to just about everywhere from Istanbul Atatürk Airport, thanks to flag carrier Turkish Airlines’ 260-and-counting destinations. A modern fleet of aircraft served by kid-friendly crew has helped the fast-growing airline win Best Airline in Euro',	14),
(10,	'Weaponry',	'The crossbow was invented and first used by the Chinese. They were also the first in the world to use chemical and gas weapons, 2,000 years before gas was used in Europe during WWI.',	1),
(91,	'Work',	'The average South Korean works 55 hours a week, or 2,316 hours a year, compared to the 40-hour week of the average factory worker in the United States.',	18),
(60,	'Young',	'Iran is one of the youngest countries in the world. Approximately 70% of Iran’s population is under the age of 30.',	12);

DROP TABLE IF EXISTS `slang`;
CREATE TABLE `slang` (
  `slang_name` varchar(64) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`slang_name`),
  KEY `country` (`country`),
  CONSTRAINT `slang_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `slang` (`slang_name`, `country`) VALUES
('communism',	1),
('colourful',	2),
('freedom',	3),
('jungle',	4),
('carnival',	5),
('spices',	6),
('pineapple',	7),
('comrade',	8),
('kalashnikov',	8),
('anime',	9),
('pharoah',	11),
('independent',	12),
('dasauto',	13),
('erdogan',	14),
('wrestling',	14);

DROP TABLE IF EXISTS `vote`;
CREATE TABLE `vote` (
  `vote_ip` varchar(15) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`vote_ip`),
  KEY `country` (`country`),
  CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `vote` (`vote_ip`, `country`) VALUES
('192.168.2.254',	10);

-- 2016-06-20 20:02:06
