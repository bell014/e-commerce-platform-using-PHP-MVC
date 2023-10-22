-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 09:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nom_admin` varchar(15) NOT NULL,
  `mdp_admin` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `mdp_admin`) VALUES
(2, 'neder', '12345'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(5) NOT NULL,
  `nom_client` varchar(15) NOT NULL,
  `prenom_client` varchar(15) NOT NULL,
  `num` int(8) NOT NULL,
  `adr` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mdp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id_client`, `nom_client`, `prenom_client`, `num`, `adr`, `email`, `mdp`) VALUES
(8, 'neder', 'tarroui', 123456789, 'vndsvnqdk', 'nader.taroui@esen.tn', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'jouini', 'emna', 53375128, 'megrine', 'emna.jouini@esen.tn', '90b122ca85778eedaf8cc02335df627c'),
(14, 'sarra', 'ben amor ', 50772168, '9odem el fac ', 'sarra.benamor@esen.tn', 'b5654f3e5a16b9bb1f53b3942f076b70');

-- --------------------------------------------------------

--
-- Table structure for table `commende`
--

CREATE TABLE `commende` (
  `id_co` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `adr` varchar(20) NOT NULL,
  `état` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livreur`
--

CREATE TABLE `livreur` (
  `id_livreur` int(11) NOT NULL,
  `nom_l` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id_p` int(11) NOT NULL,
  `nom_p` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_p` int(11) NOT NULL,
  `nom_p` varchar(15) NOT NULL,
  `description` varchar(50) NOT NULL,
  `Quantité` int(11) NOT NULL,
  `prix` varchar(8) NOT NULL,
  `img` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_p`, `nom_p`, `description`, `Quantité`, `prix`, `img`) VALUES
(1, 'PS4', 'playstation 4 slim', 10, '1200DT', './photos/ps4.jpeg'),
(2, 'xbox one', 'xbox one', 11, '1200DT', './photos/xbox one.jpeg'),
(3, 'FIFA23', 'FIFA 23', 60, '200DT', './photos/fifa-23-pc-jeu-origin.jpg'),
(6, 'PS5', 'playstation 5', 9, '2600DT', './photos/ps5.webp'),
(11, 'gggg', 'ggg', 2, '120', 'uuuu'),
(12, 'uuu', 'uuuu', 22, '130', 'kkk'),
(23, 'ffffffffff', 'fffffff', 1, '1', 'ggghg'),
(60, 'dfh', 'fghgf', 5, '2600DT', '../photos/xbox one.jpeg'),
(61, 'ggnhnn', 'g,h,gh', 10, '100', './photos/xbox one.jpeg'),
(63, 'tttttt', 'ttttt', 1, '100', 'jjjj'),
(64, '', '', 0, '120', 'bxbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `commende`
--
ALTER TABLE `commende`
  ADD PRIMARY KEY (`id_co`),
  ADD KEY `id_c` (`id_client`),
  ADD KEY `id_p` (`id_p`);

--
-- Indexes for table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`id_livreur`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_p`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `commende`
--
ALTER TABLE `commende`
  MODIFY `id_co` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `id_livreur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commende`
--
ALTER TABLE `commende`
  ADD CONSTRAINT `id_c` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_p` FOREIGN KEY (`id_p`) REFERENCES `produit` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
