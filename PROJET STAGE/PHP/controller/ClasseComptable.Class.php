<?php
class ClasseComptable
{
    /*******************************Attributs*******************************/
    private $_idClasseComptable;
    private $_numeroClasseComptable;
    private $_libelleClasseComptable;

    /******************************Accesseurs*******************************/
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
        return $this->getIdClasseComptable() . "\n" . $this->getNumeroClasseComptable() . "\n" . $this->getLibelleClasseComptable();
    }
}
