-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2025 at 11:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorieplat`
--

CREATE TABLE `categorieplat` (
  `idCategorie` varchar(255) NOT NULL,
  `nomCategorie` varchar(255) NOT NULL,
  `dateCreateCategorie` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorieplat`
--

INSERT INTO `categorieplat` (`idCategorie`, `nomCategorie`, `dateCreateCategorie`) VALUES
('CAT00001', 'Entrées', '2025-08-28 21:56:58'),
('CAT00002', 'Plats Principaux', '2025-08-28 21:57:46'),
('CAT00003', 'Desserts', '2025-08-28 21:58:33'),
('CAT00004', 'Boissons', '2025-08-29 12:27:04'),
('CAT00005', 'Glaces', '2025-08-29 12:28:22'),
('CAT00006', 'Menus Complets', '2025-08-29 13:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `clients_fideles`
--

CREATE TABLE `clients_fideles` (
  `idClientFidele` varchar(255) NOT NULL,
  `nomClientFidele` varchar(255) NOT NULL,
  `telephoneClientFidele` varchar(255) DEFAULT NULL,
  `nbrePointsClient` double DEFAULT NULL,
  `dateCreateClientFidele` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `idCommande` varchar(255) NOT NULL,
  `numeroTable` varchar(255) NOT NULL,
  `listeDesPlats` text NOT NULL,
  `dateCreateCommande` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE `facture` (
  `idFacture` varchar(255) NOT NULL,
  `idCommande` varchar(255) NOT NULL,
  `montantFacture` double NOT NULL,
  `dateCreateFacture` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `idIngredient` varchar(255) NOT NULL,
  `nomIngredient` varchar(255) NOT NULL,
  `qteEnStock` double DEFAULT NULL,
  `prixAchat` double NOT NULL,
  `dateCreateIngredient` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`idIngredient`, `nomIngredient`, `qteEnStock`, `prixAchat`, `dateCreateIngredient`) VALUES
('IGT00001', 'Viande de boeuf', 15, 52500, '2025-08-29 13:02:04'),
('IGT00002', 'Poulet', 5, 25000, '2025-08-29 13:03:18'),
('IGT00003', 'Tomate', 500, 8000, '2025-08-29 13:03:47'),
('IGT00004', 'Huile raffinée', 10, 15000, '2025-08-29 13:04:58'),
('IGT00005', 'Oignons', 5, 5000, '2025-08-29 13:05:48'),
('IGT00006', 'Ails', 5, 7500, '2025-08-29 13:06:55'),
('IGT00007', 'Condiments verts(Poiro, celeris, persils, basilic, poivrons, haricots verts, carottes)', 5, 3000, '2025-08-29 13:13:53'),
('IGT00008', 'Riz', 25, 25000, '2025-08-29 14:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `plat`
--

CREATE TABLE `plat` (
  `idPlat` varchar(255) NOT NULL,
  `nomPlat` varchar(255) NOT NULL,
  `descriptionPlat` text DEFAULT NULL,
  `prixRevientPlat` double DEFAULT NULL,
  `prixVentePlat` double DEFAULT NULL,
  `idCategorie` varchar(255) NOT NULL,
  `dateCreatePlat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plat`
--

INSERT INTO `plat` (`idPlat`, `nomPlat`, `descriptionPlat`, `prixRevientPlat`, `prixVentePlat`, `idCategorie`, `dateCreatePlat`) VALUES
('PLT00001', 'Viande sautee', 'viande sautee aux legumes frais accompagnees de pommes frites.', 2500, 4000, 'CAT00002', '2025-08-29 17:37:25'),
('PLT00002', 'Salade Fraiche', 'Salade Fraiche accompagne de sa saute vinégrete.', 1000, 1500, 'CAT00001', '2025-08-29 18:52:31'),
('PLT00003', 'Riz cantonne', 'Riz cantonne a la viande fumee et aux epices brutes.', 2500, 3500, 'CAT00002', '2025-08-29 18:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `plat_ingredient`
--

CREATE TABLE `plat_ingredient` (
  `idPlat` varchar(255) NOT NULL,
  `idIngredient` varchar(255) NOT NULL,
  `qteNecessaire` varchar(255) DEFAULT NULL,
  `dateCreatePlatIngredient` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plat_ingredient`
--

INSERT INTO `plat_ingredient` (`idPlat`, `idIngredient`, `qteNecessaire`, `dateCreatePlatIngredient`) VALUES
('PLT00001', 'IGT00001', '0.3', '2025-08-29 17:37:25'),
('PLT00002', 'IGT00007', '0.5', '2025-08-29 18:52:31'),
('PLT00003', 'IGT00008', '00.5', '2025-08-29 18:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `numeroTable` varchar(255) NOT NULL,
  `nbrePlaces` int(11) DEFAULT NULL,
  `dateCreateTable` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorieplat`
--
ALTER TABLE `categorieplat`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Indexes for table `clients_fideles`
--
ALTER TABLE `clients_fideles`
  ADD PRIMARY KEY (`idClientFidele`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `numeroTable` (`numeroTable`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`idFacture`),
  ADD KEY `idCommande` (`idCommande`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`idIngredient`);

--
-- Indexes for table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`idPlat`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Indexes for table `plat_ingredient`
--
ALTER TABLE `plat_ingredient`
  ADD PRIMARY KEY (`idPlat`,`idIngredient`),
  ADD KEY `idPlat` (`idPlat`,`idIngredient`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`numeroTable`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
