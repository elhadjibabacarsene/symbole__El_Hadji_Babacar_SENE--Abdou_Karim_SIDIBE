<?php
define("BASE_URL","http://localhost/appChambreEtudiant");
require_once('config/config.php');
require_once('libs/Router.php');


//Chargment de la classe Router et appelation de la fonction route()
$router = new Router();
$router->route();

// $manager=new ChambreDao();
// echo $aff->findChambre();