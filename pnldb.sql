-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Dic 15, 2024 alle 15:47
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
-- Struttura della tabella `CARRELLO`
--

CREATE TABLE `CARRELLO` (
  `C_quantità` int DEFAULT NULL,
  `Prodotto_id` varchar(255) NOT NULL,
  `U_cf` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `CONTIENE`
--

CREATE TABLE `CONTIENE` (
  `Ordine_id` varchar(255) NOT NULL,
  `Prodotto_id` varchar(255) NOT NULL,
  `Quantità_di_prodotto` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `CORSI`
--

CREATE TABLE `CORSI` (
  `Corsi_Nome` varchar(32) DEFAULT NULL,
  `Corso_Operatore_Nome` varchar(32) DEFAULT NULL,
  `Corso_Operatore_Cognome` varchar(32) DEFAULT NULL,
  `Corso_Data` varchar(32) DEFAULT NULL,
  `Prodotto_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `EFFETTUA`
--

CREATE TABLE `EFFETTUA` (
  `Ordine_id` varchar(255) NOT NULL,
  `U_cf` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `MODIFICA`
--

CREATE TABLE `MODIFICA` (
  `Prodotto_id` varchar(255) NOT NULL,
  `U_cf` varchar(16) NOT NULL,
  `Tipo_modifica` varchar(128) DEFAULT NULL,
  `Data_di_modifica` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `ORDINE`
--

CREATE TABLE `ORDINE` (
  `Ordine_id` varchar(255) NOT NULL,
  `Data_ordine` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `PRODOTTO`
--

CREATE TABLE `PRODOTTO` (
  `Prodotto_id` varchar(255) NOT NULL,
  `Prodotto_prezzo` decimal(7,2) NOT NULL,
  `Prodotto_immagine` varchar(255) DEFAULT NULL,
  `Prodotto_descrizione` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `SALA`
--

CREATE TABLE `SALA` (
  `Sala_Tipo` varchar(32) DEFAULT NULL,
  `Sala_Nome` varchar(32) DEFAULT NULL,
  `Sala_capienza` int DEFAULT NULL,
  `Prodotto_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `SERVIZIO`
--

CREATE TABLE `SERVIZIO` (
  `Servizio_Tipo` varchar(32) DEFAULT NULL,
  `Servizio_Operatore_Nome` varchar(32) DEFAULT NULL,
  `Servizio_Operatore_Cognome` varchar(32) DEFAULT NULL,
  `Prodotto_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `UTENTE`
--

CREATE TABLE `UTENTE` (
  `U_cf` varchar(16) NOT NULL,
  `U_mail` varchar(50) NOT NULL,
  `U_password` varchar(255) NOT NULL,
  `U_nome` varchar(32) NOT NULL,
  `U_cognome` varchar(32) NOT NULL,
  `U_tipo` varchar(32) NOT NULL,
  `U_data_di_nascita` date NOT NULL,
  `U_telefono` varchar(32) DEFAULT NULL,
  `U_stato` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `UTENTE`
--

INSERT INTO `UTENTE` (`U_cf`, `U_mail`, `U_password`, `U_nome`, `U_cognome`, `U_tipo`, `U_data_di_nascita`, `U_telefono`, `U_stato`) VALUES
('123456789agh', 'igmiti@gmail.com', '1234', 'Igor', 'miti ', 'cliente', '1996-12-17', '254269890867', 'approvato'),
('123456789aghjkfr', 'igor_miti@gmail.com', '1234', 'Igor', 'miti ', 'cliente', '1996-12-17', '254269890867', 'approvato'),
('835109kjadbv', 'luca.gotto@gmai.com', '1234', 'luca', 'gotto', 'cliente', '2001-05-24', '319875', 'attivo'),
('aodgiuab246', 'checca.catone@gmail.com', '12345', 'checca ', 'catone', 'cliente', '1978-06-23', '9382592847', 'attivo'),
('cfadmin111111', 'admin@gmail.com', 'root', 'admin1', 'admin1', 'admin', '2000-01-01', '103458y74', 'attivo'),
('cfadmin222222', 'admin2@gmail.com', 'root', 'admin2', 'admin2', 'admin', '2000-01-01', '1262413651', 'attivo'),
('qioyt135316', 'proprietario@gmail.com', '1234', 'proprietario1', 'proprietario', 'proprietario', '2000-03-23', '23415134124', 'attivo');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `CARRELLO`
--
ALTER TABLE `CARRELLO`
  ADD PRIMARY KEY (`Prodotto_id`,`U_cf`),
  ADD KEY `U_cf` (`U_cf`);

--
-- Indici per le tabelle `CONTIENE`
--
ALTER TABLE `CONTIENE`
  ADD PRIMARY KEY (`Ordine_id`,`Prodotto_id`),
  ADD KEY `Prodotto_id` (`Prodotto_id`);

--
-- Indici per le tabelle `CORSI`
--
ALTER TABLE `CORSI`
  ADD PRIMARY KEY (`Prodotto_id`);

--
-- Indici per le tabelle `EFFETTUA`
--
ALTER TABLE `EFFETTUA`
  ADD PRIMARY KEY (`Ordine_id`,`U_cf`),
  ADD KEY `U_cf` (`U_cf`);

--
-- Indici per le tabelle `MODIFICA`
--
ALTER TABLE `MODIFICA`
  ADD PRIMARY KEY (`Prodotto_id`,`U_cf`),
  ADD KEY `U_cf` (`U_cf`);

--
-- Indici per le tabelle `ORDINE`
--
ALTER TABLE `ORDINE`
  ADD PRIMARY KEY (`Ordine_id`);

--
-- Indici per le tabelle `PRODOTTO`
--
ALTER TABLE `PRODOTTO`
  ADD PRIMARY KEY (`Prodotto_id`);

--
-- Indici per le tabelle `SALA`
--
ALTER TABLE `SALA`
  ADD PRIMARY KEY (`Prodotto_id`);

--
-- Indici per le tabelle `SERVIZIO`
--
ALTER TABLE `SERVIZIO`
  ADD PRIMARY KEY (`Prodotto_id`);

--
-- Indici per le tabelle `UTENTE`
--
ALTER TABLE `UTENTE`
  ADD PRIMARY KEY (`U_cf`),
  ADD UNIQUE KEY `U_mail` (`U_mail`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `CARRELLO`
--
ALTER TABLE `CARRELLO`
  ADD CONSTRAINT `carrello_ibfk_1` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`),
  ADD CONSTRAINT `carrello_ibfk_2` FOREIGN KEY (`U_cf`) REFERENCES `UTENTE` (`U_cf`);

--
-- Limiti per la tabella `CONTIENE`
--
ALTER TABLE `CONTIENE`
  ADD CONSTRAINT `contiene_ibfk_1` FOREIGN KEY (`Ordine_id`) REFERENCES `ORDINE` (`Ordine_id`),
  ADD CONSTRAINT `contiene_ibfk_2` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`);

--
-- Limiti per la tabella `CORSI`
--
ALTER TABLE `CORSI`
  ADD CONSTRAINT `corsi_ibfk_1` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`);

--
-- Limiti per la tabella `EFFETTUA`
--
ALTER TABLE `EFFETTUA`
  ADD CONSTRAINT `effettua_ibfk_1` FOREIGN KEY (`Ordine_id`) REFERENCES `ORDINE` (`Ordine_id`),
  ADD CONSTRAINT `effettua_ibfk_2` FOREIGN KEY (`U_cf`) REFERENCES `UTENTE` (`U_cf`);

--
-- Limiti per la tabella `MODIFICA`
--
ALTER TABLE `MODIFICA`
  ADD CONSTRAINT `modifica_ibfk_1` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`),
  ADD CONSTRAINT `modifica_ibfk_2` FOREIGN KEY (`U_cf`) REFERENCES `UTENTE` (`U_cf`);

--
-- Limiti per la tabella `SALA`
--
ALTER TABLE `SALA`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`);

--
-- Limiti per la tabella `SERVIZIO`
--
ALTER TABLE `SERVIZIO`
  ADD CONSTRAINT `servizio_ibfk_1` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;