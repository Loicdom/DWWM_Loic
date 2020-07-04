-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 04 juil. 2020 à 00:11
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `comptaferme`
--
CREATE DATABASE IF NOT EXISTS `comptaferme` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `comptaferme`;

--
-- Déchargement des données de la table `budgets`
--

INSERT INTO `budgets` (`idBudget`, `annee`, `fournitureAtelierCreatif`, `atelierCuisineGouter`, `petitMateriel`, `salaireEmploye`, `assurance`, `fraisPostauxTel`, `entretienMaterielJadin`, `produitEntretien`, `fraisBancaires`, `ursaff`, `subvMunicipale`, `participationFamille`, `produitManif`, `anniversaire`, `adhesion`, `participationIME`) VALUES
(1, '2018-2019', 1340, 1100, 123, 1400, 652, 5900, 12, 123, 42, 126, 17000, 240, 1800, 2480, 170, 240),
(4, '2010-2011', 1865, 1769, 128, 456, 136, 42, 625, 366, 25, 86, 4000, 126, 1769, 452, 45, 106);

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
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`idDocument`, `libelleDocument`, `enregDocument`) VALUES
(1, 'Dom', NULL),
(2, 'Dunkerque', NULL);

--
-- Déchargement des données de la table `ecritures`
--

INSERT INTO `ecritures` (`idEcriture`, `dateEcriture`, `libelleEcriture`, `lettrage`, `solde`, `idFacture`, `idExerciceComptable`) VALUES
(1, '2020-10-07', 'Facture achats cb', NULL, '203.02', 1, 1);

--
-- Déchargement des données de la table `exercicecomptable`
--

INSERT INTO `exercicecomptable` (`idExerciceComptable`, `libelleExercice`) VALUES
(1, '2019-2020'),
(2, '2020-2021');

--
-- Déchargement des données de la table `factures`
--

INSERT INTO `factures` (`idFacture`, `libelleFact`, `enregFact`) VALUES
(1, 'factureachat', NULL),
(2, 'Facture Ventes', NULL);

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`idFournisseur`, `codeFournisseur`, `libelleFournisseur`, `idPCGA`) VALUES
(15, 'G20', 'MagasinG20', NULL),
(16, 'INT', 'InterMarché', NULL),
(17, 'LID', 'LIDL', NULL),
(18, 'CAR', 'Carrefour', NULL);

--
-- Déchargement des données de la table `ligneecriture`
--

INSERT INTO `ligneecriture` (`idLigneEcriture`, `montant`, `sens`, `idEcriture`, `idPCGA`) VALUES
(1, '1242.00', 'Debit', 1, 2),
(3, '1246.23', 'Credit', 1, 4);

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
(27, '401G20', 'Fournisseur MagasinG20', 'oui', 4),
(28, '401INT', 'Fournisseur InterMarché', 'oui', 4),
(29, '401LID', 'Fournisseur LIDL', 'oui', 4),
(30, '401CAR', 'Fournisseur Carrefour', 'oui', 4);

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`idPersonne`, `nomPersonne`, `prenomPersonne`, `dateNaissPersonne`, `lieuNaissPersonne`, `adressePersonne`, `cpPersonne`, `villePersonne`, `emailPersonne`, `telPersonne`, `autorisationPhotos`, `bafaAquisBenevole`, `casierJudiciaire`, `paiementInscription`, `nomRepresentantLegal`, `prenomRepresentantLegal`, `remarquePersonne`, `typePersonne`) VALUES
(1, 'Dom', 'Loic', '1995-11-13', 'saint pol', '11 res du cp', 59000, 'Lille', 'emailPersonne@gmail.fr', '06-05-07-08-09', 'oui', 'oui', NULL, NULL, NULL, NULL, NULL, 'Bénévole'),
(2, 'Dom', 'Loic', '1995-06-23', 'Dunkerque', '11 rue de la rue', 59000, 'Lille', 'email@hotmail.fr', '06-06-05-04-03', 'oui', NULL, NULL, NULL, NULL, NULL, NULL, 'Bénévole'),
(4, 'Dom', 'Fab', '1967-07-15', 'saint pol', '11 res du cp', 59000, 'Lille', 'emaildePersonne@gmail.fr', '06-05-10-08-09', 'oui', 'oui', NULL, NULL, NULL, NULL, NULL, 'bénévole'),
(6, 'Dom', 'Marc', '2010-03-21', 'Dunkerque', '25 rue de l rue', 59000, 'Lille', 'N@hotmail.fr', '06-06-05-04-02', 'oui', NULL, NULL, 'cheque', 'Dom', 'Gilles', NULL, 'Employé'),
(7, 'Dom', 'Gilles', '2010-03-21', 'Dunkerque', '25 rue de l rue', 59000, 'Lille', 'N@hotmail.fr', '06-06-05-04-02', 'oui', NULL, NULL, 'cheque', 'Dom', 'Gilles', NULL, 'Employé'),
(8, 'Dom', 'Fab', '1967-07-15', 'saint pol', '11 res du cp', 59000, 'Lille', 'emaildePersonne@gmail.fr', '06-05-10-08-09', 'oui', 'oui', 0x89504e470d0a1a0a0000000d49484452000000e1000000e108060000003eb3d27a000000017352474200aece1ce90000000467414d410000b18f0bfc6105000000097048597300000ec400000ec401952b0e1b0000155e49444154785eeddd7b6c55d59e07f0e5c8f80fd4c7ad052e2831057904022208084ab516cdf092068901692148302531057964b810410342106f4522250d1a2c584424a8084645a495f75041d114ae9430a53050e4d6589898d11967bee7feced09673ce7eadb5f73ee77c3f8971ad4372f6deebac6fd77eae7d538741057f280aa5b39565eadab56beac71f7f54a74f9f5667ce9c51274f9e540d0d0deaca952baabebe5e5dbe7c59656565a9bbeeba4b656666aaf6eddbab9e3d7baaecec6cd5ad5b3775efbdf7aab66ddbaa7b7266c8b752d830842182d05db87041555555a92fbffc526ddcb851fec5bb828202f5d8638fa9e1c387ab4e9d3a319421c210864065f9c248e076eedca98e1d3b269f9ad3bf7f7f356ad4a84830730a97c9a7141486302018f53ef8e003f5da6baff912bc7810c83973e6a8a79e7a8aa3634018429fd5ee2955efbefbae9a31237c1dbeacac4c3df3cc33aa6b6e917c427ef827f93f1986916fc1a401919324610c2060bdb07e584fac2ff98321f4c1a66585aa7bf7eeaab8b8583e0937ac27d617eb4de63184067db76395caedfabbcacbcb53757575f26972c0fa62bdb1fed80e3287c78486601441274e15bb77ef569317964b8d74e24868c0cc51dd522a8080edc176917e0ca14638f3d927e3827af1c517e593d482edc2f6613b491fee8e6a7274db2b915bc7d2056e991b38fe2f52232f38126a803b5e7af5ea25b5f480edc57693770ca147e8883d7af4504d4d4df2497ac0f662bb1944ef18420f70ea1e1d319d61fb7909c31b86d0a51f7695a8debd7b4b2dbda11dd01ee40e43e8026ee97afae9a723cff2918ab403da83b7bab9c3b3a32ee4dfdf569596f2347d6b4545456afb37d7a4467671247468cddc310c601c6817b40f39c391d081039b9744a68da0c4300dc7d0894ba4465638123a8027d1c91adbc91986d0a61545b96afffefd52a344d04e682fb287bba336e03a1866312367302b5cdf3173a546f17024b461f1e2c5522227d86ef67024b410bd2d8ddc3975ea146774b3c091d0c2d2a54ba5446eb0fdac71244c809724f4e0258bc4381226c08bf27ab01d13e34818076e48c6bb1d480fbc3ba3f7c8d952a3e63812c6f1e9a79f4a8974607bc6c710c6f1de7bef498974607bc6c7ddd118d26dbe18bf705e9ad83812c6b06bd72e29914e6cd7d818c218de7fff7d29914e6cd7d818c21830db34e9c7768d8d216c65e7dae478694bb262fbde88216ca5baba5a4a6402dbf7460c612b7bf7ee951299c0f6bd1143d84a4d4d8d94c804b6ef8d18c266f0a2135ccb2273d0be7ca14c4b0c6133972e5de25ca286a17dd1ce741d43d84c6363a394c824b6734b0c2151c018c266f817da1f6ce79618c266d839fcc1766e89216c869dc31f6ce7961842a2803184cddc71c71d522293d8ce2d3184cdb073f883eddc1243d80c3b873fd8ce2d3184440163089be15f687fb09d5b62089be9d0a183cacaca921a9980f6453bd3750c61335d738b38cb9a61685fb4335dc710b6d2a74f1f2991096cdf1b3184ad3cfcf0c3522213d8be3762085be9dbb7af94c804b6ef8d3803770c170f974b8974eb38b8504a14c5913086d1a3474b897462bbc6c610c63076ec5829914e6cd7d818c218f2f2f2a4443ab15d63e331611c7d322e70da768d10c0ef9b3a498d9ae34818c7d4a953a5443ab03de36308e378fcf1c7a5443ab03de3e3ee6802f9f7b755a5a59ca8d6aba2a222b5fd9b6b52a3d6381226306bd62c2991176cc7c438125ac8edfabbaaa8a8901a393569d224b5a7b68dd428168e8416162f5e2c257283ed678d23a10d1c0ddde128680f47421b5e7ffd752991136c377b18421bfa8e99ab366cd82035b2a3acac2cd26e648dbba30e74f9e3a43a72e488d4289e418306a9ba9b7a4a8dac70247460e3c68d52a244d84ece30840ee4142e539b366d921ac582f6413b917ddc1d758177d2c4c63b63dce148e842494989ead5ab97d408d01e6817728e2174e19e9c19aab2b252656464c827e90ded80f640bb90730ca14b38fd5e535323b5f48676e0e508f718420f068eff8b3a71e284d4d213b61fed40ee31841e8d98feaaaaaeae965a7ac17663fbc91b865083513357ab43870e492d3d607bb1dde41d43a8c9b8e2b56933270db613db4b7a30841a4d5e589ef217f3b17dd84ed2e7e6769dfb2d913269f0f9915af5f3bf57abdcdc5cf924752c5ab448add8fc8dd44817de3163c8c0acbfab4f3ef9446ac90fb3671fbdfc27a9914edc1d3564cb962d524a0da9b63d61929423e1d16dafa8fafa7a75eedc39d5d8d8a87efef96775f9f26575f1e2c5c8bfdf79e79d915732df76db6d2a33335375ecd851dd7df7ddbedf58bc736db11a306080d492172e45f87d26b4b27ce1ffffbef80fbf2dfeffd34f3f45fe1dbf29defa7bfbedb7477e6bfcbe780169325eb30c7d087fd855a2f6ecd9a30e1c38a0d6af5faf9a9a9ae45fdcc3b40b23478e5443870e5543279a3d245e3069802a2e2e965af259bd7ab55a5e61f63ae881cd4b22bfefae5dbbb44c2382dbe8a64f9f1ef97d716cde7be46cf997700a6508bf583f4f6ddfbe3d724c65fa215afc35c5ecd04f3cf1847af0c1078dbcca39598f0f4d1d07d6ee2955070f1e549f7df65964c602ecc59884878cb12df9f9f9a1bcb9203421c42e26fe12bef3ce3b6afffefdf2a9bfba74e9a20a0b0b55414181d65dd7ef76ac52eddbb7975af2686868d07a4f287631f1c06f7979b9aaabab934ffd356cd8303565ca94c89e5058765d033f3183f0e1f93ceccfcf983123b000023ac6d2a54b558f1e3d222f84f970f54cf9176fd09193edfa21d6575700d18e684fb42bda37a80002fa17fa19fa1bfa1dfa5fd0020b218e03a2e10be303b2b82b64c89021aa6b9b5a2d619cbbe6f3a4794926d613ebeb15da0ded87760ce3dd44e877d130a23f06c5f7109ead2c5333477553d9d9d949f1743afe72a2133dd8a9c9f30fb56edd3a29859bd7f5443ba1bdd06e41eed9d8857e88fe887e89fee9375f8f09372d2b54d3a64d0b7477c42baf670b5f7ef6a1c8ee505861aac217dfda2735e792fd6c30ce0bbcfdf6dbbede9ae74b08f1d705e14b9559ac3195c3871f7ee8fae44d58a74ef43255214eba8c1b372e651e74c6652c84d18fd9028cef8ee2c7c185d4549a461e1d0d2719d6cc1d239f38f3c61b6f48295cdcae17da01ed914a330da0bfa2dfa2ff9a663484ab9e7f3cf2e398be0e1494091326a8e923ba48cd3e3c0684bfb46182f571f37812b61fed908ad06fd17fd18f4d3216421ce44e9e3c596aa90ba7dc71fadde901fdca952ba5140e4ed707db8bedc6f6a73af463f467538c1c13a6e3bc9c384e3c7af4a8a33b6e5e18df47cd9f3f5f6ac14100ffbaed7ba959c31d2f03070e4cbb89ae4ccdabaa7d241cd1fd8fb40b20a043a263e25e57bb9e7df6592905cbc97a60fbd23180807e8dfead9bd61062044ce7f710a0633ef4d043b6efc2c08dc541ef9662f9766f70c67661fbd2318051e8dfe8e73a690b61c1f00e693902b6860edabf7f7fdb410c7a34b4bb7c6c0fb62b9d0318857e8efeae8b9610e202edabaf72eabb289c55c3ed50764e6f63147af9e597a5e62f2cd7ce2888edc0f6a4ea596e37d0dfd1ef75f07c620677c1e4e5e5498d5ac3d48056a7fe71a2a36d5bbdbb38765cbb76cdf24412eeffc4ed67141bee89f57a778da791108fe8308089a103e356b54410049c79f31396671540ac37039818fa3f72e085a710e22149b2867b45adceaacd9ca9e7b129bbac9687f50df33dae61e23507ae43886b5cc970877c58e0ac1aee198df724069ef8f66baf02cb89f784398efffefc5f27f8b65d079003e4c12d572144470ac345e664839bb6f1c8cc8aa2d873923ef7dc7352322bde72b0fb89dbb48e1d3b269f905dc883db47dd5c8570ce9c3952223730a70de69d697d61dfaf09835b2f277201feffd687bb9fdeb8cd85e3b3a3b8633e556fd80dc2d6ad5bd5f3ab7648ed1fc762267705317fce177fbb496afc3d756bfd7bdae16824c44dbbb366cd921ae9800060148aeeca8c1d3b36f27f53a2df8fe561b90ca05ec887d39bf91d8570c78e1deafcf9f352235d301d228e1571f1372727473e3503df8fe56079a9344d7f58201fc889138e76472f1ee6db784cc3d3ed986ddac4142098ba01335787f1a9fe54d37170a194acd91e09dd3e454ece2020a6e6e0c1f73280fe709217db236158e745210a2327f3f5d81a097101970124b20f79b13b3f8dad10f2b55844ced9cd8d650871ba75f3e6cd522322bb901b3b972b2c4378fcf8713ec849e4027283fc58b10c615555959488c8293bf9b10ce1471f7d24252272ca4e7e125ea208ea896fa25462358341c291106f5325226fac7294308467ce9c911211b96595a38421fcfaebafa544446e59e52861082b2b2ba544446e59e528610893f9659e44616195a3b8210cc30bf5895245a23cc50d214eab12911e89f214378457af5e9512117995284f7143f8db6fbf498988bc4a94278e84443e70351212913f1842a280c50d61bb76eda444445e25ca53dc10f2e909227d12e5296e086fb9e5162911915789f2143784783d3211e991284f714368f5165722b2cff543bdc3860d931211b96595a384217cf4d147a544446e59e52861087bf6b4378d3711c56795a384217ce08107a444446e59e5c8f285307c1d1a913756af494b3812425111cf9212b965273f96211c3c78b09488c8293bf9b10c615e5e9e9488c8293bf9b1f592d081597fe7fbcd891c1a3d7ab43a7af94f528bcf7224842953a6488988ecb29b1b5b21cccdcd951211d9653737b6df599f7f7f5b555a5a2a35224a046745b77f636fc6425b2321cc9b374f4a64da860d1b22c7133ae1fbf0bde40f2779b11dc2a11397a8499326498d4c40fb363434a87f2ddd13f9bf4ecdbf97bfa359685fe4c52edb2184050b16488974cacaca52bb77ef567b6adba8be63e6463e3b7ffe7ce4ffba44bf0fdf8fe56079582ee9e734278e423862faabaaa0a0406aa403765bce9e3dab262f6c797ba0a910466179582e0f33f4423e9013271c85105e7ae925299157188d36565d0aec016a2c17cbc77a901e6ef2e13884d8d75dbd7ab5d4c80d1c33e0dd04ad47bfa0603db03ef9f9f9f209b9815c3839168cb27d89a2b59bebbfd4becb940e366ddaa4e6aef95c6ab1d5ee293532db9dd5bbd3614551ae9a3a75aad4c8aece9d3babffbeeb31a939e378248cfaf8e38fa544769d3871c23280505f5f2f25bdec7c2fcea05657574b8decf29207d7211c357335774b6d1a346890ba72e58aed03f673e7ce49492fbbdf8bdf16eb8bf5266bc801dacc2dd72184e515d53c8eb0307bf66c5577534fd57be46cf9c45a6363a394f472f2bd585fac37d69fe243ff470ebcf0144258bf7e3daf37c5b172e54ab5f9c015a9d91786104661fdb11d7423f47bf47faf3c87107f310f1f3e2c358ac22eca5fb77d2f35676a6a6aa4a497dbefc576f0d0e346e8f74ef670e2f11c42c069591ecc5f877b34bdeca2ecdfbf5f4a7a79f95e6c0fef3dbd0efdddcde58858b484107060ca8bbe4a6dddba357286d18b23478e48492fafdf8bedc2f6a53bf4732f27625ad31642c045df740e223ae8f3ab7648cd9da3db5e9192195ebf1fdb97ce4144ffd67d9385d6100256301d774d7504102e5dba242533747c7fba0611fddac45d4eda430818aa4f9d3aa5323232e493d476e8d0212d0104532765a2747d3fb617db9d0ed08fd19f75ee82366724849053b84cd5d6d6a6f475445cccc6f379e38ad7ca27de99de8bd0f9fdd86e6c7f2a5fd447ff453f467f36c5f5bda34ebc30be8f9a3f7fbed452032e62bbb90668a54fc605a3c7d59882effba64e52d367e2d04c55525222b5d480eba36e2f3339616c246c0e1b825d9754b9a88f909808e0773b56193fb185efc77274437b985e77bfa09fa2bffa1140f02584805d979bb3ff25a9efbec003b0bffefaab9183733873e68c94cc32b51cb40bda27991f1446ff443fd5798861c5b71046e1af0b0e7293e95811eb8a63293c007b4fce0cf954bfaaaa2a2999657239681fb413da2bd97e63f44bbf46bfe67c0f21e020f7e0858cc80fa57b56319df08655ec96605d4d9d196beef8f1e35232cb8fe5a0bdd06e68bf30bff119fd0ffd10eb6af2e44b228184300a3f14a609c77376619a010c7f15d1796a7fefeadb6e091ee4ada8a8909a59580e96e707b41fda11ed19a69111fd0dfd0efdcf8f3fb089041ac2283c678719c070ba1b4f9e07f1121a9c662f2b2b8b3cf88abf8a7e1e13c0c18307a5e40fbf9787f644bba27dd1ce415cd640bf42ff423f437f733a219329be5ca270e3c0e625916317dca96e6ae66ffc357ce49147544e4e4e60bb2251d34774514b972e959a798b162d52ebbfa8935a302acb17aacaca4ab577ef5e637b0198091baf271b3e7cb8b61bae750b6d085bfb62fd3cf5edb7df46ceec219c4e4f87e3b8042ff0c7fbc3bb75eba6eebbef3ea327599c0ae28dc8566f90f5d3d9cab2c8b1eae9d3a7d5c99327d5575f7de5f8a90f8c74085b7676b6ead7af5f68463a2b4913c258f0c3fdf2cb2feaead5ab91498cf01f609224fcd7ae5d3b75ebadb7862a6cb16044e8d1a387d4fc83b38141ef01584995df3891a40e61aa583069802a2e2e969a7ff0a0aed7a919c83b863004eef8e5df8cdfb81d4baf5ebd54e3ad0f488d82128ab3a3e90cc7ba410410b05c2c9f82c510066ccb962d520a46d0cb2786305038e9505e1eec54f8583ed68382c3100668dfbe7daaae2ed86b75583ed68382c3100668c58a15520a5658d6235df1ec684082ba36184f325c334c551c0903b26edd3a298543d8d6279d70240cc00fbb4a546666a6d4c2032f81d131a33439c39130006fbef9a694c225aceb95ea3812fa2caca360144743ff7124f4d95b6fbd25a5700afbfaa5228e843e0afb2818c5d1d05f1c097d942cd7e378ddd05f1c097d829902f0b069b2c0c3d3617d123dd57024f4c99c3973a4941c926d7d931943e8834dcb0ad5f6eddba5961cb0be586f328f21340c530b4e9b364d6ac905ebedd7d488e98c21346cf9f2e5813f29e116d61beb4f66f1c48c413bd716ab010306482d796186eaa027c84d651c090dc29ca6a92055b623ac184243f2ef6fab9a9a9aa496dcb01dd81e3283213460cddc31c6660d0f0ab607db45faf19850b3b03dacab1b1ffed58f23a146389d9f9b9b2bb5d484ede3650bbd18428d9e7cf24975fefc79a9a5266c1fb693f46108359938343365ded96e05db89ed253d18420d5e18df47959494482d3d607bb1dde4ddcded3af7e3adf21ea023ce9f3f5f6ae905af9bfb9fc61fd5c19a06f984dc60083dc0db94d2fd690304f19fffb34eed3bf11ff20939c510ba8411908ffbfcc390214338227ac06342177052225d7741e3417bf0648d3b0ca10378714a6ed7dfd3ee248c5d6817b40f5f30e30c436813a6a7e8dfbfbfaaa8a8904f2816b40fda09ed45f6308436e09e49cc0f13d4cb3c930dda09edc57b4ded610813f86ec72a35a2fb1f6ac28409f20939817643fba11d293edec01d07e657c9cbcb931a7985bb6c262f0cf685a861c591308e9d3b774a8974607bc6c710c6d1a64d1b29910e6ccff81842a2803184440163088902c61012058c21240a1843481428a5fe17217878e5f168429e0000000049454e44ae426082, NULL, NULL, NULL, NULL, 'Bénévole'),
(9, 'Doma', 'Fab', '1967-07-15', 'Dunkerque', '11 res du cp', 59000, 'Lille', 'emaildePersonne@gmail.fr', '06-05-10-08-09', 'oui', 'oui', NULL, NULL, NULL, NULL, NULL, 'Bénévole'),
(11, 'DOMAIN', 'Noam', '2007-08-10', 'Dunkerque', '11 résidence du camp d\'arc', 62370, 'Saint folquin', 'ee@gmail.com', '06-12-13-14-15', 'oui', NULL, NULL, 'cheque', 'DOMAIN', 'Gilles', '', 'Enfant');

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `role`) VALUES
(4, 'LoicDom', '3389897c975426af6951aead6bd596e9', 1),
(5, 'Fabienne', 'ace83f2f5d3dc8da858cc058e94fce6b', 2),
(6, 'Gilles', '3ff1ae4e5a07ed059d815e628b90f509', 2),
(11, 'Violène', '03c06fa8ae475a7bd2b700ef1aa4eaa7', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
