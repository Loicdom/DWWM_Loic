<?php
function ChargerClasse($classe)
{
    if (file_exists("../MODEL/" . $classe . ".Class.php")) {
        require "../MODEL/" . $classe . ".Class.php";
    } else {
        require "../CONTROLLER/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

Parametre::init();
DbConnect::init();

/******************** Test Annee *********************/

// echo "tot";
// $p = AnneeManager::getById(2);
// var_dump($p);
// $p->setIdAnnee(null);
// $p->setLibelleAnnee("2017");
// AnneeManager::add($p);
// AnneeManager::update($p);
// $tableau = AnneeManager::getList();
// foreach ($tableau as $uneAnnee)
// {
//     echo $uneAnnee->toString()."\n";
// }
// AnneeManager::delete($p);

/******************** Test Equipe *********************/

// echo "tot";
// $p = EquipeManager::getById(3);
// var_dump($p);
// $p->setIdEquipe(null);
// $p->setNomEquipe("Audruicq");
// EquipeManager::add($p);
// EquipeManager::update($p);
// $tableau = EquipeManager::getList();
// foreach ($tableau as $uneEquipe)
// {
//     echo $uneEquipe->toString()."\n";
// }
// EquipeManager::delete($p);

/******************** Test Joueur *********************/

// echo "tot";
// $p = JoueurManager::getById(4);
// var_dump($p);
// $p->setIdJoueur(null);
// $p->setNomJoueur("Dupont");
// $p->setPrenomJoueur("Luc");
// JoueurManager::add($p);
// JoueurManager::update($p);
// $tableau = JoueurManager::getList();
// foreach ($tableau as $unJoueur)
// {
//     echo $unJoueur->toString()."\n";
// }
// JoueurManager::delete($p);

/******************** Test Niveau *********************/

// echo "tot";
// $p = NiveauManager::getById(2);
// var_dump($p);
// $p->setIdNiveau(null);
// $p->setLibelleNiveau("Stras");
// NiveauManager::add($p);
// NiveauManager::update($p);
// $tableau = NiveauManager::getList();
// foreach ($tableau as $unNiveau)
// {
//     echo $unNiveau->toString()."\n";
// }
// NiveauManager::delete($p);

/******************** Test Stats *********************/

// echo "tot";
// $p = StatManager::getById(2);
// var_dump($p);
// $p->setIdStat(null);
// $p->setDeuxPointTente(57);
// $p->setDeuxPointMarque(21);
// StatManager::add($p);
// StatManager::update($p);
// $tableau = StatManager::getList();
// foreach ($tableau as $uneStat)
// {
//     echo $uneStat->toString()."\n";
// }
// StatManager::delete($p);

/******************** Test Users *********************/

// echo "tot";
// $p = UserManager::getById(2);
// var_dump($p);
// $p->setIdUser(null);
// $p->setPseudo("Dunk");
// UserManager::add($p);
// UserManager::update($p);
// $tableau = UserManager::getList();
// foreach ($tableau as $unUser)
// {
//     echo $unUser->toString()."\n";
// }
// UserManager::delete(2);

/******************** Test Match *********************/

// echo "tot";
// $p = MatchManager::getById(3);
// var_dump($p);
// $p->setIdMatch(null);
// $p->setAdversaire("Stras");
// MatchManager::add($p);
// MatchManager::update($p);
// $tableau = MatchManager::getList();
// foreach ($tableau as $unMatch)
// {
//     echo $unMatch->toString()."\n";
// }
// MatchManager::delete($p);