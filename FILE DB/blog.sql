-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ott 02, 2022 alle 19:10
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `articolo`
--

CREATE TABLE `articolo` (
  `codiceArticolo` int(11) NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `sottoTitolo` varchar(500) NOT NULL,
  `testo` text NOT NULL,
  `dataStesura` date NOT NULL,
  `pubblicato` tinyint(1) DEFAULT 1,
  `genere` enum('natura','sport','tecnologia') DEFAULT NULL,
  `autore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `articolo`
--

INSERT INTO `articolo` (`codiceArticolo`, `titolo`, `sottoTitolo`, `testo`, `dataStesura`, `pubblicato`, `genere`, `autore`) VALUES
(1, 'Tetepare: la biodiversità tra terra e oceano che necessita protezione', 'L’Isola di Tetepare si trova nel Triangolo dei Coralli, un’area ad altissima biodiversità che ospita molte specie endemiche e in via di estinzione. Ecco perché è importante proteggerla.', 'L\'isola di Tetepare, nella provincia occidentale delle Isole Salomone, comprende diverse barriere coralline e oltre 12.000 ettari di foreste pluviali e mangrovie. Si tratta di una delle poche isole tropicali non deforestate al mondo e casa di una varietà incredibile di specie terrestri e marine. La foresta pluviale di Tetepare ospita almeno settantatré specie di uccelli, ventiquattro di rettili, quattro di rane e tredici di mammiferi, tra cui alcune specie endemiche dell’isola. Tuttavia, è probabile che vi siano ancora specie da scoprire, se si pensa che nel 2013 gli scienziati hanno identificato un nuovo genere di pesci nei fiumi d\'acqua dolce all\'interno delle foreste dell\'isola.\n\nNel 2006, gli scienziati hanno identificato circa 33 taxa di farfalla e una recente indagine scientifica sui pipistrelli ne ha indicato la presenza di diciotto diverse specie. “Essendo la più grande isola disabitata del Pacifico meridionale, Tetepare protegge una serie di ecosistemi, dalla foresta pluviale collinare alla barriera corallina. Si tratta di ecosistemi che sono stati ampiamente distrutti in altre isole. Tetepare è speciale anche perché ci sono poche specie invasive”, chiarisce John Read, ricercatore di ecologia presso l’Università di Adelaide, in Australia, che ha effettuato molti studi sull’isola.', '2022-02-16', 1, 'natura', 1),
(3, 'Come contrastare la pesca illegale per un mare più sostenibile e sicuro', 'La pesca illegale rappresenta una minaccia per il sistema economico e per la biodiversità. Le aree marine protette possono rappresentare uno dei tasselli di tutela per contrastare la pesca illegale e proteggere i nostri mari.', 'La pesca illegale rappresenta una tra le più gravi minacce per la pesca sostenibile ed è fortemente distruttiva, soprattutto se esercitata in aree vietate o su ecosistemi di particolare pregio ambientale come aree costiere, praterie di fanerogame, foreste di macroalghe, o quando esercitata in aree prioritarie per gli stock ittici, come quelle di primo accrescimento (nursery) e riproduzione (spawning grounds). <br>La pesca illegale\nLa pesca illegale comprende sia le attività esercitate senza licenza che tutte quelle attività che violano le norme nazionali e internazionali. Essa comporta importanti conseguenze economiche ed ecologiche: depauperamento degli stock ittici, impatto sui fondali, sugli habitat e su specie che non sono diretto bersaglio delle attività di pesca, distorsioni della concorrenza, indebolimento dei pescatori onesti e delle comunità costiere.\n\nCome chiarisce la FAO, la pesca illegale, non dichiarata e non regolamentata (INN) è un termine ampio che comprende un\'ampia varietà di attività di pesca. La pesca INN si trova in tutti i tipi e dimensioni di pesca; si verifica sia in alto mare che in aree di competenza nazionale. Riguarda tutti gli aspetti e le fasi della cattura e dell\'utilizzo del pesce e talvolta può essere associata alla criminalità organizzata. I pescherecci che praticano la pesca illegale catturano, tra le altre, specie di interesse conservazionistico come cetacei, tartarughe e squali.\n\nIl progetto Life DELFI finanziato dalla Commissione Europea, coordinato da IRBIM CNR, e nel cui partenariato si annoverano quattro Aree Marine Protette, tra cui l’A.M.P. “Isole Egadi”, ha documentato nel 2020 la cattura di due capodogli impigliati in alcune reti alle Eolie. “Ma sul pesce spada e altre specie, così importanti dal punto di vista commerciale, le attività illecite non si limitano alla pesca illegale; le frodi in commercio sono talvolta più dannose e stimolano a loro volta attività di pesca illegali”, spiega Gian Marco Luna, direttore dell’Istituto per le risorse biologiche e le biotecnologie marine del CNR (IRBIM CNR).', '2021-10-15', 1, 'natura', 1),
(4, 'Olimpiadi Pechino, Lollobrigida bronzo nella mass start!', 'Seconda medaglia per la pattinatrice della Capitale, dopo l\'argento nei 3000: oro alla dominatrice olandese Schouten. Niente da fare per l\'azzurro nella finale maschile', 'Alfa e omega. Argento al principio, bronzo alla fine. C’è il marchio indelebile di Francesca Lollobrigida sull’ovale olimpico di Pechino. La trentunenne romana è splendida terza nella gara con partenza in linea, arrendendosi solo all’olandese Irene Schouten, al terzo oro in questi Giochi, e alla canadese Ivanie Blondin. La diciassettesima medaglia azzurra in terra cinese è la terza del pattinaggio velocità su pista lunga: una conquistata da Davide Ghiotto, due dalla Lollobrigida, che domani chiuderà la sua rassegna dei sogni sventolando il tricolore nella cerimonia di chiusura.', '2022-02-19', 0, 'sport', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `fotografia`
--

CREATE TABLE `fotografia` (
  `idFoto` int(11) NOT NULL,
  `nomeFile` varchar(100) NOT NULL,
  `descrizione` varchar(100) DEFAULT NULL,
  `fotografo` varchar(100) DEFAULT NULL,
  `articolo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `fotografia`
--

INSERT INTO `fotografia` (`idFoto`, `nomeFile`, `descrizione`, `fotografo`, `articolo`) VALUES
(1, 'tartarughe.jpg', NULL, 'Andrea Foto', 1),
(2, 'barrieraCorallina.jpg', NULL, 'Andrea Foto', 1),
(4, 'peschereccio.jpg', NULL, 'Carla Foto', 3),
(5, 'isola.jpg', NULL, 'Andrea Foto', 3),
(6, 'lollobrigida.jpg', NULL, 'Simone Binachi', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `giornalista`
--

CREATE TABLE `giornalista` (
  `matricola` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `dataNascita` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `giornalista`
--

INSERT INTO `giornalista` (`matricola`, `nome`, `cognome`, `mail`, `dataNascita`) VALUES
(1, 'Sara', 'Rossi', 'sara.rossi@mail.com', '1989-02-17'),
(2, 'Mario', 'Blu', 'mario.blu@mail.com', '1970-02-05');

-- --------------------------------------------------------

--
-- Struttura della tabella `possedere`
--

CREATE TABLE `possedere` (
  `tag` varchar(20) NOT NULL,
  `articolo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `possedere`
--

INSERT INTO `possedere` (`tag`, `articolo`) VALUES
('ambiente', 1),
('ambienteMarino', 1),
('areeProtette', 1),
('olimpiadi', 4),
('sci', 4),
('tartarughe', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `tag`
--

CREATE TABLE `tag` (
  `nomeTag` varchar(20) NOT NULL,
  `descrizione` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `tag`
--

INSERT INTO `tag` (`nomeTag`, `descrizione`) VALUES
('ambiente', NULL),
('ambienteMarino', NULL),
('areeProtette', NULL),
('nere', NULL),
('olimpiadi', NULL),
('sci', NULL),
('tartarughe', NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articolo`
--
ALTER TABLE `articolo`
  ADD PRIMARY KEY (`codiceArticolo`),
  ADD KEY `autore` (`autore`);

--
-- Indici per le tabelle `fotografia`
--
ALTER TABLE `fotografia`
  ADD PRIMARY KEY (`idFoto`),
  ADD KEY `articolo` (`articolo`);

--
-- Indici per le tabelle `giornalista`
--
ALTER TABLE `giornalista`
  ADD PRIMARY KEY (`matricola`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indici per le tabelle `possedere`
--
ALTER TABLE `possedere`
  ADD PRIMARY KEY (`tag`,`articolo`),
  ADD KEY `tag` (`tag`),
  ADD KEY `articolo` (`articolo`);

--
-- Indici per le tabelle `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`nomeTag`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articolo`
--
ALTER TABLE `articolo`
  MODIFY `codiceArticolo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `fotografia`
--
ALTER TABLE `fotografia`
  MODIFY `idFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `giornalista`
--
ALTER TABLE `giornalista`
  MODIFY `matricola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `articolo`
--
ALTER TABLE `articolo`
  ADD CONSTRAINT `articolo_ibfk_1` FOREIGN KEY (`autore`) REFERENCES `giornalista` (`matricola`);

--
-- Limiti per la tabella `fotografia`
--
ALTER TABLE `fotografia`
  ADD CONSTRAINT `fotografia_ibfk_1` FOREIGN KEY (`articolo`) REFERENCES `articolo` (`codiceArticolo`);

--
-- Limiti per la tabella `possedere`
--
ALTER TABLE `possedere`
  ADD CONSTRAINT `possedere_ibfk_1` FOREIGN KEY (`tag`) REFERENCES `tag` (`nomeTag`),
  ADD CONSTRAINT `possedere_ibfk_2` FOREIGN KEY (`articolo`) REFERENCES `articolo` (`codiceArticolo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
