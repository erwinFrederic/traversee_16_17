-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 28 Décembre 2016 à 16:18
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `traversee`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`uid` int(15) NOT NULL,
  `uadresse_ip` varchar(255) NOT NULL,
  `vid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `verset`
--

CREATE TABLE IF NOT EXISTS `verset` (
`vid` int(15) NOT NULL,
  `vreference` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `verset`
--

INSERT INTO `verset` (`vid`, `vreference`, `content`) VALUES
(1, 'Jérémie 29:11', 'Le Seigneur a formé sur vous des projets de paix et non de malheur, afin de vous donner un avenir et de l''espérance'),
(2, 'Deutéronome 28:13', 'L''Eternel fera de toi la tête et non la queue, tu seras toujours en haut et tu ne seras jamais en bas, lorsque tu obéiras aux commandements de l''Eternel, ton Dieu, que je te prescris aujourd''hui, lorsque tu les observeras et les mettras en pratique'),
(3, 'Exode 15:26', 'Il dit : Si tu écoutes attentivement la voix de l''Eternel, ton Dieu, si tu fais ce qui est droit à ses yeux, si tu prêtes l''oreille à ses commandements, et si tu observes toutes ses lois, je ne te frapperai d''aucune des maladies dont j''ai frappé les Egyptiens; car je suis l''Eternel, qui te guérit.\r\n'),
(4, 'Esaïe 45 : 3', 'Je te donnerai des trésors cachés, Des richesses enfouies, Afin que tu saches Que je suis l''Eternel qui t''appelle par ton nom, Le Dieu d''Israël.\r\n'),
(5, 'Psaumes 6 : 3', 'Aie pitié de moi, Eternel ! car je suis sans force; Guéris-moi, Eternel ! car mes os sont tremblants.\r\n'),
(6, 'Jérémie 9 : 24', 'Mais que celui qui veut se glorifier se glorifie D''avoir de l''intelligence et de me connaître, De savoir que je suis l''Eternel, Qui exerce la bonté, le droit et la justice sur la terre; Car c''est à cela que je prends plaisir, dit l''Eternel.\r\n'),
(7, 'Lévitique 20 : 8', 'Vous observerez mes lois, et vous les mettrez en pratique. Je suis l''Eternel, qui vous sanctifie.\r\n');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`), ADD KEY `vid` (`vid`);

--
-- Index pour la table `verset`
--
ALTER TABLE `verset`
 ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `verset`
--
ALTER TABLE `verset`
MODIFY `vid` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `verset` (`vid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
