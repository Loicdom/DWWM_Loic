<?php
class EcrituresComptableManager
{
    public static function getByIdEcriture($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM EcrituresComptable WHERE idEcriture=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new EcrituresComptable($results);
        } else {
            return false;
        }
    }

    public static function getByIdLigneEcriture($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM EcrituresComptable WHERE idLigneEcriture=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new EcrituresComptable($results);
        } else {
            return false;
        }
    }

    public static function getByIdClasseComptable($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM EcrituresComptable WHERE idClasseComptable=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new EcrituresComptable($results);
        } else {
            return false;
        }
    }

    public static function getByIdExerciceComptable($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM EcrituresComptable WHERE idExerciceComptable=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new EcrituresComptable($results);
        } else {
            return false;
        }
    }

    public static function getByIdFacture($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM EcrituresComptable WHERE idFacture=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new EcrituresComptable($results);
        } else {
            return false;
        }
    }

    public static function getByIdPCGA($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM EcrituresComptable WHERE idPCGA=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new EcrituresComptable($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $EcrituresComptable = [];
        $q = $db->query("SELECT * FROM EcrituresComptable");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $EcrituresComptable[] = new EcrituresComptable($donnees);
            }
        }
        return $EcrituresComptable;
    }
}
