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
        enregFact   Mediumblob DEFAULT NULL
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
        lettrage            Varchar (100) DEFAULT NULL ,
        solde               Decimal (6,2) NOT NULL ,
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
        enregDocument   Mediumblob DEFAULT NULL
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
        dansBilan         Varchar (50) DEFAULT NULL ,
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
        idPersonne              Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomPersonne             Varchar (50) NOT NULL ,
        prenomPersonne          Varchar (50) NOT NULL ,
        dateNaissPersonne       Date NOT NULL ,
        lieuNaissPersonne       Varchar (50) NOT NULL ,
        adressePersonne         Varchar (100) NOT NULL ,
        cpPersonne              Int NOT NULL ,
        villePersonne           Varchar (50) NOT NULL ,
        emailPersonne           Varchar (50) NOT NULL ,
        telPersonne             Varchar (50) NOT NULL ,
        autorisationPhotos      Varchar (10) NOT NULL ,
        bafaAquisBenevole       Varchar (10) DEFAULT NULL ,
        casierJudiciaire        Mediumblob DEFAULT NULL ,
        paiementInscription     Varchar (50) DEFAULT NULL ,
        nomRepresentantLegal    Varchar (50) DEFAULT NULL ,
        prenomRepresentantLegal Varchar (50) DEFAULT NULL ,
        remarquePersonne        Varchar (100) DEFAULT NULL ,
        contratEmploye          Mediumblob DEFAULT NULL ,
        typePersonne            Varchar (20) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LigneEcriture
#------------------------------------------------------------

CREATE TABLE LigneEcriture(
        idLigneEcriture  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        montant    Decimal (6,2) NOT NULL ,
        sens       Varchar (100) NOT NULL ,
        idEcriture Int NOT NULL ,
        idPCGA     Int NOT NULL 

)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Budgets
#------------------------------------------------------------

CREATE TABLE Budgets(
        idBudget                 Int  Auto_increment  NOT NULL PRIMARY KEY ,
        fournitureAtelierCreatif Int NOT NULL ,
        atelierCuisineGouter     Int NOT NULL ,
        petitMateriel            Int NOT NULL ,
        salaireEmploye           Int NOT NULL ,
        assurance                Int NOT NULL ,
        fraisPostauxTel          Int NOT NULL ,
        entretienMaterielJadin   Int NOT NULL ,
        produitEntretien         Int NOT NULL ,
        fraisBancaires           Int NOT NULL ,
        ursaff                   Int NOT NULL ,
        subvMunicipale           Int NOT NULL ,
        participationFamille     Int NOT NULL ,
        produitManif             Int NOT NULL ,
        anniversaire             Int NOT NULL ,
        adhesion                 Int NOT NULL ,
        participationIME         Int NOT NULL 
)ENGINE=InnoDB;




ALTER TABLE LigneEcriture ADD CONSTRAINT ligneEcriture_Ecritures_FK FOREIGN KEY (idEcriture) REFERENCES Ecritures(idEcriture);
ALTER TABLE LigneEcriture ADD CONSTRAINT ligneEcriture_PCGA0_FK FOREIGN KEY (idPCGA) REFERENCES PCGA(idPCGA);
ALTER TABLE Fournisseurs ADD CONSTRAINT Fournisseurs_PCGA_FK FOREIGN KEY (idPCGA) REFERENCES PCGA(idPCGA);
ALTER TABLE PCGA ADD CONSTRAINT PCGA_ClasseComptable_FK FOREIGN KEY (idClasseComptable) REFERENCES ClasseComptable(idClasseComptable);
ALTER TABLE Ecritures ADD CONSTRAINT Ecritures_Factures_FK FOREIGN KEY (idFacture) REFERENCES Factures(idFacture);
ALTER TABLE Ecritures ADD CONSTRAINT Ecritures_ExerciceComptable0_FK FOREIGN KEY (idExerciceComptable) REFERENCES ExerciceComptable(idExerciceComptable);
