<?php
class DocumentsManager
{
public static function add(Documents $obj) //Pour ajouter un document
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO Documents (libelleDocument,enregDocument) VALUES (:libelleDocument,:enregDocument)");
$q->bindValue(":libelleDocument", $obj->getLibelleDocument());
$q->bindValue(":enregDocument", $obj->getEnregDocument());
 $q->execute();
}

public static function update(Documents $obj) // Pour modifier un document
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE Documents SET libelleDocument=:libelleDocument, enregDocument=:enregDocument WHERE idDocument=:idDocument");
$q->bindValue(":libelleDocument", $obj->getLibelleDocument());
$q->bindValue(":enregDocument", $obj->getEnregDocument());
$q->bindValue(":idDocument", $obj->getIdDocument());
 $q->execute();
}

public static function delete($id) // Pour supprimer un document
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM Documents WHERE idDocument= $id");
}

public static function getById($id) // Ramène un document en particulier (avec l'Id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM Documents WHERE idDocument=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Documents ($results);
 }else {
return false;
}
}

public static function getList() // Ramène la liste des documents
{
$db = DbConnect::getDb();
$Documents = [];
$q = $db->query("SELECT * FROM Documents");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$Documents[] = new Documents($donnees);
}
}
return $Documents;
 }

}