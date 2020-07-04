<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_POST["idBudget"]; // on récupère l'id si différent du mode ajout
}    
$p = new Budgets($_POST);
switch ($mode) {
    case "ajout":
        BudgetsManager::add($p); // lance la fonction pour ajouter un budget
        break;
    case "modif":
        BudgetsManager::update($p); // lance la fonction pour modifier un budget
        break;
    case "suppr":
        BudgetsManager::delete($id); // lance la fonction pour supprimer un budget
}
header("location:index.php?action=budgetPrevisionnel");
