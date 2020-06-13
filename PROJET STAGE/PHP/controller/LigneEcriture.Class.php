<?php
class LigneEcriture
{
    /*******************************Attributs*******************************/
    private $_idLigneEcriture;
    private $_montant;
    private $_sens;
    private $_idEcriture;
    private $_idPCGA;

    /******************************Accesseurs*******************************/
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
    public function getIdEcriture()
    {
        return $this->_idEcriture;
    }
    public function setIdEcriture($_idEcriture)
    {
        return $this->_idEcriture = $_idEcriture;
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
        return $this->getIdLigneEcriture() . "\n" . $this->getMontant() . "\n" . $this->getSens() . "\n" . $this->getIdEcriture() . "\n" . $this->getIdPCGA();
    }
}
