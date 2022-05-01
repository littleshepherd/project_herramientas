<?php
class dataBase{

    private $host ="frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $user ="zfexgrxqnezp1rkt";
    private $password ="wfmfanmi8c56x23u";
    private $dbName ="vcj82qm5e580qh8y";

 
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
  
   


}

?>