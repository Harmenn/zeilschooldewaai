-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2016 at 11:17 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zeilschooldewaai`
--

-- --------------------------------------------------------

--
-- Table structure for table `boten`
--

CREATE TABLE IF NOT EXISTS `boten` (
`boot_id` int(11) NOT NULL,
  `bootnaam` varchar(50) NOT NULL,
  `bouwjaar` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boten`
--

INSERT INTO `boten` (`boot_id`, `bootnaam`, `bouwjaar`, `type_id`) VALUES
(3, 'Ailiine', 1996, 1),
(4, 'Zoro', 2010, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cursussen`
--

CREATE TABLE IF NOT EXISTS `cursussen` (
`cursus_id` int(11) NOT NULL,
  `cursusnaam` varchar(50) NOT NULL,
  `cursusprijs` decimal(10,2) NOT NULL,
  `cursusomschrijving` varchar(250) NOT NULL,
  `startdatum` date NOT NULL,
  `einddatum` date NOT NULL,
  `niveau` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cursussen`
--

INSERT INTO `cursussen` (`cursus_id`, `cursusnaam`, `cursusprijs`, `cursusomschrijving`, `startdatum`, `einddatum`, `niveau`, `type_id`) VALUES
(1, 'wadtocht', '750.00', 'Een tocht bij de wadden eilanden', '2016-04-04', '2016-04-10', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inschrijvingen`
--

CREATE TABLE IF NOT EXISTS `inschrijvingen` (
  `cursus_id` int(11) NOT NULL,
  `klant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inschrijvingen`
--

INSERT INTO `inschrijvingen` (`cursus_id`, `klant_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructeurs`
--

CREATE TABLE IF NOT EXISTS `instructeurs` (
`instructeur_id` int(11) NOT NULL,
  `instructeur_geslacht` varchar(10) NOT NULL,
  `instructeur_voorletters` varchar(10) NOT NULL,
  `instructeur_voornaam` varchar(50) NOT NULL,
  `instructeur_tussenvoegsels` varchar(5) NOT NULL,
  `instructeur_achternaam` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructeurs`
--

INSERT INTO `instructeurs` (`instructeur_id`, `instructeur_geslacht`, `instructeur_voorletters`, `instructeur_voornaam`, `instructeur_tussenvoegsels`, `instructeur_achternaam`) VALUES
(1, 'man', 'H', 'Hans', 'van', 'Wezen');

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

CREATE TABLE IF NOT EXISTS `klanten` (
`klant_id` int(11) NOT NULL,
  `geslacht` varchar(10) NOT NULL,
  `voorletters` varchar(10) NOT NULL,
  `voornaam` varchar(50) NOT NULL,
  `tussenvoegsel` varchar(5) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `woonplaats` varchar(50) NOT NULL,
  `telefoonnummer` int(10) NOT NULL,
  `mobiel` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `geboortedatum` date NOT NULL,
  `niveau` int(11) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `priviledged` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klanten`
--

INSERT INTO `klanten` (`klant_id`, `geslacht`, `voorletters`, `voornaam`, `tussenvoegsel`, `achternaam`, `adres`, `postcode`, `woonplaats`, `telefoonnummer`, `mobiel`, `email`, `geboortedatum`, `niveau`, `wachtwoord`, `url`, `priviledged`) VALUES
(1, 'man', 'R', 'Ruud', '', 'Louwerse', 'malvaweg', '8042HR', 'Zwolle', 384221693, 6136654, 'ruudlouwerse@live.nl', '1995-11-20', 2, 'Henk', 'DemoUrl', 1);

-- --------------------------------------------------------

--
-- Table structure for table `koppelinggen`
--

CREATE TABLE IF NOT EXISTS `koppelinggen` (
  `boot_id` int(11) NOT NULL,
  `cursus_id` int(11) NOT NULL,
  `klant_id` int(11) NOT NULL,
  `instructeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koppelinggen`
--

INSERT INTO `koppelinggen` (`boot_id`, `cursus_id`, `klant_id`, `instructeur_id`) VALUES
(3, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `typen`
--

CREATE TABLE IF NOT EXISTS `typen` (
`type_id` int(11) NOT NULL,
  `boottype` varchar(50) NOT NULL,
  `lengte` int(11) NOT NULL,
  `breedte` int(11) NOT NULL,
  `afbeelding` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typen`
--

INSERT INTO `typen` (`type_id`, `boottype`, `lengte`, `breedte`, `afbeelding`) VALUES
(1, 'catamaran', 9, 5, 'DemoUrl'),
(2, 'valk', 4, 2, 'DemoUrl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boten`
--
ALTER TABLE `boten`
 ADD PRIMARY KEY (`boot_id`), ADD KEY `type_id` (`type_id`), ADD KEY `type_id_2` (`type_id`);

--
-- Indexes for table `cursussen`
--
ALTER TABLE `cursussen`
 ADD PRIMARY KEY (`cursus_id`), ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `inschrijvingen`
--
ALTER TABLE `inschrijvingen`
 ADD PRIMARY KEY (`cursus_id`,`klant_id`), ADD KEY `cursus_id` (`cursus_id`), ADD KEY `klant_id` (`klant_id`);

--
-- Indexes for table `instructeurs`
--
ALTER TABLE `instructeurs`
 ADD PRIMARY KEY (`instructeur_id`);

--
-- Indexes for table `klanten`
--
ALTER TABLE `klanten`
 ADD PRIMARY KEY (`klant_id`);

--
-- Indexes for table `koppelinggen`
--
ALTER TABLE `koppelinggen`
 ADD PRIMARY KEY (`boot_id`,`cursus_id`,`klant_id`,`instructeur_id`), ADD KEY `instructeur_id` (`instructeur_id`), ADD KEY `klant_id` (`klant_id`), ADD KEY `cursus_id` (`cursus_id`), ADD KEY `boot_id` (`boot_id`);

--
-- Indexes for table `typen`
--
ALTER TABLE `typen`
 ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boten`
--
ALTER TABLE `boten`
MODIFY `boot_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cursussen`
--
ALTER TABLE `cursussen`
MODIFY `cursus_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `instructeurs`
--
ALTER TABLE `instructeurs`
MODIFY `instructeur_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `klanten`
--
ALTER TABLE `klanten`
MODIFY `klant_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `typen`
--
ALTER TABLE `typen`
MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `boten`
--
ALTER TABLE `boten`
ADD CONSTRAINT `boten_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `typen` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cursussen`
--
ALTER TABLE `cursussen`
ADD CONSTRAINT `cursussen_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `typen` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inschrijvingen`
--
ALTER TABLE `inschrijvingen`
ADD CONSTRAINT `inschrijvingen_ibfk_1` FOREIGN KEY (`cursus_id`) REFERENCES `cursussen` (`cursus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `inschrijvingen_ibfk_2` FOREIGN KEY (`klant_id`) REFERENCES `klanten` (`klant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `koppelinggen`
--
ALTER TABLE `koppelinggen`
ADD CONSTRAINT `koppelinggen_ibfk_1` FOREIGN KEY (`boot_id`) REFERENCES `boten` (`boot_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `koppelinggen_ibfk_2` FOREIGN KEY (`cursus_id`) REFERENCES `cursussen` (`cursus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `koppelinggen_ibfk_3` FOREIGN KEY (`instructeur_id`) REFERENCES `instructeurs` (`instructeur_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `koppelinggen_ibfk_4` FOREIGN KEY (`klant_id`) REFERENCES `klanten` (`klant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
