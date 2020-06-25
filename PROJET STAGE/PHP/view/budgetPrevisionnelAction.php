<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_POST["idBudget"];
}    
$p = new Budgets($_POST);
switch ($mode) {
    case "ajout":
        BudgetsManager::add($p);
        break;
    case "modif":
        BudgetsManager::update($p);
        break;
    case "suppr":
        BudgetsManager::delete($id);
}
header("location:index.php?action=budgetPrevisionnel");
