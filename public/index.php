<?php
include_once __DIR__ . '/../Controller/frontController.php';
include_once __DIR__ . '/../Controller/api/userController.php';
session_start();
$_SESSION['status'] = false;
$uri = explode('/',$_SERVER['REQUEST_URI']);
$argUri = '/'.$uri[1].'/'.$uri[2];

print_r($argUri);
 
 function getData() {
        $body = file_get_contents("php://input");
        $data = json_decode($body);
        return $data;
}
$data = getData();

        if($argUri == '/project_herramientas/login'){
                frontController::login();
        }

        if($argUri != '/project_herramientas/register' && $_SERVER['REQUEST_METHOD'] != 'GET'){
             if($_SESSION['status']){
                echo'hola';
             }else{
                echo 'Debes iniciar sesión';
             }

        }
//          if( $argUri == "/project_herramientas/games"){
            
            
//             switch ($_SERVER['REQUEST_METHOD']){
//             case 'GET':frontController::apiIndex();
            
//             break;
//             case 'POST':frontController::apiCreate();
//             break;
//             } 
    
   
//     }else if($argUri == "/project_herramientas/register"){
  
//             $reg = new userController();
//            echo $_SESSION['user_id'];
//            session_destroy();
//            echo session_status();
            

//     }else 
?>