--
-- Déchargement des données de la table `classecomptable`
--

INSERT INTO `classecomptable` (`idClasseComptable`, `numeroClasseComptable`, `libelleClasseComptable`) VALUES
(1, 1, 'COMPTES DE CAPITAUX'),
(2, 2, 'COMPTES D\'IMMOBILISATIONS'),
(3, 3, 'COMPTES DE STOCKS ET EN-COURS'),
(4, 4, 'COMPTES DE TIERS'),
(5, 5, 'COMPTES FINANCIERS'),
(6, 4, 'COMPTES DE CHARGES'),
(7, 7, 'COMPTES DE PRODUITS'),
(8, 8, 'COMPTES SPECIAUX*');

--
-- Déchargement des données de la table `exercicecomptable`
--

INSERT INTO `exercicecomptable` (`idExerciceComptable`, `libelleExercice`) VALUES
(1, 2019),
(2, 2020),
(3, 2021),
(4, 2022),
(5, 2023),
(6, 2024),
(7, 2025),
(8, 2026),
(9, 2027),
(10, 2028),
(11, 2029),
(12, 2030);

--
-- Déchargement des données de la table `pcga`
--

INSERT INTO `pcga` (`idPCGA`, `numCompte`, `libelleCompte`, `dansBilan`, `idClasseComptable`) VALUES
(1, '441', 'Subvention Municipale', NULL, 4),
(2, '401', 'Fournisseurs', NULL, 4),
(3, '411', 'Clients', NULL, 4),
(4, '421', 'Personnel - Rémunérations dues', NULL, 4),
(5, '421SYL', 'Salaire Sylvie', NULL, 4),
(6, '6451', 'Cotisations à l\'URSSAF', NULL, 6),
(7, '512', 'Banque', NULL, 5),
(8, '53', 'Caisse', NULL, 5),
(9, '616', 'Prime d\'assurance', NULL, 6),
(10, '626', 'Frais postaux et téléphone', NULL, 6),
(11, '627', 'Services bancaires et assimilés', NULL, 6),
(12, '60222', 'Produits d\'entretien', NULL, 6),
(13, '6071', 'Achat marchandise pour atelier créatif', NULL, 6),
(14, '6072', 'Achats marchandise pour cuisine', NULL, 6),
(15, '60631', 'Achats petits matériels', NULL, 6),
(16, '60632', 'Achats matériels et entretiens jardin', NULL, 6),
(17, '7061', 'Produit de manifestation', NULL, 7),
(18, '7062', 'Participation familles activités du mercredi', NULL, 7),
(19, '7063', 'Anniversaires', NULL, 7),
(20, '7064', 'Participation IME pour les activités', NULL, 7),
(21, '756', 'Adhésion Ferme', NULL, 7);

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `role`) VALUES
(4, 'LoicDom', '3389897c975426af6951aead6bd596e9', 1),
(5, 'Fabienne', 'ace83f2f5d3dc8da858cc058e94fce6b', 2),
(11, 'Violène', '03c06fa8ae475a7bd2b700ef1aa4eaa7', 2),
(12, 'Gilles', '99833c3902bf36bb36d694dbad67d0b7', 2);


--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`idVille`, `libelleVille`) VALUES
(1, 'Gravelines'),
(2, 'Vieille-Église'),
(3, 'Saint Folquin'),
(4, 'Saint Omer Capelle'),
(5, 'Grand-fort-Phillipe'),
(6, 'Petit-fort-Phillipe'),
(7, 'Nouvelle-Église'),
(8, 'Audruicq'),
(9, 'Sainte-Marie-Kerque'),
(10, 'Oye-Plage');

-- --------------------------------------------------------
