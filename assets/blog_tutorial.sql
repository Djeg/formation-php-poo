-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : sam. 12 nov. 2022 à 15:28
-- Version du serveur : 8.0.28
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog_tutorial`
--
CREATE DATABASE IF NOT EXISTS `blog_tutorial` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog_tutorial`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `shortDescription` text NOT NULL,
  `isOnline` tinyint(1) NOT NULL DEFAULT '1',
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `author` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `description`, `content`, `shortDescription`, `isOnline`, `createdAt`, `updatedAt`, `author`) VALUES
(1, 'Mon voyage au japon', 'mon-voyage-au-japon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Condimentum lacinia quis vel eros donec. Ac tortor dignissim convallis aenean et tortor. Proin libero nunc consequat interdum varius sit amet. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Sodales ut eu sem integer vitae justo. Enim ut tellus elementum sagittis vitae et leo duis ut. Gravida rutrum quisque non tellus. Id cursus metus aliquam eleifend mi in nulla posuere.', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Condimentum lacinia quis vel eros donec. Ac tortor dignissim convallis aenean et tortor. Proin libero nunc consequat interdum varius sit amet. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Sodales ut eu sem integer vitae justo. Enim ut tellus elementum sagittis vitae et leo duis ut. Gravida rutrum quisque non tellus. Id cursus metus aliquam eleifend mi in nulla posuere. Lorem mollis aliquam ut porttitor leo a diam sollicitudin. Enim ut tellus elementum sagittis vitae. Ac turpis egestas integer eget aliquet nibh praesent. Lacus laoreet non curabitur gravida arcu ac tortor dignissim. In tellus integer feugiat scelerisque varius. Neque volutpat ac tincidunt vitae. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Eget est lorem ipsum dolor sit amet consectetur adipiscing.\r\n</p>\r\n<p>\r\nId donec ultrices tincidunt arcu non sodales neque sodales ut. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Curabitur gravida arcu ac tortor dignissim convallis aenean et tortor. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Euismod nisi porta lorem mollis aliquam ut porttitor leo. Molestie at elementum eu facilisis sed odio morbi quis. Amet est placerat in egestas. Pharetra magna ac placerat vestibulum. Aliquam faucibus purus in massa. Sit amet massa vitae tortor condimentum lacinia. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Sit amet mattis vulputate enim. Imperdiet proin fermentum leo vel orci.\r\n</p>\r\n<p>\r\nSit amet volutpat consequat mauris nunc. In iaculis nunc sed augue lacus viverra vitae congue. Amet est placerat in egestas erat imperdiet sed. Quis auctor elit sed vulputate mi sit amet. Eu volutpat odio facilisis mauris sit. Tortor at risus viverra adipiscing at in tellus. Id volutpat lacus laoreet non curabitur. Odio aenean sed adipiscing diam donec adipiscing tristique risus. Interdum varius sit amet mattis vulputate enim. Vel pretium lectus quam id leo in vitae turpis. Consequat semper viverra nam libero justo laoreet sit. Ullamcorper eget nulla facilisi etiam dignissim.\r\n</p>', 'Consectetur adipiscing elit ut aliquam purus. Egestas sed sed risus pretium quam vulputate dignissim suspendisse.', 1, '2022-11-07 15:59:01', '2022-11-07 15:59:01', 1),
(2, 'Mon voyage en Irlande', 'mon-voyage-en-irlande', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Condimentum lacinia quis vel eros donec. Ac tortor dignissim convallis aenean et tortor. Proin libero nunc consequat interdum varius sit amet. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Sodales ut eu sem integer vitae justo. Enim ut tellus elementum sagittis vitae et leo duis ut. Gravida rutrum quisque non tellus. Id cursus metus aliquam eleifend mi in nulla posuere.', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Condimentum lacinia quis vel eros donec. Ac tortor dignissim convallis aenean et tortor. Proin libero nunc consequat interdum varius sit amet. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Sodales ut eu sem integer vitae justo. Enim ut tellus elementum sagittis vitae et leo duis ut. Gravida rutrum quisque non tellus. Id cursus metus aliquam eleifend mi in nulla posuere. Lorem mollis aliquam ut porttitor leo a diam sollicitudin. Enim ut tellus elementum sagittis vitae. Ac turpis egestas integer eget aliquet nibh praesent. Lacus laoreet non curabitur gravida arcu ac tortor dignissim. In tellus integer feugiat scelerisque varius. Neque volutpat ac tincidunt vitae. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Eget est lorem ipsum dolor sit amet consectetur adipiscing.\r\n</p>\r\n<p>\r\nId donec ultrices tincidunt arcu non sodales neque sodales ut. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Curabitur gravida arcu ac tortor dignissim convallis aenean et tortor. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Euismod nisi porta lorem mollis aliquam ut porttitor leo. Molestie at elementum eu facilisis sed odio morbi quis. Amet est placerat in egestas. Pharetra magna ac placerat vestibulum. Aliquam faucibus purus in massa. Sit amet massa vitae tortor condimentum lacinia. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Sit amet mattis vulputate enim. Imperdiet proin fermentum leo vel orci.\r\n</p>\r\n<p>\r\nSit amet volutpat consequat mauris nunc. In iaculis nunc sed augue lacus viverra vitae congue. Amet est placerat in egestas erat imperdiet sed. Quis auctor elit sed vulputate mi sit amet. Eu volutpat odio facilisis mauris sit. Tortor at risus viverra adipiscing at in tellus. Id volutpat lacus laoreet non curabitur. Odio aenean sed adipiscing diam donec adipiscing tristique risus. Interdum varius sit amet mattis vulputate enim. Vel pretium lectus quam id leo in vitae turpis. Consequat semper viverra nam libero justo laoreet sit. Ullamcorper eget nulla facilisi etiam dignissim.\r\n</p>', 'Consectetur adipiscing elit ut aliquam purus. Egestas sed sed risus pretium quam vulputate dignissim suspendisse.', 1, '2022-11-07 15:59:01', '2022-11-07 15:59:01', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'ROLE_USER',
  `profilePicture` text,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `role`, `profilePicture`, `createdAt`, `updatedAt`) VALUES
(1, 'john@mail.com', 'john', 'John', 'Doe', 'ROLE_USER', 'https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80', '2022-11-06 16:26:10', '2022-11-06 16:26:10'),
(2, 'jack@mail.com', 'jack', 'Jack', 'Doe', 'ROLE_USER', 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80', '2022-11-06 16:26:18', '2022-11-06 16:26:18'),
(3, 'author@mail.com', 'author', 'Jane', 'Smith', 'ROLE_AUTHOR', 'https://images.unsplash.com/photo-1579503841516-e0bd7fca5faa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80', '2022-11-12 15:23:18', '2022-11-12 15:23:18'),
(4, 'admin@mail.com', 'admin', 'Super', 'Man', 'ROLE_ADMIN', 'https://images.unsplash.com/photo-1590341328520-63256eb32bc3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', '2022-11-12 15:23:18', '2022-11-12 15:23:18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
