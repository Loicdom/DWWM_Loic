<?php
class VillesManager
{
public static function add(Villes $obj) //Pour ajouter une Ville
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO Villes (libelleVille) VALUES (:libelleVille)");
$q->bindValue(":libelleVille", $obj->getLibelleVille());
 $q->execute();
}

public static function update(Villes $obj) // Pour modifier une Ville
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE Villes SET libelleVille=:libelleVille WHERE idVille=:idVille");
$q->bindValue(":libelleVille", $obj->getLibelleVille());
$q->bindValue(":idVille", $obj->getIdVille());
 $q->execute();
}

public static function delete($id) // Pour supprimer une Ville
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM Villes WHERE idVille= $id");
}

public static function getById($id) // Ramène une Ville en particulier (avec l'Id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM Villes WHERE idVille=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Villes ($results);
 }else {
return false;
}
}

public static function getList() // Ramène la liste des Villes
{
$db = DbConnect::getDb();
$Villes = [];
$q = $db->query("SELECT * FROM Villes");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$Villes[] = new Villes($donnees);
}
}
return $Villes;
 }

}