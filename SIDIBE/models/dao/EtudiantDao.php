<?php


class EtudiantDao extends Manager
{

    public function __construct()
    {
        $this->tablename = "etudiant";
        $this->classname = "etudiant";
    }

    public function findByBoursier()
    {
        $sql = "SELECT * FROM $this->tablename WHERE id_type_bourse IS NOT NULL";
        $data = $this->executeUpdate($sql);
        return count($data) == 1 ? $data[0] : $data;
    }

    public function findByLogier()
    {
        $sql = "SELECT * FROM $this->tablename WHERE inshoused IS NOT NULL";
        $data = $this->executeUpdate($sql);
        return count($data) == 1 ? $data[0] : $data;
    }

  

    
}