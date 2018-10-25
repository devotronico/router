<?php

$conn = 'connessione al database';


$listOfRoutes = [
    'GET'=>[
        "" => "app\Controller@home",
        "/" => "app\Controller@home",
        "home" => "app\Controller@home",
        "blog" => "app\Controller@blog",
        "about" => "app\Controller@about",
        "contact" => "app\Controller@contact",
    ],
    'POST'=>[
        "test-3" => "app\Controller@home",
        "test-4" => "app\Controller@home"
    ]
];

require_once 'Router.php';   
require_once 'app/Controller.php';   

$router = new Router($conn);

$router->loadRoutes($listOfRoutes);

$controller = $router->dispatch(); 
  
$controller->display();



?>




