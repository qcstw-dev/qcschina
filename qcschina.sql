-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 25 Avril 2017 à 10:22
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `qcschina`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `picture` varchar(128) DEFAULT NULL,
  `title` text,
  `url` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `picture`, `title`, `url`) VALUES
(15, '1493089482_15.png', 'Credit card shape stainless steel speed bottle opener #MSOCD', 'https://www.qcsasia.com/product/credit-card-shape-stainless-steel-speed-bottle-opener-msocd');

-- --------------------------------------------------------

--
-- Structure de la table `product_website`
--

CREATE TABLE `product_website` (
  `id_product` int(11) NOT NULL,
  `id_website` int(11) NOT NULL,
  `display` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product_website`
--

INSERT INTO `product_website` (`id_product`, `id_website`, `display`) VALUES
(15, 1, 1),
(15, 2, 1),
(15, 3, 1),
(15, 5, 1),
(15, 8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `website`
--

INSERT INTO `website` (`id`, `name`) VALUES
(1, 'domingpromo.com'),
(2, 'keychainfactory.com'),
(3, 'metalenamel.com'),
(4, 'pvckeychain.com'),
(5, 'karabiner.com'),
(6, 'rushdeliverypromo.com'),
(7, 'bottleopenerchinafactory.com'),
(8, 'quick-up.net'),
(9, 'plasticbaghanger.com'),
(10, 'menuholder.org'),
(11, 'cashtray.org'),
(12, 'chinasouvenirs.com'),
(13, 'coinkeychain.com'),
(14, 'webcam-cover.com'),
(15, 'carkeyspromo.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product_website`
--
ALTER TABLE `product_website`
  ADD PRIMARY KEY (`id_product`,`id_website`);

--
-- Index pour la table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
