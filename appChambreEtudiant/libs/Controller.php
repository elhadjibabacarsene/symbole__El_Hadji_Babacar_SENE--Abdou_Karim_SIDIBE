<?php


class Controller
{
    protected $layout;
    protected $folder;
    protected $view;

    public function render()
    {
        //On récupère la view
        $patchView = "views/".$this->folder."/".$this->view.".view.php";
        $patchLayout = "views/layout/".$this->layout.".php";
        ob_start();
        //extract($this->)
        require_once($patchView);
        $contentForLayout = ob_get_clean();
        require_once($patchLayout);

    }
}