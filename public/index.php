<?php
include_once __DIR__ . '/../Controller/frontController.php';
include_once __DIR__ . '/../Controller/api/userController.php';
session_start();
//headers
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Allow: GET, POST, PUT, DELETE");

$uri = explode('/',$_SERVER['REQUEST_URI']);
$argUri = '/'.$uri[1].'/'.$uri[2];
$method = $_SERVER['REQUEST_METHOD'];

 function getData() {
        $body = file_get_contents("php://input");
        $data = json_decode($body);
        return $data;
}
$data = getData();

        if($argUri == '/project_herramientas/login'){
                frontController::login($data);
              
        }
        if($argUri == '/project_herramientas/register'){
                frontController::register($data);
        }         
        if( $argUri == "/project_herramientas/games" && $_SERVER['REQUEST_METHOD'] == 'GET'){
            
              frontController::apiIndex();
        } 
                if($_SESSION['status']){
                        if($argUri == "/project_herramientas/games" && $method == 'POST'){
                                frontController::apiCreate($data);
                        }
                        if($argUri == "/project_herramientas/games" && $method == 'PUT'){
                                frontController::apiUpdate($data);
                        }
                        if($argUri == "/project_herramientas/games" && $method == 'DELETE'){
                                frontController::apiDelete($data);
                        }
                }
       

    
   
//     }else if($argUri == "/project_herramientas/register"){
  
//             $reg = new userController();
//            echo $_SESSION['user_id'];
//            session_destroy();
//            echo session_status();
            

//     }else 
?>