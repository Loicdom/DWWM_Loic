<?php
class Fournisseurs
{
/*******************************Attributs*******************************/
private $_idFournisseur ;
private $_codeFournisseur;
private $_libelleFournisseur;

/******************************Accesseurs*******************************/
public function getIdFournisseur()
{
 return $this->_idFournisseur;
}
public function setIdFournisseur($_idFournisseur)
{
 return $this->_idFournisseur = $_idFournisseur;
}
public function getCodeFournisseur()
{
 return $this->_codeFournisseur;
}
public function setCodeFournisseur($_codeFournisseur)
{
 return $this->_codeFournisseur = $_codeFournisseur;
}
public function getLibelleFournisseur()
{
 return $this->_libelleFournisseur;
}
public function setLibelleFournisseur($_libelleFournisseur)
{
 return $this->_libelleFournisseur = $_libelleFournisseur;
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
 return $this->getIdFournisseur() . "\n". $this->getCodeFournisseur() ."\n". $this->getLibelleFournisseur();
}

}