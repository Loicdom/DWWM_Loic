<?php
class Evenements
{
    /*******************************Attributs*******************************/
    private $_idEvenement;
    private $_codeEvenement;
    private $_libelleEvenement;
    private $_idPCGA;

    /******************************Accesseurs*******************************/
    public function getIdEvenement()
    {
        return $this->_idEvenement;
    }
    public function setIdEvenement($_idEvenement)
    {
        return $this->_idEvenement = $_idEvenement;
    }
    public function getCodeEvenement()
    {
        return $this->_codeEvenement;
    }
    public function setCodeEvenement($_codeEvenement)
    {
        return $this->_codeEvenement = $_codeEvenement;
    }
    public function getLibelleEvenement()
    {
        return $this->_libelleEvenement;
    }
    public function setLibelleEvenement($_libelleEvenement)
    {
        return $this->_libelleEvenement = $_libelleEvenement;
    }
    public function getIdPCGA()
    {
        return $this->_idPCGA;
    }
    public function setIdPCGA($_idPCGA)
    {
        return $this->_idPCGA = $_idPCGA;
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
        return $this->getIdEvenement() . "\n" . $this->getCodeEvenement() . "\n" . $this->getLibelleEvenement() . "\n" . $this->getIdPCGA();
    }
}
