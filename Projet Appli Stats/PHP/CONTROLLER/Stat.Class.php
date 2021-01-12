<?php
class Stat
{
/*******************************Attributs*******************************/
private $_idStat;
private $_dateStat;
private $_minuteJouer;
private $_deuxPointTente;
private $_deuxPointMarque;
private $_troisPointTente;
private $_troisPointMarque;
private $_lancerFrancTente;
private $_lancerFrancMarque;
private $_rebondDef;
private $_rebondOff;
private $_passeDec;
private $_ballePerdue;
private $_interception;
private $_contreRealise;
private $_contreSubit;
private $_fautePerso;
private $_fauteProv;
private $_pointMarque;
private $_evaluation;
private $_idJoueur;
private $_idMatch;

/******************************Accesseurs*******************************/
public function getIdStat()
{
 return $this->_idStat;
}
public function setIdStat($_idStat)
{
 return $this->_idStat = $_idStat;
}
public function getDateStat()
{
 return $this->_dateStat;
}
public function setDateStat($_dateStat)
{
 return $this->_dateStat = $_dateStat;
}
public function getMinuteJouer()
{
 return $this->_minuteJouer;
}
public function setMinuteJouer($_minuteJouer)
{
 return $this->_minuteJouer = $_minuteJouer;
}
public function getDeuxPointTente()
{
 return $this->_deuxPointTente;
}
public function setDeuxPointTente($_deuxPointTente)
{
 return $this->_deuxPointTente = $_deuxPointTente;
}
public function getDeuxPointMarque()
{
 return $this->_deuxPointMarque;
}
public function setDeuxPointMarque($_deuxPointMarque)
{
 return $this->_deuxPointMarque = $_deuxPointMarque;
}
public function getTroisPointTente()
{
 return $this->_troisPointTente;
}
public function setTroisPointTente($_troisPointTente)
{
 return $this->_troisPointTente = $_troisPointTente;
}
public function getTroisPointMarque()
{
 return $this->_troisPointMarque;
}
public function setTroisPointMarque($_troisPointMarque)
{
 return $this->_troisPointMarque = $_troisPointMarque;
}
public function getLancerFrancTente()
{
 return $this->_lancerFrancTente;
}
public function setLancerFrancTente($_lancerFrancTente)
{
 return $this->_lancerFrancTente = $_lancerFrancTente;
}
public function getLancerFrancMarque()
{
 return $this->_lancerFrancMarque;
}
public function setLancerFrancMarque($_lancerFrancMarque)
{
 return $this->_lancerFrancMarque = $_lancerFrancMarque;
}
public function getRebondDef()
{
 return $this->_rebondDef;
}
public function setRebondDef($_rebondDef)
{
 return $this->_rebondDef = $_rebondDef;
}
public function getRebondOff()
{
 return $this->_rebondOff;
}
public function setRebondOff($_rebondOff)
{
 return $this->_rebondOff = $_rebondOff;
}
public function getPasseDec()
{
 return $this->_passeDec;
}
public function setPasseDec($_passeDec)
{
 return $this->_passeDec = $_passeDec;
}
public function getBallePerdue()
{
 return $this->_ballePerdue;
}
public function setBallePerdue($_ballePerdue)
{
 return $this->_ballePerdue = $_ballePerdue;
}
public function getInterception()
{
 return $this->_interception;
}
public function setInterception($_interception)
{
 return $this->_interception = $_interception;
}
public function getContreRealise()
{
 return $this->_contreRealise;
}
public function setContreRealise($_contreRealise)
{
 return $this->_contreRealise = $_contreRealise;
}
public function getContreSubit()
{
 return $this->_contreSubit;
}
public function setContreSubit($_contreSubit)
{
 return $this->_contreSubit = $_contreSubit;
}
public function getFautePerso()
{
 return $this->_fautePerso;
}
public function setFautePerso($_fautePerso)
{
 return $this->_fautePerso = $_fautePerso;
}
public function getFauteProv()
{
 return $this->_fauteProv;
}
public function setFauteProv($_fauteProv)
{
 return $this->_fauteProv = $_fauteProv;
}
public function getPointMarque()
{
 return $this->_pointMarque;
}
public function setPointMarque($_pointMarque)
{
 return $this->_pointMarque = $_pointMarque;
}
public function getEvaluation()
{
 return $this->_evaluation;
}
public function setEvaluation($_evaluation)
{
 return $this->_evaluation = $_evaluation;
}
public function getIdJoueur()
{
 return $this->_idJoueur;
}
public function setIdJoueur($_idJoueur)
{
 return $this->_idJoueur = $_idJoueur;
}
public function getIdMatch()
{
 return $this->_idMatch;
}
public function setIdMatch($_idMatch)
{
 return $this->_idMatch = $_idMatch;
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
 return $this->getIdStat() . "\n" . $this->getDateStat() . "\n" . $this->getMinuteJouer() . "\n" . $this->getDeuxPointTente() . "\n" . $this->getDeuxPointMarque() . "\n" . $this->getTroisPointTente() . "\n" . $this->getTroisPointMarque() . "\n" . $this->getLancerFrancTente() . "\n" . $this->getLancerFrancMarque() . "\n" . $this->getRebondDef() . "\n" . $this->getRebondOff() . "\n" . $this->getPasseDec() . "\n" . $this->getBallePerdue() . "\n" . $this->getInterception() . "\n" . $this->getContreRealise() . "\n" . $this->getContreSubit() . "\n" . $this->getFautePerso() . "\n" . $this->getFauteProv() . "\n" . $this->getPointMarque() . "\n" . $this->getEvaluation() . "\n" . $this->getIdJoueur() . "\n" . $this->getIdMatch() . "\n" ;
}

}