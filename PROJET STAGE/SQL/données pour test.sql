--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`idVille`, `libelleVille`) VALUES
(1, 'Gravelines'),
(2, 'Grand-fort-Phillipe'),
(3, 'Saint Folquin'),
(4, 'Saint Omer Capelle'),
(5, 'Oye-Plage');

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `role`) VALUES
(4, 'LoicDom', '3389897c975426af6951aead6bd596e9', 1),
(5, 'Fabienne', 'ace83f2f5d3dc8da858cc058e94fce6b', 2),
(6, 'Gilles', '3ff1ae4e5a07ed059d815e628b90f509', 2),
(11, 'Violène', '03c06fa8ae475a7bd2b700ef1aa4eaa7', 2);

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`idPersonne`, `nomPersonne`, `prenomPersonne`, `dateNaissPersonne`, `lieuNaissPersonne`, `adressePersonne`, `cpPersonne`, `emailPersonne`, `telPersonne`, `autorisationPhotos`, `bafaAquisBenevole`, `casierJudiciaire`, `paiementInscription`, `nomRepresentantLegal`, `prenomRepresentantLegal`, `remarquePersonne`, `typePersonne`, `idVille`) VALUES
(1, 'Dom', 'Loic', '1995-11-13', 'saint pol', '11 res du cp', 59000, 'emailPersonne@gmail.fr', '06-05-07-08-09', 'oui', 'oui', NULL, NULL, NULL, NULL, NULL, 'Bénévole', 1),
(2, 'Dom', 'Loic', '1995-06-23', 'Dunkerque', '11 rue de la rue', 59000, 'email@hotmail.fr', '06-06-05-04-03', 'oui', NULL, NULL, NULL, NULL, NULL, NULL, 'Bénévole', 2),
(4, 'Dom', 'Fab', '1967-07-15', 'saint pol', '11 res du cp', 59000, 'emaildePersonne@gmail.fr', '06-05-10-08-09', 'oui', 'oui', NULL, NULL, NULL, NULL, NULL, 'bénévole', 1),
(6, 'Dom', 'Marc', '2010-03-21', 'Dunkerque', '25 rue de l rue', 59000, 'N@hotmail.fr', '06-06-05-04-02', 'oui', NULL, NULL, 'cheque', 'Dom', 'Gilles', NULL, 'Employé', 5),
(7, 'Dom', 'Gilles', '2010-03-21', 'Dunkerque', '25 rue de l rue', 59000, 'N@hotmail.fr', '06-06-05-04-02', 'oui', NULL, NULL, 'cheque', 'Dom', 'Gilles', NULL, 'Employé', 5),
(9, 'Doma', 'Fab', '1967-07-15', 'Dunkerque', '11 res du cp', 59000, 'emaildePersonne@gmail.fr', '06-05-10-08-09', 'oui', 'oui', NULL, NULL, NULL, NULL, NULL, 'Bénévole', 2),
(11, 'DOMAIN', 'Noam', '2007-08-10', 'Dunkerque', '11 résidence du camp d\'arc', 62370, 'ee@gmail.com', '06-12-13-14-15', 'oui', NULL, NULL, 'cheque', 'DOMAIN', 'Gilles', '', 'Enfant', 1);

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
(21, '756', 'Adhésion Ferme', NULL, 7),
(32, '401G20', 'Fournisseur MagasinG20', 'oui', 4),
(36, '401INT', 'Fournisseur InterMarché', 'oui', 4);

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`idFournisseur`, `codeFournisseur`, `libelleFournisseur`, `idPCGA`) VALUES
(20, 'G20', 'MagasinG20', 32),
(21, 'INT', 'InterMarché', 36);

--
-- Déchargement des données de la table `factures`
--

INSERT INTO `factures` (`idFacture`, `libelleFact`, `enregFact`) VALUES
(1, 'factureachat', NULL),
(2, 'Facture Ventes', NULL);

--
-- Déchargement des données de la table `exercicecomptable`
--

INSERT INTO `exercicecomptable` (`idExerciceComptable`, `libelleExercice`) VALUES
(1, '2019-2020'),
(2, '2020-2021');

--
-- Déchargement des données de la table `ecritures`
--

INSERT INTO `ecritures` (`idEcriture`, `typeEcriture`, `dateEcriture`, `libelleEcriture`, `lettrage`, `idFacture`, `idExerciceComptable`) VALUES
(1, '', '2020-10-07', 'Facture achats cb', NULL, 1, 1);

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`idDocument`, `libelleDocument`, `enregDocument`) VALUES
(1, 'Dom', NULL),
(2, 'Dunkerque', NULL);

--
-- Déchargement des données de la table `budgets`
--

INSERT INTO `budgets` (`idBudget`, `fournitureAtelierCreatif`, `atelierCuisineGouter`, `petitMateriel`, `salaireEmploye`, `assurance`, `fraisPostauxTel`, `entretienMaterielJadin`, `produitEntretien`, `fraisBancaires`, `ursaff`, `subvMunicipale`, `participationFamille`, `produitManif`, `anniversaire`, `adhesion`, `participationIME`) VALUES
(5, 1865, 1769, 128, 456, 136, 42, 625, 366, 25, 86, 4000, 126, 1769, 452, 98, 106);

--
-- Déchargement des données de la table `ligneecriture`
--

INSERT INTO `ligneecriture` (`idLigneEcriture`, `montant`, `sens`, `idEcriture`, `idPCGA`) VALUES
(1, '1242.00', 'Debit', 1, 2),
(3, '1246.23', 'Credit', 1, 4);
