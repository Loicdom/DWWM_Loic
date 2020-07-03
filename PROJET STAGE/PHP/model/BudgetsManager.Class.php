<?php
class BudgetsManager
{
public static function add(Budgets $obj) // Permet d'ajouter un budget (pour le budgetPrévisionnel)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO Budgets (annee,fournitureAtelierCreatif,atelierCuisineGouter,petitMateriel,salaireEmploye,assurance,fraisPostauxTel,entretienMaterielJadin,produitEntretien,fraisBancaires,ursaff,subvMunicipale,participationFamille,produitManif,anniversaire,adhesion,participationIME) VALUES (:annee,:fournitureAtelierCreatif,:atelierCuisineGouter,:petitMateriel,:salaireEmploye,:assurance,:fraisPostauxTel,:entretienMaterielJadin,:produitEntretien,:fraisBancaires,:ursaff,:subvMunicipale,:participationFamille,:produitManif,:anniversaire,:adhesion,:participationIME)");
$q->bindValue(":annee", $obj->getAnnee());
$q->bindValue(":fournitureAtelierCreatif", $obj->getFournitureAtelierCreatif());
$q->bindValue(":atelierCuisineGouter", $obj->getAtelierCuisineGouter());
$q->bindValue(":petitMateriel", $obj->getPetitMateriel());
$q->bindValue(":salaireEmploye", $obj->getSalaireEmploye());
$q->bindValue(":assurance", $obj->getAssurance());
$q->bindValue(":fraisPostauxTel", $obj->getFraisPostauxTel());
$q->bindValue(":entretienMaterielJadin", $obj->getEntretienMaterielJadin());
$q->bindValue(":produitEntretien", $obj->getProduitEntretien());
$q->bindValue(":fraisBancaires", $obj->getFraisBancaires());
$q->bindValue(":ursaff", $obj->getUrsaff());
$q->bindValue(":subvMunicipale", $obj->getSubvMunicipale());
$q->bindValue(":participationFamille", $obj->getParticipationFamille());
$q->bindValue(":produitManif", $obj->getProduitManif());
$q->bindValue(":anniversaire", $obj->getAnniversaire());
$q->bindValue(":adhesion", $obj->getAdhesion());
$q->bindValue(":participationIME", $obj->getParticipationIME());
 $q->execute();
}

public static function update(Budgets $obj) // Permet de modifier un budget (pour le budgetPrévisionnel)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE Budgets SET annee=:annee,fournitureAtelierCreatif=:fournitureAtelierCreatif, atelierCuisineGouter=:atelierCuisineGouter, petitMateriel=:petitMateriel, salaireEmploye=:salaireEmploye, assurance=:assurance, fraisPostauxTel=:fraisPostauxTel, entretienMaterielJadin=:entretienMaterielJadin, produitEntretien=:produitEntretien, fraisBancaires=:fraisBancaires, ursaff=:ursaff, subvMunicipale=:subvMunicipale, participationFamille=:participationFamille, produitManif=:produitManif, anniversaire=:anniversaire, adhesion=:adhesion, participationIME=:participationIME WHERE idBudget=:idBudget");
$q->bindValue(":annee", $obj->getAnnee());
$q->bindValue(":fournitureAtelierCreatif", $obj->getFournitureAtelierCreatif());
$q->bindValue(":atelierCuisineGouter", $obj->getAtelierCuisineGouter());
$q->bindValue(":petitMateriel", $obj->getPetitMateriel());
$q->bindValue(":salaireEmploye", $obj->getSalaireEmploye());
$q->bindValue(":assurance", $obj->getAssurance());
$q->bindValue(":fraisPostauxTel", $obj->getFraisPostauxTel());
$q->bindValue(":entretienMaterielJadin", $obj->getEntretienMaterielJadin());
$q->bindValue(":produitEntretien", $obj->getProduitEntretien());
$q->bindValue(":fraisBancaires", $obj->getFraisBancaires());
$q->bindValue(":ursaff", $obj->getUrsaff());
$q->bindValue(":subvMunicipale", $obj->getSubvMunicipale());
$q->bindValue(":participationFamille", $obj->getParticipationFamille());
$q->bindValue(":produitManif", $obj->getProduitManif());
$q->bindValue(":anniversaire", $obj->getAnniversaire());
$q->bindValue(":adhesion", $obj->getAdhesion());
$q->bindValue(":participationIME", $obj->getParticipationIME());
$q->bindValue(":idBudget", $obj->getIdBudget());
 $q->execute();
}

public static function delete($id) // Permet de supprimer un budget (pour le budgetPrévisionnel)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM Budgets WHERE idBudget=$id");
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM Budgets WHERE idBudget=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Budgets ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$budgets = [];
$q = $db->query("SELECT * FROM Budgets");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$budgets[] = new Budgets($donnees);
}
}
return $budgets;
}

}