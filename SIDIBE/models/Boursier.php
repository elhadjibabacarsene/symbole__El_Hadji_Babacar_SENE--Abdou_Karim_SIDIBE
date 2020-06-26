<?php


class Boursier extends Etudiant
{
    protected $inshoused;

    public function __construct($row=null)
    {
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row)
    {
        $this->inshoused = $row['inshoused'];
    }


    /**
     * @return mixed
     */
    public function getInshoused()
    {
        return $this->inshoused;
    }

    /**
     * @param mixed $inshoused
     */
    public function setInshoused($inshoused)
    {
        $this->inshoused = $inshoused;
    }
}