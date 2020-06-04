<?php
class PersonnageManager
{
public static function add(Personnage $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO personnages (nomPersonnage,descriptionPersonnage,avatar) VALUES (:nomPersonnage,:descriptionPersonnage,:avatar)");
$q->bindValue(":nomPersonnage", $obj->getNomPersonnage());
$q->bindValue(":descriptionPersonnage", $obj->getDescriptionPersonnage());
$q->bindValue(":avatar", $obj->getAvatar());
 $q->execute();
}

public static function update(Personnage $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE personnages SET nomPersonnage=:nomPersonnage, descriptionPersonnage=:descriptionPersonnage, avatar=:avatar WHERE idPersonnage=:idPersonnage");
$q->bindValue(":nomPersonnage", $obj->getNomPersonnage());
$q->bindValue(":descriptionPersonnage", $obj->getDescriptionPersonnage());
$q->bindValue(":avatar", $obj->getAvatar());
$q->bindValue(":idPersonnage", $obj->getIdPersonnage());
 $q->execute();
}

public static function delete($id)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM personnages WHERE idPersonnage= $id");
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM personnages WHERE idPersonnage=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Personnage ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$personnages = [];
$q = $db->query("SELECT * FROM personnages");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$personnages[] = new Personnage($donnees);
}
}
return $personnages;
 }

}