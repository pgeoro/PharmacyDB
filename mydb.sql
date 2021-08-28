-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2017 at 08:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `angajati`
--

CREATE TABLE IF NOT EXISTS `angajati` (
  `idAngajati` int(11) NOT NULL AUTO_INCREMENT,
  `AngajatiNume` varchar(45) DEFAULT NULL,
  `AngajatiPrenume` varchar(45) DEFAULT NULL,
  `AngajatiDataN` date DEFAULT NULL,
  `AngajatiDataA` date DEFAULT NULL,
  `Salariu` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`idAngajati`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `angajati`
--

INSERT INTO `angajati` (`idAngajati`, `AngajatiNume`, `AngajatiPrenume`, `AngajatiDataN`, `AngajatiDataA`, `Salariu`) VALUES
(1, 'Nicolas ', 'Baicu', '1990-05-24', '2007-12-31', '1350'),
(2, 'Laurentiu ', 'Hanganu', '1984-07-12', '2009-06-25', '2300'),
(3, 'Anton ', 'Baicu', '1993-06-08', '2008-04-12', '1475'),
(4, 'Emil ', 'Rotaru', '1995-04-06', '2010-06-16', '1600'),
(5, 'Vasilescu ', 'Corbeanu', '1987-10-02', '2009-07-12', '2200'),
(6, 'Floarea ', 'Negrescu', '1992-01-24', '2008-04-10', '1100'),
(7, 'Miruna ', 'Moisuc', '1990-06-25', '2009-04-16', '2800'),
(8, 'Viviana ', 'Stan', '1988-02-16', '2007-05-07', '1750'),
(9, 'Florica ', 'Ioveanu', '1989-06-12', '2009-08-25', '1675'),
(10, 'Catalena ', 'Cristescu', '1990-09-19', '2008-03-02', '2400');

-- --------------------------------------------------------

--
-- Table structure for table `bon`
--

CREATE TABLE IF NOT EXISTS `bon` (
  `idBon` int(11) NOT NULL AUTO_INCREMENT,
  `BonData` datetime DEFAULT NULL,
  `Angajati_idAngajati` int(11) NOT NULL,
  `Clienti_idClienti` int(11) NOT NULL,
  PRIMARY KEY (`idBon`),
  KEY `fk_Bon_Angajati1_idx` (`Angajati_idAngajati`),
  KEY `fk_Bon_Clienti1_idx` (`Clienti_idClienti`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `bon`
--

INSERT INTO `bon` (`idBon`, `BonData`, `Angajati_idAngajati`, `Clienti_idClienti`) VALUES
(1, '2016-12-12 00:00:00', 4, 3),
(2, '2016-05-15 00:00:00', 6, 5),
(3, '2016-06-16 00:00:00', 7, 9),
(4, '2016-07-16 00:00:00', 2, 4),
(5, '2016-08-12 00:00:00', 4, 2),
(6, '2016-12-06 00:00:00', 1, 7),
(7, '2016-04-22 00:00:00', 2, 6),
(8, '2016-04-12 00:00:00', 7, 2),
(9, '2016-07-17 00:00:00', 6, 4),
(10, '2016-08-15 00:00:00', 5, 3),
(11, '2016-03-12 00:00:00', 2, 7),
(12, '2016-08-14 00:00:00', 6, 8),
(13, '2016-02-16 00:00:00', 3, 9),
(14, '2016-01-16 00:00:00', 4, 3),
(15, '2016-04-18 00:00:00', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE IF NOT EXISTS `clienti` (
  `idClienti` int(11) NOT NULL AUTO_INCREMENT,
  `ClientiNume` varchar(45) DEFAULT NULL,
  `ClientiPrenume` varchar(45) DEFAULT NULL,
  `ClientiDataN` date DEFAULT NULL,
  PRIMARY KEY (`idClienti`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`idClienti`, `ClientiNume`, `ClientiPrenume`, `ClientiDataN`) VALUES
(1, 'Sanda ', 'Balan', '1979-02-17'),
(2, 'Gabriel ', 'Stolojan', '1990-06-15'),
(3, 'Marcel ', 'Olteanu', '1986-10-15'),
(4, 'Ionut ', 'Craciun', '1992-08-20'),
(5, 'Laurentiu ', 'Breban', '1994-09-12'),
(6, 'Valentina ', 'Goian', '1983-01-17'),
(7, 'Cristina ', 'Dumitru', '1986-06-26'),
(8, 'Angela ', 'Stefanescu', '1988-12-02'),
(9, 'Madalina ', 'Plesu', '1982-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `medicamente`
--

CREATE TABLE IF NOT EXISTS `medicamente` (
  `idMedicamente` int(11) NOT NULL AUTO_INCREMENT,
  `MedicamenteNume` varchar(45) DEFAULT NULL,
  `MedicamenteTip` varchar(45) DEFAULT NULL,
  `DataExpirare` date DEFAULT NULL,
  `Pret` decimal(10,0) DEFAULT NULL,
  `SubstanteActive_idSubstanteActive` int(11) NOT NULL,
  `Producatori_idProducatori` int(11) NOT NULL,
  PRIMARY KEY (`idMedicamente`,`SubstanteActive_idSubstanteActive`,`Producatori_idProducatori`),
  KEY `fk_Medicamente_SubstanteActive1_idx` (`SubstanteActive_idSubstanteActive`),
  KEY `fk_Medicamente_Producatori1_idx` (`Producatori_idProducatori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `medicamente`
--

INSERT INTO `medicamente` (`idMedicamente`, `MedicamenteNume`, `MedicamenteTip`, `DataExpirare`, `Pret`, `SubstanteActive_idSubstanteActive`, `Producatori_idProducatori`) VALUES
(1, 'Reuxen', 'Comprimate', '2020-04-07', '12', 7, 15),
(2, 'Occulan', 'Picaturi', '2019-05-08', '15', 13, 15),
(3, 'Tador', 'Injectabil', '2019-01-06', '20', 17, 17),
(4, 'Nurofen', 'Drajeu', '2018-06-04', '12', 6, 15),
(5, 'Tador', 'Comprimate', '2017-06-05', '30', 17, 17),
(6, 'Nurofen', 'Comprimate', '2019-04-06', '18', 6, 20),
(7, 'Diclosal', 'Gel', '2021-03-17', '65', 7, 22),
(8, 'Diclosal', 'Crema', '2020-03-16', '40', 7, 22),
(9, 'Movalis', 'Comprimate', '2019-04-07', '24', 8, 23),
(10, 'Ketonal', 'Capsule', '2019-04-17', '9', 9, 18),
(11, 'Antinevralgic', 'Comprimate', '2019-07-05', '35', 10, 18),
(12, 'Fasconal', 'Comprimate', '2020-08-04', '19', 10, 16),
(13, 'Influbene', 'Pulbere', '2018-05-08', '28', 10, 19),
(14, 'Moldamin', 'Pulbere', '2018-08-01', '16', 12, 20),
(15, 'Inovum', 'Comprimate', '2019-05-04', '24', 12, 19),
(16, 'Melox', 'Comprimate', '2019-10-05', '29', 8, 22);

-- --------------------------------------------------------

--
-- Table structure for table `medicamentebon`
--

CREATE TABLE IF NOT EXISTS `medicamentebon` (
  `Cantitate` decimal(10,0) DEFAULT NULL,
  `Bon_idBon` int(11) NOT NULL,
  `Medicamente_idMedicamente` int(11) NOT NULL,
  PRIMARY KEY (`Bon_idBon`,`Medicamente_idMedicamente`),
  KEY `fk_MedicamenteBon_Medicamente1_idx` (`Medicamente_idMedicamente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicamentebon`
--

INSERT INTO `medicamentebon` (`Cantitate`, `Bon_idBon`, `Medicamente_idMedicamente`) VALUES
('1', 1, 1),
('5', 1, 2),
('3', 2, 10),
('2', 2, 13),
('1', 3, 7),
('1', 4, 10),
('2', 5, 2),
('7', 5, 4),
('2', 5, 12),
('3', 6, 2),
('1', 6, 3),
('2', 6, 13),
('2', 7, 8),
('4', 7, 9),
('8', 8, 2),
('1', 9, 2),
('2', 10, 3),
('2', 10, 7),
('4', 10, 9),
('1', 11, 2),
('1', 12, 4),
('6', 13, 6),
('1', 13, 8),
('1', 14, 1),
('2', 14, 2),
('3', 14, 3),
('1', 14, 4),
('3', 14, 5),
('4', 15, 9),
('2', 15, 10);

-- --------------------------------------------------------

--
-- Table structure for table `producatori`
--

CREATE TABLE IF NOT EXISTS `producatori` (
  `idProducatori` int(11) NOT NULL AUTO_INCREMENT,
  `ProducatoriNume` varchar(45) DEFAULT NULL,
  `ProducatoriTara` varchar(45) DEFAULT NULL,
  `ProducatoriOras` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idProducatori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `producatori`
--

INSERT INTO `producatori` (`idProducatori`, `ProducatoriNume`, `ProducatoriTara`, `ProducatoriOras`) VALUES
(15, 'Dacia Plant', 'Romania', 'Brasov'),
(16, 'Walmark', 'Germania', 'Munhen'),
(17, 'Biofarm', 'Romania', 'Iasi'),
(18, 'Sicomed', 'Romania', 'Bucuresti'),
(19, 'Grifols', 'Spania', 'Barcelona'),
(20, 'Medinfar', 'Portugalia', 'Lisabona'),
(21, 'Renovo', 'UK', 'Manchester'),
(22, 'Eisai', 'Japonia', 'Tokyo'),
(23, 'McGuff', 'USA', 'Santa Ana'),
(25, 'adsgdsafas', 'fdsasd', 'fdafgdgdsgds');

-- --------------------------------------------------------

--
-- Table structure for table `substanteactive`
--

CREATE TABLE IF NOT EXISTS `substanteactive` (
  `idSubstanteActive` int(11) NOT NULL AUTO_INCREMENT,
  `SubstanteActiveNume` varchar(45) DEFAULT NULL,
  `SubstanteActiveEfect` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idSubstanteActive`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `substanteactive`
--

INSERT INTO `substanteactive` (`idSubstanteActive`, `SubstanteActiveNume`, `SubstanteActiveEfect`) VALUES
(6, 'Ibuprofen', 'Antiinflamator'),
(7, 'Diclofenac', 'Antiinflamator'),
(8, 'Meloxicam', 'Antiinflamator'),
(9, 'Ketoprofen', 'Antiinflamator'),
(10, 'Paracetamol', 'Analgezic'),
(11, 'Aracetamol', 'Analgezic'),
(12, 'Benzilpenicilina', 'Antibiotic'),
(13, 'Eritromicina', 'Macrofile'),
(14, 'Amoxicilina', 'Antiinfectios'),
(15, 'Ceftriaxona', 'Antibiotic'),
(17, 'Dexketoprofen', 'Antiinflamator'),
(18, 'Ketanomixpen', 'Antibiotic');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bon`
--
ALTER TABLE `bon`
  ADD CONSTRAINT `fk_Bon_Angajati1` FOREIGN KEY (`Angajati_idAngajati`) REFERENCES `angajati` (`idAngajati`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Bon_Clienti1` FOREIGN KEY (`Clienti_idClienti`) REFERENCES `clienti` (`idClienti`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medicamente`
--
ALTER TABLE `medicamente`
  ADD CONSTRAINT `fk_Medicamente_Producatori1` FOREIGN KEY (`Producatori_idProducatori`) REFERENCES `producatori` (`idProducatori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Medicamente_SubstanteActive1` FOREIGN KEY (`SubstanteActive_idSubstanteActive`) REFERENCES `substanteactive` (`idSubstanteActive`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medicamentebon`
--
ALTER TABLE `medicamentebon`
  ADD CONSTRAINT `fk_MedicamenteBon_Bon1` FOREIGN KEY (`Bon_idBon`) REFERENCES `bon` (`idBon`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_MedicamenteBon_Medicamente1` FOREIGN KEY (`Medicamente_idMedicamente`) REFERENCES `medicamente` (`idMedicamente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
