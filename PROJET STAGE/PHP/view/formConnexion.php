<?php

if (!isset($_POST['pseudo'])) // On est dans la page de formulaire
{
    require 'Php/View/htmlConnexion.php'; // On affiche le formulaire
}
else
{ // Le formulaire a été validé
    $message = '';
    if (empty($_POST['pseudo']) || empty($_POST['motDePasse'])) // Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
	                   Vous devez remplir tous les champs</p>
	                   <p>Cliquez <a href="index.php?action=connect">ici</a> pour revenir</p>';
    }
else // On check le mot de passe
    {
        $utilisateur = UsersManager::getByPseudo($_POST['pseudo']); // On recherche dans la base l'utilisateur et on rempli l'objet user

        if ($utilisateur->getMotDePasse() == md5($_POST['motDePasse'])) // Acces OK !
        {
            $_SESSION['pseudo'] = $utilisateur->getPseudo();
            $_SESSION['idExerciceComptable'] = $_POST['idExerciceComptable'];
            $_SESSION['id'] = $utilisateur->getIdUser();
            $message = '<p>Bienvenue ' . $utilisateur->getPseudo() . ', vous êtes maintenant connecté!</p>';
            header("refresh:2,url=index.php?action=montantDepart");?>
		<?php }
    else // Acces pas OK !
        {
            $message = '<p>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le pseudo
            entré n\'est pas correcte.</p>';
            header("refresh:2,url=index.php?action=connect");
        }
    }
    echo $message;
}

?>

