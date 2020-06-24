<?php


class Batiment implements IApp
{
    protected $id;
    protected $numero;

    public function __construct($row=null)
    {
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row)
    {
        $this->id = $row['id'];
        $this->numero = $row['numero'];
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
    public function getNumero()
    {
        return $this->numero;
    }


    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}