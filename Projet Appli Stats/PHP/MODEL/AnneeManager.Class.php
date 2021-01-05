<?php
class AnneeManager
{
    public static function add(Annee $obj)
    {
        var_dump($obj);
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO annee (idAnnee,libelleAnnee) VALUES (:idAnnee,:libelleAnnee)");
        $q->bindValue(":idAnnee", $obj->getIdAnnee());
        $q->bindValue(":libelleAnnee", $obj->getLibelleAnnee());
        $q->execute();
    }

    public static function update(Annee $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE annee SET  libelleAnnee=:libelleAnnee WHERE idAnnee=:idAnnee");
        $q->bindValue(":idAnnee", $obj->getIdAnnee());
        $q->bindValue(":libelleAnnee", $obj->getLibelleAnnee());
        $q->execute();
    }

    public static function delete(Annee $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM annee WHERE idAnnee=" . $obj->getIdAnnee());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM annee WHERE idAnnee=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Annee($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $annee = [];
        $q = $db->query("SELECT * FROM annee");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $annee[] = new Annee($donnees);
            }
        }
        return $annee;
    }

}
