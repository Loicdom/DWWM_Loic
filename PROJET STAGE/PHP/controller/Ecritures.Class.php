<?php
class Ecritures
{
    /*******************************Attributs*******************************/
    private $_idEcriture;
    private $_dateEcriture;
    private $_libelleEcriture;
    private $_lettrage;
    private $_idFacture;
    private $_idExerciceComptable;

    /******************************Accesseurs*******************************/
    public function getIdEcriture()
    {
        return $this->_idEcriture;
    }
    public function setIdEcriture($_idEcriture)
    {
        return $this->_idEcriture = $_idEcriture;
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
    public function getIdFacture()
    {
        return $this->_idFacture;
    }
    public function setIdFacture($_idFacture)
    {
        $this->_idClasseComptable = $_idFacture;
        $m=ClasseComptableManager::getById($_idFacture);
        $this->setFacture($m);
    }
    public function getFacture()
    {
        return $this->_facture;
    }
    public function setFacture($_facture)
    {
        return $this->_facture = $_facture;
    }
    public function getIdExerciceComptable()
    {
        return $this->_idExerciceComptable;
    }
    public function setIdExerciceComptable($_idExerciceComptable)
    {
        $this->_idClasseComptable = $_idExerciceComptable;
        $m=ClasseComptableManager::getById($_idExerciceComptable);
        $this->setExerciceComptable($m);
    }
    public function getExerciceComptable()
    {
        return $this->_exerciceComptable;
    }
    public function setExerciceComptable($_exerciceComptable)
    {
        return $this->_exerciceComptable = $_exerciceComptable;
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
        return $this->getIdEcriture() . "\n" . $this->getDateEcriture() . "\n" . $this->getLibelleEcriture() . "\n" . $this->getLettrage() . "\n" . $this->getFacture() . "\n" . $this->getExerciceComptable();
    }
}
