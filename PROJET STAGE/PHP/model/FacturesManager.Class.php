<?php
class FacturesManager
{
public static function add(Factures $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO Factures (libelleFact,enregFact) VALUES (:libelleFact,:enregFact)");
$q->bindValue(":libelleFact", $obj->getLibelleFact());
$q->bindValue(":enregFact", $obj->getEnregFact());
 $q->execute();
}

public static function update(Factures $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE Factures SET libelleFact=:libelleFact, enregFact=:enregFact WHERE idFacture=:idFacture");
$q->bindValue(":libelleFact", $obj->getLibelleFact());
$q->bindValue(":enregFact", $obj->getEnregFact());
$q->bindValue(":idFacture", $obj->getIdFacture());
 $q->execute();
}

public static function delete($id)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM Factures WHERE idFacture= $id");
}

public static function getById($id)
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

public static function getList()
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