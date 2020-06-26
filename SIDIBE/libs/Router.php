<?php


class Router
{
    private $ctrl;

    /**
     * function qui permet de gérer le chargement dynamique des classes, des controllers
     */
    public function route(){

        try{
            
            //Chargement des classes
            spl_autoload_register(function($class){
                $patchModels = "models/".$class.".php";
                $patchDao = "models/dao/".$class.".php";
                $patchLibs = "libs/".$class.".php";
                
                if(file_exists($patchModels)){
                    require_once($patchModels);
                }elseif (file_exists($patchDao)){
                    require_once($patchDao);
                }elseif(file_exists($patchLibs)){
                    require_once($patchLibs);
                    
                }
            });

            if(isset($_GET['url'])){
                //On récupère l'url
                $url = explode("/",filter_var($_GET['url']),FILTER_SANITIZE_URL);
                //On met l'url au format controller (firt lettre en MAJ)
                $controller = ucfirst($url[0])."Controller";
                //On défini l'url de notre controller correspondant
                $patchController = "controllers/".$controller.".php";
                if(file_exists($patchController)){
                    require_once($patchController);
                    //Instancier
                    $this->ctrl = new $controller;
                    //On récupère méthode
                    $action = $url[1];

                    //On vérifie si la méthode existe
                    if(method_exists($this->ctrl,$action)){
                        $this->ctrl->{$action}(); //On appelle notre méthode
                    }else{
                        $patchController = "controllers/ErreurController.php";
                        require_once($patchController);
                        $erreurController = new ErreurController();
                        $erreurController->showError("Cette méthode n'existe pas !");
                    }

                }else{
                    $patchController = "controllers/ErreurController.php";
                    require_once($patchController);
                    $erreurController = new ErreurController();
                    $erreurController->showError("Ce controller n'existe pas !");
                }
            }else{
                 $patchController = "controllers/EtudiantController.php";
                require_once($patchController);
                $erreurController = new EtudiantController();
                $erreurController->addetudiant();
            }
        }catch (Exception $e){
            die("Erreur router ! Veuillez contacter SYMBOLE");
        }

    }
}