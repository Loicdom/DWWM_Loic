<?php
$dossier = 'Factures/';
$fichier = basename($_FILES['facture']['name']);
$taille_maxi = 100000;
$taille = filesize($_FILES['facture']['tmp_name']);
$format = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['facture']['name'], '.');
$libelleFacture = $_POST['libelleEcriture'][0];


//Début des vérifications de sécurité...
if (!in_array($extension, $format)) //Si le fichier n'est pas d'un bon format
{
    $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg...';
}
if ($taille > $taille_maxi) {
    $erreur = 'Le fichier est trop gros...';
}
if (!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
    //formatage du nom (suppression des accents, remplacements des espaces par "-")
    $fichier = strtr($fichier, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
    $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
    if (move_uploaded_file($_FILES['facture']['tmp_name'], $dossier . $fichier)) //correct si la fonction renvoie TRUE
    {
        echo 'Upload effectué avec succès !';
        $chemin = $dossier . $fichier;
        $q=FacturesManager::add($libelleFacture,$chemin);
        var_dump($q);
    } else //sinon, cas où la fonction renvoie FALSE
    {
        echo 'Echec de l\'upload !';
    }
} else {
    echo $erreur;
}


// $mode = $_GET["m"];
// if ($mode != "ajout") {
//     $id = $_POST["idPersonne"]; // on récupère le mode et si différent d'ajout on récupère l'id sur lequel on doit modifier ou supprimer
// }    
// var_dump($_POST);
// $p = $_POST['dateEcriture'][0];
// var_dump($p);
// switch ($mode) {
//     case "ajout":
//         PersonnesManager::addEnfant($p); // Lance la fonction pour ajouter un enfant
//         break;
//     case "modif":
//         PersonnesManager::updateEnfant($p); // Lance la fonction pour modifier un enfant
//         break;
//     case "suppr":
//         PersonnesManager::delete($id); // Lance la fonction pour supprimer un enfant
// }
// header("location:index.php?action=enfantListe"); // renvoi vers enfant liste, juste après avoir exécuter la fonction
