<?php

include 'api/gameController.php';
class frontController{
 

    static function apiIndex(){
        $api = new gameController();
        
        $api->index();
         
    }
    static function apiCreate($data){
        
        
        $api = new gameController();
        
        $api->create($data->name,$data->description,$data->price,$data->total,$data->category);

    }
    static function apiUpdate($data){
        
        
        $api = new gameController();
        
        $api->update($data);
    }
    static function apiDelete($data){
    
        $api = new gameController();
        
        $api->delete($data->id);
    }
    static function register($data){
       
        
        $newUser = new userController();
        $newUser->register($data->name,$data->email,$data->password);
    }
   
    
    
    
}



?>