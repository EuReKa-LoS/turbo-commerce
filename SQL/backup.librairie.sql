-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 juil. 2022 à 14:19
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

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

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `idBooks` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titreBooks` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorieBooks` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authorBooks` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgBooks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etatBooks` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reeditionBooks` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prixBooksNeuf` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prixBooksOccasion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`idBooks`, `titreBooks`, `categorieBooks`, `authorBooks`, `imgBooks`, `etatBooks`, `reeditionBooks`, `prixBooksNeuf`, `prixBooksOccasion`) VALUES
('254-84-4632', 'Boondock Saints II: All Saints Day, The', 'Action|Crime|Drama|Thriller', 'Hemizonella (A. Gray) A. Gray', '', '1', '0', '$8.24', '$6.26'),
('415-82-8526', 'Oliver Twist', 'Drama', 'Ribes oxyacanthoides L. ssp. cognatum (Greene) Sin', '', '1', '0', '$6.19', '$8.04'),
('572-42-6885', 'Dune', 'Drama|Fantasy|Sci-Fi', 'Fuscidea cyathoides (Ach.) V. Wirth & Vezda', '', '0', '1', '$10.65', '$5.69'),
('667-07-4677', 'Den, The', 'Horror|Thriller', 'Sarcogyne californica H. Magn.', '', '1', '1', '$29.96', '$7.80'),
('724-73-0599', 'Pulse (Kairo)', 'Horror|Mystery|Thriller', 'Echinochloa phyllopogon (Stapf) Koso-Pol.', '', '0', '0', '$26.45', '$9.96'),
('837-93-3478', 'Insider, The', 'Drama|Thriller', 'Hackelia pinetorum (Greene ex A. Gray) I.M. Johnst', '', '0', '1', '$27.13', '$6.52'),
('147-61-6253', 'Loves of Carmen, The', 'Drama', 'Abronia pogonantha Heimerl', '', '1', '0', '$16.35', '$3.54'),
('214-88-1647', 'Neon Genesis Evangelion: Death & Rebirth (Shin sei', 'Action|Animation|Mystery|Sci-Fi', 'Phacelia strictiflora (Engelm. & A. Gray) A. Gray ', '', '1', '0', '$24.59', '$4.03'),
('409-72-8242', 'Singapore Sling (Singapore sling: O anthropos pou ', 'Crime|Film-Noir|Horror|Romance|Thriller', 'Sedella Britton & Rose', '', '0', '1', '$29.83', '$9.82'),
('608-80-1155', 'Enquiring Minds: The Untold Story of the Man Behin', 'Documentary', 'Sphaeralcea incana Torr. ex A. Gray ssp. incana', '', '1', '1', '$10.37', '$7.99'),
('688-48-7932', 'Johnny Mad Dog', 'Drama|War', 'Ipomopsis longiflora (Torr.) V.E. Grant ssp. longi', '', '0', '0', '$25.36', '$9.48'),
('494-25-4355', 'Bloodsport', 'Action', 'Rubus hanesii L.H. Bailey', '', '1', '0', '$1.52', '$9.88'),
('537-87-9706', 'Story of Me, The (O contador de histórias)', 'Drama', 'Passiflora violacea Loisel. (pro hybr.)', '', '1', '1', '$16.24', '$8.60'),
('581-12-5132', 'Ten, The', 'Comedy', 'Caloplaca boergesenii (Vain.) Zahlbr.', '', '0', '1', '$23.00', '$7.43'),
('119-85-3579', 'Big Blonde, The (Iso vaalee)', 'Comedy|Drama', 'Alsinidendron viscosum (H. Mann) Sherff', '', '0', '1', '$17.80', '$8.15'),
('399-39-9696', 'Moscow on the Hudson', 'Comedy|Drama', 'Eriogonum arborescens Greene', '', '1', '0', '$10.66', '$5.33'),
('221-42-3109', 'End of the Affair, The', 'Drama', 'Eriogonum microthecum Nutt. var. corymbosoides Rev', '', '0', '1', '$14.26', '$2.99'),
('820-87-9575', 'Ride the Pink Horse', 'Drama|Film-Noir|Mystery|Thriller', 'Pityopus californica (Eastw.) Copeland f.', '', '1', '1', '$25.16', '$2.75'),
('340-92-2432', 'Destination Gobi', 'Adventure|Drama|War', 'Matelea balbisii (Decne.) Woodson', '', '1', '0', '$2.67', '$1.27'),
('124-07-7212', 'Big Trouble in Little China', 'Action|Adventure|Comedy|Fantasy', 'Peperomia humilis A. Dietr.', '', '1', '0', '$16.45', '$2.62'),
('878-63-2983', 'Music and Lyrics', 'Comedy|Romance', 'Carex rostrata Stokes', '', '1', '0', '$8.51', '$7.78'),
('678-37-7498', 'Smashing Pumpkins: If All Goes Wrong', 'Documentary|Musical', 'Amsonia ciliata Walter var. texana (A. Gray) J.M. ', '', '1', '0', '$16.88', '$7.88'),
('105-92-5730', 'Boyhood', 'Drama', 'Viburnum australe Morton', '', '1', '0', '$11.38', '$8.12'),
('527-08-1348', 'Cairo Time', 'Drama|Romance', 'Bidens cuneata Sherff', '', '0', '0', '$24.30', '$9.26'),
('437-22-6444', 'Sea Hawk, The', 'Action|Adventure|Romance', 'Thurovia Rose', '', '1', '0', '$21.36', '$1.04'),
('700-63-8701', 'Hatchet', 'Comedy|Horror', 'Najas guadalupensis (Spreng.) Magnus ssp. muensche', '', '1', '1', '$1.39', '$2.38'),
('234-79-9632', 'Let\'s Make Love', 'Comedy|Musical|Romance', 'Themeda quadrivalvis (L.) Kuntze var. quadrivalvis', '', '1', '1', '$24.11', '$4.11'),
('681-91-4856', 'Kiss and Make-Up', 'Comedy|Musical|Romance', 'Hastingsia S. Watson', '', '1', '1', '$24.91', '$5.65'),
('778-63-4845', 'Firestorm', 'Action|Adventure|Thriller', 'Castilleja hispida Benth.', '', '1', '1', '$3.77', '$1.18'),
('597-21-7848', 'Major and the Minor, The', 'Comedy|Romance', 'Perityle villosa (S.F. Blake) Shinners', '', '0', '1', '$24.37', '$9.00'),
('499-32-3309', 'Presto', 'Animation|Children|Comedy|Fantasy', 'Lotus stipularis (Benth.) Greene var. ottleyi Isel', '', '1', '1', '$10.01', '$1.15'),
('814-59-5039', 'Lakeview Terrace', 'Drama|Thriller', 'Lecidea micytho Tuck.', '', '1', '1', '$21.35', '$3.24'),
('805-38-4082', 'Kai Po Che!', 'Drama', 'Teloschistes exilis (Michx.) Vain.', '', '1', '0', '$15.05', '$3.56'),
('223-28-1934', 'Sugar & Spice', 'Comedy', 'Dendranthema (DC.) Des Moulins', '', '0', '1', '$23.33', '$7.26'),
('578-29-9759', 'Ordinary Sinner', 'Drama|Romance', 'Arenaria kingii (S. Watson) M.E. Jones ssp. rosea ', '', '1', '0', '$9.71', '$8.41'),
('386-52-3166', 'Jackie Brown', 'Crime|Drama|Thriller', 'Salix alaxensis (Andersson) Coville var. longistyl', '', '1', '0', '$25.46', '$1.03'),
('889-37-6649', 'Saint Jack', 'Drama', 'Tournefortia argentea L. f.', '', '0', '1', '$2.83', '$2.32'),
('845-44-8536', 'Promised Land (Ziemia Obiecana)', 'Drama', 'Freycinetia arborea Gaudich.', '', '1', '0', '$29.92', '$8.31'),
('423-38-5862', 'This Ain\'t California', 'Documentary', 'Tephrosia hispidula (Michx.) Pers.', '', '1', '1', '$19.08', '$9.55'),
('677-96-0277', '3 Simoa', 'Comedy', 'Acinos arvensis (Lam.) Dandy', '', '1', '0', '$27.55', '$6.01'),
('299-33-3149', 'Batman Unmasked: The Psychology of the Dark Knight', 'Documentary', 'Rhizocarpon cookeanum H. Magn.', '', '0', '1', '$6.75', '$4.71'),
('495-49-7551', 'Bob\'s Birthday', '(no genres listed)', 'Phacelia distans Benth.', '', '0', '1', '$25.93', '$2.20'),
('415-44-8279', 'Force of One, A', 'Action|Crime|Drama|Thriller', 'Salix ×rubra Huds.', '', '0', '1', '$25.01', '$2.90'),
('438-18-4450', 'You and Me (Ty i ya)', 'Drama', 'Lecidea subrhagadiella Lynge', '', '1', '0', '$15.49', '$7.78'),
('661-21-8220', 'Life is to Whistle (Vida es silbar, La)', 'Drama', 'Pycnanthemum setosum Nutt.', '', '0', '0', '$13.31', '$6.64'),
('733-39-2309', 'Those Who Love Me Can Take the Train (Ceux qui m\'a', 'Drama', 'Gongylia muscorum Zschacke', '', '1', '0', '$19.80', '$9.59'),
('429-81-5210', 'Dirty Mary Crazy Larry', 'Action|Crime|Drama|Romance', 'Licaria brittoniana Allen & Gregory', '', '1', '0', '$25.89', '$5.51'),
('393-71-1363', 'Cirque du Freak: The Vampire\'s Assistant', 'Action|Adventure|Comedy|Fantasy|Horror|Thriller', 'Guzmania lingulata (L.) Mez', '', '1', '0', '$20.86', '$1.59'),
('674-50-5615', 'Age of the Earth, The (A Idade da Terra)', '(no genres listed)', 'Maytenus elongata (Urb.) Britton', '', '1', '0', '$20.06', '$6.82'),
('286-90-7895', 'Scared Shrekless', 'Adventure|Animation|Comedy', 'Hasteola suaveolens (L.) Pojark.', '', '0', '1', '$1.40', '$2.16');

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
  `descriptionLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auteurLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etatLivre` tinyint(1) DEFAULT NULL,
  `reEditionLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stockLivre` int(11) DEFAULT NULL,
  `prixNeufLivre` decimal(4,2) DEFAULT NULL,
  `prixOccasionLivre` decimal(4,2) DEFAULT NULL,
  `codeBarreLivre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ISBN` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idLivre`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`idLivre`, `titreLivre`, `categorieLivre`, `descriptionLivre`, `auteurLivre`, `imgLivre`, `etatLivre`, `reEditionLivre`, `stockLivre`, `prixNeufLivre`, `prixOccasionLivre`, `codeBarreLivre`, `ISBN`) VALUES
(52, 'Le cinquième coeurs', 'Policier|Fiction historique', '', 'Dan Simmons', '/img/001.jpg', NULL, NULL, NULL, '40.00', '12.00', NULL, NULL),
(54, 'La quête d\'Ewilan Tome 1', 'Héroïque|Fantasy', NULL, 'Pierre Bottero', './img/62cc2e1f3f17d2.74942207.jpg', NULL, NULL, NULL, '20.00', '8.59', NULL, NULL),
(55, 'La quête d\'Ewilan Tome 2', 'Héroïque|Fantasy', NULL, 'Pierre Bottero', './img/62cc2e7b051996.40409512.jpg', NULL, NULL, NULL, '35.00', '26.72', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
