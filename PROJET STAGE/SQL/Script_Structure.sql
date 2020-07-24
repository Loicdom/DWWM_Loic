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
        enregFact   Varchar (100) DEFAULT NULL
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
		typeEcriture		Varchar (10) NOT NULL ,
        dateEcriture        Date NOT NULL ,
        libelleEcriture     Varchar (100) NOT NULL ,
        lettrage            Varchar (100) DEFAULT NULL ,
        idFacture           Int ,
        idExerciceComptable Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Villes
#------------------------------------------------------------

CREATE TABLE Villes(
        idVille     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleVille     Varchar (50) NOT NULL 
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
        enregDocument   Varchar (100) DEFAULT NULL
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
        numCompte         Varchar (10) NOT NULL ,
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
        idPCGA             Int DEFAULT NULL

)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Evenements
#------------------------------------------------------------

CREATE TABLE Evenements(
        idEvenement      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        codeEvenement    Varchar (10) NOT NULL ,
        libelleEvenement Varchar (50) NOT NULL ,
        idPCGA             Int DEFAULT NULL

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


ALTER TABLE Evenements ADD CONSTRAINT Evenements_PCGA_FK FOREIGN KEY (idPCGA) REFERENCES PCGA(idPCGA);
ALTER TABLE Personnes ADD CONSTRAINT Personnes_Villes_FK FOREIGN KEY (idVille) REFERENCES Villes(idVille);
ALTER TABLE LigneEcriture ADD CONSTRAINT ligneEcriture_Ecritures_FK FOREIGN KEY (idEcriture) REFERENCES Ecritures(idEcriture);
ALTER TABLE LigneEcriture ADD CONSTRAINT ligneEcriture_PCGA0_FK FOREIGN KEY (idPCGA) REFERENCES PCGA(idPCGA);
ALTER TABLE Fournisseurs ADD CONSTRAINT Fournisseurs_PCGA_FK FOREIGN KEY (idPCGA) REFERENCES PCGA(idPCGA);
ALTER TABLE PCGA ADD CONSTRAINT PCGA_ClasseComptable_FK FOREIGN KEY (idClasseComptable) REFERENCES ClasseComptable(idClasseComptable);
ALTER TABLE Ecritures ADD CONSTRAINT Ecritures_Factures_FK FOREIGN KEY (idFacture) REFERENCES Factures(idFacture);
ALTER TABLE Ecritures ADD CONSTRAINT Ecritures_ExerciceComptable0_FK FOREIGN KEY (idExerciceComptable) REFERENCES ExerciceComptable(idExerciceComptable)

CREATE VIEW ecrituresComptable AS SELECT
    factures.idFacture,
    factures.libelleFact,
    factures.enregFact,
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
    factures,
    exercicecomptable,
    ecritures,
    classecomptable,
    pcga,
    ligneecriture
WHERE
    factures.idFacture = ecritures.idFacture AND exercicecomptable.idExerciceComptable = ecritures.idExerciceComptable AND ecritures.idEcriture = ligneecriture.idEcriture AND classecomptable.idClasseComptable = pcga.idClasseComptable AND pcga.idPCGA = ligneecriture.idPCGA; 
	