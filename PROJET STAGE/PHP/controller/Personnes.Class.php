<?php
class Personnes
{
    /*******************************Attributs*******************************/
    private $_idPersonne;
    private $_nomPersonne;
    private $_prenomPersonne;
    private $_dateNaissPersonne;
    private $_lieuNaissPersonne;
    private $_adressePersonne;
    private $_cpPersonne;
    private $_emailPersonne;
    private $_telPersonne;
    private $_autorisationPhotos;
    private $_bafaAquisBenevole;
    private $_casierJudiciaire;
    private $_paiementInscription;
    private $_nomRepresentantLegal;
    private $_prenomRepresentantLegal;
    private $_remarquePersonne;
    private $_typePersonne;
    private $_idVille;
    private $_Ville;

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
    public function getLieuNaissPersonne()
    {
        return $this->_lieuNaissPersonne;
    }
    public function setLieuNaissPersonne($_lieuNaissPersonne)
    {
        return $this->_lieuNaissPersonne = $_lieuNaissPersonne;
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
    public function getAutorisationPhotos()
    {
        return $this->_autorisationPhotos;
    }
    public function setAutorisationPhotos($_autorisationPhotos)
    {
        return $this->_autorisationPhotos = $_autorisationPhotos;
    }
    public function getBafaAquisBenevole()
    {
        return $this->_bafaAquisBenevole;
    }
    public function setBafaAquisBenevole($_bafaAquisBenevole)
    {
        return $this->_bafaAquisBenevole = $_bafaAquisBenevole;
    }
    public function getCasierJudiciaire()
    {
        return $this->_casierJudiciaire;
    }
    public function setCasierJudiciaire($_casierJudiciaire)
    {
        return $this->_casierJudiciaire = $_casierJudiciaire;
    }
    public function getPaiementInscription()
    {
        return $this->_paiementInscription;
    }
    public function setPaiementInscription($_paiementInscription)
    {
        return $this->_paiementInscription = $_paiementInscription;
    }
    public function getNomRepresentantLegal()
    {
        return $this->_nomRepresentantLegal;
    }
    public function setNomRepresentantLegal($_nomRepresentantLegal)
    {
        return $this->_nomRepresentantLegal = $_nomRepresentantLegal;
    }
    public function getPrenomRepresentantLegal()
    {
        return $this->_prenomRepresentantLegal;
    }
    public function setPrenomRepresentantLegal($_prenomRepresentantLegal)
    {
        return $this->_prenomRepresentantLegal = $_prenomRepresentantLegal;
    }
    public function getRemarquePersonne()
    {
        return $this->_remarquePersonne;
    }
    public function setRemarquePersonne($_remarquePersonne)
    {
        return $this->_remarquePersonne = $_remarquePersonne;
    }
    public function getTypePersonne()
    {
        return $this->_typePersonne;
    }
    public function setTypePersonne($_typePersonne)
    {
        return $this->_typePersonne = $_typePersonne;
    }
    public function getIdVille()
    {
        return $this->_idVille;
    }

    public function setIdVille($_idVille)
    {
        $this->_idVille = $_idVille;
        $v=VillesManager::getById($_idVille);
        $this->setVille($v);
    }
    public function getVille()
    {
        return $this->_Ville;
    }

    public function setVille($_Ville)
    {
        $this->_Ville = $_Ville;
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
        return $this->getIdPersonne() . "\n" . $this->getNomPersonne() . "\n" . $this->getPrenomPersonne() . "\n" . $this->getDateNaissPersonne() . "\n" . $this->getLieuNaissPersonne() . "\n" . $this->getAdressePersonne() . "\n" . $this->getCpPersonne() . "\n" . $this->getEmailPersonne() . "\n" . $this->getTelPersonne() . "\n" . $this->getAutorisationPhotos() . "\n" . $this->getBafaAquisBenevole() . "\n" . $this->getCasierJudiciaire() . "\n" . $this->getPaiementInscription() . "\n" . $this->getNomRepresentantLegal() . "\n" . $this->getPrenomRepresentantLegal() . "\n" . $this->getRemarquePersonne() . "\n" .  $this->getTypePersonne(). "\n" . $this->getVille()->toString();
    }
}
