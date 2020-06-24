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
}