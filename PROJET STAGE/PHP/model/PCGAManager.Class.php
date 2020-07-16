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

    public static function addCompteFournisseur($codeFournisseur, $libelleFournisseur) // ajoute un compte fournisseur (au moment de l'ajout d'un fournisseur)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO PCGA (numCompte,libelleCompte,dansBilan,idClasseComptable) VALUES (:numCompte,:libelleCompte,:dansBilan,:idClasseComptable)");
        $q->bindValue(":numCompte", "401$codeFournisseur");
        $q->bindValue(":libelleCompte", "Fournisseur $libelleFournisseur");
        $q->bindValue(":dansBilan", "oui");
        $q->bindValue(":idClasseComptable", "4");
        $q->execute();
    }

    public static function addCompteEvenement($codeEvenement, $libelleEvenement) // ajoute un compte Evenement (au moment de l'ajout d'un Evenement)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO PCGA (numCompte,libelleCompte,dansBilan,idClasseComptable) VALUES (:numCompte,:libelleCompte,:dansBilan,:idClasseComptable)");
        $q->bindValue(":numCompte", "60222$codeEvenement");
        $q->bindValue(":libelleCompte", "Produits d'entretien $libelleEvenement");
        $q->bindValue(":dansBilan", "oui");
        $q->bindValue(":idClasseComptable", "6");
        $q->execute();
        $q = $db->prepare("INSERT INTO PCGA (numCompte,libelleCompte,dansBilan,idClasseComptable) VALUES (:numCompte,:libelleCompte,:dansBilan,:idClasseComptable)");
        $q->bindValue(":numCompte", "6071$codeEvenement");
        $q->bindValue(":libelleCompte", "Achat marchandise atelier créatif $libelleEvenement");
        $q->bindValue(":dansBilan", "oui");
        $q->bindValue(":idClasseComptable", "6");
        $q->execute();
        $q = $db->prepare("INSERT INTO PCGA (numCompte,libelleCompte,dansBilan,idClasseComptable) VALUES (:numCompte,:libelleCompte,:dansBilan,:idClasseComptable)");
        $q->bindValue(":numCompte", "6072$codeEvenement");
        $q->bindValue(":libelleCompte", "Achats marchandise pour cuisine $libelleEvenement");
        $q->bindValue(":dansBilan", "oui");
        $q->bindValue(":idClasseComptable", "6");
        $q->execute();
        $q = $db->prepare("INSERT INTO PCGA (numCompte,libelleCompte,dansBilan,idClasseComptable) VALUES (:numCompte,:libelleCompte,:dansBilan,:idClasseComptable)");
        $q->bindValue(":numCompte", "60631$codeEvenement");
        $q->bindValue(":libelleCompte", "Achats petits matériels $libelleEvenement");
        $q->bindValue(":dansBilan", "oui");
        $q->bindValue(":idClasseComptable", "6");
        $q->execute();
        $q = $db->prepare("INSERT INTO PCGA (numCompte,libelleCompte,dansBilan,idClasseComptable) VALUES (:numCompte,:libelleCompte,:dansBilan,:idClasseComptable)");
        $q->bindValue(":numCompte", "60632$codeEvenement");
        $q->bindValue(":libelleCompte", "Achats matériels et entretiens jardin $libelleEvenement");
        $q->bindValue(":dansBilan", "oui");
        $q->bindValue(":idClasseComptable", "6");
        $q->execute();
        $q = $db->prepare("INSERT INTO PCGA (numCompte,libelleCompte,dansBilan,idClasseComptable) VALUES (:numCompte,:libelleCompte,:dansBilan,:idClasseComptable)");
        $q->bindValue(":numCompte", "7061$codeEvenement");
        $q->bindValue(":libelleCompte", "Produit de manifestation : $libelleEvenement");
        $q->bindValue(":dansBilan", "oui");
        $q->bindValue(":idClasseComptable", "7");
        $q->execute();
    }

    static public function ComptesParEvent($choixCode)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		$q = $db->prepare('SELECT numCompte,libelleCompte FROM PCGA WHERE libelleCompte LIKE "%'.$choixCode.'" ORDER BY libelleCompte'); //requete sql qui ramène tout les codes Evenements
        $q->execute();
        
        if($donnees = $q->fetch(PDO::FETCH_OBJ)) {
            do {
                $codeEvenementChoix[]=$donnees; // on fait un tableau avec les données récolter
            }
            while ($donnees = $q->fetch(PDO::FETCH_OBJ));
        
            echo json_encode($codeEvenementChoix); 
        
        }
	}
}
// if(isset($_POST["idAuteur"])){
//     mysql_connect("localhost","root","root");
//     mysql_select_db("test");
//     $res = mysql_query("SELECT id,titre FROM livre 
//         WHERE idAuteur=".$_POST["idAuteur"]." ORDER BY titre");
//     while($row = mysql_fetch_assoc($res)){
//         echo "<option value='".$row["id"]."'>".$row["titre"]."</option>";
//     }
// }