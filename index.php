<?php

session_start();

//$ROOT = __DIR__ ;
//$DS=DIRECTORY_SEPARATOR;
$controleur_default='client';
$action_default='home';



if(!isset($_REQUEST['controller'])){
    $controller=$controleur_default;
   // require("{$ROOT}{$DS}views{$DS}home.php");
}
else {
    $controller = $_REQUEST['controller'];
}
if(!isset($_REQUEST['action'])){
    $action=$action_default;}
else {
        $action = $_REQUEST['action'];
}




 switch ($controller) {
    case "client" :
        
        require ("./controller/controllerclient.php");
    break;



    
    }









?>