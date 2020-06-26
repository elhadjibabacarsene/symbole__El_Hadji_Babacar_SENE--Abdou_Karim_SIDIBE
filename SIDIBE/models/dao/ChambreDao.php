<?php 

class ChambreDao extends Manager
 {
    public $offset;
    public $nbr_elt_par_page;
    public $champ;
    public $valeur;
    public $maId;
    public $table;

    public function __construct(){
        $this->tablename="chambre";
        $this->classname="Chambre";
        
       
    }
    public function add($obj){
        $sql="";
       return $this->executeUpdate($sql)!=0;

    }

    public function update($obj){

        $sql="UPDATE `$this->tablename` SET `$this->champ`='$this->valeur' WHERE `id`='$this->maId' ";

      return  $this->executeUpdate($sql);


    }
    
    

 
    public function findChambre()
    {
       
        
        $sql = "SELECT * FROM $this->tablename  WHERE `statut`=1 LIMIT $this->offset,$this->nbr_elt_par_page";
        $result = $this->executeSelect($sql);
        return $result;
    }




}