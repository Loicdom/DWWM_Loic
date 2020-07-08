<?php
class Villes
{
    /*******************************Attributs*******************************/
    private $_idVille;
    private $_libelleVille;

    /******************************Accesseurs*******************************/
    public function getIdVille()
    {
        return $this->_idVille;
    }
    public function setIdVille($_idVille)
    {
        return $this->_idVille = $_idVille;
    }
    public function getLibelleVille()
    {
        return $this->_libelleVille;
    }
    public function setLibelleVille($_libelleVille)
    {
        return $this->_libelleVille = $_libelleVille;
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
        return $this->getIdVille() . "\n" . $this->getLibelleVille();
    }
}
