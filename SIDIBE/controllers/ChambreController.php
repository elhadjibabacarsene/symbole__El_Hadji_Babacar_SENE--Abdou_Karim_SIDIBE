<?php


class ChambreController extends Controller
{
    

    public function __construct()
    {
        $this->folder = "chambre";
        $this->layout = "default";
        
    }
    public function addchambre()
    {
        $this->view = "addchambre";
        $this->render();
    }

    public function listechambre()
    {
        
        $this->view = "listechambre";
        $this->render();
        
    }

    public function listeChambrePagination(){

        $chambre=new ChambreDao();
         $chambre->offset=$_POST["offset"];
         $chambre->nbr_elt_par_page=$_POST["nbr_elt_par_page"];
        $encod=$chambre->findChambre();
        echo json_encode($encod);
    }

    public function updateChambre(){

         $Ichambre=new ChambreDao();
       var_dump  ($Ichambre->table=$_POST["table"]);
       var_dump  ($Ichambre->champ=$_POST["champ"]);
       var_dump  ($Ichambre->valeur=$_POST["val"]);
       var_dump  ($Ichambre->maId=$_POST['id']);
       var_dump  ($Ichambre->update(extract($_POST)));
       

        
    }

}