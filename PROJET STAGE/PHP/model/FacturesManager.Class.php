<?php
class FacturesManager
{
public static function add(Factures $obj) // Pour ajouter une facture
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO Factures (libelleFact,enregFact) VALUES (:libelleFact,:enregFact)");
$q->bindValue(":libelleFact", $obj->getLibelleFact());
$q->bindValue(":enregFact", $obj->getEnregFact());
 $q->execute();
}

public static function update(Factures $obj) // Pour modifier une facture 
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE Factures SET libelleFact=:libelleFact, enregFact=:enregFact WHERE idFacture=:idFacture");
$q->bindValue(":libelleFact", $obj->getLibelleFact());
$q->bindValue(":enregFact", $obj->getEnregFact());
$q->bindValue(":idFacture", $obj->getIdFacture());
 $q->execute();
}

public static function delete($id) // Pour supprimer une facture
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM Factures WHERE idFacture= $id");
}

public static function getById($id) // Ramène une facture en particulier (avec l'Id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM Factures WHERE idFacture=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Factures ($results);
 }else {
return false;
}
}

public static function getList() // Ramène la liste de toutes les factures 
{
$db = DbConnect::getDb();
$factures = [];
$q = $db->query("SELECT * FROM Factures");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$factures[] = new Factures($donnees);
}
}
return $factures;
 }

}