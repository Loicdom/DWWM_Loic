<?php
class LigneEcritureManager
{
public static function add(LigneEcriture $obj) // Pour ajouter une nouvelle ligne d'écriture
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO LigneEcriture (montant,sens,idEcriture,idPCGA) VALUES (:montant,:sens,:idEcriture,:idPCGA)");
$q->bindValue(":montant", $obj->getMontant());
$q->bindValue(":sens", $obj->getSens());
$q->bindValue(":idEcriture", $obj->getIdEcriture());
$q->bindValue(":idPCGA", $obj->getIdPCGA());
 $q->execute();
}

public static function update(LigneEcriture $obj) // Pour modifier une ligne d'écriture
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE LigneEcriture SET montant=:montant, sens=:sens, idEcriture=:idEcriture, idPCGA=:idPCGA WHERE idLigneEcriture=:idLigneEcriture");
$q->bindValue(":montant", $obj->getmontant());
$q->bindValue(":sens", $obj->getsens());
$q->bindValue(":idEcriture", $obj->getidEcriture());
$q->bindValue(":idPCGA", $obj->getidPCGA());
$q->bindValue(":idLigneEcriture", $obj->getIdLigneEcriture());
 $q->execute();
}

public static function delete($id) // Pour supprimer une ligne d'écriture
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM LigneEcriture WHERE idLigneEcriture= $id");
}

public static function getById($id) // Ramène une ligne d'écriture en particulier (avec l'Id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM LigneEcriture WHERE idLigneEcriture=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new LigneEcriture ($results);
 }else {
return false;
}
}

public static function getList() //Ramène la liste de toutes les lignes d'écritures
{
$db = DbConnect::getDb();
$ligneComptable = [];
$q = $db->query("SELECT * FROM LigneEcriture");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$ligneComptable[] = new LigneEcriture($donnees);
}
}
return $ligneComptable;
 }

}