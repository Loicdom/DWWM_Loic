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

CREATE TABLE Factures(
        idFacture   Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleFact Varchar (100) NOT NULL ,
        enregFact   Mediumblob NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ExerciceComptable
#------------------------------------------------------------

CREATE TABLE ExerciceComptable(
        idExerciceComptable Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleExercice     Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ecritures
#------------------------------------------------------------

CREATE TABLE Ecritures(
        idEcriture          Int  Auto_increment  NOT NULL PRIMARY KEY ,
        dateEcriture        Date NOT NULL ,
        libelleEcriture     Varchar (100) NOT NULL ,
        lettrage            Varchar (100) NOT NULL ,
        idFacture           Int ,
        idExerciceComptable Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        idUser     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        pseudo     Varchar (50) NOT NULL ,
        motDePasse Varchar (100) NOT NULL ,
        role       Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Documents
#------------------------------------------------------------

CREATE TABLE Documents(
        idDocument      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleDocument Varchar (100) NOT NULL ,
        enregDocument   Mediumblob NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ClasseComptable
#------------------------------------------------------------

CREATE TABLE ClasseComptable(
        idClasseComptable      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        numeroClasseComptable  Int NOT NULL ,
        libelleClasseComptable Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PCGA
#------------------------------------------------------------

CREATE TABLE PCGA(
        idPCGA            Int  Auto_increment  NOT NULL PRIMARY KEY ,
        numCompte         Int NOT NULL ,
        libelleCompte     Varchar (100) NOT NULL ,
        dansBilan         Varchar (50) NOT NULL ,
        idClasseComptable Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Fournisseurs
#------------------------------------------------------------

CREATE TABLE Fournisseurs(
        idFournisseur      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        codeFournisseur    Varchar (10) NOT NULL ,
        libelleFournisseur Varchar (50) NOT NULL ,
        idPCGA             Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Personnes
#------------------------------------------------------------

CREATE TABLE Personnes(
        idPersonne          Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomPersonne         Varchar (50) NOT NULL ,
        prenomPersonne      Varchar (50) NOT NULL ,
        dateNaissPersonne   Date NOT NULL ,
        adressePersonne     Varchar (100) NOT NULL ,
        cpPersonne          Int NOT NULL ,
        villePersonne       Varchar (50) NOT NULL ,
        emailPersonne       Varchar (50) NOT NULL ,
        telPersonne         Varchar (50) NOT NULL ,
        infosParent         Varchar (100) NOT NULL ,
        bafaAquisBenevole   Varchar (10) NOT NULL ,
        commentairePersonne Varchar (100) NOT NULL ,
        contratEmploye      Mediumblob NOT NULL ,
        typePersonne        Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LigneEcriture
#------------------------------------------------------------

CREATE TABLE LigneEcriture(
        idLigneEcriture Int NOT NULL PRIMARY KEY ,
        montant    Varchar (100) NOT NULL ,
        sens       Varchar (100) NOT NULL

)ENGINE=InnoDB;



ALTER TABLE LigneEcriture ADD CONSTRAINT ligneEcriture_Ecritures_FK FOREIGN KEY (idEcriture) REFERENCES Ecritures(idEcriture);
ALTER TABLE LigneEcriture ADD CONSTRAINT ligneEcriture_PCGA0_FK FOREIGN KEY (idPCGA) REFERENCES PCGA(idPCGA);
ALTER TABLE Fournisseurs ADD CONSTRAINT Fournisseurs_PCGA_FK FOREIGN KEY (idPCGA) REFERENCES PCGA(idPCGA);
ALTER TABLE PCGA ADD CONSTRAINT PCGA_ClasseComptable_FK FOREIGN KEY (idClasseComptable) REFERENCES ClasseComptable(idClasseComptable);
ALTER TABLE Ecritures ADD CONSTRAINT Ecritures_Factures_FK FOREIGN KEY (idFacture) REFERENCES Factures(idFacture);
ALTER TABLE Ecritures ADD CONSTRAINT Ecritures_ExerciceComptable0_FK FOREIGN KEY (idExerciceComptable) REFERENCES ExerciceComptable(idExerciceComptable);
