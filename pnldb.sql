-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Nov 21, 2024 alle 20:04
-- Versione del server: 8.0.35
-- Versione PHP: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pnldb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE `admin` (
  `Admin_cf` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `Email_a` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Password_hash_a` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Nome` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Cognome` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`Admin_cf`, `Email_a`, `Password_hash_a`, `Nome`, `Cognome`) VALUES
('GCMSLRRS', 'admin@gmail.com', 'root', 'Admin', 'Supremo');

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `Id_prod` int NOT NULL,
  `Utente_cf` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `Quantità` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `modifica`
--

CREATE TABLE `modifica` (
  `Id_prod` int NOT NULL,
  `Admin_cf` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `Tipo` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Data_modifica` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE `prodotto` (
  `Id_prod` int NOT NULL,
  `Categoria` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Descrizione` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `Dimensione` int DEFAULT NULL,
  `Prezzo` decimal(7,2) NOT NULL,
  `Classe` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `Utente_cf` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `Email_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Password_hash_u` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Nome` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `Cognome` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `Datanascita_u` date NOT NULL,
  `Interesse` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Bloccato` tinyint(1) DEFAULT NULL,
  `approvato` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`Utente_cf`, `Email_u`, `Password_hash_u`, `Nome`, `Cognome`, `Datanascita_u`, `Interesse`, `Bloccato`, `approvato`) VALUES
('', 'l.cacca@cacca.com', '12345', 'Cacca', 'Luca', '2024-11-20', 'kwmdkwkdkwd', NULL, NULL),
('aaefaf', 'cacca@gmail.com', 'afasf', 'agadg', 'adgadg', '2024-05-21', 'awad', NULL, NULL),
('afafasf', 'asfaf@gmail.com', 'afdaf', 'afafd', 'adfaf', '2020-06-02', 'afa', NULL, NULL),
('asfasf', 'afafs@cacca.it', 'awdawd', 'awfwaf', 'afsaf', '2020-07-03', 'qascdas', NULL, NULL),
('awdawdaeef', 'l.cacca@gmamma.com', '123', '123', '123', '2024-06-02', 'awdwd', NULL, NULL),
('EIFHDHSJEJR7438G', 'l.giaco03@gmail.com', '1234', 'Luca', 'Giacomelli', '0000-00-00', 'wwdkwdjwdjwd', NULL, NULL),
('fawfawfwf', 'l.giaco02@gmail.com', '1234', 'Luca', 'Giacomelli', '2003-06-19', 'wdwd', NULL, NULL),
('GDCJSKEK', 'ziopero@gmammolo.it', 'caccapipi', 'Cacca', 'Genitt', '2020-11-16', 'Sono down', 1, NULL),
('mssprl01e24c573d', 'piemassa01@gmail.com', '12345', 'pietro luigi maria ', 'massaro', '2001-05-24', 'asfnoasncop', NULL, NULL),
('RCGNRO04T68A052L', 'nora.famiglia@gmail.com', '123', 'Nora', 'Ricagni', '2004-12-28', 'ciaooo', NULL, NULL),
('wdwd', 'l.cacca@caccwa.com', '12345', 'Cacca', 'Luca', '2024-11-20', 'kwmdkwkdkwd', NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti_el`
--

CREATE TABLE `utenti_el` (
  `Utente_cf` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `DataEl` date NOT NULL,
  `Nome` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `Cognome` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `Admin_cf` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_cf`),
  ADD UNIQUE KEY `Email_a` (`Email_a`);

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`Id_prod`,`Utente_cf`),
  ADD KEY `fk_UTENTE_c` (`Utente_cf`);

--
-- Indici per le tabelle `modifica`
--
ALTER TABLE `modifica`
  ADD PRIMARY KEY (`Id_prod`,`Admin_cf`),
  ADD KEY `fk_ADMIN` (`Admin_cf`);

--
-- Indici per le tabelle `prodotto`
--
ALTER TABLE `prodotto`
  ADD PRIMARY KEY (`Id_prod`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`Utente_cf`),
  ADD UNIQUE KEY `Email_u` (`Email_u`),
  ADD KEY `fk_approvato` (`approvato`);

--
-- Indici per le tabelle `utenti_el`
--
ALTER TABLE `utenti_el`
  ADD PRIMARY KEY (`Utente_cf`,`DataEl`),
  ADD KEY `fk_admin_el` (`Admin_cf`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `carrello`
--
ALTER TABLE `carrello`
  ADD CONSTRAINT `fk_PRODOTTO_c` FOREIGN KEY (`Id_prod`) REFERENCES `prodotto` (`Id_prod`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_UTENTE_c` FOREIGN KEY (`Utente_cf`) REFERENCES `utente` (`Utente_cf`) ON DELETE CASCADE;

--
-- Limiti per la tabella `modifica`
--
ALTER TABLE `modifica`
  ADD CONSTRAINT `fk_ADMIN` FOREIGN KEY (`Admin_cf`) REFERENCES `admin` (`Admin_cf`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_PRODOTTO` FOREIGN KEY (`Id_prod`) REFERENCES `prodotto` (`Id_prod`) ON DELETE CASCADE;

--
-- Limiti per la tabella `utente`
--
ALTER TABLE `utente`
  ADD CONSTRAINT `fk_approvato` FOREIGN KEY (`approvato`) REFERENCES `admin` (`Admin_cf`) ON DELETE CASCADE;

--
-- Limiti per la tabella `utenti_el`
--
ALTER TABLE `utenti_el`
  ADD CONSTRAINT `fk_admin_el` FOREIGN KEY (`Admin_cf`) REFERENCES `admin` (`Admin_cf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
