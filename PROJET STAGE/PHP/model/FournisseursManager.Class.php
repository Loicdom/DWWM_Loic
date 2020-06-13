<?php
class FournisseursManager
{
public static function add(Fournisseurs $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO Fournisseurs (codeFournisseur,libelleFournisseur,idPCGA) VALUES (:codeFournisseur,:libelleFournisseur,:idPCGA)");
$q->bindValue(":codeFournisseur", $obj->getCodeFournisseur());
$q->bindValue(":libelleFournisseur", $obj->getLibelleFournisseur());
$q->bindValue(":idPCGA", $obj->getIdPCGA());
 $q->execute();
}

public static function update(Fournisseurs $obj)
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
$db->exec("DELETE FROM Fournisseurs WHERE idFournisseur= $id");
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM Fournisseurs WHERE idFournisseur=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Fournisseurs ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$fournisseurs = [];
$q = $db->query("SELECT * FROM Fournisseurs");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$fournisseurs[] = new Fournisseurs($donnees);
}
}
return $fournisseurs;
 }

}