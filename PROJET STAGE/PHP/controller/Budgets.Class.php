<?php
class Budgets
{
    /*******************************Attributs*******************************/
    private $_idBudget;
    private $_annee;
    private $_fournitureAtelierCreatif;
    private $_atelierCuisineGouter;
    private $_petitMateriel;
    private $_salaireEmploye;
    private $_assurance;
    private $_fraisPostauxTel;
    private $_entretienMaterielJadin;
    private $_produitEntretien;
    private $_fraisBancaires;
    private $_ursaff;
    private $_subvMunicipale;
    private $_participationFamille;
    private $_produitManif;
    private $_anniversaire;
    private $_adhesion;
    private $_participationIME;

    /******************************Accesseurs*******************************/
    public function getIdBudget()
    {
        return $this->_idBudget;
    }
    public function setIdBudget($_idBudget)
    {
        return $this->_idBudget = $_idBudget;
    }
    public function getAnnee()
    {
        return $this->_annee;
    }
    public function setAnnee($_annee)
    {
        return $this->_annee = $_annee;
    }
    public function getFournitureAtelierCreatif()
    {
        return $this->_fournitureAtelierCreatif;
    }
    public function setFournitureAtelierCreatif($_fournitureAtelierCreatif)
    {
        return $this->_fournitureAtelierCreatif = $_fournitureAtelierCreatif;
    }
    public function getAtelierCuisineGouter()
    {
        return $this->_atelierCuisineGouter;
    }
    public function setAtelierCuisineGouter($_atelierCuisineGouter)
    {
        return $this->_atelierCuisineGouter = $_atelierCuisineGouter;
    }
    public function getPetitMateriel()
    {
        return $this->_petitMateriel;
    }
    public function setPetitMateriel($_petitMateriel)
    {
        return $this->_petitMateriel = $_petitMateriel;
    }
    public function getSalaireEmploye()
    {
        return $this->_salaireEmploye;
    }
    public function setSalaireEmploye($_salaireEmploye)
    {
        return $this->_salaireEmploye = $_salaireEmploye;
    }
    public function getAssurance()
    {
        return $this->_assurance;
    }
    public function setAssurance($_assurance)
    {
        return $this->_assurance = $_assurance;
    }
    public function getFraisPostauxTel()
    {
        return $this->_fraisPostauxTel;
    }
    public function setFraisPostauxTel($_fraisPostauxTel)
    {
        return $this->_fraisPostauxTel = $_fraisPostauxTel;
    }
    public function getEntretienMaterielJadin()
    {
        return $this->_entretienMaterielJadin;
    }
    public function setEntretienMaterielJadin($_entretienMaterielJadin)
    {
        return $this->_entretienMaterielJadin = $_entretienMaterielJadin;
    }
    public function getProduitEntretien()
    {
        return $this->_produitEntretien;
    }
    public function setProduitEntretien($_produitEntretien)
    {
        return $this->_produitEntretien = $_produitEntretien;
    }
    public function getFraisBancaires()
    {
        return $this->_fraisBancaires;
    }
    public function setFraisBancaires($_fraisBancaires)
    {
        return $this->_fraisBancaires = $_fraisBancaires;
    }
    public function getUrsaff()
    {
        return $this->_ursaff;
    }
    public function setUrsaff($_ursaff)
    {
        return $this->_ursaff = $_ursaff;
    }
    public function getSubvMunicipale()
    {
        return $this->_subvMunicipale;
    }
    public function setSubvMunicipale($_subvMunicipale)
    {
        return $this->_subvMunicipale = $_subvMunicipale;
    }
    public function getParticipationFamille()
    {
        return $this->_participationFamille;
    }
    public function setParticipationFamille($_participationFamille)
    {
        return $this->_participationFamille = $_participationFamille;
    }
    public function getProduitManif()
    {
        return $this->_produitManif;
    }
    public function setProduitManif($_produitManif)
    {
        return $this->_produitManif = $_produitManif;
    }
    public function getAnniversaire()
    {
        return $this->_anniversaire;
    }
    public function setAnniversaire($_anniversaire)
    {
        return $this->_anniversaire = $_anniversaire;
    }
    public function getAdhesion()
    {
        return $this->_adhesion;
    }
    public function setAdhesion($_adhesion)
    {
        return $this->_adhesion = $_adhesion;
    }
    public function getParticipationIME()
    {
        return $this->_participationIME;
    }
    public function setParticipationIME($_participationIME)
    {
        return $this->_participationIME = $_participationIME;
    }

    /*******************************Construct*******************************/
    public function __construct(array $options = [])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode]))) {
                $this->$methode($value);
            }
        }
    }

    /****************************Autres méthodes****************************/
    public function toString()
    {
        return $this->getIdBudget() . "\n" . $this->getAnnee() . "\n" . $this->getFournitureAtelierCreatif() . "\n" . $this->getAtelierCuisineGouter() . "\n" . $this->getPetitMateriel() . "\n" . $this->getSalaireEmploye() . "\n" . $this->getAssurance() . "\n" . $this->getFraisPostauxTel() . "\n" . $this->getEntretienMaterielJadin() . "\n" . $this->getProduitEntretien() . "\n" . $this->getFraisBancaires() . "\n" . $this->getUrsaff() . "\n" . $this->getSubvMunicipale() . "\n" . $this->getParticipationFamille() . "\n" . $this->getProduitManif() . "\n" . $this->getAnniversaire() . "\n" . $this->getAdhesion() . "\n" . $this->getParticipationIME();
    }
}
