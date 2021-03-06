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
        $ecrituresComptable = [];
        $q = $db->query("SELECT * FROM EcrituresComptable");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ecrituresComptable[] = new EcrituresComptable($donnees);
            }
        }
        return $ecrituresComptable;
    }

    public static function getListBudgetPrev()
    {
        $db = DbConnect::getDb();
        $ecrituresComptable = [];
        $q = $db->query("SELECT * FROM EcrituresComptable WHERE typeEcriture = 'budgetPrev'");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ecrituresComptable[] = new EcrituresComptable($donnees);
            }
        }
        return $ecrituresComptable;
    }

    public static function getListLettrage($date1, $date2, $typeEcriture) // Ramène une liste de toutes les écritures
    {
        $db = DbConnect::getDb();
        $ecrituresComptable = [];
        $q = $db->query("SELECT * FROM `ecriturescomptable` WHERE `typeEcriture` LIKE '$typeEcriture' AND `dateEcriture` BETWEEN '$date1' AND '$date2' AND idClasseComptable = 4");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ecrituresComptable[] = new EcrituresComptable($donnees);
            }
        }
        return $ecrituresComptable;
    }

    public static function getListVisuelParClasse($date1, $date2, $classeComptable) // Ramène une liste de toutes les écritures
    {
        $db = DbConnect::getDb();
        $ecrituresComptable = [];
        $q = $db->query("SELECT * FROM `ecriturescomptable` WHERE `dateEcriture` BETWEEN '$date1' AND '$date2' AND idClasseComptable = $classeComptable");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ecrituresComptable[] = new EcrituresComptable($donnees);
            }
        }
        return $ecrituresComptable;
    }

    public static function getListParTypeDate($date1, $date2, $typeEcriture) // Ramène une liste de toutes les écritures
    {
        $db = DbConnect::getDb();
        $ecrituresComptable = [];
        $q = $db->query("SELECT * FROM `ecriturescomptable` WHERE `dateEcriture` BETWEEN '$date1' AND '$date2' AND `typeEcriture` LIKE '$typeEcriture' ORDER BY `ecriturescomptable`.`idEcriture` ASC");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) { 
            if ($donnees != false) {
                $ecrituresComptable[] = new EcrituresComptable($donnees);
            }
        }
        return $ecrituresComptable;
    }

    public static function getListParCompte($date1, $date2, $numcompte) // Ramène une liste de toutes les écritures
    {
        $db = DbConnect::getDb();
        $ecrituresComptable = [];
        $q = $db->query("SELECT * FROM `ecriturescomptable` WHERE `dateEcriture` BETWEEN '$date1' AND '$date2' AND `numCompte` LIKE '$numcompte%'");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ecrituresComptable[] = new EcrituresComptable($donnees);
            }
        }
        return $ecrituresComptable;
    }

    public static function getListParCompteSubv($date1, $date2, $numcompte) // Ramène une liste de toutes les écritures
    {
        $db = DbConnect::getDb();
        $ecrituresComptable = [];
        $q = $db->query("SELECT * FROM `ecriturescomptable` WHERE `dateEcriture` BETWEEN '$date1' AND '$date2' AND `numCompte` LIKE '$numcompte%' AND sens='Crédit'");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ecrituresComptable[] = new EcrituresComptable($donnees);
            }
        }
        return $ecrituresComptable;
    }

    public static function getListVisuelParCompte($date1, $date2, $numcompte) // Ramène une liste de toutes les écritures
    {
        $db = DbConnect::getDb();
        $ecrituresComptable = [];
        $q = $db->query("SELECT * FROM `ecriturescomptable` WHERE `dateEcriture` BETWEEN '$date1' AND '$date2' AND `numCompte` LIKE '$numcompte' ORDER BY `dateEcriture` ASC");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ecrituresComptable[] = new EcrituresComptable($donnees);
            }
        }
        return $ecrituresComptable;
    }

    public static function getBybudget($years, $numcompte)
    {
        $db = DbConnect::getDb();
        $q = $db->query("SELECT * FROM EcrituresComptable WHERE `numCompte` LIKE '$numcompte' AND typeEcriture = 'budgetPrev' AND idExerciceComptable=$years");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new EcrituresComptable($results);
        } else {
            return false;
        }
    }
}
