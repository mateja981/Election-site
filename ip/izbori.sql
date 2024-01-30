-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2024 at 03:55 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izbori`
--

-- --------------------------------------------------------

--
-- Table structure for table `izbornamestarezultati`
--

DROP TABLE IF EXISTS `izbornamestarezultati`;
CREATE TABLE IF NOT EXISTS `izbornamestarezultati` (
  `IDIzbornoMesto` tinyint NOT NULL AUTO_INCREMENT,
  `IzbornoMesto` text NOT NULL,
  `IDOpstina` tinyint NOT NULL,
  `UkupanBroj` int NOT NULL,
  `BrojGlasova` int NOT NULL,
  `BrojNevazecih` int NOT NULL,
  `Partija1` int NOT NULL,
  `Partija2` int NOT NULL,
  `Partija3` int NOT NULL,
  PRIMARY KEY (`IDIzbornoMesto`),
  UNIQUE KEY `IDOpstina` (`IDOpstina`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

DROP TABLE IF EXISTS `korisnici`;
CREATE TABLE IF NOT EXISTS `korisnici` (
  `IDkontrolora` tinyint NOT NULL AUTO_INCREMENT,
  `IDIzbornoMesto` tinyint NOT NULL,
  `Ime` text NOT NULL,
  `Prezime` text NOT NULL,
  `Telefon` text NOT NULL,
  `Email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Sifra` text NOT NULL,
  `Adresa` text NOT NULL,
  `Slika` mediumtext NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`IDkontrolora`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`IDkontrolora`, `IDIzbornoMesto`, `Ime`, `Prezime`, `Telefon`, `Email`, `Sifra`, `Adresa`, `Slika`, `Admin`) VALUES
(1, 1, 'Mihajlo', 'Culibrk', '0605225840', 'mihajlo@izbori.com', '123456', 'leposave 66', 'Null', 1),
(2, 87, 'Marija', 'Culibrk', '060123456', 'marija@izbori.com', 'sifra123', 'Sajam 45', 'kemis debeli.png', 0),
(3, 12, 'Mateja', 'Adamovic', '060123456', 'mateja@izbori.com', '123456', 'Beogradska 10, Beograd', 'djodje.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `opstina`
--

DROP TABLE IF EXISTS `opstina`;
CREATE TABLE IF NOT EXISTS `opstina` (
  `IDopstina` int NOT NULL AUTO_INCREMENT,
  `Opstina` text NOT NULL,
  `BrojMesta` int NOT NULL,
  `BrojRezultata` int NOT NULL,
  PRIMARY KEY (`IDopstina`),
  UNIQUE KEY `IDopstina` (`IDopstina`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `opstina`
--

INSERT INTO `opstina` (`IDopstina`, `Opstina`, `BrojMesta`, `BrojRezultata`) VALUES
(1, 'Cukarica', 0, 0),
(2, 'Zemun', 0, 0),
(3, 'Zvezdara', 0, 0),
(4, 'Novi Beograd', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

DROP TABLE IF EXISTS `vesti`;
CREATE TABLE IF NOT EXISTS `vesti` (
  `IDvest` int NOT NULL AUTO_INCREMENT,
  `Naslov` text NOT NULL,
  `Datum` date NOT NULL,
  `Sadrzaj` mediumtext NOT NULL,
  PRIMARY KEY (`IDvest`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`IDvest`, `Naslov`, `Datum`, `Sadrzaj`) VALUES
(2, 'idemo drugi put', '2024-01-03', 'da li ce sad '),
(3, 'Probna vest', '2024-01-03', 'Da vidim da li radi'),
(14, 'idemo ', '2024-01-03', 'ajde '),
(15, 'Proba proba', '2024-01-08', '[romena'),
(16, 'sledeca vest', '2024-01-08', 'sadadada');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
