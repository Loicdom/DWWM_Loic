<?php
class EquipeManager
{
    public static function add(Equipe $obj)
    {
        var_dump($obj);
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO equipes (idEquipe,nomEquipe,idNiveau) VALUES (:idEquipe,:nomEquipe,:idNiveau)");
        $q->bindValue(":idEquipe", $obj->getIdEquipe());
        $q->bindValue(":nomEquipe", $obj->getNomEquipe());
        $q->bindValue(":idNiveau", $obj->getIdNiveau());
        $q->execute();
    }

    public static function update(Equipe $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE equipes SET  nomEquipe=:nomEquipe, idNiveau=:idNiveau WHERE idEquipe=:idEquipe");
        $q->bindValue(":idEquipe", $obj->getIdEquipe());
        $q->bindValue(":nomEquipe", $obj->getNomEquipe());
        $q->bindValue(":idNiveau", $obj->getIdNiveau());
        $q->execute();
    }

    public static function delete(Equipe $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM equipes WHERE idEquipe=" . $obj->getIdEquipe());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM equipes WHERE idEquipe=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Equipe($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $equipes = [];
        $q = $db->query("SELECT * FROM equipes");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $equipes[] = new Equipe($donnees);
            }
        }
        return $equipes;
    }

}
