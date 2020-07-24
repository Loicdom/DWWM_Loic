<?php
class EcrituresManager
{
    public static function add(Ecritures $obj) // ajoute une écriture
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Ecritures (typeEcriture,dateEcriture,libelleEcriture,lettrage,idFacture,idExerciceComptable) VALUES (:typeEcriture,:dateEcriture,:libelleEcriture,:lettrage,:idFacture,:idExerciceComptable)");
        $q->bindValue(":typeEcriture", $obj->getTypeEcriture());
        $q->bindValue(":dateEcriture", $obj->getDateEcriture());
        $q->bindValue(":libelleEcriture", $obj->getLibelleEcriture());
        $q->bindValue(":lettrage", $obj->getLettrage());
        $q->bindValue(":idFacture", $obj->getIdFacture());
        $q->bindValue(":idExerciceComptable", $obj->getIdExerciceComptable());
        $q->execute();
    }

    public static function update(Ecritures $obj) // modifie une écriture
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Ecritures SET typeEcriture=:typeEcriture, dateEcriture=:dateEcriture, libelleEcriture=:libelleEcriture, lettrage=:lettrage, idFacture=:idFacture, idExerciceComptable=:idExerciceComptable WHERE idEcriture=:idEcriture");
        $q->bindValue(":typeEcriture", $obj->getTypeEcriture());
        $q->bindValue(":dateEcriture", $obj->getDateEcriture());
        $q->bindValue(":libelleEcriture", $obj->getLibelleEcriture());
        $q->bindValue(":lettrage", $obj->getLettrage());
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

    public static function getList($years) // Ramène une liste de toutes les écritures
    {
        $db = DbConnect::getDb();
        $ecritures = [];
        $q = $db->query("SELECT * FROM Ecritures WHERE idExerciceComptable=$years");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ecritures[] = new Ecritures($donnees);
            }
        }
        return $ecritures;
    }

    Public static function getMaxIdEcriture(){
        //--- Récupérer le dernier id dans une table ---//
        $db = DbConnect::getDb();
        $max = $db->query('SELECT MAX(idEcriture) id FROM Ecritures');
        $result = $max->fetch();
        return $result['id'];
    }

    public static function getByCritere()  // pour faire une recherche multicritere
    {
        // on récupère les critères sélectionnés
        extract($_POST);

        $i = 0;

        // si la variable est présente, on lui affecte une place dans le tableau 'choix[]', qui nous servira ensuite à construire le WHERE de la requête.
        if (!empty($dateEcriture)) {
            $choix[$i++] = "dateEcriture = '$dateEcriture'";
        }
        if (!empty($libelleEcriture)) {
            $choix[$i++] = "libelleEcriture = '$libelleEcriture'";
        }
        if (!empty($lettrage)) {
            $choix[$i++] = "lettrage = '$lettrage'";
        }
        if (!empty($idFacture)) {
            $choix[$i++] = "idFacture = '$idFacture'";
        }
        if (!empty($idExerciceComptable)) {
            $choix[$i++] = "idExerciceComptable = '$idExerciceComptable'";
        }
        if (!empty($idEcriture)) {
            $choix[$i++] = "idEcriture = '$idEcriture'";
        }

        // on insère les éléments remplis dans une variable $critere, en commençant par la première occurrence, puis on boucles
        $critere = $choix[0] . " ";

        for ($j = 1; $j < $i; $j++) {
            $critere .= " AND " . $choix[$j] . " ";
        }

        // La requête si $i >0, ça veut dire qu'il y a des critères.
        if ($i > 0) {
            // requete.
            $q = $db->query("SELECT * FROM Ecritures WHERE $critere");
        }
        // si $i = 0, alors l'utilisateur n'a pas saisi de critère.
        else {
            $q = $db->query("SELECT * FROM Ecritures");
        }
    }
}
