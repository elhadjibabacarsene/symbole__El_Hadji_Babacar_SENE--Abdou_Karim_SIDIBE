<?php


class TypeChambre implements IApp
{
    protected $id;
    protected $libelle;


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
}