<?php
class Ecritures
{
    /*******************************Attributs*******************************/
    private $_idEcriture;
    private $_dateEcriture;
    private $_libelleEcriture;
    private $_montant;
    private $_sens;
    private $_lettrage;

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
    public function getLettrage()
    {
        return $this->_lettrage;
    }
    public function setLettrage($_lettrage)
    {
        return $this->_lettrage = $_lettrage;
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
        return $this->getIdEcriture() ."\n". $this->getDateEcriture() ."\n". $this->getLibelleEcriture()."\n". $this->getMontant()."\n". $this->getSens()."\n". $this->getLettrage();
    }

}
