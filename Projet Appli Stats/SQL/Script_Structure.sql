#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `STATSBASKET` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `STATSBASKET`;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

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
# Table: Niveaux
#------------------------------------------------------------

DROP TABLE IF EXISTS `Niveaux`;
CREATE TABLE IF NOT EXISTS Niveaux(
        idNiveau      	Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleNiveau	Varchar (100) NOT NULL 
)ENGINE=InnoDB;



#------------------------------------------------------------
# Table: Equipes
#------------------------------------------------------------

DROP TABLE IF EXISTS `Equipes`;
CREATE TABLE IF NOT EXISTS Equipes(
        idEquipe 	Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomEquipe 	Varchar (100) NOT NULL ,
        idNiveau 	Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Joueurs
#------------------------------------------------------------

DROP TABLE IF EXISTS `Joueurs`;
CREATE TABLE IF NOT EXISTS Joueurs(
        idJoueur     	Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomJoueur      	Varchar (100) NOT NULL ,
        prenomJoueur  	Varchar (100) NOT NULL ,
        posteJoueur   	Varchar (50) DEFAULT NULL ,
        tailleJoueur	Int NOT NULL ,
		numJoueur 		Int NOT NULL ,
		typeJoueur 		Int NOT NULL ,
		idEquipe 		Int NOT NULL 

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Annee
#------------------------------------------------------------

DROP TABLE IF EXISTS `Annee`;
CREATE TABLE IF NOT EXISTS Annee(
        idAnnee      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleAnnee Varchar (50) NOT NULL 

)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Stats
#------------------------------------------------------------

DROP TABLE IF EXISTS `Stats`;
CREATE TABLE IF NOT EXISTS Stats(
        idStat              Int  Auto_increment  NOT NULL PRIMARY KEY ,
        dateStat          	Date NOT NULL ,
        minuteJouer        	TIME DEFAULT NULL ,
        deuxPointTente  	Int NOT NULL ,
        deuxPointMarque 	Int NOT NULL ,
        troisPointTente 	Int NOT NULL ,
        troisPointMarque   	Int NOT NULL ,
        lancerFrancTente  	Int NOT NULL ,
        lancerFrancMarque	Int NOT NULL ,
        rebondDef      		Int NOT NULL ,
        rebondOff       	Int NOT NULL ,
        passeDec        	Int NOT NULL ,
        ballePerdue     	Int NOT NULL ,
        interception    	Int NOT NULL ,
        contreRealise 		Int NOT NULL ,
        contreSubit        	Int NOT NULL ,
        fautePerso          Int NOT NULL ,
		fauteProv           Int NOT NULL ,
		pointMarque       	Int NOT NULL ,
		evaluation         	Int NOT NULL ,
		idJoueur     		Int NOT NULL 
)ENGINE=InnoDB;

#------------------------------------------------------------


ALTER TABLE Stats ADD CONSTRAINT Stats_Joueurs_FK FOREIGN KEY (idJoueur) REFERENCES Joueurs(idJoueur);
ALTER TABLE Joueurs ADD CONSTRAINT Joueurs_Equipes_FK FOREIGN KEY (idEquipe) REFERENCES Equipes(idEquipe);
ALTER TABLE Equipes ADD CONSTRAINT Equipes_Niveaux_FK FOREIGN KEY (idNiveau) REFERENCES Niveaux(idNiveau)

	