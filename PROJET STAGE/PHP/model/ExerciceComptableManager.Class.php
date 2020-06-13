<?php
class ExerciceComptableManager
{
public static function add(ExerciceComptable $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO ExerciceComptable (libelleExercice) VALUES (:libelleExercice)");
$q->bindValue(":libelleExercice", $obj->getLibelleExercice());
 $q->execute();
}

public static function update(ExerciceComptable $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE ExerciceComptable SET libelleExercice=:libelleExercice WHERE idExerciceComptable=:idExerciceComptable");
$q->bindValue(":libelleExercice", $obj->getLibelleExercice());
$q->bindValue(":idExerciceComptable", $obj->getIdExerciceComptable());
 $q->execute();
}

public static function delete($id)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM ExerciceComptable WHERE idExerciceComptable= $id");
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM ExerciceComptable WHERE idExerciceComptable=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new ExerciceComptable ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$exerciceComptable = [];
$q = $db->query("SELECT * FROM ExerciceComptable");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$exerciceComptable[] = new ExerciceComptable($donnees);
}
}
return $exerciceComptable;
 }

}