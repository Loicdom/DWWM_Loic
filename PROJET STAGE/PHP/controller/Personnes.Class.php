<?php
class Personnes
{
    /*******************************Attributs*******************************/
    private $_idPersonne;
    private $_nomPersonne;
    private $_prenomPersonne;
    private $_dateNaissPersonne;
    private $_adressePersonne;
    private $_cpPersonne;
    private $_villePersonne;
    private $_emailPersonne;
    private $_telPersonne;
    private $_infosParent;
    private $_bafaAquisBenevole;
    private $_commentairePersonne;
    private $_contratEmploye;
    private $_typePersonne;

    /******************************Accesseurs*******************************/
    public function getIdPersonne()
    {
        return $this->_idPersonne;
    }
    public function setIdPersonne($_idPersonne)
    {
        return $this->_idPersonne = $_idPersonne;
    }
    public function getNomPersonne()
    {
        return $this->_nomPersonne;
    }
    public function setNomPersonne($_nomPersonne)
    {
        return $this->_nomPersonne = $_nomPersonne;
    }
    public function getPrenomPersonne()
    {
        return $this->_prenomPersonne;
    }
    public function setPrenomPersonne($_prenomPersonne)
    {
        return $this->_prenomPersonne = $_prenomPersonne;
    }
    public function getDateNaissPersonne()
    {
        return $this->_dateNaissPersonne;
    }
    public function setDateNaissPersonne($_dateNaissPersonne)
    {
        return $this->_dateNaissPersonne = $_dateNaissPersonne;
    }
    public function getAdressePersonne()
    {
        return $this->_adressePersonne;
    }
    public function setAdressePersonne($_adressePersonne)
    {
        return $this->_adressePersonne = $_adressePersonne;
    }
    public function getCpPersonne()
    {
        return $this->_cpPersonne;
    }
    public function setCpPersonne($_cpPersonne)
    {
        return $this->_cpPersonne = $_cpPersonne;
    }
    public function getVillePersonne()
    {
        return $this->_villePersonne;
    }
    public function setVillePersonne($_villePersonne)
    {
        return $this->_villePersonne = $_villePersonne;
    }
    public function getEmailPersonne()
    {
        return $this->_emailPersonne;
    }
    public function setEmailPersonne($_emailPersonne)
    {
        return $this->_emailPersonne = $_emailPersonne;
    }
    public function getTelPersonne()
    {
        return $this->_telPersonne;
    }
    public function setTelPersonne($_telPersonne)
    {
        return $this->_telPersonne = $_telPersonne;
    }
    public function getInfosParent()
    {
        return $this->_infosParent;
    }
    public function setInfosParent($_infosParent)
    {
        return $this->_infosParent = $_infosParent;
    }
    public function getBafaAquisBenevole()
    {
        return $this->_bafaAquisBenevole;
    }
    public function setBafaAquisBenevole($_bafaAquisBenevole)
    {
        return $this->_bafaAquisBenevole = $_bafaAquisBenevole;
    }
    public function getCommentairePersonne()
    {
        return $this->_commentairePersonne;
    }
    public function setCommentairePersonne($_commentairePersonne)
    {
        return $this->_commentairePersonne = $_commentairePersonne;
    }
    public function getContratEmploye()
    {
        return $this->_contratEmploye;
    }
    public function setContratEmploye($_contratEmploye)
    {
        return $this->_contratEmploye = $_contratEmploye;
    }
    public function getTypePersonne()
    {
        return $this->_typePersonne;
    }
    public function setTypePersonne($_typePersonne)
    {
        return $this->_typePersonne = $_typePersonne;
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
        return $this->getIdPersonne() ."\n". $this->getNomPersonne() ."\n". $this->getPrenomPersonne()."\n". $this->getDateNaissPersonne()."\n". $this->getAdressePersonne()."\n". $this->getCpPersonne()."\n". $this->getVillePersonne()."\n". $this->getEmailPersonne()."\n". $this->getTelPersonne()."\n". $this->getInfosParent()."\n". $this->getBafaAquisBenevole()."\n". $this->getCommentairePersonne()."\n". $this->getContratEmploye()."\n". $this->getTypePersonne();
    }

}
