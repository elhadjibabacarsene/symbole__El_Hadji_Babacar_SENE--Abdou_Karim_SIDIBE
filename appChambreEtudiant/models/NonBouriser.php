<?php


class NonBouriser extends Etudiant
{
    protected $adresse;


    public function __construct($row = null)
    {
       if($row!=null){
           $this->hydrate($row);
       }
    }

    public function hydrate($row)
    {
        $this->adresse = $row['adresse'];
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
}