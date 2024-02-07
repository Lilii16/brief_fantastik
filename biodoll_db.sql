-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 fév. 2024 à 15:04
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `biodoll_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `capacities`
--

DROP TABLE IF EXISTS `capacities`;
CREATE TABLE IF NOT EXISTS `capacities` (
  `capacity_id` int NOT NULL AUTO_INCREMENT,
  `ml` int DEFAULT NULL,
  PRIMARY KEY (`capacity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `capacities`
--

INSERT INTO `capacities` (`capacity_id`, `ml`) VALUES
(1, 100),
(2, 200),
(3, 150);

-- --------------------------------------------------------

--
-- Structure de la table `items_cards`
--

DROP TABLE IF EXISTS `items_cards`;
CREATE TABLE IF NOT EXISTS `items_cards` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `capacity_id` int DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  KEY `capacity_id` (`capacity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `items_cards`
--

INSERT INTO `items_cards` (`id`, `name`, `price`, `capacity_id`, `description`) VALUES
(1, 'Temptation is never over', '200', 1, 'Immerse in an enchanting blend where delicate notes transport you to a realm where well-being and beauty intertwine. Let the captivating fragrance be enhanced by the soothing touch of turmeric, promising bright and lighter days?a fragrant symphony inspiring a journey towards a healthier you.'),
(2, 'Something lies beneath Water', '280', 1, 'Dive into the refreshing embrace of a unique elixir capturing the essence of hidden treasures beneath the surface. Envelop yourself in the crisp purity, as the natural elements within bestow a touch of wellness, unveiling a world where beauty and health flow harmoniously.'),
(3, 'Indian Dream', '390', 2, 'Embark on a sensory voyage with a fragrance celebrating beauty inspired by ancient wisdom. Let the dreamy fragrance transport you to a realm where the fusion of health and allure creates a captivating symphony for the senses.'),
(4, 'Into the Woods', '150', 3, 'Wander through the majestic allure of a fragrance that encapsulates the purity of nature. Enriched with forest botanicals, this enchanting elixir invites you to embrace the rejuvenating power of the great outdoors.'),
(5, 'Diamonds River', '220', 1, 'Experience the pure brilliance of a fragrance that sparkles with the clarity of pristine waters. This exquisite blend, inspired by the cascading brilliance of a river, encapsulates the essence of both purity and health.'),
(6, 'A whimsical Night', '350', 1, 'Surrender to the enchantment of a fragrance where the night sky meets a melody of botanical wonders. This captivating fragrance, inspired by the magic of moonlit dreams, whispers tales of beauty and well-being. Immerse yourself in the whimsical allure that invites you to embrace a night of rejuvenation and timeless elegance.');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE IF NOT EXISTS `pictures` (
  `picture_id` int NOT NULL AUTO_INCREMENT,
  `item_id` int DEFAULT NULL,
  `picture_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`picture_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pictures`
--

INSERT INTO `pictures` (`picture_id`, `item_id`, `picture_path`) VALUES
(1, 1, 'assets/pictures/cards1.png'),
(2, 2, 'assets/pictures/cards2.png'),
(3, 3, 'assets/pictures/cards3.png'),
(4, 4, 'assets/pictures/cards4.png'),
(5, 5, 'assets/pictures/cards5.png'),
(6, 6, 'assets/pictures/cards6.png');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `items_cards`
--
ALTER TABLE `items_cards`
  ADD CONSTRAINT `items_cards_ibfk_1` FOREIGN KEY (`capacity_id`) REFERENCES `capacities` (`capacity_id`);

--
-- Contraintes pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items_cards` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
