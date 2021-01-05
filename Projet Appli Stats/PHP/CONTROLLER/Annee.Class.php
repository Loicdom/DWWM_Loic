<?php
class Annee
{
    /*******************************Attributs*******************************/
    private $_idAnnee;
    private $_libelleAnnee;
    /******************************Accesseurs*******************************/
    public function getIdAnnee()
    {
        return $this->_idAnnee;
    }
    public function setIdAnnee($_idAnnee)
    {
        return $this->_idAnnee = $_idAnnee;
    }
    public function getLibelleAnnee()
    {
        return $this->_libelleAnnee;
    }
    public function setLibelleAnnee($_libelleAnnee)
    {
        return $this->_libelleAnnee = $_libelleAnnee;
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
        return $this->getIdAnnee() . $this->getLibelleAnnee();
    }
}
