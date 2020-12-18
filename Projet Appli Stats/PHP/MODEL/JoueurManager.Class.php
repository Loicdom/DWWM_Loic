<?php
class JoueurManager
{
    public static function add(Joueur $obj)
    {
        var_dump($obj);
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO joueurs (idJoueur,nomJoueur,prenomJoueur,posteJoueur,tailleJoueur,numJoueur,typeJoueur,idEquipe) VALUES (:idJoueur,:nomJoueur,:prenomJoueur,:posteJoueur,:tailleJoueur,:numJoueur,:typeJoueur,:idEquipe)");
        $q->bindValue(":idJoueur", $obj->getIdJoueur());
        $q->bindValue(":nomJoueur", $obj->getNomJoueur());
        $q->bindValue(":prenomJoueur", $obj->getPrenomJoueur());
        $q->bindValue(":posteJoueur", $obj->getPosteJoueur());
        $q->bindValue(":tailleJoueur", $obj->getTailleJoueur());
        $q->bindValue(":numJoueur", $obj->getNumJoueur());
        $q->bindValue(":typeJoueur", $obj->getTypeJoueur());
        $q->bindValue(":idEquipe", $obj->getIdEquipe());
        $q->execute();
    }

    public static function update(Joueur $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE joueurs SET  nomJoueur=:nomJoueur, prenomJoueur=:prenomJoueur, posteJoueur=:posteJoueur, tailleJoueur=:tailleJoueur, numJoueur=:numJoueur, typeJoueur=:typeJoueur, idEquipe=:idEquipe WHERE idJoueur=:idJoueur");
        $q->bindValue(":idJoueur", $obj->getIdJoueur());
        $q->bindValue(":nomJoueur", $obj->getNomJoueur());
        $q->bindValue(":prenomJoueur", $obj->getPrenomJoueur());
        $q->bindValue(":posteJoueur", $obj->getPosteJoueur());
        $q->bindValue(":tailleJoueur", $obj->getTailleJoueur());
        $q->bindValue(":numJoueur", $obj->getNumJoueur());
        $q->bindValue(":typeJoueur", $obj->getTypeJoueur());
        $q->bindValue(":idEquipe", $obj->getIdEquipe());
        $q->execute();
    }

    public static function delete(Joueur $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM joueurs WHERE idJoueur=" . $obj->getIdJoueur());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM joueurs WHERE idJoueur=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Joueur($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $joueurs = [];
        $q = $db->query("SELECT * FROM joueurs");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $joueurs[] = new Joueur($donnees);
            }
        }
        return $joueurs;
    }

}
