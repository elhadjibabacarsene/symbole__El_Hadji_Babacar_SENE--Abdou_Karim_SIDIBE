<?php


class Chambre implements IApp
{
    protected $numero;

    public function __construct($row=null)
    {
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row)
    {
        $this->numero = $row['numero'];
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}