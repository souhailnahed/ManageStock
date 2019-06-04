-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 04 juin 2019 à 13:25
-- Version du serveur :  5.7.24
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `manage_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `CIN` varchar(30) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `tel` int(30) NOT NULL,
  PRIMARY KEY (`CIN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`CIN`, `Nom`, `tel`) VALUES
('BJ239487', 'sdf', 978876),
('bg2333s', 'qsd', 2323),
('BJ1223', 'souhail', 238756238),
('123123', 'souhsssail', 611),
('AZE', 'AZE', 611),
('AZEAZE', 'AZEAZE', 611),
('said', 'elaghmiri', 612344331);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL,
  `date_c` date NOT NULL,
  `prix_c` int(11) NOT NULL,
  `qte_c` int(11) NOT NULL,
  `CIN` varchar(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `fk_id_cin` (`CIN`),
  KEY `fk_produit_id` (`id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `date_c`, `prix_c`, `qte_c`, `CIN`, `id_produit`) VALUES
(0, '2019-05-13', 897, 3, 'BJ239487', 2);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_prod` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` tinyblob,
  PRIMARY KEY (`id_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `nom`, `prix`, `photo`) VALUES
(0, 'logout', 56, 0x89504e470d0a1a0a0000000d49484452000000320000003208060000001e3f88b10000000467414d410000b18f0bfc61050000097d494441546843ed99796c93f719c7e90a89e3901042487327b65f1f8973e038b19dc43949420e27be62e720692e08f1559a4aa5da34a92b7f140662ebbaaaead402dda69512606840380b4c42dd566d4c1d52c7b6eed0d4951e680375acaba0f0ddf37bdfd8b1430cd81c435522fd14c77e6dff3ebfe7f97e9fe779b360c1fccf57f00472cd83499cd367e06cde51b9ddb3496e73efe0acae37e456f78f39abe7fb728bfb69ceecea9075b9b98711ff1185d9bd92b37a7f20b779fe400b4ae70494dd732c7a5ee1580fce),
(3, 'logout', 98, NULL),
(4, 'EXIT', 987, NULL),
(2, 'logout', 8, NULL),
(1, 'EXIT', 97, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`username`, `password`, `first_name`, `last_name`, `e_mail`, `type`) VALUES
('amir', 'saosa', '093093', 'qsdqsd', 'qsdqsdd', 'azeazee'),
('sasa', 'saosa', '093093', 'qsdqsd', 'qsdqsdd', 'azeazee'),
('BJ1223', 'souhail', '0238756238', 'dfqsd', 'qsd', 'qsd'),
('BJ122aze3', 'souhail', '0238756238', 'dfqsd', 'qsd', 'qsd'),
('x', 'x', 'x', 'x', 'x', 'user'),
('BJ1ss22aze3', 'souhail', '0238756238', 'dfqsd', 'qsd', ''),
('BJ1ssdds22aze3', 'souhail', '0238756238', 'dfqsd', 'qsd', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
