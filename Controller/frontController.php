<?php

include 'api/gameController.php';
include 'api/userController.php';
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
   
    
    
    
}



?>