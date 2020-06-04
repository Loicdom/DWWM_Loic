<?php
class ScoreManager
{
public static function add(Score $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO scores (idNiveau,idUser,nbDePieceRecolte,Bonus,time,scoreObtenu) VALUES (:idNiveau,:idUser,:nbDePieceRecolte,:Bonus,:time,:scoreObtenu)");
$q->bindValue(":idNiveau", $obj->getIdNiveau());
$q->bindValue(":idUser", $obj->getIdUser());
$q->bindValue(":nbDePieceRecolte", $obj->getNbDePieceRecolte());
$q->bindValue(":Bonus", $obj->getBonus());
$q->bindValue(":time", $obj->getTime());
$q->bindValue(":scoreObtenu", $obj->getScoreObtenu());
 $q->execute();
}

public static function update(Score $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE scores SET idNiveau=:idNiveau, idUser=:idUser, nbDePieceRecolte=:nbDePieceRecolte, Bonus=:Bonus, time=:time, scoreObtenu=:scoreObtenu WHERE idScore=:idScore");
$q->bindValue(":idNiveau", $obj->getIdNiveau());
$q->bindValue(":idUser", $obj->getIdUser());
$q->bindValue(":nbDePieceRecolte", $obj->getNbDePieceRecolte());
$q->bindValue(":Bonus", $obj->getBonus());
$q->bindValue(":time", $obj->getTime());
$q->bindValue(":scoreObtenu", $obj->getScoreObtenu());
$q->bindValue(":idScore", $obj->getIdScore());
 $q->execute();
}

public static function delete($id)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM scores WHERE idScore=$id");
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM scores WHERE idScore=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Score ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$scores = [];
$q = $db->query("SELECT * FROM scores");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$scores[] = new Score($donnees);
}
}
return $scores;
}

public static function get10Meilleur(){
$db = DbConnect::getDb();
$scores = [];
$q = $db->query("SELECT * FROM `scores` order by scoreObtenu desc , time asc limit 10");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$scores[] = new Score($donnees);
}
}
return $scores;
}

 static public function getByNiveau($niveau) {
    $db = DbConnect::getDb (); // Instance de PDO.
    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
    $q = $db->prepare ( 'SELECT idScore, idNiveau, idUser, nbDePieceRecolte, Bonus, time, scoreObtenu  FROM Scores WHERE idNiveau = :idNiveau' );
    
    // Assignation des valeurs .
    $q->bindValue ( ':idNiveau', $niveau );
    $q->execute ();
    $donnees = $q->fetch ( PDO::FETCH_ASSOC );
    $q->CloseCursor ();
    if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
        return new Score ();
    } else {
        return new Score ( $donnees );
    }
}

public static function calculScore() 
{
    
}

}