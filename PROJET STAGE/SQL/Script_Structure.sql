#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `COMPTAFERME` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `COMPTAFERME`;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Factures
#------------------------------------------------------------

DROP TABLE IF EXISTS `Factures`;
CREATE TABLE IF NOT EXISTS Factures(
        idFacture   Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleFact Varchar (100) NOT NULL ,
        enregFact   Varchar (100) DEFAULT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ExerciceComptable
#------------------------------------------------------------

DROP TABLE IF EXISTS `Exercicecomptable`;
CREATE TABLE IF NOT EXISTS ExerciceComptable(
        idExerciceComptable Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleExercice int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ecritures
#------------------------------------------------------------

DROP TABLE IF EXISTS `ecritures`;
CREATE TABLE IF NOT EXISTS Ecritures(
        idEcriture          Int  Auto_increment  NOT NULL PRIMARY KEY ,
		typeEcriture		Varchar (10) NOT NULL ,
        dateEcriture        Date NOT NULL ,
        libelleEcriture     Varchar (100) NOT NULL ,
        lettrage            Varchar (100) DEFAULT NULL ,
        idFacture           Int  DEFAULT NULL,
        idExerciceComptable Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Villes
#------------------------------------------------------------

DROP TABLE IF EXISTS `Villes`;
CREATE TABLE IF NOT EXISTS Villes(
        idVille     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleVille     Varchar (50) NOT NULL 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

DROP TABLE IF EXISTS Users;
CREATE TABLE IF NOT EXISTS Users(
        idUser     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        pseudo     Varchar (50) NOT NULL ,
        motDePasse Varchar (100) NOT NULL ,
        role       Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Documents
#------------------------------------------------------------

DROP TABLE IF EXISTS `Documents`;
CREATE TABLE IF NOT EXISTS Documents(
        idDocument      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleDocument Varchar (100) NOT NULL ,
        enregDocument   Varchar (100) DEFAULT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ClasseComptable
#------------------------------------------------------------

DROP TABLE IF EXISTS `Classecomptable`;
CREATE TABLE IF NOT EXISTS ClasseComptable(
        idClasseComptable      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        numeroClasseComptable  Int NOT NULL ,
        libelleClasseComptable Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PCGA
#------------------------------------------------------------

DROP TABLE IF EXISTS `PCGA`;
CREATE TABLE IF NOT EXISTS PCGA(
        idPCGA            Int  Auto_increment  NOT NULL PRIMARY KEY ,
        numCompte         Varchar (10) NOT NULL ,
        libelleCompte     Varchar (100) NOT NULL ,
        dansBilan         Varchar (50) DEFAULT NULL ,
        idClasseComptable Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Fournisseurs
#------------------------------------------------------------

DROP TABLE IF EXISTS `Fournisseurs`;
CREATE TABLE IF NOT EXISTS Fournisseurs(
        idFournisseur      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        codeFournisseur    Varchar (10) NOT NULL ,
        libelleFournisseur Varchar (50) NOT NULL ,
        idPCGA             Int DEFAULT NULL

)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Evenements
#------------------------------------------------------------

DROP TABLE IF EXISTS `Evenements`;
CREATE TABLE IF NOT EXISTS Evenements(
        idEvenement      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        codeEvenement    Varchar (10) NOT NULL ,
        libelleEvenement Varchar (50) NOT NULL ,
        idPCGA             Int DEFAULT NULL

)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Personnes
#------------------------------------------------------------

DROP TABLE IF EXISTS `Personnes`;
CREATE TABLE IF NOT EXISTS Personnes(
        idPersonne              Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomPersonne             Varchar (50) NOT NULL ,
        prenomPersonne          Varchar (50) NOT NULL ,
        dateNaissPersonne       Date NOT NULL ,
        lieuNaissPersonne       Varchar (50) NOT NULL ,
        adressePersonne         Varchar (100) NOT NULL ,
        cpPersonne              Int NOT NULL ,
        emailPersonne           Varchar (50) NOT NULL ,
        telPersonne             Varchar (50) NOT NULL ,
        autorisationPhotos      Varchar (10) NOT NULL ,
        bafaAquisBenevole       Varchar (10) DEFAULT NULL ,
        casierJudiciaire        Varchar (100) DEFAULT NULL ,
        paiementInscription     Varchar (50) DEFAULT NULL ,
        nomRepresentantLegal    Varchar (50) DEFAULT NULL ,
        prenomRepresentantLegal Varchar (50) DEFAULT NULL ,
        remarquePersonne        Varchar (100) DEFAULT NULL ,
        typePersonne            Varchar (20) NOT NULL ,
		idVille     			Int NOT NULL 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LigneEcriture
#------------------------------------------------------------

DROP TABLE IF EXISTS `LigneEcriture`;
CREATE TABLE IF NOT EXISTS LigneEcriture(
        idLigneEcriture  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        montant    Decimal (6,2) NOT NULL ,
        sens       Varchar (20) NOT NULL ,
        idEcriture Int NOT NULL ,
        idPCGA     Int NOT NULL 

)ENGINE=InnoDB;

ALTER TABLE Evenements ADD CONSTRAINT Evenements_PCGA_FK FOREIGN KEY (idPCGA) REFERENCES PCGA(idPCGA);
ALTER TABLE Personnes ADD CONSTRAINT Personnes_Villes_FK FOREIGN KEY (idVille) REFERENCES Villes(idVille);
ALTER TABLE LigneEcriture ADD CONSTRAINT ligneEcriture_Ecritures_FK FOREIGN KEY (idEcriture) REFERENCES Ecritures(idEcriture);
ALTER TABLE LigneEcriture ADD CONSTRAINT ligneEcriture_PCGA0_FK FOREIGN KEY (idPCGA) REFERENCES PCGA(idPCGA);
ALTER TABLE Fournisseurs ADD CONSTRAINT Fournisseurs_PCGA_FK FOREIGN KEY (idPCGA) REFERENCES PCGA(idPCGA);
ALTER TABLE PCGA ADD CONSTRAINT PCGA_ClasseComptable_FK FOREIGN KEY (idClasseComptable) REFERENCES ClasseComptable(idClasseComptable);
ALTER TABLE Ecritures ADD CONSTRAINT Ecritures_Factures_FK FOREIGN KEY (idFacture) REFERENCES Factures(idFacture);
ALTER TABLE Ecritures ADD CONSTRAINT Ecritures_ExerciceComptable0_FK FOREIGN KEY (idExerciceComptable) REFERENCES ExerciceComptable(idExerciceComptable);
ALTER TABLE Personnes ADD CONSTRAINT Personnes_Villes_FK FOREIGN KEY (idVille) REFERENCES villes(idVille)

CREATE VIEW ecrituresComptable AS SELECT
    exercicecomptable.idExerciceComptable,
    exercicecomptable.libelleExercice,
    ecritures.idEcriture,
    ecritures.typeEcriture,
    ecritures.dateEcriture,
    ecritures.libelleEcriture,
    ecritures.lettrage,
    classecomptable.idClasseComptable,
    classecomptable.numeroClasseComptable,
    classecomptable.libelleClasseComptable,
    pcga.idPCGA,
    pcga.numCompte,
    pcga.libelleCompte,
    pcga.dansBilan,
    ligneecriture.idLigneEcriture,
    ligneecriture.montant,
    ligneecriture.sens
FROM
    exercicecomptable,
    ecritures,
    classecomptable,
    pcga,
    ligneecriture
WHERE
    exercicecomptable.idExerciceComptable = ecritures.idExerciceComptable AND ecritures.idEcriture = ligneecriture.idEcriture AND classecomptable.idClasseComptable = pcga.idClasseComptable AND pcga.idPCGA = ligneecriture.idPCGA; 
	