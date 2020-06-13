<?php
class PCGA
{
    /*******************************Attributs*******************************/
    private $_idPCGA;
    private $_numCompte;
    private $_libelleCompte;
    private $_dansBilan;
    private $_idClasseComptable;

    /******************************Accesseurs*******************************/
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
    public function getIdClasseComptable()
    {
        return $this->_idClasseComptable;
    }
    public function setIdClasseComptable($_idClasseComptable)
    {
        return $this->_idClasseComptable = $_idClasseComptable;
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
        return $this->getIdPCGA() . "\n" . $this->getNumCompte() . "\n" . $this->getLibelleCompte() . "\n" . $this->getDansBilan() . "\n" . $this->getIdClasseComptable();
    }
}
