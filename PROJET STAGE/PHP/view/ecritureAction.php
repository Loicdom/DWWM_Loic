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
        echo 'Enregistement effectué avec succès !';
        $chemin = $dossier . $fichier;
        $q = FacturesManager::add($libelleFacture, $chemin);
    } else //sinon, cas où la fonction renvoie FALSE
    {
        echo 'Echec de l\'enregistement !';
    }
} else {
    echo $erreur;
}

$idFact = FacturesManager::getMaxIdFacture();
$typeEcriture = $_GET["j"];
$dateEcriture = $_POST['dateEcriture'][0];
$libelleEcriture = $_POST['libelleEcriture'][0];
// // ADD Ecriture :
$e = new Ecritures(["typeEcriture" => $typeEcriture, "dateEcriture" => $dateEcriture, "libelleEcriture" => $libelleEcriture, "idFacture" => $idFact, "idExerciceComptable" => $annee]);
EcrituresManager::add($e);

$taille = count(array_values($_POST['numCompte']));
$idEcriture = EcrituresManager::getMaxIdEcriture();
for ($i = 0; $i < $taille; $i++) {
    $numeroCompte = $_POST['numCompte'][$i];
    $idPCGA = PCGAManager::getIdByNumcompte($numeroCompte);
    $débit = $_POST['debit'][$i];
    $credit = $_POST['credit'][$i];
    if ($débit != '') {
        $montant = $débit;
        $sens = "Débit";
    } else if ($credit != '') {
        $montant = $credit;
        $sens = "Crédit";
    }
    // // ADD LigneEcriture :
    $ligne = new LigneEcriture(["montant" => $montant, "sens" => $sens, "idEcriture" => $idEcriture, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);
}

header("refresh:2,url=index.php?action=ecritureListe&j=$typeEcriture"); // renvoi vers ecriture liste, juste après avoir exécuter la page
