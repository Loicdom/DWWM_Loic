<?php
class MatchManager
{
    public static function add(Match $obj)
    {
        var_dump($obj);
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO matchs (idMatch,adversaire,lieux) VALUES (:idMatch,:adversaire,:lieux)");
        $q->bindValue(":idMatch", $obj->getIdMatch());
        $q->bindValue(":adversaire", $obj->getAdversaire());
        $q->bindValue(":lieux", $obj->getLieux());
        $q->execute();
    }

    public static function update(Match $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE matchs SET  adversaire=:adversaire, lieux=:lieux WHERE idMatch=:idMatch");
        $q->bindValue(":idMatch", $obj->getIdMatch());
        $q->bindValue(":adversaire", $obj->getAdversaire());
        $q->bindValue(":lieux", $obj->getLieux());
        $q->execute();
    }

    public static function delete(Match $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM matchs WHERE idMatch=" . $obj->getIdMatch());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM matchs WHERE idMatch=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Match($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $matchs = [];
        $q = $db->query("SELECT * FROM matchs");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $matchs[] = new Match($donnees);
            }
        }
        return $matchs;
    }

}
