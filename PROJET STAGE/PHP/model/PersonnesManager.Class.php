<?php
class PersonnesManager
{
    public static function addBenevole(Personnes $obj) // Pour l'ajout d'un bénévole
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Personnes (nomPersonne,prenomPersonne,dateNaissPersonne,lieuNaissPersonne,adressePersonne,cpPersonne,emailPersonne,telPersonne,autorisationPhotos,bafaAquisBenevole,casierJudiciaire,paiementInscription,nomRepresentantLegal,prenomRepresentantLegal,remarquePersonne,typePersonne,idVille) VALUES (:nomPersonne,:prenomPersonne,:dateNaissPersonne,:lieuNaissPersonne,:adressePersonne,:cpPersonne,:emailPersonne,:telPersonne,:autorisationPhotos,:bafaAquisBenevole,:casierJudiciaire,:paiementInscription,:nomRepresentantLegal,:prenomRepresentantLegal,:remarquePersonne,:typePersonne,:idVille)");
        $q->bindValue(":nomPersonne", $obj->getNomPersonne());
        $q->bindValue(":prenomPersonne", $obj->getPrenomPersonne());
        $q->bindValue(":dateNaissPersonne", $obj->getDateNaissPersonne());
        $q->bindValue(":lieuNaissPersonne", $obj->getLieuNaissPersonne());
        $q->bindValue(":adressePersonne", $obj->getAdressePersonne());
        $q->bindValue(":cpPersonne", $obj->getCpPersonne());
        $q->bindValue(":emailPersonne", $obj->getEmailPersonne());
        $q->bindValue(":telPersonne", $obj->getTelPersonne());
        $q->bindValue(":autorisationPhotos", $obj->getAutorisationPhotos());
        $q->bindValue(":bafaAquisBenevole", $obj->getBafaAquisBenevole());
        $q->bindValue(":casierJudiciaire", $obj->getCasierJudiciaire());
        $q->bindValue(":paiementInscription", $obj->getPaiementInscription());
        $q->bindValue(":nomRepresentantLegal", $obj->getNomRepresentantLegal());
        $q->bindValue(":prenomRepresentantLegal", $obj->getPrenomRepresentantLegal());
        $q->bindValue(":remarquePersonne", $obj->getRemarquePersonne());
        $q->bindValue(":typePersonne", $obj->getTypePersonne());
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->execute();
    }

    public static function addEnfant(Personnes $obj) // Pour l'ajout d'un enfant
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Personnes (nomPersonne,prenomPersonne,dateNaissPersonne,lieuNaissPersonne,adressePersonne,cpPersonne,emailPersonne,telPersonne,autorisationPhotos,bafaAquisBenevole,casierJudiciaire,paiementInscription,nomRepresentantLegal,prenomRepresentantLegal,remarquePersonne,typePersonne,idVille) VALUES (:nomPersonne,:prenomPersonne,:dateNaissPersonne,:lieuNaissPersonne,:adressePersonne,:cpPersonne,:emailPersonne,:telPersonne,:autorisationPhotos,:bafaAquisBenevole,:casierJudiciaire,:paiementInscription,:nomRepresentantLegal,:prenomRepresentantLegal,:remarquePersonne,:typePersonne,:idVille)");
        $q->bindValue(":nomPersonne", $obj->getNomPersonne());
        $q->bindValue(":prenomPersonne", $obj->getPrenomPersonne());
        $q->bindValue(":dateNaissPersonne", $obj->getDateNaissPersonne());
        $q->bindValue(":lieuNaissPersonne", $obj->getLieuNaissPersonne());
        $q->bindValue(":adressePersonne", $obj->getAdressePersonne());
        $q->bindValue(":cpPersonne", $obj->getCpPersonne());
        $q->bindValue(":emailPersonne", $obj->getEmailPersonne());
        $q->bindValue(":telPersonne", $obj->getTelPersonne());
        $q->bindValue(":autorisationPhotos", $obj->getAutorisationPhotos());
        $q->bindValue(":bafaAquisBenevole", $obj->getBafaAquisBenevole());
        $q->bindValue(":casierJudiciaire", $obj->getCasierJudiciaire());
        $q->bindValue(":paiementInscription", $obj->getPaiementInscription());
        $q->bindValue(":nomRepresentantLegal", $obj->getNomRepresentantLegal());
        $q->bindValue(":prenomRepresentantLegal", $obj->getPrenomRepresentantLegal());
        $q->bindValue(":remarquePersonne", $obj->getRemarquePersonne());
        $q->bindValue(":typePersonne", $obj->getTypePersonne());
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->execute();
    }

    public static function updateBenevole(Personnes $obj) // Pour modifier les informations d'un bénévole
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Personnes SET nomPersonne=:nomPersonne, prenomPersonne=:prenomPersonne, dateNaissPersonne=:dateNaissPersonne, lieuNaissPersonne=:lieuNaissPersonne, adressePersonne=:adressePersonne, cpPersonne=:cpPersonne, emailPersonne=:emailPersonne, telPersonne=:telPersonne, autorisationPhotos=:autorisationPhotos, bafaAquisBenevole=:bafaAquisBenevole, casierJudiciaire=:casierJudiciaire, paiementInscription=:paiementInscription, nomRepresentantLegal=:nomRepresentantLegal, prenomRepresentantLegal=:prenomRepresentantLegal, remarquePersonne=:remarquePersonne, typePersonne=:typePersonne, idVille=:idVille WHERE idPersonne=:idPersonne");
        $q->bindValue(":nomPersonne", $obj->getNomPersonne());
        $q->bindValue(":prenomPersonne", $obj->getPrenomPersonne());
        $q->bindValue(":dateNaissPersonne", $obj->getDateNaissPersonne());
        $q->bindValue(":lieuNaissPersonne", $obj->getLieuNaissPersonne());
        $q->bindValue(":adressePersonne", $obj->getAdressePersonne());
        $q->bindValue(":cpPersonne", $obj->getCpPersonne());
        $q->bindValue(":emailPersonne", $obj->getEmailPersonne());
        $q->bindValue(":telPersonne", $obj->getTelPersonne());
        $q->bindValue(":autorisationPhotos", $obj->getAutorisationPhotos());
        $q->bindValue(":bafaAquisBenevole", $obj->getBafaAquisBenevole());
        $q->bindValue(":casierJudiciaire", $obj->getCasierJudiciaire());
        $q->bindValue(":paiementInscription", $obj->getPaiementInscription());
        $q->bindValue(":nomRepresentantLegal", $obj->getNomRepresentantLegal());
        $q->bindValue(":prenomRepresentantLegal", $obj->getPrenomRepresentantLegal());
        $q->bindValue(":remarquePersonne", $obj->getRemarquePersonne());
        $q->bindValue(":typePersonne", $obj->getTypePersonne());
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->bindValue(":idPersonne", $obj->getIdPersonne());
        $q->execute();
    }

    public static function updateEnfant(Personnes $obj) // Pour modifier les informations d'un enfant
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Personnes SET nomPersonne=:nomPersonne, prenomPersonne=:prenomPersonne, dateNaissPersonne=:dateNaissPersonne, lieuNaissPersonne=:lieuNaissPersonne, adressePersonne=:adressePersonne, cpPersonne=:cpPersonne, emailPersonne=:emailPersonne, telPersonne=:telPersonne, autorisationPhotos=:autorisationPhotos, bafaAquisBenevole=:bafaAquisBenevole, casierJudiciaire=:casierJudiciaire, paiementInscription=:paiementInscription, nomRepresentantLegal=:nomRepresentantLegal, prenomRepresentantLegal=:prenomRepresentantLegal, remarquePersonne=:remarquePersonne, typePersonne=:typePersonne, idVille=:idVille WHERE idPersonne=:idPersonne");
        $q->bindValue(":nomPersonne", $obj->getNomPersonne());
        $q->bindValue(":prenomPersonne", $obj->getPrenomPersonne());
        $q->bindValue(":dateNaissPersonne", $obj->getDateNaissPersonne());
        $q->bindValue(":lieuNaissPersonne", $obj->getLieuNaissPersonne());
        $q->bindValue(":adressePersonne", $obj->getAdressePersonne());
        $q->bindValue(":cpPersonne", $obj->getCpPersonne());
        $q->bindValue(":emailPersonne", $obj->getEmailPersonne());
        $q->bindValue(":telPersonne", $obj->getTelPersonne());
        $q->bindValue(":autorisationPhotos", $obj->getAutorisationPhotos());
        $q->bindValue(":bafaAquisBenevole", $obj->getBafaAquisBenevole());
        $q->bindValue(":casierJudiciaire", $obj->getCasierJudiciaire());
        $q->bindValue(":paiementInscription", $obj->getPaiementInscription());
        $q->bindValue(":nomRepresentantLegal", $obj->getNomRepresentantLegal());
        $q->bindValue(":prenomRepresentantLegal", $obj->getPrenomRepresentantLegal());
        $q->bindValue(":remarquePersonne", $obj->getRemarquePersonne());
        $q->bindValue(":typePersonne", $obj->getTypePersonne());
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->bindValue(":idPersonne", $obj->getIdPersonne());
        $q->execute();
    }

    public static function delete($id) // Pour supprimer une personne de la bdd
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Personnes WHERE idPersonne=$id");
    }

    public static function getById($id) // Ramène une personne en particulier (avec l'Id)
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

    public static function getList() // ramène la liste de toute les personnes
    {
        $db = DbConnect::getDb();
        $personnes = [];
        $q = $db->query("SELECT * FROM Personnes ORDER BY nomPersonne");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $personnes[] = new Personnes($donnees);
            }
        }
        return $personnes;
    }

    public static function getListByBenevole() // Ramène la liste des bénévoles
    {
        $db = DbConnect::getDb();
        $personnes = [];
        $q = $db->query("SELECT * FROM Personnes WHERE typePersonne='Bénévole' ORDER BY nomPersonne");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $personnes[] = new Personnes($donnees);
            }
        }
        return $personnes;
    }

    public static function getListByEnfant() //Ramène la liste des enfants
    {
        $db = DbConnect::getDb();
        $personnes = [];
        $q = $db->query("SELECT * FROM Personnes WHERE typePersonne='Enfant' ORDER BY nomPersonne");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $personnes[] = new Personnes($donnees);
            }
        }
        return $personnes;
    }

}
