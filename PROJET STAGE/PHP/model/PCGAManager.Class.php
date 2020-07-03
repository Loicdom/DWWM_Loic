<?php
class PCGAManager
{
    public static function add(PCGA $obj) // Pour ajouter un compte
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO PCGA (numCompte,libelleCompte,dansBilan,idClasseComptable) VALUES (:numCompte,:libelleCompte,:dansBilan,:idClasseComptable)");
        $q->bindValue(":numCompte", $obj->getNumCompte());
        $q->bindValue(":libelleCompte", $obj->getLibelleCompte());
        $q->bindValue(":dansBilan", $obj->getDansBilan());
        $q->bindValue(":idClasseComptable", $obj->getIdClasseComptable());
        $q->execute();
    }

    public static function update(PCGA $obj) // Pour modifier un compte
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE PCGA SET numCompte=:numCompte, libelleCompte=:libelleCompte, dansBilan=:dansBilan, idClasseComptable=:idClasseComptable WHERE idPCGA=:idPCGA");
        $q->bindValue(":numCompte", $obj->getNumCompte());
        $q->bindValue(":libelleCompte", $obj->getLibelleCompte());
        $q->bindValue(":dansBilan", $obj->getDansBilan());
        $q->bindValue(":idClasseComptable", $obj->getIdClasseComptable());
        $q->bindValue(":idPCGA", $obj->getIdPCGA());
        $q->execute();
    }

    public static function delete($id) // Pour suprimmer un compte
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM PCGA WHERE idPCGA= $id");
    }

    public static function getById($id) // Ramène un compte en particulier (avec l'Id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM PCGA WHERE idPCGA=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new PCGA($results);
        } else {
            return false;
        }
    }

    public static function getList() // ramène la liste des comptes
    {
        $db = DbConnect::getDb();
        $planComptable = [];
        $q = $db->query("SELECT * FROM PCGA ORDER BY numCompte ASC");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $planComptable[] = new PCGA($donnees);
            }
        }
        return $planComptable;
    }

    public static function addCompteFournisseur($codeFournisseur, $libelléfournisseur) // ajoute un compte fournisseur (au moment de l'ajout d'un fournisseur)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO PCGA (numCompte,libelleCompte,dansBilan,idClasseComptable) VALUES (:numCompte,:libelleCompte,:dansBilan,:idClasseComptable)");
        $q->bindValue(":numCompte", "401$codeFournisseur");
        $q->bindValue(":libelleCompte", "Fournisseur $libelléfournisseur");
        $q->bindValue(":dansBilan", "oui");
        $q->bindValue(":idClasseComptable", "4");
        $q->execute();
    }
}
