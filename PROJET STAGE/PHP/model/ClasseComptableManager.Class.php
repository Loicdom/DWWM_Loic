<?php
class ClasseComptableManager
{
public static function add(ClasseComptable $obj) // Pour ajouter une classe comptable
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO ClasseComptable (numeroClasseComptable,libelleClasseComptable) VALUES (:numeroClasseComptable,:libelleClasseComptable)");
$q->bindValue(":numeroClasseComptable", $obj->getNumeroClasseComptable());
$q->bindValue(":libelleClasseComptable", $obj->getLibelleClasseComptable());
 $q->execute();
}

public static function update(ClasseComptable $obj) // Pour modifier une classe comptable
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE ClasseComptable SET numeroClasseComptable=:numeroClasseComptable, libelleClasseComptable=:libelleClasseComptable WHERE idClasseComptable=:idClasseComptable");
$q->bindValue(":numeroClasseComptable", $obj->getNumeroClasseComptable());
$q->bindValue(":libelleClasseComptable", $obj->getLibelleClasseComptable());
$q->bindValue(":idClasseComptable", $obj->getIdClasseComptable());
 $q->execute();
}

public static function delete($id) // Pour supprimer une classe comptable 
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM ClasseComptable WHERE idClasseComptable=$id");
}

public static function getById($id) // Ramène une classe comptable en particulier (avec l'Id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM ClasseComptable WHERE idClasseComptable=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new ClasseComptable ($results);
 }else {
return false;
}
}

public static function getList() // Ramène la liste des classes comptables
{
$db = DbConnect::getDb();
$classeComptable = [];
$q = $db->query("SELECT * FROM ClasseComptable");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$classeComptable[] = new ClasseComptable($donnees);
}
}
return $classeComptable;
 }

}