<?php
class Factures
{
    /*******************************Attributs*******************************/
    private $_idFacture;
    private $_libelleFact;
    private $_enregFact;

    /******************************Accesseurs*******************************/
    public function getIdFacture()
    {
        return $this->_idFacture;
    }
    public function setIdFacture($_idFacture)
    {
        return $this->_idFacture = $_idFacture;
    }
    public function getLibelleFact()
    {
        return $this->_libelleFact;
    }
    public function setLibelleFact($_libelleFact)
    {
        return $this->_libelleFact = $_libelleFact;
    }
    public function getEnregFact()
    {
        return $this->_enregFact;
    }
    public function setEnregFact($_enregFact)
    {
        return $this->_enregFact = $_enregFact;
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
        return $this->getIdFacture() . "\n" . $this->getLibelleFact() . "\n" . $this->getEnregFact();
    }
}
