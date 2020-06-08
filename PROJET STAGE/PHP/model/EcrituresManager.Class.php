<?php
class EcrituresManager
{
    public static function add(Ecritures $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Ecritures (dateEcriture,libelleEcriture,montant,sens,lettrage) VALUES (:dateEcriture,:libelleEcriture,:montant,:sens,:lettrage)");
        $q->bindValue(":dateEcriture", $obj->getDateEcriture());
        $q->bindValue(":libelleEcriture", $obj->getLibelleEcriture());
        $q->bindValue(":montant", $obj->getMontant());
        $q->bindValue(":sens", $obj->getSens());
        $q->bindValue(":lettrage", $obj->getLettrage());
        $q->execute();
    }

    public static function update(Ecritures $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Ecritures SET dateEcriture=:dateEcriture, libelleEcriture=:libelleEcriture, montant=:montant, sens=:sens, lettrage=:lettrage WHERE idEcriture=:idEcriture");
        $q->bindValue(":dateEcriture", $obj->getDateEcriture());
        $q->bindValue(":libelleEcriture", $obj->getLibelleEcriture());
        $q->bindValue(":montant", $obj->getMontant());
        $q->bindValue(":sens", $obj->getSens());
        $q->bindValue(":lettrage", $obj->getLettrage());
        $q->bindValue(":idEcriture", $obj->getIdEcriture());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Ecritures WHERE idEcriture= $id");
    }

    public static function getById($id)
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

    public static function getList()
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

    static public function getBySens($sens)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT dateEcriture, libelleEcriture, montant, sens, lettrage FROM Ecritures WHERE sens = :sens');

        // Assignation des valeurs .
        $q->bindValue(':sens', $sens);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new Ecritures();
        } else {
            return new Ecritures($donnees);
        }
    }

    static public function getByLettrage($lettrage)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT dateEcriture, libelleEcriture, montant, sens, lettrage FROM Ecritures WHERE lettrage = :lettrage');

        // Assignation des valeurs .
        $q->bindValue(':lettrage', $lettrage);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new Ecritures();
        } else {
            return new Ecritures($donnees);
        }
    }

    static public function getByMontant($montant)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT dateEcriture, libelleEcriture, montant, sens, lettrage FROM Ecritures WHERE montant = :montant');

        // Assignation des valeurs .
        $q->bindValue(':montant', $montant);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new Ecritures();
        } else {
            return new Ecritures($donnees);
        }
    }

    static public function getByDateEcriture($dateEcriture)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT dateEcriture, libelleEcriture, montant, sens, lettrage FROM Ecritures WHERE dateEcriture = :dateEcriture');

        // Assignation des valeurs .
        $q->bindValue(':dateEcriture', $dateEcriture);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new Ecritures();
        } else {
            return new Ecritures($donnees);
        }
    }

    static public function getByLibelleEcriture($libelleEcriture)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT dateEcriture, libelleEcriture, montant, sens, lettrage FROM Ecritures WHERE libelleEcriture = :libelleEcriture');

        // Assignation des valeurs .
        $q->bindValue(':libelleEcriture', $libelleEcriture);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new Ecritures();
        } else {
            return new Ecritures($donnees);
        }
    }
}
