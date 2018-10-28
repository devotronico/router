<?php
// php -S localhost:3000 -t router


/*
// 2018-10-27T19:39

$regdate = date('Y-m-d\TH:i');


//$exp = explode(" ", $regdate);
//$regdate = $exp[1]."T".$exp[0];
//var_dump($_POST); 
// echo '<pre>';print_r( $_POST );



 die($regdate);
*/
/*
Array
(
    [name] => Ryuu
    [gender] => female
    [country] => Japann
    [birth] => 1964-09-21
    [reg_date] => 2018-10-28T15:40
)
OK


// 2018-10-27 15:40:18   a   27/10/2018 15:40

$a = "1964-09-20";
echo $a;
$exp = explode("-", $a); // [0] = 1964   [1] = 09    [2] = 20
$a = $exp[2]."/".$exp[1]."/".$exp[0];
echo "<br><br>";
echo $a;
die();
*/










// lista di rotte suddivise per il tipo di richieste al server ('GET', 'POST')
// a loro volta suddivise in chiavi/rotte(es. "", "/", "home", "blog", "about", "contact") 
//che attivano le classi con i rispettivi metodi(VALORI) (es. "app\controller\Controller@home")
$listOfRoutes = [
    'GET'=>[
        "" => "app\controller\Controller@list",
        "/" => "app\controller\Controller@list",
        "list" => "app\controller\Controller@list",
        "create" => "app\controller\Controller@create",
        "#read/:id" => "app\controller\Controller@read",
        "#update/:id" => "app\controller\Controller@update",
      
        "#delete/:id" => "app\controller\Controller@delete",
        "about" => "app\controller\Controller@about",
        "contact" => "app\controller\Controller@contact",
        "#function/:id/:id" => "_somma",
    ],
    'POST'=>[
        "new" => "app\controller\Controller@new",
        "#store/:id" => "app\controller\Controller@store",
    ]
];

// CLASSI
require_once 'config/db.php';   
require_once 'Router.php';   
require_once 'app/models/Database.php';   
require_once 'app/models/Users.php';   
require_once 'app/controller/Controller.php';   
require_once 'helpers/functions.php';   

// Router è la prima classe che deve essere istanziata perchè deve leggere l'url e indirizzarci verso la pagina/azione da noi richiesta
$router = new Router();

// tramite il metodo loadRoutes carichiamo la lista di rotte all' interno della classe Router
$router->loadRoutes($listOfRoutes);

// tramite il metodo dispatch verrà istanziata la classe con il rispettivo metodo e argomento se presente che corrispondono all' url di navigazione
$controller = $router->dispatch(); 

// e alla fine verrà caricato il template di default dell'intera pagina che sarà lo stesso per tutte le pagine
$controller->display();



?>




