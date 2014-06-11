-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Cze 2014, 23:24
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dziennik_ucznia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_obecnosci`
--

CREATE TABLE `tbl_obecnosci` (
  `id_obecnosci` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `obecny` char(1) DEFAULT NULL,
  `dzien` date NOT NULL,
  PRIMARY KEY (`id_obecnosci`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Zrzut danych tabeli `tbl_obecnosci`
--

INSERT INTO `tbl_obecnosci` (`id_obecnosci`, `id`, `obecny`, `dzien`) VALUES
(1, 1, '+', '2014-01-01'),
(2, 4, '+', '2014-01-01'),
(3, 1, '+', '2014-01-02'),
(4, 2, '+', '2014-01-02'),
(5, 6, '+', '2014-01-02'),
(6, NULL, NULL, '2014-01-03'),
(8, NULL, '-', '2014-01-04'),
(9, 7, '-', '2014-01-04'),
(10, 2, '+', '2014-01-01'),
(11, 7, '-', '2014-01-02'),
(12, 3, '-', '2014-01-02'),
(13, 1, '-', '2014-01-04'),
(14, 2, '+', '2014-01-04'),
(15, 3, '-', '2014-01-04'),
(16, 4, '+', '2014-01-04');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_uczen`
--

CREATE TABLE `tbl_uczen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(128) NOT NULL,
  `nazwisko` varchar(128) NOT NULL,
  `miejscowosc` varchar(128) NOT NULL,
  `pesel` varchar(11) NOT NULL,
  `ulica` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Zrzut danych tabeli `tbl_uczen`
--

INSERT INTO `tbl_uczen` (`id`, `imie`, `nazwisko`, `miejscowosc`, `pesel`, `ulica`) VALUES
(1, 'Jan', 'Kowalski', 'Warszawa', '94121243056', 'Wiejska 23'),
(2, 'Janusz ', 'Nowak', 'Kraków', '91050401412', 'Krakowska 14'),
(3, 'Tomasz', 'Judym', 'Cisy', '65072664269', 'Cisowska 12'),
(4, 'Kamil', 'Stoch', 'Wis?a', '84010234952', 'Zakopia?ska 12'),
(6, 'Czeslaw', 'Milosz', 'Warszawa', '54123113125', 'Gnieznienska 12'),
(7, 'Chris', 'Cornell', 'New York', '72050412058', 'Costello Avenue 12');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@example.com'),
(2, 'nauczyciel_1', 'haslo1', 'nauczyciel_1@example.com'),
(3, 'nauczyciel_2', 'haslo_2', 'nauczyciel_2@example.com');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `tbl_obecnosci`
--
ALTER TABLE `tbl_obecnosci`
  ADD CONSTRAINT `tbl_obecnosci_fk_1` FOREIGN KEY (`id`) REFERENCES `tbl_uczen` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
