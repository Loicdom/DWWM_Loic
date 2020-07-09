<?php
class EvenementsManager
{
    public static function add(Evenements $obj) // permet d'ajouter un Evenement
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Evenements (codeEvenement,libelleEvenement,idPCGA) VALUES (:codeEvenement,:libelleEvenement,:idPCGA)");
        $q->bindValue(":codeEvenement", $obj->getCodeEvenement());
        $q->bindValue(":libelleEvenement", $obj->getLibelleEvenement());
        $q->bindValue(":idPCGA", $obj->getIdPCGA());
        $q->execute();
    }

    public static function update(Evenements $obj) // permet de faire une mise à jour des informations d'un Evenement
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Evenements SET codeEvenement=:codeEvenement, libelleEvenement=:libelleEvenement, idPCGA=:idPCGA WHERE idEvenement=:idEvenement");
        $q->bindValue(":codeEvenement", $obj->getCodeEvenement());
        $q->bindValue(":libelleEvenement", $obj->getLibelleEvenement());
        $q->bindValue(":idPCGA", $obj->getIdPCGA());
        $q->bindValue(":idEvenement", $obj->getIdEvenement());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Evenements WHERE idEvenement= $id"); // Pour supprimer un Evenement
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Evenements WHERE idEvenement=$id"); // pour récuperer les informations d'un Evenement en particulier (grâce à l'Id)
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Evenements($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $evenements = [];
        $q = $db->query("SELECT * FROM Evenements"); // requete sql qui ramène toutes les infos des Evenements
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $evenements[] = new Evenements($donnees); // Liste mise dans un tableau
            }
        }
        return $evenements;
    }

    static public function codeEvenement()
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		$q = $db->query('SELECT codeEvenement  FROM Evenements'); //requete sql qui ramène tout les codes Evenements
        
        if($donnees = $q->fetch(PDO::FETCH_OBJ)) {
            do {
                $codeEvenement[]=$donnees; // on fait un tableau avec les données récolter
            }
            while ($donnees = $q->fetch(PDO::FETCH_OBJ));
        
            echo json_encode($codeEvenement); 
        
        }
	}
}
