<?php
class Match
{
/*******************************Attributs*******************************/
private $_idMatch;
private $_adversaire;
private $_lieux;

/******************************Accesseurs*******************************/
public function getIdMatch()
{
 return $this->_idMatch;
}
public function setIdMatch($_idMatch)
{
 return $this->_idMatch = $_idMatch;
}
public function getAdversaire()
{
 return $this->_adversaire;
}
public function setAdversaire($_adversaire)
{
 return $this->_adversaire = $_adversaire;
}
public function getLieux()
{
 return $this->_lieux;
}
public function setLieux($_lieux)
{
 return $this->_lieux = $_lieux;
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
 return $this->getIdMatch() . $this->getAdversaire() . $this->getLieux() ;
}

}