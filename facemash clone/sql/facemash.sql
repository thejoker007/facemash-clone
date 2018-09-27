-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 27 Septembre 2018 à 23:03
-- Version du serveur: 5.7.12
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `facemash`
--

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL DEFAULT '2000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `token`, `name`, `path`, `score`) VALUES
(1, 'c9b323416783472e24b81df2d6bbc951', 'ashley', 'photos/ashley.jpeg', 2000),
(2, 'a26f2b680a729cca79378bf1b95b007c', 'brenda', 'photos/brenda.jpg', 2000),
(3, '2594e600cafa7005e54d92dc31824610', 'emma', 'photos/emma.jpg', 2000),
(4, 'd3b8963ce6130fcec5ce95ae28045d47', 'stacy', 'photos/stacy.jpg', 2000),
(5, '797ad30ba232a45a9bcb037073302001', 'whitney', 'photos/whitney.jpg', 2000);
