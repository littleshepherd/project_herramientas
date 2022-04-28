<?php
class dataBase{

    private $host ="localhost";
    private $user ="root";
    private $password ="";
    private $dbName ="db_games";

 
    public function connect(){

        try{
            $db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbName,$this->user,$this->password);
            //echo 'Conectado';
        
        }catch(Exception $e){
            echo $e;
        }
        
        return $db;
    }
    public function execute($query){
       return $this->connect()->query($query);
    }
  
    // public function All(){
    //     $query =$this->connect()->query("SELECT * FROM game");
        
        
    //     return $query;
    // }
    // public function GetGame($name){
        
    // }
    // public function createGame(){

    // }


}

?>