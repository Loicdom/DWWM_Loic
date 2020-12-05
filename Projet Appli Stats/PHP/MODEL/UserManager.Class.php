<?php
// Il s'agit de la classe de management de la classe User.
// Ici seul 2 �thodes sont impl�ment�es
class UserManager {
	
	static public function add(User $perso) {
		$db = DbConnect::getDb (); // Instance de PDO.
		                          // Préparation de la requête d'insertion.
		$q = $db->prepare ( 'INSERT INTO users(Pseudo, motDePasse, Role) VALUES(:pseudo, :motDePasse, :role)' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':pseudo', $perso->getPseudo () );
		$q->bindValue ( ':motDePasse', $perso->getMotDePasse () );
		$q->bindValue ( ':role', $perso->getRole () );
		
		// Exécution de la requête.
		$q->execute ();
		$q->CloseCursor ();
	}

	public static function update(User $obj) // Pour modifier un utilisateur
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
	
	static public function getByPseudo($pseudo) {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT Pseudo, motDePasse, IdUser, Role FROM users WHERE Pseudo = :pseudo' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':pseudo', $pseudo );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new User ();
		} else {
			return new User ( $donnees );
		}
	}
	static public function getById($id) {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT Pseudo, motDePasse, IdUser, Role FROM users WHERE idUser = :id' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':id', $id );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new User ();
		} else {
			return new User ( $donnees );
		}
	}

	public static function getList() // Ramène la liste des utilisateurs
    {
        $db = DbConnect::getDb();
        $users = [];
        $q = $db->query("SELECT * FROM Users");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $users[] = new User($donnees);
            }
        }
        return $users;
    }
}