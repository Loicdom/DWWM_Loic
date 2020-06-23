<?php
class PersonnesManager
{
    public static function addBenevole(Personnes $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Personnes (nomPersonne,prenomPersonne,dateNaissPersonne,lieuNaissPersonne,adressePersonne,cpPersonne,villePersonne,emailPersonne,telPersonne,autorisationPhotos,bafaAquisBenevole,casierJudiciaire,paiementInscription,nomRepresentantLegal,prenomRepresentantLegal,remarquePersonne,contratEmploye,typePersonne) VALUES (:nomPersonne,:prenomPersonne,:dateNaissPersonne,:lieuNaissPersonne,:adressePersonne,:cpPersonne,:villePersonne,:emailPersonne,:telPersonne,:autorisationPhotos,:bafaAquisBenevole,:casierJudiciaire,:paiementInscription,:nomRepresentantLegal,:prenomRepresentantLegal,:remarquePersonne,:contratEmploye,:typePersonne)");
        $q->bindValue(":nomPersonne", $obj->getNomPersonne());
        $q->bindValue(":prenomPersonne", $obj->getPrenomPersonne());
        $q->bindValue(":dateNaissPersonne", $obj->getDateNaissPersonne());
        $q->bindValue(":lieuNaissPersonne", $obj->getLieuNaissPersonne());
        $q->bindValue(":adressePersonne", $obj->getAdressePersonne());
        $q->bindValue(":cpPersonne", $obj->getCpPersonne());
        $q->bindValue(":villePersonne", $obj->getVillePersonne());
        $q->bindValue(":emailPersonne", $obj->getEmailPersonne());
        $q->bindValue(":telPersonne", $obj->getTelPersonne());
        $q->bindValue(":autorisationPhotos", $obj->getAutorisationPhotos());
        $q->bindValue(":bafaAquisBenevole", $obj->getBafaAquisBenevole());
        $q->bindValue(":casierJudiciaire", $obj->getCasierJudiciaire());
        $q->bindValue(":paiementInscription", $obj->getPaiementInscription());
        $q->bindValue(":nomRepresentantLegal", $obj->getNomRepresentantLegal());
        $q->bindValue(":prenomRepresentantLegal", $obj->getPrenomRepresentantLegal());
        $q->bindValue(":remarquePersonne", $obj->getRemarquePersonne());
        $q->bindValue(":contratEmploye", $obj->getContratEmploye());
        $q->bindValue(":typePersonne", "Bénévole");
        $q->execute();
    }

    public static function addEnfant(Personnes $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Personnes (nomPersonne,prenomPersonne,dateNaissPersonne,lieuNaissPersonne,adressePersonne,cpPersonne,villePersonne,emailPersonne,telPersonne,autorisationPhotos,bafaAquisBenevole,casierJudiciaire,paiementInscription,nomRepresentantLegal,prenomRepresentantLegal,remarquePersonne,contratEmploye,typePersonne) VALUES (:nomPersonne,:prenomPersonne,:dateNaissPersonne,:lieuNaissPersonne,:adressePersonne,:cpPersonne,:villePersonne,:emailPersonne,:telPersonne,:autorisationPhotos,:bafaAquisBenevole,:casierJudiciaire,:paiementInscription,:nomRepresentantLegal,:prenomRepresentantLegal,:remarquePersonne,:contratEmploye,:typePersonne)");
        $q->bindValue(":nomPersonne", $obj->getNomPersonne());
        $q->bindValue(":prenomPersonne", $obj->getPrenomPersonne());
        $q->bindValue(":dateNaissPersonne", $obj->getDateNaissPersonne());
        $q->bindValue(":lieuNaissPersonne", $obj->getLieuNaissPersonne());
        $q->bindValue(":adressePersonne", $obj->getAdressePersonne());
        $q->bindValue(":cpPersonne", $obj->getCpPersonne());
        $q->bindValue(":villePersonne", $obj->getVillePersonne());
        $q->bindValue(":emailPersonne", $obj->getEmailPersonne());
        $q->bindValue(":telPersonne", $obj->getTelPersonne());
        $q->bindValue(":autorisationPhotos", $obj->getAutorisationPhotos());
        $q->bindValue(":bafaAquisBenevole", $obj->getBafaAquisBenevole());
        $q->bindValue(":casierJudiciaire", $obj->getCasierJudiciaire());
        $q->bindValue(":paiementInscription", $obj->getPaiementInscription());
        $q->bindValue(":nomRepresentantLegal", $obj->getNomRepresentantLegal());
        $q->bindValue(":prenomRepresentantLegal", $obj->getPrenomRepresentantLegal());
        $q->bindValue(":remarquePersonne", $obj->getRemarquePersonne());
        $q->bindValue(":contratEmploye", $obj->getContratEmploye());
        $q->bindValue(":typePersonne", "Enfant");
        $q->execute();
    }

    public static function updateBenevole(Personnes $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Personnes SET nomPersonne=:nomPersonne, prenomPersonne=:prenomPersonne, dateNaissPersonne=:dateNaissPersonne, lieuNaissPersonne=:lieuNaissPersonne, adressePersonne=:adressePersonne, cpPersonne=:cpPersonne, villePersonne=:villePersonne, emailPersonne=:emailPersonne, telPersonne=:telPersonne, autorisationPhotos=:autorisationPhotos, bafaAquisBenevole=:bafaAquisBenevole, casierJudiciaire=:casierJudiciaire, paiementInscription=:paiementInscription, nomRepresentantLegal=:nomRepresentantLegal, prenomRepresentantLegal=:prenomRepresentantLegal, remarquePersonne=:remarquePersonne, contratEmploye=:contratEmploye, typePersonne=:typePersonne WHERE idPersonne=:idPersonne");
        $q->bindValue(":nomPersonne", $obj->getNomPersonne());
        $q->bindValue(":prenomPersonne", $obj->getPrenomPersonne());
        $q->bindValue(":dateNaissPersonne", $obj->getDateNaissPersonne());
        $q->bindValue(":lieuNaissPersonne", $obj->getLieuNaissPersonne());
        $q->bindValue(":adressePersonne", $obj->getAdressePersonne());
        $q->bindValue(":cpPersonne", $obj->getCpPersonne());
        $q->bindValue(":villePersonne", $obj->getVillePersonne());
        $q->bindValue(":emailPersonne", $obj->getEmailPersonne());
        $q->bindValue(":telPersonne", $obj->getTelPersonne());
        $q->bindValue(":autorisationPhotos", $obj->getAutorisationPhotos());
        $q->bindValue(":bafaAquisBenevole", $obj->getBafaAquisBenevole());
        $q->bindValue(":casierJudiciaire", $obj->getCasierJudiciaire());
        $q->bindValue(":paiementInscription", $obj->getPaiementInscription());
        $q->bindValue(":nomRepresentantLegal", $obj->getNomRepresentantLegal());
        $q->bindValue(":prenomRepresentantLegal", $obj->getPrenomRepresentantLegal());
        $q->bindValue(":remarquePersonne", $obj->getRemarquePersonne());
        $q->bindValue(":contratEmploye", $obj->getContratEmploye());
        $q->bindValue(":typePersonne", "Bénévole");
        $q->bindValue(":idPersonne", $obj->getIdPersonne());
        $q->execute();
    }

    public static function updateEnfant(Personnes $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Personnes SET nomPersonne=:nomPersonne, prenomPersonne=:prenomPersonne, dateNaissPersonne=:dateNaissPersonne, lieuNaissPersonne=:lieuNaissPersonne, adressePersonne=:adressePersonne, cpPersonne=:cpPersonne, villePersonne=:villePersonne, emailPersonne=:emailPersonne, telPersonne=:telPersonne, autorisationPhotos=:autorisationPhotos, bafaAquisBenevole=:bafaAquisBenevole, casierJudiciaire=:casierJudiciaire, paiementInscription=:paiementInscription, nomRepresentantLegal=:nomRepresentantLegal, prenomRepresentantLegal=:prenomRepresentantLegal, remarquePersonne=:remarquePersonne, contratEmploye=:contratEmploye, typePersonne=:typePersonne WHERE idPersonne=:idPersonne");
        $q->bindValue(":nomPersonne", $obj->getNomPersonne());
        $q->bindValue(":prenomPersonne", $obj->getPrenomPersonne());
        $q->bindValue(":dateNaissPersonne", $obj->getDateNaissPersonne());
        $q->bindValue(":lieuNaissPersonne", $obj->getLieuNaissPersonne());
        $q->bindValue(":adressePersonne", $obj->getAdressePersonne());
        $q->bindValue(":cpPersonne", $obj->getCpPersonne());
        $q->bindValue(":villePersonne", $obj->getVillePersonne());
        $q->bindValue(":emailPersonne", $obj->getEmailPersonne());
        $q->bindValue(":telPersonne", $obj->getTelPersonne());
        $q->bindValue(":autorisationPhotos", $obj->getAutorisationPhotos());
        $q->bindValue(":bafaAquisBenevole", $obj->getBafaAquisBenevole());
        $q->bindValue(":casierJudiciaire", $obj->getCasierJudiciaire());
        $q->bindValue(":paiementInscription", $obj->getPaiementInscription());
        $q->bindValue(":nomRepresentantLegal", $obj->getNomRepresentantLegal());
        $q->bindValue(":prenomRepresentantLegal", $obj->getPrenomRepresentantLegal());
        $q->bindValue(":remarquePersonne", $obj->getRemarquePersonne());
        $q->bindValue(":contratEmploye", $obj->getContratEmploye());
        $q->bindValue(":typePersonne","Enfant");
        $q->bindValue(":idPersonne", $obj->getIdPersonne());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Personnes WHERE idPersonne=$id");
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Personnes WHERE idPersonne=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Personnes($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $personnes = [];
        $q = $db->query("SELECT * FROM Personnes");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $personnes[] = new Personnes($donnees);
            }
        }
        return $personnes;
    }

    public static function getListByBenevole()
    {
        $db = DbConnect::getDb();
        $personnes = [];
        $q = $db->query("SELECT * FROM Personnes WHERE typePersonne='Bénévole'");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $personnes[] = new Personnes($donnees);
            }
        }
        return $personnes;
    }

    public static function getListByEnfant()
    {
        $db = DbConnect::getDb();
        $personnes = [];
        $q = $db->query("SELECT * FROM Personnes WHERE typePersonne='Enfant'");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $personnes[] = new Personnes($donnees);
            }
        }
        return $personnes;
    }

    public static function getListByEmploye()
    {
        $db = DbConnect::getDb();
        $personnes = [];
        $q = $db->query("SELECT * FROM Personnes WHERE typePersonne='Employé'");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $personnes[] = new Personnes($donnees);
            }
        }
        return $personnes;
    }
}
