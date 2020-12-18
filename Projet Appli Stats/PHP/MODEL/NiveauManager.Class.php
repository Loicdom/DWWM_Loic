<?php
class NiveauManager
{
    public static function add(Niveau $obj)
    {
        var_dump($obj);
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO niveaux (idNiveau,libelleNiveau) VALUES (:idNiveau,:libelleNiveau)");
        $q->bindValue(":idNiveau", $obj->getIdNiveau());
        $q->bindValue(":libelleNiveau", $obj->getLibelleNiveau());
        $q->execute();
    }

    public static function update(Niveau $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE niveaux SET  libelleNiveau=:libelleNiveau WHERE idNiveau=:idNiveau");
        $q->bindValue(":idNiveau", $obj->getIdNiveau());
        $q->bindValue(":libelleNiveau", $obj->getLibelleNiveau());
        $q->execute();
    }

    public static function delete(Niveau $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM niveaux WHERE idNiveau=" . $obj->getIdNiveau());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM niveaux WHERE idNiveau=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Niveau($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $niveaux = [];
        $q = $db->query("SELECT * FROM niveaux");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $niveaux[] = new Niveau($donnees);
            }
        }
        return $niveaux;
    }

}
