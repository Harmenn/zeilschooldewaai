-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2016 at 11:21 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inschrijvingen`
--

CREATE TABLE IF NOT EXISTS `inschrijvingen` (
  `cursus_id` int(11) NOT NULL,
  `klant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
MODIFY `boot_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cursussen`
--
ALTER TABLE `cursussen`
MODIFY `cursus_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instructeurs`
--
ALTER TABLE `instructeurs`
MODIFY `instructeur_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `klanten`
--
ALTER TABLE `klanten`
MODIFY `klant_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `typen`
--
ALTER TABLE `typen`
MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
