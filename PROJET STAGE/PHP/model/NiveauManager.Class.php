<?php
class NiveauManager
{
public static function add(Niveau $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO niveaux (nomNiveau,pointDeVie) VALUES (:nomNiveau,:pointDeVie)");
$q->bindValue(":nomNiveau", $obj->getNomNiveau());
$q->bindValue(":pointDeVie", $obj->getPointDeVie());
 $q->execute();
}

public static function update(Niveau $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE niveaux SET nomNiveau=:nomNiveau, pointDeVie=:pointDeVie WHERE idNiveau=:idNiveau");
$q->bindValue(":nomNiveau", $obj->getNomNiveau());
$q->bindValue(":pointDeVie", $obj->getPointDeVie());
$q->bindValue(":idNiveau", $obj->getIdNiveau());
 $q->execute();
}

public static function delete($id)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM niveaux WHERE idNiveau=$id");
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM niveaux WHERE idNiveau=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Niveau ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$niveaux = [];
$q = $db->query("SELECT * FROM niveaux");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$niveaux[] = new Niveau($donnees);
}
}
return $niveaux;
 }

}