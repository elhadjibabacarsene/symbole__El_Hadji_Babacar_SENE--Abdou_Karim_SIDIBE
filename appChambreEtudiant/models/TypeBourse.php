<?php


class TypeBourse implements IApp
{
    protected $id;
    protected $libelle;
    protected $montant;

    public function __construct($row = null)
    {
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row)
    {
        $this->id = $row['id'];
        $this->libelle = $row['libelle'];
        $this->montant = $row['montant'];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }
}