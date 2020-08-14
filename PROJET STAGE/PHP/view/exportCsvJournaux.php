<?php
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$journal = $_GET['j'];
// Création du contenu du tableau
$lignes = EcrituresComptableManager::getListParTypeDate($date1, $date2, $journal);
for($i=0;$i<count($lignes);$i++) {
    if($lignes[$i]->getSens() == 'Débit'){
        $debit = $lignes[$i]->getMontant();
        $credit = '';
    } else {
        $credit = $lignes[$i]->getMontant();
        $debit = '';
    }
    $array[] = array($lignes[$i]->getdateEcriture(), $lignes[$i]->getNumCompte(), $lignes[$i]->getLibelleCompte(), $lignes[$i]->getLibelleEcriture(),$debit,$credit);
}
$nom_fichier = $date1."au".$date2.$journal;
export_data_to_csv($array, $nom_fichier);

function export_data_to_csv($data,$filename)
{
    header("Content-Type: text/csv; charset=UTF8");
    header("Content-Type: text/csv");
    header("Content-disposition: filename=$filename.csv");
    // Création de la ligne d'en-tête
$entete = array("Date", "Numéro de compte", "Libellé du compte", "Libellé de l'écriture","Débit", "Crédit");


$separateur = ";";

// Affichage de la ligne de titre, terminée par un retour chariot
echo utf8_decode(implode($separateur, $entete))."\r\n";

// Affichage du contenu du tableau
foreach ($data as $ligne) {
	echo utf8_decode(implode($separateur, $ligne))."\r\n";
}

}