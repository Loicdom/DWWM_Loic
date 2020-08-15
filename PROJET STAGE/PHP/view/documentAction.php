<?php
$dossier = 'Documents/';
$fichier = basename($_FILES['document']['name']);
$taille_maxi = 100000;
$taille = filesize($_FILES['document']['tmp_name']);
$format = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['document']['name'], '.');
$libelleDocument = $_POST['libelleDocument'];

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
    if (move_uploaded_file($_FILES['document']['tmp_name'], $dossier . $fichier)) //correct si la fonction renvoie TRUE
    {
        $chemin = $dossier . $fichier;
        $obj = new Documents(["libelleDocument" => $libelleDocument, "enregDocument" => $chemin]);
        $q = DocumentsManager::add($obj);
    } else //sinon, cas où la fonction renvoie FALSE
    {
        echo 'Echec de l\'enregistement !';
    }
} else {
    echo $erreur;
}

header("location: index.php?action=documentListe"); // renvoi vers document liste, juste après avoir exécuter la page