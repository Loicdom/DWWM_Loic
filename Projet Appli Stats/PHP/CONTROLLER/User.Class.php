<?php

class User{
	private $_idUser;
	private $_pseudo;
	private $_motDePasse;
	private $_role;
	
	// Getter / Setter

    public function getIdUser()
    {
        return $this->_idUser;
    }

    public function getPseudo()
    {
        return $this->_pseudo;
    }

    public function getMotDePasse()
    {
        return $this->_motDePasse;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function setIdUser($_idUser)
    {
        $this->_idUser = $_idUser;
    }

     public function setPseudo($_pseudo)
    {
        $this->_pseudo = $_pseudo;
    }

    public function setMotDePasse($_motDePasse)
    {
        $this->_motDePasse = $_motDePasse;
    }

    public function setRole($_role)
    {
        $this->_role = $_role;
    }

   

	// Constructeur
	public function __construct(array $options = [])
	{ 
		if (!empty($options))
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
		foreach ($data as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			
			if (is_callable([$this, $method]))
			{
				$this->$method($value);
			}
		}
	}


/****************************Autres méthodes****************************/
public function toString() 
{ 
 return $this->getIdUser() . $this->getPseudo() . $this->getMotDePasse() . $this->getRole() ;
}

}