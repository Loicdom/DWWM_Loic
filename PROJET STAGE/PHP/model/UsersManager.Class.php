<?php
class UsersManager
{
    public static function add(Users $obj) //Pour ajouter un utilisateur
    {
        $db = DbConnect::getDb();
        // Préparation de la requête d'insertion.
        $q = $db->prepare("INSERT INTO Users (pseudo,motDePasse,role) VALUES (:pseudo,:motDePasse,:role)");
        // Assignation des valeurs .
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":role", $obj->getRole());
        // Exécution de la requête.
		$q->execute ();
		$q->CloseCursor ();
    }

    public static function update(Users $obj) // Pour modifier un utilisateur
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Users SET pseudo=:pseudo, motDePasse=:motDePasse, role=:role WHERE idUser=:idUser");
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":idUser", $obj->getIdUser());
        $q->execute();
    }

    public static function delete($id) //Pour supprimer un utilisateur 
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Users WHERE idUser=$id");
    }

    public static function getById($id) // Ramène un utilisateur en particulier (Avec l'Id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet USERS
        $q = $db->query("SELECT * FROM Users WHERE idUser=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Users($results);
        } else {
            return false;
        }
    }
    static public function getByPseudo($pseudo) { // Ramène les informations en fonction du pseudo
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT pseudo, motDePasse, idUser, role FROM Users WHERE pseudo = :pseudo' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':pseudo', $pseudo );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new Users ();
		} else {
			return new Users ( $donnees );
		}
	}

    public static function getList() // Ramène la liste des utilisateurs
    {
        $db = DbConnect::getDb();
        $users = [];
        $q = $db->query("SELECT * FROM Users");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $users[] = new Users($donnees);
            }
        }
        return $users;
    }
}
