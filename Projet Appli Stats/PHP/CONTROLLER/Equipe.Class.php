<?php
class Equipe
{
/*******************************Attributs*******************************/
private $_idEquipe;
private $_nomEquipe;
private $_idNiveau;

/******************************Accesseurs*******************************/
public function getIdEquipe()
{
 return $this->_idEquipe;
}
public function setIdEquipe($_idEquipe)
{
 return $this->_idEquipe = $_idEquipe;
}
public function getNomEquipe()
{
 return $this->_nomEquipe;
}
public function setNomEquipe($_nomEquipe)
{
 return $this->_nomEquipe = $_nomEquipe;
}
public function getIdNiveau()
{
 return $this->_idNiveau;
}
public function setIdNiveau($_idNiveau)
{
 return $this->_idNiveau = $_idNiveau;
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
 return $this->getIdEquipe() . $this->getNomEquipe() . $this->getIdNiveau() ;
}

}