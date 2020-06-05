<?php
class ExerciceComptable
{
/*******************************Attributs*******************************/
private $_idExerciceComptable;
private $_libelleExerciceComptable;

/******************************Accesseurs*******************************/
public function getIdExerciceComptable()
{
 return $this->_idExerciceComptable;
}
public function setIdExerciceComptable($_idExerciceComptable)
{
 return $this->_idExerciceComptable = $_idExerciceComptable;
}
public function getLibelleExerciceComptable()
{
 return $this->_libelleExerciceComptable;
}
public function setLibelleExerciceComptable($_libelleExerciceComptable)
{
 return $this->_libelleExerciceComptable = $_libelleExerciceComptable;
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
 return $this->getIdExerciceComptable() ."\n". $this->getLibelleExerciceComptable();
}

}