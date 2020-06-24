<?php


class EtudiantController extends Controller
{
    public function __construct()
    {
        $this->folder = "etudiant";
        $this->layout = "default";
    }
    public function addetudiant()
    {
        $this->view = "addetudiant";
        $this->render();
    }

    public function listeetudiant()
    {
        $this->view = "listeetudiant";
        $this->render();
    }
}