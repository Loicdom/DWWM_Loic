<?php
function ChargerClasse($classe)
{
    if (file_exists("../model/" . $classe . ".Class.php")) {
        require "../model/" . $classe . ".Class.php";
    } else {
        require "../controller/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

Parametre::init();
DbConnect::init();


//*********************************UserManager**************************** *//

// // ADD usersManager :
// $u= new Users(["pseudo"=>"KB24", "motDePasse"=>3035,"role"=>1]);
// var_dump($u);
// UsersManager::add($u);

// // Update usersManager :
// $m = UsersManager::getById(1);
// $m->setMotDePasse("4321");
// var_dump($m);
// UsersManager::update($m);

// // Delete userManager :
// UsersManager::delete(1);

// // Get List userManager
// $tableau = UsersManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }


//*********************************Personne**************************** *//

// // ADD PersonnesManager :
// $m = new Personnes(["nomPersonne"=>"Doma","prenomPersonne"=>"Fab","dateNaissPersonne"=>"1967-07-15","lieuNaissPersonne"=>"saint pol","adressePersonne"=>"11 res du cp","cpPersonne"=>59000,"villePersonne"=>"Lille","emailPersonne"=>"emaildePersonne@gmail.fr","telPersonne"=>"06-05-10-08-09","autorisationPhotos"=>"oui","bafaAquisBenevole"=>"oui"]);
// // $m = PersonnesManager::getById(3);
// var_dump($m);
// PersonnesManager::addBenevole($m);

// // Update PersonnageManager :
// $m = PersonnesManager::getById(9);
// $m->setLieuNaissPersonne("Dunkerque");
// var_dump($m);
// PersonnesManager::updateBenevole($m);


// // Delete PersonnageManager :
// PersonnesManager::delete(2);

// // GetList PersonnageManager :
// $tableau = PersonnesManager::getListByEmploye();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************PCGA**************************** *//

// // ADD PCGAManager :
// $m = new PCGA(["numCompte"=>707,"libelleCompte"=>"Ventes de marchandises","dansBilan"=>"oui","idClasseComptable"=>3]);
// var_dump($m);
// PCGAManager::add($m);

// // ADD PCGAManager :
// $c = "LID";
// $l = "LIDL";
// var_dump($c);
// PCGAManager::addCompteFournisseur($c,$l);

// // Update PCGAManager :
// $m = PCGAManager::getByMaxId();
// $m->setNumCompte(607);
// $m->setLibelleCompte("Achats de marchandises");
// $m->setIdClasseComptable(1);
// var_dump($m);
// PCGAManager::update($m);


// // Delete PCGAManager :
// PCGAManager::delete(2);

// // GetList PCGAManager :
// $tableau = PCGAManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************ClasseComptable**************************** *//

// // ADD ClasseComptableManager :
// $m = new ClasseComptable(["numeroClasseComptable"=>6,"libelleClasseComptable"=>"Charges"]);
// var_dump($m);
// ClasseComptableManager::add($m);

// // Update ClasseComptableManager :
// $m = ClasseComptableManager::getById(3);
// $m->setLibelleClasseComptable("Recettes");
// $m->setNumeroClasseComptable(7);
// var_dump($m);
// ClasseComptableManager::update($m);


// // Delete ClasseComptableManager :
// ClasseComptableManager::delete(2);

// // GetList ClasseComptableManager :
// $tableau = ClasseComptableManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************LigneEcriture**************************** *//
// ADD LigneEcritureManager :
// $m = new LigneEcriture(["montant"=>1246.23,"sens"=>"Debit","idEcriture"=>1,"idPCGA"=>4]);
// var_dump($m);
// LigneEcritureManager::add($m);

// // Update LigneEcritureManager :
// $m = LigneEcritureManager::getById(3);
// $m->setSens("Credit");
// var_dump($m);
// LigneEcritureManager::update($m);


// // Delete LigneEcritureManager :
// LigneEcritureManager::delete(2);

// // GetList LigneEcritureManager :
// $tableau = LigneEcritureManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************Factures**************************** *//

// // ADD FacturesManager :
// $m = "Lidl Charges";
// $fact = "Factures/";
// // var_dump($m);
// FacturesManager::add($m,$fact);

// // Update FacturesManager :
// $m = FacturesManager::getById(2);
// $m->setLibelleFact("Facture Ventes");
// var_dump($m);
// FacturesManager::update($m);

// echo FacturesManager::getMaxIdFacture();


// // Delete FacturesManager :
// FacturesManager::delete(3);

// // GetList FacturesManager :
// // $tableau = FacturesManager::getList();
// // foreach ($tableau as $info)
// // {
// //     echo $info->toString();
// // }

//*********************************Ecritures**************************** *//

// // ADD EcrituresManager :
// $m = new Ecritures(["dateEcriture"=>"2020-10-07","libelleEcriture"=>"Facture achats cb","solde"=>203.02,"idFacture"=>1,"idExerciceComptable"=>1]);
// var_dump($m);
// EcrituresManager::add($m);

// // Update EcrituresManager :
// $m = EcrituresManager::getById(2);
// $m->setLibelleEcriture("yjsxfck");
// var_dump($m);
// EcrituresManager::update($m);


// // Delete EcrituresManager :
// EcrituresManager::delete(2);

// // GetList EcrituresManager :
// $tableau = EcrituresManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************ExerciceComptable**************************** *//

// // ADD ExerciceComptableManager :
// $m = new ExerciceComptable(["libelleExercice"=>"2021-2022"]);
// var_dump($m);
// ExerciceComptableManager::add($m);

// // Update ExerciceComptableManager :
// $m = ExerciceComptableManager::getById(2);
// $m->setLibelleExercice("2020-2021");
// var_dump($m);
// ExerciceComptableManager::update($m);


// // Delete ExerciceComptableManager :
// ExerciceComptableManager::delete(3);

// // GetList ExerciceComptableManager :
// $tableau = ExerciceComptableManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************Fournisseurs**************************** *//

// // ADD FournisseursManager :
// $m = new Fournisseurs(["codeFournisseur"=>"CAR","libelleFournisseur"=>"Carrefour","idPCGA"=>3]);
// var_dump($m);
// FournisseursManager::add($m);

// // Update FournisseursManager :
// $m = FournisseursManager::getById(2);
// $m->setLibelleFournisseur("carre");
// var_dump($m);
// FournisseursManager::update($m);


// // Delete FournisseursManager :
// FournisseursManager::delete(2);

// // GetList FournisseursManager :
// $tableau = FournisseursManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************Documents**************************** *//

// // ADD DocumentsManager :
// $m = new Documents(["libelleDocument"=>"Dom"]);
// var_dump($m);
// DocumentsManager::add($m);

// // Update DocumentsManager :
// $m = DocumentsManager::getById(2);
// $m->setLibelleDocument("Dunkerque");
// var_dump($m);
// DocumentsManager::update($m);


// // Delete DocumentsManager :
// DocumentsManager::delete(3);

// // GetList DocumentsManager :
// $tableau = DocumentsManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************Budgets**************************** *//

// // ADD BudgetsManager :
// $m = new Budgets(["fournitureAtelierCreatif"=>1340,"atelierCuisineGouter"=>1100,"petitMateriel"=>123,"salaireEmploye"=>1400,"assurance"=>652,"fraisPostauxTel"=>5900,"entretienMaterielJadin"=>12,"produitEntretien"=>123,"fraisBancaires"=>42,"ursaff"=>126,"subvMunicipale"=>17000,"participationFamille"=>240,"produitManif"=>1800,"anniversaire"=>2480,"adhesion"=>170,"participationIME"=>240]);
// var_dump($m);
// BudgetsManager::add($m);

// // Update BudgetsManager :
// $m = BudgetsManager::getById(2);
// $m->setAtelierCuisineGouter(1234);
// var_dump($m);
// BudgetsManager::update($m);


// // Delete BudgetsManager :
// BudgetsManager::delete(2);

// // GetList BudgetsManager :
// $tableau = BudgetsManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }
