<?php
class ExerciceComptable
{
    /*******************************Attributs*******************************/
    private $_idExerciceComptable;
    private $_libelleExercice;

    /******************************Accesseurs*******************************/
    public function getIdExerciceComptable()
    {
        return $this->_idExerciceComptable;
    }
    public function setIdExerciceComptable($_idExerciceComptable)
    {
        return $this->_idExerciceComptable = $_idExerciceComptable;
    }
    public function getLibelleExercice()
    {
        return $this->_libelleExercice;
    }
    public function setLibelleExercice($_libelleExercice)
    {
        return $this->_libelleExercice = $_libelleExercice;
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
        return $this->getIdExerciceComptable() . "\n" . $this->getLibelleExercice();
    }
}
