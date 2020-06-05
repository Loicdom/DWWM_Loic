<?php
class ClasseComptableManager
{
public static function add(ClasseComptable $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO ClasseComptable (numeroClasseComptable,libelleClasseComptable) VALUES (:numeroClasseComptable,:libelleClasseComptable)");
$q->bindValue(":numeroClasseComptable", $obj->getNumeroClasseComptable());
$q->bindValue(":libelleClasseComptable", $obj->getLibelleClasseComptable());
 $q->execute();
}

public static function update(ClasseComptable $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE ClasseComptable SET numeroClasseComptable=:numeroClasseComptable, libelleClasseComptable=:libelleClasseComptable WHERE idClasseComptable=:idClasseComptable");
$q->bindValue(":numeroClasseComptable", $obj->getNumeroClasseComptable());
$q->bindValue(":libelleClasseComptable", $obj->getLibelleClasseComptable());
$q->bindValue(":idClasseComptable", $obj->getIdClasseComptable());
 $q->execute();
}

public static function delete($id)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM ClasseComptable WHERE idClasseComptable=$id");
}

public static function getById($id)
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

public static function getList()
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