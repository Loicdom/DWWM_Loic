<?php
class Personnage
{
/*******************************Attributs*******************************/
private $_idPersonnage;
private $_nomPersonnage;
private $_descriptionPersonnage;
private $_avatar;

/******************************Accesseurs*******************************/
public function getIdPersonnage()
{
 return $this->_idPersonnage;
}
public function setIdPersonnage($_idPersonnage)
{
 return $this->_idPersonnage = $_idPersonnage;
}
public function getNomPersonnage()
{
 return $this->_nomPersonnage;
}
public function setNomPersonnage($_nomPersonnage)
{
 return $this->_nomPersonnage = $_nomPersonnage;
}
public function getDescriptionPersonnage()
{
 return $this->_descriptionPersonnage;
}
public function setDescriptionPersonnage($_descriptionPersonnage)
{
 return $this->_descriptionPersonnage = $_descriptionPersonnage;
}
public function getAvatar()
{
 return $this->_avatar;
}
public function setAvatar($_avatar)
{
 return $this->_avatar = $_avatar;
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
 return $this->getIdPersonnage() ."\n". $this->getNomPersonnage()."\n" . $this->getDescriptionPersonnage() ."\n". $this->getAvatar() ;
}

}