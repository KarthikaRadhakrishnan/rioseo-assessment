-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 12:28 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(2) NOT NULL,
  `first_name` varchar(10) DEFAULT NULL,
  `last_name` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `job_title_id` int(2) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `job_title_id`, `password`, `status`, `created_by`, `created_at`) VALUES
(1, 'Cathrin', 'Weiser', 'cweiser0@purevolume.com', 1, '$2y$10$cbHi1SkqPoeoPA0zS6NGz.wZoOON8.rEbTtyaZNsnMGMxHs8yXCKy', 1, 0, '0000-00-00 00:00:00'),
(3, 'Brenna', 'Dimitrie', 'bdimitrie2@unc.edu', 3, '$2y$10$cbHi1SkqPoeoPA0zS6NGz.wZoOON8.rEbTtyaZNsnMGMxHs8yXCKy', 1, 0, '0000-00-00 00:00:00'),
(4, 'Violet', 'Thornley', 'vthornley3@blogs.com', 4, '$2y$10$cbHi1SkqPoeoPA0zS6NGz.wZoOON8.rEbTtyaZNsnMGMxHs8yXCKy', 1, 0, '0000-00-00 00:00:00'),
(5, 'Ezequiel', 'Ivashnikov', 'eivashnikov4@addtoany.com', 5, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(6, 'Doti', 'Diviney', 'ddiviney5@icio.us', 5, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(7, 'Hal', 'Melia', 'hmelia6@discuz.net', 5, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(8, 'Janaya', 'Gudge', 'jgudge7@chicagotribune.com', 5, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(9, 'Danica', 'Thurstan', 'dthurstan8@census.gov', 6, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(10, 'Shandra', 'Jutson', 'sjutson9@comsenz.com', 6, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(11, 'Ragnar', 'Ramberg', 'rramberga@list-manage.com', 6, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(12, 'Anny', 'August', 'aaugustb@economist.com', 6, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(13, 'Gerhardine', 'Cavanagh', 'gcavanaghc@wsj.com', 7, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(14, 'Kelcy', 'Smeeth', 'ksmeethd@state.tx.us', 7, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(15, 'Carree', 'Harder', 'chardere@quantcast.com', 7, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(16, 'Birch', 'Lenoir', 'blenoirf@livejournal.com', 7, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(17, 'Sapphire', 'Sarath', 'ssarathg@acquirethisname.com', 8, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(18, 'Thatch', 'Huet', 'thueth@apache.org', 8, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(19, 'Felice', 'Pickvance', 'fpickvancei@meetup.com', 8, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(20, 'Egan', 'Gittis', 'egittisj@wix.com', 8, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(21, 'Titos', 'Elbourn', 'telbournk@nydailynews.com', 9, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(22, 'Korey', 'Jacobsohn', 'kjacobsohnl@addthis.com', 9, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(23, 'Aretha', 'Muston', 'amustonm@etsy.com', 9, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(24, 'Neall', 'Tutsell', 'ntutselln@cbc.ca', 9, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(25, 'Christean', 'Seiffert', 'cseifferto@amazon.de', 10, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(26, 'Julie', 'Thew', 'jthewp@seesaa.net', 10, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(27, 'Meagan', 'Osgorby', 'mosgorbyq@boston.com', 10, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(28, 'Korry', 'Van Driel', 'kvandrielr@creativecommons.org', 10, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(29, 'Georgeanna', 'Sear', 'gsears@cloudflare.com', 11, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(30, 'Svend', 'Carabine', 'scarabinet@skype.com', 11, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(31, 'Aigneis', 'Picton', 'apictonu@uiuc.edu', 11, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(32, 'Gisela', 'Spaice', 'gspaicev@ow.ly', 11, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(33, 'Viviyan', 'Filyakov', 'vfilyakovw@intel.com', 11, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(34, 'Camille', 'Sumbler', 'csumblerx@mayoclinic.com', 11, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(35, 'Louisette', 'D\'Adamo', 'ldadamoy@ted.com', 11, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(36, 'Joannes', 'Darth', 'jdarthz@theguardian.com', 11, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(37, 'Lindi', 'Timlett', 'ltimlett10@upenn.edu', 11, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(38, 'Ruggiero', 'Zappel', 'rzappel11@pbs.org', 11, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(39, 'Hinze', 'Giacomoni', 'hgiacomoni12@instagram.com', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(40, 'Avram', 'Loyndon', 'aloyndon13@engadget.com', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(41, 'Lexi', 'Gatley', 'lgatley14@instagram.com', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(42, 'Stormie', 'Kegan', 'skegan15@mediafire.com', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(43, 'Tracee', 'Helis', 'thelis16@alexa.com', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(44, 'Kippie', 'Crofts', 'kcrofts17@ameblo.jp', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(45, 'Derril', 'Walak', 'dwalak18@wp.com', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(46, 'Dyana', 'Ithell', 'dithell19@hatena.ne.jp', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(47, 'Kaela', 'Haistwell', 'khaistwell1a@elegantthemes.com', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(48, 'Domeniga', 'Ellerman', 'dellerman1b@bizjournals.com', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(49, 'Riva', 'MacArte', 'rmacarte1c@cocolog-nifty.com', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(50, 'Vlad', 'Edyson', 'vedyson1d@businessinsider.com', 12, '$2y$10$SN4LsmDFFVbPsJJc5GYFi.v3Bn8gF3F.D1lB7YJ3I22JqfsIESrcG', 1, 0, '0000-00-00 00:00:00'),
(51, 'Karthika', 'RK', 'rkarthika2010it@gmail.com', 5, '$2y$10$EoqRls5DpIHD5BAOr/veMe6HVk.yQHuTdaHkfeknXNPl6ySJLCFQG', 1, 4, '2018-09-26 07:38:18'),
(52, 'Pacorro', 'Laphorne', 'plaphorn1@cisco.com', 2, '$2y$10$afm05G/5BqcyJggtob1Q2O5sgre2f8ekh9iLUNcMEf50aUqXAVhPq', 1, 4, '2018-09-27 09:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `employee_locations`
--

CREATE TABLE `employee_locations` (
  `employee_id` int(2) NOT NULL,
  `location_id` varchar(3) CHARACTER SET utf8 NOT NULL,
  `created_by` int(2) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='/** tbl contains all employee location associated data */';

--
-- Dumping data for table `employee_locations`
--

INSERT INTO `employee_locations` (`employee_id`, `location_id`, `created_by`, `created_date`) VALUES
(1, '43', 0, '0000-00-00 00:00:00'),
(1, '44', 0, '0000-00-00 00:00:00'),
(1, '47', 0, '0000-00-00 00:00:00'),
(6, '22', 0, '0000-00-00 00:00:00'),
(6, '23', 0, '0000-00-00 00:00:00'),
(6, '24', 0, '0000-00-00 00:00:00'),
(6, '25', 0, '0000-00-00 00:00:00'),
(6, '27', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_titles`
--

CREATE TABLE `job_titles` (
  `id` int(2) NOT NULL,
  `job_title` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_titles`
--

INSERT INTO `job_titles` (`id`, `job_title`) VALUES
(1, 'President'),
(2, 'Vice President'),
(3, 'Director'),
(4, 'Manager'),
(5, 'Developer I'),
(6, 'Developer II'),
(7, 'Developer III'),
(8, 'Technician I'),
(9, 'Technician II'),
(10, 'Technician III'),
(11, 'Customer Support I'),
(12, 'Customer Support II'),
(13, 'Analyst II'),
(14, 'Analyst I');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(3) NOT NULL,
  `location_name` varchar(29) DEFAULT NULL,
  `address` varchar(27) DEFAULT NULL,
  `city` varchar(16) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `latitude` decimal(6,4) DEFAULT NULL,
  `longitude` decimal(8,4) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `country` varchar(13) DEFAULT NULL,
  `postal_code` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `address`, `city`, `state`, `latitude`, `longitude`, `phone`, `country`, `postal_code`) VALUES
(1, 'Climacteris melanura', '21491 Clarendon Drive', 'Baltimore', 'MD', '39.3316', '-76.6336', '410-266-0558', 'United States', 21211),
(2, 'Phalacrocorax carbo', '491 Heffernan Court', 'Santa Monica', 'CA', '34.0100', '-118.4717', '818-429-8371', 'United States', 90405),
(3, 'Stercorarius longicausus', '1674 Lyons Street', 'Lancaster', 'PA', '40.0185', '-76.2976', '717-236-9636', 'United States', 17605),
(4, 'Procyon cancrivorus', '4777 Myrtle Way', 'Washington', 'DC', '38.8933', '-77.0146', '202-805-0167', 'United States', 20409),
(5, 'Phascogale calura', '35878 Commercial Place', 'Charlottesville', 'VA', '38.0339', '-78.4924', '540-643-1813', 'United States', 22903),
(6, 'Phascogale calura', '60067 Fuller Circle', 'Wilmington', 'DE', '39.5645', '-75.5970', '302-219-4425', 'United States', 19897),
(7, 'Coluber constrictor foxii', '05655 Ridgeview Crossing', 'Hagerstown', 'MD', '39.5207', '-77.9162', '240-907-5181', 'United States', 21747),
(8, 'Potorous tridactylus', '9807 Anthes Terrace', 'Memphis', 'TN', '35.2017', '-89.9715', '901-481-8857', 'United States', 38181),
(9, 'Ephipplorhynchus senegalensis', '9 Pennsylvania Place', 'Pittsburgh', 'PA', '40.4344', '-80.0248', '412-128-3362', 'United States', 15250),
(10, 'Lepilemur rufescens', '579 Hazelcrest Crossing', 'Philadelphia', 'PA', '39.9597', '-75.2024', '610-836-5931', 'United States', 19104),
(11, 'Uraeginthus bengalus', '39835 Huxley Circle', 'Macon', 'GA', '32.8118', '-83.5650', '478-566-3807', 'United States', 31217),
(12, 'Cercatetus concinnus', '799 Heffernan Terrace', 'Philadelphia', 'PA', '39.9473', '-75.1500', '215-400-8986', 'United States', 19172),
(13, 'Isoodon obesulus', '1 Pennsylvania Parkway', 'Billings', 'MT', '45.9497', '-108.5990', '406-348-9404', 'United States', 59105),
(14, 'Plegadis ridgwayi', '61 Burning Wood Lane', 'Philadelphia', 'PA', '39.9772', '-75.2545', '610-702-1788', 'United States', 19151),
(15, 'Catharacta skua', '42262 Anzinger Park', 'Jackson', 'MS', '32.3386', '-90.1708', '601-855-6015', 'United States', 39216),
(16, 'Antechinus flavipes', '319 Maple Wood Way', 'Newark', 'NJ', '40.7918', '-74.2452', '862-976-4775', 'United States', 7195),
(17, 'Notechis semmiannulatus', '1 Shopko Pass', 'Baltimore', 'MD', '39.2856', '-76.6899', '443-190-5736', 'United States', 21229),
(18, 'Meles meles', '8513 Lindbergh Drive', 'Jamaica', 'NY', '40.6914', '-73.8061', '718-944-5168', 'United States', 11480),
(19, 'Macropus fuliginosus', '878 Steensland Parkway', 'San Francisco', 'CA', '37.7441', '-122.4863', '415-620-2165', 'United States', 94116),
(20, 'Ara macao', '26 Tomscot Crossing', 'Houston', 'TX', '29.8340', '-95.4342', '713-978-4523', 'United States', 77288),
(21, 'Bucorvus leadbeateri', '62306 Roxbury Way', 'Seattle', 'WA', '47.7161', '-122.3004', '206-113-4212', 'United States', 98175),
(22, 'Macropus giganteus', '593 Springview Hill', 'Miami', 'FL', '25.5584', '-80.4582', '305-496-0033', 'United States', 33283),
(23, 'Varanus sp.', '571 Cherokee Alley', 'Long Beach', 'CA', '33.7866', '-118.2987', '562-555-1226', 'United States', 90847),
(24, 'Lemur catta', '588 Scott Terrace', 'Philadelphia', 'PA', '40.0018', '-75.1179', '215-577-3095', 'United States', 19191),
(25, 'Anastomus oscitans', '71 Stoughton Park', 'Baton Rouge', 'LA', '30.3920', '-91.0892', '225-946-2876', 'United States', 70836),
(26, 'Gorilla gorilla', '58 Commercial Road', 'Irvine', 'CA', '33.6462', '-117.8398', '714-657-7346', 'United States', 92717),
(27, 'Felis concolor', '468 Loeprich Park', 'Columbia', 'MO', '38.9033', '-92.1022', '573-643-6592', 'United States', 65211),
(28, 'Falco mexicanus', '98 Aberg Point', 'Jacksonville', 'FL', '30.3290', '-81.8176', '904-880-3147', 'United States', 32220),
(29, 'Ovis orientalis', '90265 Twin Pines Lane', 'Tulsa', 'OK', '36.1499', '-95.7923', '918-463-3423', 'United States', 74108),
(30, 'Ovis orientalis', '6744 Lighthouse Bay Parkway', 'Lafayette', 'LA', '30.2023', '-92.0188', '337-588-9237', 'United States', 70505),
(31, 'Cochlearius cochlearius', '34703 Bultman Center', 'Tacoma', 'WA', '47.0662', '-122.1132', '253-145-9022', 'United States', 98411),
(32, 'Diceros bicornis', '59 Ronald Regan Crossing', 'Mobile', 'AL', '30.6589', '-88.1780', '251-938-1208', 'United States', 36641),
(33, 'Notechis semmiannulatus', '3753 Sage Point', 'Athens', 'GA', '33.9321', '-83.3525', '706-910-7807', 'United States', 30605),
(34, 'Ovis canadensis', '0635 Lawn Trail', 'Washington', 'DC', '38.8933', '-77.0146', '202-425-4253', 'United States', 20226),
(35, 'Ninox superciliaris', '22 Derek Alley', 'Roanoke', 'VA', '37.2742', '-79.9579', '540-557-8552', 'United States', 24029),
(36, 'Ctenophorus ornatus', '7605 Eastlawn Street', 'Decatur', 'GA', '33.7749', '-84.3046', '770-307-2123', 'United States', 30089),
(37, 'unavailable', '847 Dunning Drive', 'Rochester', 'NY', '43.1216', '-77.7311', '585-626-9898', 'United States', 14624),
(38, 'Gorilla gorilla', '9998 Farmco Road', 'Pittsburgh', 'PA', '40.4344', '-80.0248', '412-337-4980', 'United States', 15286),
(39, 'Pycnonotus nigricans', '97 Sycamore Crossing', 'Bloomington', 'IN', '39.1682', '-86.5186', '812-386-1676', 'United States', 47405),
(40, 'Neotoma sp.', '4697 Hallows Alley', 'Orlando', 'FL', '28.5469', '-81.2571', '321-503-4120', 'United States', 32825),
(41, 'Dendrocitta vagabunda', '604 Village Green Park', 'Anderson', 'IN', '40.0938', '-85.6578', '765-380-3254', 'United States', 46015),
(42, 'Crotalus cerastes', '2331 Messerschmidt Hill', 'South Bend', 'IN', '41.5968', '-86.2930', '574-645-6997', 'United States', 46634),
(43, 'Oxybelis fulgidus', '61056 Bartillon Road', 'Miami', 'FL', '25.6364', '-80.3187', '786-853-4164', 'United States', 33158),
(44, 'Microcebus murinus', '8003 Carpenter Alley', 'Sandy', 'UT', '40.5927', '-111.8310', '801-131-8615', 'United States', 84093),
(45, 'Sus scrofa', '7 Towne Road', 'Huntington', 'WV', '38.4096', '-82.3690', '304-794-6670', 'United States', 25705),
(46, 'Sitta canadensis', '1384 Beilfuss Hill', 'Greensboro', 'NC', '36.0807', '-80.0244', '336-414-8689', 'United States', 27415),
(47, 'Ursus maritimus', '9724 Del Sol Road', 'Columbus', 'OH', '39.9671', '-83.0044', '614-899-1924', 'United States', 43215),
(48, 'Acrantophis madagascariensis', '27909 Forster Center', 'Albany', 'NY', '42.6149', '-73.9708', '518-888-5183', 'United States', 12242),
(49, 'Bugeranus caruncalatus', '0633 7th Parkway', 'Seattle', 'WA', '47.6151', '-122.3447', '206-983-2374', 'United States', 98121),
(50, 'Chlidonias leucopterus', '523 Gale Circle', 'Sacramento', 'CA', '38.5568', '-121.4929', '916-970-6620', 'United States', 95818),
(51, 'Vulpes cinereoargenteus', '77 Loeprich Pass', 'Sarasota', 'FL', '27.2427', '-82.4751', '941-481-5241', 'United States', 34238),
(52, 'Felis caracal', '13429 Larry Terrace', 'Greenville', 'SC', '34.8497', '-82.4538', '864-570-6063', 'United States', 29610),
(53, 'Felis pardalis', '4139 Northridge Terrace', 'San Francisco', 'CA', '37.7786', '-122.4892', '858-329-2839', 'United States', 94121),
(54, 'Vulpes cinereoargenteus', '847 Crest Line Lane', 'Washington', 'DC', '38.8667', '-77.0166', '202-787-2346', 'United States', 20319),
(55, 'Perameles nasuta', '2794 Warbler Pass', 'Mobile', 'AL', '30.7309', '-88.0789', '251-704-0266', 'United States', 36610),
(56, 'Pitangus sulphuratus', '0 Dexter Street', 'Lansing', 'MI', '42.7371', '-84.5244', '517-554-0881', 'United States', 48912),
(57, 'Chauna torquata', '7739 Merchant Lane', 'Atlanta', 'GA', '33.7488', '-84.3883', '404-362-5032', 'United States', 31132),
(58, 'Cyrtodactylus louisiadensis', '065 Del Mar Parkway', 'Houston', 'TX', '29.8340', '-95.4342', '713-131-5033', 'United States', 77201),
(59, 'Phascogale tapoatafa', '91 Fairfield Park', 'Shawnee Mission', 'KS', '39.0312', '-94.6308', '816-816-0800', 'United States', 66205),
(60, 'Damaliscus lunatus', '98090 Waubesa Alley', 'Albuquerque', 'NM', '35.0448', '-106.6893', '505-646-2120', 'United States', 87105),
(61, 'Spermophilus parryii', '20677 Debs Plaza', 'New Orleans', 'LA', '30.0330', '-89.8826', '504-161-3495', 'United States', 70165),
(62, 'Morelia spilotes variegata', '787 Hagan Crossing', 'Atlanta', 'GA', '33.8444', '-84.4740', '404-209-5090', 'United States', 31196),
(63, 'Raphicerus campestris', '5 Raven Alley', 'Boise', 'ID', '43.5851', '-116.2191', '208-416-3473', 'United States', 83705),
(64, 'Alectura lathami', '5613 Forest Dale Parkway', 'New Bedford', 'MA', '41.6913', '-70.9355', '508-469-6123', 'United States', 2745),
(65, 'Anas bahamensis', '9741 Dawn Parkway', 'Louisville', 'KY', '38.1890', '-85.6768', '502-848-6913', 'United States', 40256),
(66, 'Dusicyon thous', '2439 Coolidge Crossing', 'Philadelphia', 'PA', '40.0422', '-75.0244', '215-998-8966', 'United States', 19136),
(67, 'Balearica pavonina', '8296 Shelley Place', 'Everett', 'WA', '47.8599', '-122.2848', '425-427-4136', 'United States', 98206),
(68, 'Pteropus rufus', '9 Glendale Center', 'Columbus', 'OH', '40.1454', '-82.9817', '740-685-8250', 'United States', 43240),
(69, 'Cacatua tenuirostris', '8 Banding Avenue', 'Kansas City', 'MO', '39.0350', '-94.3567', '816-739-3662', 'United States', 64193),
(70, 'Psophia viridis', '51081 Schiller Center', 'Alexandria', 'VA', '38.8200', '-77.0589', '202-759-9348', 'United States', 22301),
(71, 'Casmerodius albus', '25 Crownhardt Plaza', 'Indianapolis', 'IN', '39.7795', '-86.1328', '317-535-8307', 'United States', 46295),
(72, 'Ursus arctos', '413 Milwaukee Center', 'Dayton', 'OH', '39.7617', '-84.1498', '937-553-0739', 'United States', 45403),
(73, 'Tursiops truncatus', '40 Raven Street', 'Washington', 'DC', '38.9450', '-77.0364', '202-895-5870', 'United States', 20022),
(74, 'Neotis denhami', '83522 Pleasure Hill', 'Orlando', 'FL', '28.5663', '-81.2608', '407-510-5521', 'United States', 32868),
(75, 'Felis libyca', '68 Arapahoe Point', 'Orlando', 'FL', '28.5663', '-81.2608', '407-308-7379', 'United States', 32891),
(76, 'Rhea americana', '601 Kim Pass', 'Waterloo', 'IA', '42.4156', '-92.2703', '319-989-2833', 'United States', 50706),
(77, 'Bettongia penicillata', '91 Waywood Crossing', 'Detroit', 'MI', '42.2399', '-83.1508', '313-534-4899', 'United States', 48267),
(78, 'Ursus maritimus', '0 Logan Alley', 'Miami', 'FL', '25.8130', '-80.2320', '305-886-1649', 'United States', 33142),
(79, 'Alcelaphus buselaphus cokii', '7338 Dovetail Alley', 'Pittsburgh', 'PA', '40.4344', '-80.0248', '412-305-4254', 'United States', 15279),
(80, 'Charadrius tricollaris', '79730 Gina Terrace', 'Norcross', 'GA', '33.9677', '-84.2438', '404-434-7474', 'United States', 30092),
(81, 'Semnopithecus entellus', '337 Browning Avenue', 'Spring Hill', 'FL', '28.5642', '-82.4165', '352-564-1822', 'United States', 34611),
(82, 'Macropus agilis', '40835 David Lane', 'Visalia', 'CA', '36.3551', '-119.3010', '559-457-5895', 'United States', 93291),
(83, 'Eumetopias jubatus', '8912 Garrison Place', 'Battle Creek', 'MI', '42.2464', '-85.0045', '269-423-6033', 'United States', 49018),
(84, 'Aonyx capensis', '76 Fair Oaks Alley', 'Oakland', 'CA', '37.8044', '-122.2698', '510-976-3388', 'United States', 94616),
(85, 'Alcelaphus buselaphus caama', '5842 Graedel Parkway', 'Littleton', 'CO', '39.5920', '-105.1328', '720-147-0830', 'United States', 80127),
(86, 'Libellula quadrimaculata', '19 Green Ridge Street', 'Saint Petersburg', 'FL', '27.7898', '-82.7243', '727-636-9150', 'United States', 33710),
(87, 'Felis chaus', '27420 West Avenue', 'Evansville', 'IN', '38.1071', '-87.5256', '812-126-8347', 'United States', 47725),
(88, 'unavailable', '3863 Stone Corner Avenue', 'Denver', 'CO', '39.7439', '-104.9876', '303-613-6758', 'United States', 80291),
(89, 'Lamprotornis nitens', '6 Kings Hill', 'Minneapolis', 'MN', '45.1907', '-93.3021', '763-892-6716', 'United States', 55448),
(90, 'Cervus duvauceli', '2 Bluestem Hill', 'Memphis', 'TN', '35.0425', '-90.0732', '901-467-5086', 'United States', 38109),
(91, 'Pelecanus conspicillatus', '15411 Meadow Ridge Drive', 'Colorado Springs', 'CO', '38.8558', '-104.7134', '719-259-5621', 'United States', 80915),
(92, 'Alcelaphus buselaphus cokii', '2 Bay Way', 'San Antonio', 'TX', '29.4375', '-98.4616', '210-366-2914', 'United States', 78285),
(93, 'Pavo cristatus', '44 Stone Corner Place', 'Columbus', 'GA', '32.5161', '-84.9785', '706-504-5345', 'United States', 31904),
(94, 'Cebus apella', '53543 Continental Plaza', 'Houston', 'TX', '29.7758', '-95.3121', '281-158-6055', 'United States', 77020),
(95, 'Notechis semmiannulatus', '394 Pepper Wood Way', 'Riverside', 'CA', '33.7529', '-116.0556', '951-113-8301', 'United States', 92513),
(96, 'Sarkidornis melanotos', '951 Haas Point', 'Corpus Christi', 'TX', '27.7770', '-97.4632', '361-561-9721', 'United States', 78475),
(97, 'Taurotagus oryx', '64403 Kennedy Road', 'West Palm Beach', 'FL', '26.6459', '-80.4303', '561-546-9180', 'United States', 33421),
(98, 'Felis yagouaroundi', '34 Darwin Street', 'Clearwater', 'FL', '27.8918', '-82.7248', '813-455-7226', 'United States', 33758),
(99, 'Corvus brachyrhynchos', '7443 Fairview Place', 'Sacramento', 'CA', '38.6157', '-121.5053', '916-685-6632', 'United States', 95833),
(100, 'Pytilia melba', '8 Jay Alley', 'Kansas City', 'MO', '39.1042', '-94.4923', '816-581-0290', 'United States', 64125);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_titles`
--
ALTER TABLE `job_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `job_titles`
--
ALTER TABLE `job_titles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
