<?php
// Création du contenu du tableau
$lignes = PersonnesManager::getListByBenevole();
for ($i = 0; $i < count($lignes); $i++) {
    $array[] = array($lignes[$i]->getNomPersonne(), $lignes[$i]->getPrenomPersonne(), $lignes[$i]->getDateNaissPersonne(), $lignes[$i]->getLieuNaissPersonne(), $lignes[$i]->getAdressePersonne(), $lignes[$i]->getCpPersonne(), $lignes[$i]->getVille()->getLibelleVille(), $lignes[$i]->getEmailPersonne(), $lignes[$i]->getTelPersonne(), $lignes[$i]->getAutorisationPhotos(), $lignes[$i]->getBafaAquisBenevole(), $lignes[$i]->getCasierJudiciaire(), $lignes[$i]->getRemarquePersonne());
}

export_data_to_csv($array, 'ListeBénévoles');

function export_data_to_csv($data, $filename)
{
    header("Content-Type: text/csv; charset=UTF8");
    header("Content-Type: text/csv");
    header("Content-disposition: filename=$filename.csv");
    // Création de la ligne d'en-tête
    $entete = array("Nom", "Prénom", "Date de naissance", "Lieu de naissance", "Adresse", "Code Postal", "Ville", "E-mail", "Téléphone", "Autorisation photos", "Bafa acquis", "Casier judiciaire", "Remarque");


    $separateur = ";";

    // Affichage de la ligne de titre, terminée par un retour chariot
    echo utf8_decode(implode($separateur, $entete)) . "\r\n";

    // Affichage du contenu du tableau
    foreach ($data as $ligne) {
        echo utf8_decode(implode($separateur, $ligne)) . "\r\n";
    }
}
