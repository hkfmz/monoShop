-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 19 mai 2022 à 11:00
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monoshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `motdepasse`) VALUES
(33, 'Fred', 'fred@admin.com', 'monoshop#123');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `description`) VALUES
(1, 'https://www.labonnepointure.fr/cache/images/product/93ff71053706e46587c3364cdd08218f-img_5391.jpg-137595.jpg', 'Basket Adidas', 25, 'Un coloris mode et dynamique pour ces chaussures de sport Homme Adidas Runfalcon F36202 !\r\nCette basket running Adidas rouge combine tissu mesh respirant et matières synthétiques, avec les bandes Adidas blanches sur les côtés.'),
(2, 'https://www.cdiscount.com/pdt2/0/6/0/1/700x700/mp10319060/rw/adidas-tubular-shadow-femmes-baskets-noir-7-uk.jpg', 'Basket adidas noir', 20, 'Présentation produit : adidas Tubular Shadow Femmes Baskets Noir - 7 UKHaut de page ▲\r\nadidas Tubular Shadow AC8333 Baskets Femmes Noir. Dessus / Tige: Mesh et Textile. Fixation: Lacets. Semelle de chaussure: Caoutchouc.\r\nadidas Tubular Shadow AC8333 Baskets Femmes Noir. Dessus / Tige: Mesh et Textile. Fixation: Lacets. Semelle de chaussure: Caoutchouc.'),
(3, 'https://www.chaussures.fr/media/catalog/product/cache/image/650x650//0/0/0000199804908_2__wj.jpg', 'Chaussures adidas Bleu', 40, 'Taille et ajustement\r\nÉpaisseur de la semelle : 3 cm\r\nPoids de chaussure (pointure la plus petite) : 210 g\r\nHauteur totale de la chaussure : 11,5 cm'),
(4, 'https://www.chaussures.fr/media/catalog/product/cache/image/650x650/0/0/0000207043671_01_ksz_1.jpg', 'Chaussures ASICS', 52, 'Taille et ajustement\r\nÉpaisseur de la semelle : 3 cm\r\nType de pied: Neutre\r\nPoids de chaussure (pointure la plus petite) : 244 g\r\nHauteur totale de la chaussure : 10,5 cm'),
(5, 'https://www.chaussures.fr/media/catalog/product/cache/image/650x650/0/0/0000197850167_1__1.jpg', 'Sneakers VANS', 60, 'Taille et ajustement\r\nÉpaisseur de la semelle : 3 cm\r\nTour de mollet en haut (pointure la plus petite): 25,5 cm\r\nTour de cheville (pointure la plus petite): 30,5 cm\r\nPoids de chaussure (pointure la plus petite) : 368 g\r\nHauteur totale de la chaussure : 13 cm'),
(6, 'https://www.chaussures.fr/media/catalog/product/cache/image/650x650/0/0/0000209259209_01_ki.jpg', 'Baskets CONVERSE', 59, 'Taille et ajustement\r\nÉpaisseur de la semelle : 2,5 cm\r\nTour de mollet en haut (pointure la plus petite): 26 cm\r\nTour de cheville (pointure la plus petite): 32 cm\r\nPoids de chaussure (pointure la plus petite) : 382 g\r\nHauteur totale de la chaussure : 15,5 cm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
