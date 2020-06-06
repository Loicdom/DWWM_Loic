<?php
class PersonnesManager
{
public static function add(Personnes $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO Personnes (nomPersonne,prenomPersonne,dateNaissPersonne,adressePersonne,cpPersonne,villePersonne,emailPersonne,telPersonne,infosParent,bafaAquisBenevole,commentairePersonne,contratEmploye,typePersonne) VALUES (:nomPersonne,:prenomPersonne,:dateNaissPersonne,:adressePersonne,:cpPersonne,:villePersonne,:emailPersonne,:telPersonne,:infosParent,:bafaAquisBenevole,:commentairePersonne,:contratEmploye,:typePersonne)");
$q->bindValue(":nomPersonne", $obj->getNomPersonne());
$q->bindValue(":prenomPersonne", $obj->getPrenomPersonne());
$q->bindValue(":dateNaissPersonne", $obj->getDateNaissPersonne());
$q->bindValue(":adressePersonne", $obj->getAdressePersonne());
$q->bindValue(":cpPersonne", $obj->getCpPersonne());
$q->bindValue(":villePersonne", $obj->getVillePersonne());
$q->bindValue(":emailPersonne", $obj->getEmailPersonne());
$q->bindValue(":telPersonne", $obj->getTelPersonne());
$q->bindValue(":infosParent", $obj->getInfosParent());
$q->bindValue(":bafaAquisBenevole", $obj->getBafaAquisBenevole());
$q->bindValue(":commentairePersonne", $obj->getCommentairePersonne());
$q->bindValue(":contratEmploye", $obj->getContratEmploye());
$q->bindValue(":typePersonne", $obj->getTypePersonne());
 $q->execute();
}

public static function update(Personnes $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE Personnes SET nomPersonne=:nomPersonne, prenomPersonne=:prenomPersonne, dateNaissPersonne=:dateNaissPersonne, adressePersonne=:adressePersonne, cpPersonne=:cpPersonne, villePersonne=:villePersonne, emailPersonne=:emailPersonne, telPersonne=:telPersonne, infosParent=:infosParent, bafaAquisBenevole=:bafaAquisBenevole, commentairePersonne=:commentairePersonne, contratEmploye=:contratEmploye, typePersonne=:typePersonne WHERE idPersonne=:idPersonne");
$q->bindValue(":nomPersonne", $obj->getNomPersonne());
$q->bindValue(":prenomPersonne", $obj->getPrenomPersonne());
$q->bindValue(":dateNaissPersonne", $obj->getDateNaissPersonne());
$q->bindValue(":adressePersonne", $obj->getAdressePersonne());
$q->bindValue(":cpPersonne", $obj->getCpPersonne());
$q->bindValue(":villePersonne", $obj->getVillePersonne());
$q->bindValue(":emailPersonne", $obj->getEmailPersonne());
$q->bindValue(":telPersonne", $obj->getTelPersonne());
$q->bindValue(":infosParent", $obj->getInfosParent());
$q->bindValue(":bafaAquisBenevole", $obj->getBafaAquisBenevole());
$q->bindValue(":commentairePersonne", $obj->getCommentairePersonne());
$q->bindValue(":contratEmploye", $obj->getContratEmploye());
$q->bindValue(":typePersonne", $obj->getTypePersonne());
$q->bindValue(":idPersonne", $obj->getIdPersonne());
 $q->execute();
}

public static function delete($id)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM Personnes WHERE idPersonne=$id");
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM Personnes WHERE idPersonne=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Personnes ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$personnes = [];
$q = $db->query("SELECT * FROM Personnes");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$personnes[] = new Personnes($donnees);
}
}
return $personnes;
}

}