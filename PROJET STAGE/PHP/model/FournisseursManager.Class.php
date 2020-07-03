<?php
class FournisseursManager
{
    public static function add(Fournisseurs $obj) // permet d'ajouter un fournisseur
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Fournisseurs (codeFournisseur,libelleFournisseur,idPCGA) VALUES (:codeFournisseur,:libelleFournisseur,:idPCGA)");
        $q->bindValue(":codeFournisseur", $obj->getCodeFournisseur());
        $q->bindValue(":libelleFournisseur", $obj->getLibelleFournisseur());
        $q->bindValue(":idPCGA", $obj->getIdPCGA());
        $q->execute();
    }

    public static function update(Fournisseurs $obj) // permet de faire une mise à jour des informations d'un fournisseur
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Fournisseurs SET codeFournisseur=:codeFournisseur, libelleFournisseur=:libelleFournisseur, idPCGA=:idPCGA WHERE idFournisseur=:idFournisseur");
        $q->bindValue(":codeFournisseur", $obj->getCodeFournisseur());
        $q->bindValue(":libelleFournisseur", $obj->getLibelleFournisseur());
        $q->bindValue(":idPCGA", $obj->getIdPCGA());
        $q->bindValue(":idFournisseur", $obj->getIdFournisseur());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Fournisseurs WHERE idFournisseur= $id"); // Pour supprimer un fournisseur
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Fournisseurs WHERE idFournisseur=$id"); // pour récuperer les informations d'un fournisseur en particulier (grâce à l'Id)
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Fournisseurs($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $fournisseurs = [];
        $q = $db->query("SELECT * FROM Fournisseurs"); // requete sql qui ramène toutes les infos des fourniseurs
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $fournisseurs[] = new Fournisseurs($donnees); // Liste mise dans un tableau
            }
        }
        return $fournisseurs;
    }

    static public function codeFournisseur()
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		$q = $db->query('SELECT codeFournisseur  FROM Fournisseurs'); //requete sql qui ramène tout les codes fournisseurs
        
        if($donnees = $q->fetch(PDO::FETCH_OBJ)) {
            do {
                $codeFournisseur[]=$donnees; // on fait un tableau avec les données récolter
            }
            while ($donnees = $q->fetch(PDO::FETCH_OBJ));
        
            echo json_encode($codeFournisseur); 
        
        }
	}
}
