<?php
function ChargerClasse($classe)
{
    if (file_exists("../model/" . $classe . ".Class.php"))
    {
        require "../model/" . $classe . ".Class.php";
    }
    else
    {
        require "../controller/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");

Parametre::init();
DbConnect::init();


//*********************************UserManager**************************** *//

// ADD userManager :
// $u= new User(["pseudo"=>"Dupont", "motDePasse"=>1234,"idPersonnage"=>1]);
// var_dump($u);
// UserManager::add($u);

// // Update userManager :
// $m = UserManager::getById(4);
// $m->setPseudo("prio");
// var_dump($m);
// UserManager::update($m);


// // Delete userManager :
// UserManager::delete(4);

// // Get List userManager : a revoir 
// $tableau = UserManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }


//*********************************Personnage**************************** *//

// ADD PersonnageManager :
// $m = new Personnage(["nomPersonnage"=>"tutu","descriptionPersonnage"=>"petit mais robuste","avatar"=>"tete.jpg"]);
// var_dump($m);
// PersonnageManager::add($m);

// Update PersonnageManager :
// $m = PersonnageManager::getById(2);
// $m->setNomPersonnage("toto");
// var_dump($m);
// PersonnageManager::update($m);


// Delete PersonnageManager :
// PersonnageManager::delete(2);

// GetList PersonnageManager :
// $tableau = PersonnageManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************Score**************************** *//

// ADD ScoreManager :
// $m = new Score(["nbDePieceRecolte"=>10,"Bonus"=>100,"time"=>"10:20:00","scoreObtenu"=>1000,"idUser"=>5,"idNiveau"=>1]);
// var_dump($m);
// ScoreManager::add($m);

// Update ScoreManager :
// $m = ScoreManager::getById(1);
// $m->setBonus("200");
// var_dump($m);
// ScoreManager::update($m);


// Delete ScoreManager :
// ScoreManager::delete(1);

//*********************************Niveaux**************************** *//

// ADD NiveauManager :
// $m = new Niveau(["nomNiveau"=>"galaxie","pointDeVie"=>200]);
// var_dump($m);
// NiveauManager::add($m);

// Update NiveauManager :
// $m = NiveauManager::getById(1);
// $m->setPointDeVie("300");
// var_dump($m);
// NiveauManager::update($m);


// Delete ScoreManager :
// NiveauManager::delete(1);

// GetList NiveauManager :
// $tableau = NiveauManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }



