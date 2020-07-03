<?php
class EcrituresManager
{
    public static function add(Ecritures $obj) // ajoute une écriture
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Ecritures (dateEcriture,libelleEcriture,lettrage,solde,idFacture,idExerciceComptable) VALUES (:dateEcriture,:libelleEcriture,:lettrage,:solde,:idFacture,:idExerciceComptable)");
        $q->bindValue(":dateEcriture", $obj->getDateEcriture());
        $q->bindValue(":libelleEcriture", $obj->getLibelleEcriture());
        $q->bindValue(":lettrage", $obj->getLettrage());
        $q->bindValue(":solde", $obj->getSolde());
        $q->bindValue(":idFacture", $obj->getIdFacture());
        $q->bindValue(":idExerciceComptable", $obj->getIdExerciceComptable());
        $q->execute();
    }

    public static function update(Ecritures $obj) // modifie une écriture
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Ecritures SET dateEcriture=:dateEcriture, libelleEcriture=:libelleEcriture, lettrage=:lettrage, solde=:solde, idFacture=:idFacture, idExerciceComptable=:idExerciceComptable WHERE idEcriture=:idEcriture");
        $q->bindValue(":dateEcriture", $obj->getDateEcriture());
        $q->bindValue(":libelleEcriture", $obj->getLibelleEcriture());
        $q->bindValue(":lettrage", $obj->getLettrage());
        $q->bindValue(":solde", $obj->getSolde());
        $q->bindValue(":idFacture", $obj->getIdFacture());
        $q->bindValue(":idExerciceComptable", $obj->getIdExerciceComptable());
        $q->bindValue(":idEcriture", $obj->getIdEcriture());
        $q->execute();
    }

    public static function delete($id) //Pour supprimer une écriture
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Ecritures WHERE idEcriture= $id");
    }

    public static function getById($id) // Pour trouver une écriture en particulier (avec l'Id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Ecritures WHERE idEcriture=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Ecritures($results);
        } else {
            return false;
        }
    }

    public static function getList() // Ramène une liste de toutes les écritures
    {
        $db = DbConnect::getDb();
        $ecritures = [];
        $q = $db->query("SELECT * FROM Ecritures");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ecritures[] = new Ecritures($donnees);
            }
        }
        return $ecritures;
    }

    public static function getByCritere()  // pour faire une recherche multicritere
    {
        
    }

    
}
