<?php
class EcrituresComptable
{
    /*******************************Attributs*******************************/
    private $_idExerciceComptable;
    private $_libelleExercice;
    private $_idEcriture;
    private $_typeEcriture;
    private $_dateEcriture;
    private $_libelleEcriture;
    private $_lettrage;
    private $_idClasseComptable;
    private $_numeroClasseComptable;
    private $_libelleClasseComptable;
    private $_idPCGA;
    private $_numCompte;
    private $_libelleCompte;
    private $_dansBilan;
    private $_idLigneEcriture;
    private $_montant;
    private $_sens;

    /******************************Accesseurs*******************************/
    
    public function getIdExerciceComptable()
    {
        return $this->_idExerciceComptable;
    }
    public function setIdExerciceComptable($_idExerciceComptable)
    {
        return $this->_idExerciceComptable = $_idExerciceComptable;
    }
    public function getLibelleExercice()
    {
        return $this->_libelleExercice;
    }
    public function setLibelleExercice($_libelleExercice)
    {
        return $this->_libelleExercice = $_libelleExercice;
    }
    public function getIdEcriture()
    {
        return $this->_idEcriture;
    }
    public function setIdEcriture($_idEcriture)
    {
        return $this->_idEcriture = $_idEcriture;
    }
    public function getTypeEcriture()
    {
        return $this->_typeEcriture;
    }
    public function setTypeEcriture($_typeEcriture)
    {
        return $this->_typeEcriture = $_typeEcriture;
    }
    public function getDateEcriture()
    {
        return $this->_dateEcriture;
    }
    public function setDateEcriture($_dateEcriture)
    {
        return $this->_dateEcriture = $_dateEcriture;
    }
    public function getLibelleEcriture()
    {
        return $this->_libelleEcriture;
    }
    public function setLibelleEcriture($_libelleEcriture)
    {
        return $this->_libelleEcriture = $_libelleEcriture;
    }
    public function getLettrage()
    {
        return $this->_lettrage;
    }
    public function setLettrage($_lettrage)
    {
        return $this->_lettrage = $_lettrage;
    }
    public function getIdClasseComptable()
    {
        return $this->_idClasseComptable;
    }
    public function setIdClasseComptable($_idClasseComptable)
    {
        return $this->_idClasseComptable = $_idClasseComptable;
    }
    public function getNumeroClasseComptable()
    {
        return $this->_numeroClasseComptable;
    }
    public function setNumeroClasseComptable($_numeroClasseComptable)
    {
        return $this->_numeroClasseComptable = $_numeroClasseComptable;
    }
    public function getLibelleClasseComptable()
    {
        return $this->_libelleClasseComptable;
    }
    public function setLibelleClasseComptable($_libelleClasseComptable)
    {
        return $this->_libelleClasseComptable = $_libelleClasseComptable;
    }
    public function getIdPCGA()
    {
        return $this->_idPCGA;
    }
    public function setIdPCGA($_idPCGA)
    {
        return $this->_idPCGA = $_idPCGA;
    }
    public function getNumCompte()
    {
        return $this->_numCompte;
    }
    public function setNumCompte($_numCompte)
    {
        return $this->_numCompte = $_numCompte;
    }
    public function getLibelleCompte()
    {
        return $this->_libelleCompte;
    }
    public function setLibelleCompte($_libelleCompte)
    {
        return $this->_libelleCompte = $_libelleCompte;
    }
    public function getDansBilan()
    {
        return $this->_dansBilan;
    }
    public function setDansBilan($_dansBilan)
    {
        return $this->_dansBilan = $_dansBilan;
    }
    public function getIdLigneEcriture()
    {
        return $this->_idLigneEcriture;
    }
    public function setIdLigneEcriture($_idLigneEcriture)
    {
        return $this->_idLigneEcriture = $_idLigneEcriture;
    }
    public function getMontant()
    {
        return $this->_montant;
    }
    public function setMontant($_montant)
    {
        return $this->_montant = $_montant;
    }
    public function getSens()
    {
        return $this->_sens;
    }
    public function setSens($_sens)
    {
        return $this->_sens = $_sens;
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
        return $this->getIdExerciceComptable() . "\n" . $this->getLibelleExercice() . "\n" . $this->getIdEcriture() . "\n" . $this->getTypeEcriture() . "\n" . $this->getDateEcriture() . "\n" . $this->getLibelleEcriture() . "\n" . $this->getLettrage() . "\n" . $this->getIdClasseComptable() . "\n" . $this->getNumeroClasseComptable() . "\n" . $this->getLibelleClasseComptable() . "\n" . $this->getIdPCGA() . "\n" . $this->getNumCompte() . "\n" . $this->getLibelleCompte() . "\n" . $this->getDansBilan() . "\n" . $this->getIdLigneEcriture() . "\n" . $this->getMontant() . "\n" . $this->getSens();
    }
}
