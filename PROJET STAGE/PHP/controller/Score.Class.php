<?php
class Score
{
/*******************************Attributs*******************************/
private $_idScore;
private $_idNiveau;
private $_idUser;
private $_user;
private $_nbDePieceRecolte;
private $_Bonus;
private $_time;
private $_scoreObtenu;

/******************************Accesseurs*******************************/
public function getIdScore()
{
 return $this->_idScore;
}
public function setIdScore($_idScore)
{
 return $this->_idScore = $_idScore;
}
public function getIdNiveau()
{
 return $this->_idNiveau;
}
public function setIdNiveau($_idNiveau)
{
 return $this->_idNiveau = $_idNiveau;
}
public function getIdUser()
{
 return $this->_idUser;
}
public function setIdUser($_idUser)
{
 $this->_idUser = $_idUser;
 $user=UserManager::getById($_idUser);
 $this->setUser($user);
}
public function getUser()
{
return $this->_user;
}
public function setUser($_user)
{
$this->_user = $_user;

return $this;
}
public function getNbDePieceRecolte()
{
 return $this->_nbDePieceRecolte;
}
public function setNbDePieceRecolte($_nbDePieceRecolte)
{
 return $this->_nbDePieceRecolte = $_nbDePieceRecolte;
}
public function getBonus()
{
 return $this->_Bonus;
}
public function setBonus($_Bonus)
{
 return $this->_Bonus = $_Bonus;
}
public function getTime()
{
 return $this->_time;
}
public function setTime($_time)
{
 return $this->_time = $_time;
}
public function getScoreObtenu()
{
 return $this->_scoreObtenu;
}
public function setScoreObtenu($_scoreObtenu)
{
 return $this->_scoreObtenu = $_scoreObtenu;
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
 return $this->getIdScore() . $this->getIdNiveau() . $this->getIdUser() . $this->getNbDePieceRecolte() . $this->getBonus() . $this->getTime() . $this->getScoreObtenu() ;
}

public static function compareTo($obj1, $obj2)
    {
        if ($obj1->getScoreObtenu() > $obj2->getScoreObtenu())
        {
            return 1;
        }
        elseif ($obj1->getScoreObtenu() < $obj2->getScoreObtenu())
        {
            return -1;
        }
        elseif ($obj1->getTime() > $obj2->getTime())
        {
            return 1;
        }
        elseif ($obj1->getTime() < $obj2->getTime())
        {
            return -1;
        }
        else
        {
            return 0;
        }
    } 

}