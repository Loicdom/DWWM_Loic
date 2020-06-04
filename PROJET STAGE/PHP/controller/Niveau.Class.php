<?php
class Niveau
{
/*******************************Attributs*******************************/
private $_idNiveau;
private $_nomNiveau;
private $_pointDeVie;

/******************************Accesseurs*******************************/
public function getIdNiveau()
{
 return $this->_idNiveau;
}
public function setIdNiveau($_idNiveau)
{
 return $this->_idNiveau = $_idNiveau;
}
public function getNomNiveau()
{
 return $this->_nomNiveau;
}
public function setNomNiveau($_nomNiveau)
{
 return $this->_nomNiveau = $_nomNiveau;
}
public function getPointDeVie()
{
 return $this->_pointDeVie;
}
public function setPointDeVie($_pointDeVie)
{
 return $this->_pointDeVie = $_pointDeVie;
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
 return $this->getIdNiveau() . $this->getNomNiveau() . $this->getPointDeVie() ;
}

}