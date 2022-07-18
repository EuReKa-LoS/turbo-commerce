-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 18 juil. 2022 à 10:29
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `librairie`
--
CREATE DATABASE IF NOT EXISTS `librairie` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `librairie`;

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1003 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `ip_address`) VALUES
(1002, 'Prénom Admin', 'Nom Admin', 'admin', '$2y$10$4ZuZ.Y2QABDJY3dYUdanhuNWOg4GPAazxyiFhgooshOozeJOSCdGW', 'Administrateur', NULL),
(1001, 'Dany', 'Landrin', 'dany.landrin@gmail.com', '$2y$10$22YRNM2RCwePANEnVJEpu.t.6koeQj3sy4c4N0SIEZzZ.23h.6Lfm', 'Homme', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `idLivre` int(11) NOT NULL AUTO_INCREMENT,
  `titreLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorieLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionLivre` text COLLATE utf8mb4_unicode_ci,
  `auteurLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etatLivre` tinyint(1) DEFAULT NULL,
  `reEditionLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stockLivre` int(11) DEFAULT NULL,
  `prixLivre` decimal(4,2) DEFAULT NULL,
  `codeBarreLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ISBN` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idLivre`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`idLivre`, `titreLivre`, `categorieLivre`, `descriptionLivre`, `auteurLivre`, `imgLivre`, `etatLivre`, `reEditionLivre`, `stockLivre`, `prixLivre`, `codeBarreLivre`, `ISBN`) VALUES
(74, 'Les lettres à Juliette', 'Catégorie', '&quot;Dans la vie comme dans les livres, certaines belles histoires ne sont pas destinées à être vécues.&quot;\r\nNina n&#039;a pas été épargnée par la vie. À 18 ans, c&#039;est une jeune écorchée vive.\r\nSon ceur a perdu toute envie de battre.\r\nPour qui, pour quoi le ferait-il ?\r\nImprégnée de l&#039;histoire de Roméo et Juliette, son couple modèle, elle entreprend, seule, un voyage sur la terre célébrée par Shakespeare.\r\nDe rencontres en découvertes, elle prendra conscience que la vie, si injuste soit-elle, sait aussi apporter des moments de bonheur.\r\nSaura-t-elle les reconnaître ?\r\nCe voyage lui permettra-t-il de trouver enfin un sens à sa vie ?\r\nDans sa nouvelle romance, Ninon Amey aborde, par une plume douce et délicate, des thèmes sensibles tels que la maladie, le deuil, ou encore le suicide.\r\nElle fait voyager son lecteur entre la France et l&#039;Italie. ', 'Ninon Amey', './img/62d5285285a972.13589088.jpg', 0, '0', 0, '0.00', '', ''),
(75, 'Eragon - L&#039;Héritage, Tome 1', 'Fantasy', 'Eragon n&#039;a que quinze ans, mais le destin de l&#039;Empire eEragon n&#039;a que quinze ans, mais le destin de l&#039;Empire est désormais entre ses mains !C&#039;est en poursuivant une biche dans la montagne que le jeune Eragon, quinze ans, tombe sur une magnifique pierre bleue, qui s&#039;avère être... un oeuf de dragon ! Fasciné, il l&#039;emporte à Carvahall, le village où il vit pauvrement avec son oncle et son cousin. Il n&#039;imagine pas alors qu&#039;une dragonne, porteuse d&#039;un héritage ancestral, va en éclore...Très vite, la vie d&#039;Eragon est bouleversée. Contraint de quitter les siens, le jeune homme s&#039;engage dans une quête qui le mènera aux confins de l&#039;empire de l&#039;Alagaësia. Armé de son épée et guidé par les conseils de Brom, le vieux conteur, Eragon va devoir affronter avec sa dragonne les terribles ennemis envoyés par le roi Galbatorix, dont la malveillance démoniaque ne connaît aucune limite.', 'Christopher Paolini', './img/62d52a2dc8f610.36308190.jpg', 0, '0', 50, '4.00', '', ''),
(76, 'Eragon - L&#039;aîné, Tome 2', 'Fantasy', 'Une plongée dans les ténèbres : les certitudes s&#039;évanouissent et les forces du mal règnent.Eragon et sa dragonne, Saphira, sortent à peine de la victoire de Farthen Dûr contre les Urgals, qu&#039;une nouvelle horde de monstres surgit... Ajihad, le chef des Vardens, est tué. Nommée par le Conseil des Anciens, Nasuada, la fille du vieux chef, prend la tête des rebelles. Eragon et Saphira lui prêtent allégeance avant d&#039;entreprendre un long et périlleux voyage vers Ellesméra, le royaume des elfes, où ils doivent suivre leur formation.Là, ils découvrent avec stupeur qu&#039;Arya est la fille de la reine Islanzadì. Cette dernière leur présente en secret un dragon d&#039;or, Glaedr, chevauché par un Dragonnier, Oromis, qui n&#039;est autre que le Sage-en-Deuil, l&#039;Estropié-qui-est-Tout, le personnage qui était apparu à Eragon lorsqu&#039;il délirait, blessé par l&#039;Ombre. Oromis va devenir leur maître. Le jeune Dragonnier commence sa formation. Mais il n&#039;est pas au bout de ses découvertes. Des révélations dérangeantes entament sa confiance. Pendant longtemps, Eragon ne saura qui croire.Or, le danger n&#039;est toujours pas écarté : à Carvahall, Roran, son cousin, a engagé le combat contre les Ra&#039;zacs. Ceux-ci, persuadés qu&#039;il détient l&#039;oeuf qu&#039;Eragon avait trouvé sur la Crête, finissent par enlever sa fiancée. Prêt à tout pour la sauver, Roran comprend cependant qu&#039;il n&#039;est pas de taille à les affronter. Il convainc les villageois de traverser la Crête pour rejoindre les rebelles au Surda, en guerre contre le roi de l&#039;Empire, le cruel Galbatorix.', 'Christopher Paolini', './img/62d52b0b138b83.29228032.jpg', 0, '0', 58, '7.60', '', ''),
(88, 'Livre neuf', 'Livre neuf', '', 'Livre neuf', './img/62d534b8164701.86133938.jpg', 1, '0', 0, '0.00', '', ''),
(89, 'Livre Occaz et reedition', 'Livre Occaz et reedition', '', 'Livre Occaz et reedition', './img/62d534ca7e9010.52503441.jpg', 0, '1', 0, '0.00', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
