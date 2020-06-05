<?php
class Documents
{
    /*******************************Attributs*******************************/
    private $_idDocument;
    private $_libelleDocument;
    private $_enregDocument;

    /******************************Accesseurs*******************************/
    public function getIdDocument()
    {
        return $this->_idDocument;
    }
    public function setIdDocument($_idDocument)
    {
        return $this->_idDocument = $_idDocument;
    }
    public function getLibelleDocument()
    {
        return $this->_libelleDocument;
    }
    public function setLibelleDocument($_libelleDocument)
    {
        return $this->_libelleDocument = $_libelleDocument;
    }
    public function getEnregDocument()
    {
        return $this->_enregDocument;
    }
    public function setEnregDocument($_enregDocument)
    {
        return $this->_enregDocument = $_enregDocument;
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
        return $this->getIdDocument() ."\n". $this->getLibelleDocument() ."\n". $this->getEnregDocument();
    }

}
