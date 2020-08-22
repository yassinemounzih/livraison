-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2020 at 05:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livraison`
--

-- --------------------------------------------------------

--
-- Table structure for table `colis_livre`
--

CREATE TABLE `colis_livre` (
  `id_livre` int(11) NOT NULL,
  `etat_lv` varchar(300) NOT NULL,
  `referance_v` text NOT NULL,
  `full_name_cl` varchar(300) NOT NULL,
  `adress` text NOT NULL,
  `numero_client` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `ouvrable` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `data_liv` datetime NOT NULL,
  `date_livré` datetime DEFAULT NULL,
  `code_bar` text NOT NULL,
  `id_ville` int(11) NOT NULL,
  `id_stock` int(11) DEFAULT NULL,
  `dmd_id` int(11) DEFAULT NULL,
  `user_id_livreur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colis_livre`
--

INSERT INTO `colis_livre` (`id_livre`, `etat_lv`, `referance_v`, `full_name_cl`, `adress`, `numero_client`, `prix`, `ouvrable`, `commentaire`, `data_liv`, `date_livré`, `code_bar`, `id_ville`, `id_stock`, `dmd_id`, `user_id_livreur`) VALUES
(1, 'en attente de validation', 'ta13è-', 's,s ss', 'sjsjis', '0600000000', 11, 'Oui', 'sbsbshsbss', '2020-08-21 11:43:21', NULL, 'AS00000000001', 1, NULL, 0, NULL),
(2, 'en attente de validation', 'ABCDE11', 'sa3id hhhh', 'aaaaaaaaaaaaa', '0600000000', 1111, 'Oui', 'zzzzzz', '2020-08-21 11:47:17', NULL, 'AS00000000002', 2, NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colis_stock`
--

CREATE TABLE `colis_stock` (
  `id_stock` int(11) NOT NULL,
  `reference` text DEFAULT NULL,
  `type_colis_stock` varchar(255) DEFAULT NULL,
  `total_colis` int(11) NOT NULL,
  `colis_sortant` int(11) NOT NULL,
  `colis_reste` int(11) NOT NULL,
  `date_stockage` datetime DEFAULT NULL,
  `psodo` text NOT NULL,
  `dmd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colis_stock`
--

INSERT INTO `colis_stock` (`id_stock`, `reference`, `type_colis_stock`, `total_colis`, `colis_sortant`, `colis_reste`, `date_stockage`, `psodo`, `dmd_id`) VALUES
(8, 'ta1388888', 'tele', 11, 0, 11, '2020-08-22 16:07:08', 'AS00000000008', 10),
(9, '', '', 0, 0, 0, '2020-08-22 16:07:21', 'AS00000000009', 11);

-- --------------------------------------------------------

--
-- Table structure for table `demande`
--

CREATE TABLE `demande` (
  `dmd_id` int(11) NOT NULL,
  `etat_dmd` varchar(255) DEFAULT 'no ramasse',
  `adress_rmg` text NOT NULL,
  `number` int(11) NOT NULL,
  `date_rmg` date NOT NULL,
  `date_now` datetime NOT NULL,
  `dateR_now` datetime DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `type_colis` varchar(255) DEFAULT NULL,
  `reference_demande` varchar(255) DEFAULT NULL,
  `user_id_vend` int(11) NOT NULL,
  `user_id_ram` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`dmd_id`, `etat_dmd`, `adress_rmg`, `number`, `date_rmg`, `date_now`, `dateR_now`, `type`, `type_colis`, `reference_demande`, `user_id_vend`, `user_id_ram`) VALUES
(10, 'no ramassé', 'hkdddkd', 11, '2020-08-26', '2020-08-22 16:07:08', NULL, 'stock', 'tele', 'ta1388888', 6, 10),
(11, 'Nouvelle Demande', '', 0, '0000-00-00', '2020-08-22 16:07:21', NULL, 'stock', '', '', 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history_colis`
--

CREATE TABLE `history_colis` (
  `id_history` int(11) NOT NULL,
  `etat_history` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_history` datetime NOT NULL,
  `id_livre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history_colis`
--

INSERT INTO `history_colis` (`id_history`, `etat_history`, `commentaire`, `date_history`, `id_livre`) VALUES
(1, 'Demande de livraison', 'sbsbshsbss', '2020-08-21 11:43:21', 1),
(2, 'Demande de livraison', 'zzzzzz', '2020-08-21 11:47:17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id_msg` int(11) NOT NULL,
  `id_from` int(11) NOT NULL,
  `id_to` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_msg` datetime NOT NULL,
  `vu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sockets`
--

CREATE TABLE `sockets` (
  `id` int(11) NOT NULL,
  `id_skt` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stock_lines`
--

CREATE TABLE `stock_lines` (
  `id_stc_line` int(11) NOT NULL,
  `reference` varchar(300) NOT NULL,
  `type_colis_stock` varchar(300) NOT NULL,
  `total_colis` int(11) NOT NULL,
  `colis_sortant` int(11) NOT NULL,
  `colis_reste` int(11) NOT NULL,
  `date_Line` int(11) NOT NULL,
  `id_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `user_role` varchar(255) NOT NULL,
  `id_ville` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `reference`, `user_name`, `user_email`, `user_pass`, `user_image`, `active`, `user_role`, `id_ville`) VALUES
(6, 'V000006', 'simo mounzih', 'yassine@gmail.com', 'azerty', 'avatar5.png', 0, 'Vendeur', 0),
(7, 'V000007', 'simo youssef', 'yassine11@gmail.com', 'azerty', 'avatar.png', 0, 'Vendeur', 0),
(8, 'L000008', 'mohamed  simo', 'liv@gmail.com', 'azerty', 'avatar2.png', 0, 'Livreurs', 0),
(9, 'L000009', 'mohamed  simo', 'admin@gmail.com', 'azerty', 'avatar2.png', 1, 'Admins', 0),
(10, 'L000010', 'yassine bakki', 'ram@gmail.com', 'azerty', 'avatar2.png', 1, 'Ramasseurs', 0);

-- --------------------------------------------------------

--
-- Table structure for table `villes`
--

CREATE TABLE `villes` (
  `ville_id` int(11) NOT NULL,
  `ville_name` varchar(255) NOT NULL,
  `livraison_prix` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `villes`
--

INSERT INTO `villes` (`ville_id`, `ville_name`, `livraison_prix`) VALUES
(1, 'Casablanca', '20'),
(2, 'Bouskoura', '30'),
(3, 'Mohammedia', '30'),
(4, 'Rabat', '40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colis_livre`
--
ALTER TABLE `colis_livre`
  ADD PRIMARY KEY (`id_livre`),
  ADD KEY `dmnd_id` (`dmd_id`),
  ADD KEY `id_ville` (`id_ville`),
  ADD KEY `livreur_id` (`user_id_livreur`),
  ADD KEY `id_stock` (`id_stock`);

--
-- Indexes for table `colis_stock`
--
ALTER TABLE `colis_stock`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `dmnd_id` (`dmd_id`);

--
-- Indexes for table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`dmd_id`),
  ADD KEY `user_id` (`user_id_vend`),
  ADD KEY `user_id_ram` (`user_id_ram`);

--
-- Indexes for table `history_colis`
--
ALTER TABLE `history_colis`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_msg`),
  ADD KEY `id_from` (`id_from`),
  ADD KEY `id_to` (`id_to`);

--
-- Indexes for table `sockets`
--
ALTER TABLE `sockets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `stock_lines`
--
ALTER TABLE `stock_lines`
  ADD PRIMARY KEY (`id_stc_line`),
  ADD KEY `id_stock` (`id_stock`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id_ville` (`id_ville`);

--
-- Indexes for table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`ville_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colis_livre`
--
ALTER TABLE `colis_livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `colis_stock`
--
ALTER TABLE `colis_stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `dmd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `history_colis`
--
ALTER TABLE `history_colis`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sockets`
--
ALTER TABLE `sockets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_lines`
--
ALTER TABLE `stock_lines`
  MODIFY `id_stc_line` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `villes`
--
ALTER TABLE `villes`
  MODIFY `ville_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`id_from`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`id_to`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sockets`
--
ALTER TABLE `sockets`
  ADD CONSTRAINT `sockets_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
