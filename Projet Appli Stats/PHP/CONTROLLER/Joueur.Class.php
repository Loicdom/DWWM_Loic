<?php
class Joueur
{
/*******************************Attributs*******************************/
private $_idJoueur;
private $_nomJoueur;
private $_prenomJoueur;
private $_posteJoueur;
private $_tailleJoueur;
private $_numJoueur;
private $_typeJoueur;
private $_idEquipe;

/******************************Accesseurs*******************************/
public function getIdJoueur()
{
 return $this->_idJoueur;
}
public function setIdJoueur($_idJoueur)
{
 return $this->_idJoueur = $_idJoueur;
}
public function getNomJoueur()
{
 return $this->_nomJoueur;
}
public function setNomJoueur($_nomJoueur)
{
 return $this->_nomJoueur = $_nomJoueur;
}
public function getPrenomJoueur()
{
 return $this->_prenomJoueur;
}
public function setPrenomJoueur($_prenomJoueur)
{
 return $this->_prenomJoueur = $_prenomJoueur;
}
public function getPosteJoueur()
{
 return $this->_posteJoueur;
}
public function setPosteJoueur($_posteJoueur)
{
 return $this->_posteJoueur = $_posteJoueur;
}
public function getTailleJoueur()
{
 return $this->_tailleJoueur;
}
public function setTailleJoueur($_tailleJoueur)
{
 return $this->_tailleJoueur = $_tailleJoueur;
}
public function getNumJoueur()
{
 return $this->_numJoueur;
}
public function setNumJoueur($_numJoueur)
{
 return $this->_numJoueur = $_numJoueur;
}
public function getTypeJoueur()
{
 return $this->_typeJoueur;
}
public function setTypeJoueur($_typeJoueur)
{
 return $this->_typeJoueur = $_typeJoueur;
}
public function getIdEquipe()
{
 return $this->_idEquipe;
}
public function setIdEquipe($_idEquipe)
{
 return $this->_idEquipe = $_idEquipe;
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
 return $this->getIdJoueur() . $this->getNomJoueur() . $this->getPrenomJoueur() . $this->getPosteJoueur() . $this->getTailleJoueur() . $this->getNumJoueur() . $this->getTypeJoueur() . $this->getIdEquipe() ;
}

}