<?php


class Chambre implements IApp
{
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
        $this->id_batiment= $row['id_batiment'];
        $this->id_type_chambre= $row['id_type_chambre'];
    }

  
}