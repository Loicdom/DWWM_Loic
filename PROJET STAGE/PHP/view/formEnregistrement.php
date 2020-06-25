<?php
$mode = $_GET["m"];
if ($mode == "suppr") {
    $id = $_POST["idUser"];
} 

if (empty($_POST['pseudo'])) // Si la variable est vide, on est sur la page de formulaire
{
    header("refresh:2,url=index.php?action=usersListe");
	// include 'Php/View/usersForm.php'; // On affiche le formulaire
    
    
} //Fin de la partie formulaire

else //On est dans le cas traitement
{
    if ($mode != "suppr") {
        $pseudo_erreur1 = null;
        $pseudo_erreur2 = null;
        $mdp_erreur = null;
        //On récupère les variables
        $i = 0; // compte le nombre d'erreurs à afficher
        $pseudo=$_POST['pseudo'];
        $pass = md5($_POST['motDePasse']); // on hache le password avec md5
        $confirm = md5($_POST['confirm-mdp']);
        $role =$_POST['role'];
        //Vérification du pseudo
        $utilisateur  = UsersManager::getByPseudo($pseudo);
        if ($utilisateur->getIdUser()!=null)
        {
            $pseudo_erreur1 = "Votre pseudo est déjà utilisé par un membre";
            $i++;
        }
    
        if (strlen($pseudo) < 3 || strlen($pseudo) > 15)
        {
            $pseudo_erreur2 = "Votre pseudo est soit trop grand, soit trop petit";
            $i++;
        }
    
        //Vérification du mdp
        if ($pass != $confirm || empty($confirm) || empty($pass))
        {
            $mdp_erreur = "Votre mot de passe et votre confirmation sont différents, ou sont vides";
            $i++;
        }
    
 
        if ($i==0) // S'il n'y a pas d'erreur
        {
    	    $nouvelUtilisateur = new Users(['role'=>$_POST['role'],'motDePasse'=>md5($_POST['motDePasse']),'pseudo'=>$_POST['pseudo']]);
            UsersManager::add($nouvelUtilisateur);
            echo "<div class='listeUtil'>Utilisateur ajouté</div>";
            header("refresh:2,url=index.php?action=usersListe");
        }
        else // on affiche les erreurs
        {   
            echo'<h1>Inscription interrompue</h1>';
            echo'<p>Une ou plusieurs erreurs se sont produites pendant l\'incription</p>';
            echo'<p>'.$i.' erreur(s)</p>';
            echo'<p>'.$pseudo_erreur1.'</p>';
            echo'<p>'.$pseudo_erreur2.'</p>';
            echo'<p>'.$mdp_erreur.'</p>';
            header("refresh:2,url=index.php?action=usersListe");
        }
    } else {
        UsersManager::delete($id);
        echo "<div class='listeUtil'>Utilisateur supprimé</div>";
        header("refresh:2,url=index.php?action=usersListe");
    }
}
