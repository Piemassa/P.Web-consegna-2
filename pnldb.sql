-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Dic 16, 2024 alle 23:20
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
-- Struttura della tabella `CORSO`
--

CREATE TABLE `CORSO` (
  `Prodotto_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Corso_Nome` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Corso_Operatore_Nome` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Corso_Operatore_Cognome` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Corso_Data` varchar(32) DEFAULT NULL,
  `N_Lez` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `CORSO`
--

INSERT INTO `CORSO` (`Prodotto_id`, `Corso_Nome`, `Corso_Operatore_Nome`, `Corso_Operatore_Cognome`, `Corso_Data`, `N_Lez`) VALUES
('C1', 'Corso di Canto (15 lezioni)', 'Claudio', 'Forte', '', 15),
('C2', 'Corso di Canto (30 lezioni)', 'Claudio', 'Forte', '', 30),
('C3', 'Corso di Mix&Master (15 lezioni)', 'Giancarlo', 'Piro', '', 15),
('C4', 'Corso di Mix&Master (30 lezioni)', 'Giancarlo', 'Piro', '', 30),
('Cm1', 'Beat Making', 'Giorgio', 'Parodi', '2025-01-01', 1),
('Cm2', 'Recording Vocals', 'Arianna', 'Vandelli', '2025-01-14', 1),
('Cm3', 'Soundtrack Crafting', 'Ginevra', 'Morselli', '2025-02-14', 1),
('Cm4', 'Loop & Groove', 'Daniele', 'Righi', '2025-02-26', 1);

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

--
-- Dump dei dati per la tabella `PRODOTTO`
--

INSERT INTO `PRODOTTO` (`Prodotto_id`, `Prodotto_prezzo`, `Prodotto_immagine`, `Prodotto_descrizione`) VALUES
('C1', 600.00, 'https://file.cure-naturali.it/site/image/hotspot_article_first/24008.jpg', '15 lezioni da un\'ora personalizzate e mirate ai tuoi obbiettivi nel canto'),
('C2', 900.00, 'https://file.cure-naturali.it/site/image/hotspot_article_first/24008.jpg', '30 lezioni da un\'ora personalizzate e mirate ai tuoi obbiettivi nel canto'),
('C3', 850.00, 'https://www.artandmusicstudios.com/wp-content/uploads/2019/12/Mix-Master.png', '15 lezioni personalizzate da un\'ora sull\'arte del Mix&master'),
('C4', 1360.00, 'https://www.artandmusicstudios.com/wp-content/uploads/2019/12/Mix-Master.png', '30 lezioni personalizzare da un\'ora e sull\'arte del Mix&master'),
('Cm1', 150.00, 'https://audient.com/wp-content/uploads/2021/07/image1.jpg', 'Le basi del beat making per i generi hip-hop, trap e EDM.'),
('Cm2', 150.00, 'https://media.istockphoto.com/id/635926346/it/foto/apparecchiature-di-registrazione-in-studio.jpg?s=612x612&w=0&k=20&c=DeBtSR6d2i3djlJOLgG-PqzGpikFNm4PD9tlzDJo1MY=', 'Diverse tecniche per la registrazione delle voci in studio.'),
('Cm3', 150.00, 'https://www.cinematographe.it/wp-content/uploads/2015/01/Film-Music.jpg', 'Come comporre colonne sonore per il cinema. Rapporto tra emozione, immagine e suono.'),
('Cm4', 150.00, 'https://unison.audio/wp-content/uploads/Drum-Loops-1.png.webp', 'Come creare brani in tempo reale con loop station.'),
('S1', 60.00, 'https://www.musiclabstudio.com/wp-content/uploads/2019/03/costo-sala-prove-1024x768.jpg', 'Questa sala offre un ambiente accogliente e versatile, perfetto per band e musicisti. Dotata di una batteria acustica di qualità e amplificatori per chitarre, è ideale per registrazioni dal vivo.'),
('S2', 60.00, 'https://www.sammusicstudios.it/images/Sala_Vintage_Sala_Prove.jpg', 'Una sala spaziosa e moderna pensata per band e musicisti. Offre uno spazio ideale per sessioni di registrazione di gruppo, con un mix tra comfort e funzionalità tecnica.'),
('SV1', 60.00, 'https://static.wixstatic.com/media/11062b_2996c6170ffb4b1d929439162f981ce3~mv2.jpg', 'Una volta acquistato il numero di Mix che desideri, ci metteremo in contatto con te per realizzare il tuo progetto');

-- --------------------------------------------------------

--
-- Struttura della tabella `SALA`
--

CREATE TABLE `SALA` (
  `Sala_capienza` int DEFAULT NULL,
  `Prodotto_id` varchar(255) NOT NULL,
  `Sala_Tipo` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Sala_Nome` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `SALA`
--

INSERT INTO `SALA` (`Sala_capienza`, `Prodotto_id`, `Sala_Tipo`, `Sala_Nome`) VALUES
(5, 'S1', 'Sala registrazione', 'Lumen'),
(7, 'S2', 'Sala registrazione', 'Arcadia');

-- --------------------------------------------------------

--
-- Struttura della tabella `SERVIZIO`
--

CREATE TABLE `SERVIZIO` (
  `Servizio_Operatore_Cognome` varchar(32) DEFAULT NULL,
  `Prodotto_id` varchar(255) NOT NULL,
  `Servizio_Tipo` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Servizio_Operatore_Nome` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `SERVIZIO`
--

INSERT INTO `SERVIZIO` (`Servizio_Operatore_Cognome`, `Prodotto_id`, `Servizio_Tipo`, `Servizio_Operatore_Nome`) VALUES
('Lucarini', 'SV1', 'Mix', 'Pietro');

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
('36bcfuianq8', 'io@gmail.com', '1234', 'io', 'mitico', 'cliente', '0052-04-04', '456785679', 'attivo'),
('3y98241jhhjsja', 'igor.miti@gmail.com', '1234', 'igor', 'miti', 'cliente', '0057-04-12', '4567890', 'attesa'),
('53278hdsh', 'prop@gmail.com', 'mio', 'proprietario1', 'P1', 'proprietario', '0782-05-04', '3456788', 'attivo'),
('dgdwjkd787289', 'admin2@gmail.com', 'root', 'admin2', 'A2', 'admin', '0723-06-30', '567890878', 'attivo'),
('e5678nsjj', 'norarica@gmail.com', '12345', 'nora', 'rica', 'cliente', '0008-07-25', '5467890', 'attivo'),
('sddfhjkjk', 'admin@gmail.com', 'root', 'admin1', 'A1', 'admin', '0095-04-23', '3886945278', 'attivo'),
('wfkjnjnoicf', 'm.rossi@gmail.com', '123', 'Mario', 'Rossi', 'cliente', '0045-03-12', '3456789', 'attesa');

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
-- Indici per le tabelle `CORSO`
--
ALTER TABLE `CORSO`
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
  ADD CONSTRAINT `carrello_ibfk_1` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carrello_ibfk_2` FOREIGN KEY (`U_cf`) REFERENCES `UTENTE` (`U_cf`) ON DELETE CASCADE;

--
-- Limiti per la tabella `CONTIENE`
--
ALTER TABLE `CONTIENE`
  ADD CONSTRAINT `contiene_ibfk_1` FOREIGN KEY (`Ordine_id`) REFERENCES `ORDINE` (`Ordine_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contiene_ibfk_2` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`);

--
-- Limiti per la tabella `CORSO`
--
ALTER TABLE `CORSO`
  ADD CONSTRAINT `corso_ibfk_1` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `EFFETTUA`
--
ALTER TABLE `EFFETTUA`
  ADD CONSTRAINT `effettua_ibfk_1` FOREIGN KEY (`Ordine_id`) REFERENCES `ORDINE` (`Ordine_id`) ON DELETE CASCADE,
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
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `SERVIZIO`
--
ALTER TABLE `SERVIZIO`
  ADD CONSTRAINT `servizio_ibfk_1` FOREIGN KEY (`Prodotto_id`) REFERENCES `PRODOTTO` (`Prodotto_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
