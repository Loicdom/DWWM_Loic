<?php
class Niveau
{
/*******************************Attributs*******************************/
private $_idNiveau;
private $_libelleNiveau;
/******************************Accesseurs*******************************/
public function getIdNiveau()
{
 return $this->_idNiveau;
}
public function setIdNiveau($_idNiveau)
{
 return $this->_idNiveau = $_idNiveau;
}
public function getLibelleNiveau()
{
 return $this->_libelleNiveau;
}
public function setLibelleNiveau($_libelleNiveau)
{
 return $this->_libelleNiveau = $_libelleNiveau;
}
/*******************************Construct*******************************/
public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }

/****************************Autres méthodes****************************/
public function toString() 
{ 
 return $this->getIdNiveau() . $this->getLibelleNiveau() ;
}

}