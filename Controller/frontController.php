<?php

include 'api/gameController.php';
include 'api/userController.php';
include 'api/clientController.php';
class frontController{
 

    static function apiIndex(){
        $api = new gameController();
        
        $api->index();
         
    }
    static function apiCreate($data){
        
        
        $api = new gameController();
        
        $api->create($data);

    }
    static function apiUpdate($data){
        
        
        $api = new gameController();
        
        $api->update($data);
    }
    static function apiDelete($data){
    
        $api = new gameController();
        
        $api->destroy($data->id);
    }
    static function register($data){
       
        
        $newUser = new userController();
        $newUser->register($data->name,$data->email,$data->password);
    }
    static function login($data){
        $login = new userController();
        $login->login($data);
    }
    static function logout($data){

    }
    static function contact($data){
        $client = new clientController();
        $client->contact($data);
    }
   
    
    
    
}



?>