
CREATE TABLE `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nomClient` varchar(30) CHARACTER SET latin1 NOT NULL,
  `prenomClient` varchar(30) CHARACTER SET latin1 NOT NULL,
  `adresseClient` varchar(255) CHARACTER SET latin1 NOT NULL,
  `villeClient` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `clients` (`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `villeClient`) VALUES
(1, 'Dupond', 'toto', 'ici', 'Grenoble'),
(2, 'Durant', 'titi', 'rue de titi', 'Paris');
(3, 'Dupont', 'tata', 'rue de tata', 'Lille');
(4, 'Moldus', 'tyty', 'rue de tyty', 'Troyes');
(5, 'Malus', 'Samuel', 'rue de Samuel', 'Bordeaux');

