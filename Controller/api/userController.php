<?php
include_once __DIR__ . '/../../Model/db.php';
class userController{

    public function register($name, $email, $password){
    
        $db = new dataBase();
        $exist = $db->execute("SELECT * FROM users WHERE email = '$email'");
        
        if($exist->rowCount()){
         
        }else{
         $date = date("Y-m-d H:i:s");
         $password = md5($password);
         $query = "INSERT INTO users (name, email, password, created_at,updated_at) VALUES ('$name', '$email', '$password', '$date', '00-00-00')";

         $db->execute($query);   
         echo ' insertados';
        }

    }
    public function login($user, $password){
        $password = md5($password);
        $db = new dataBase();
        $query = $db->execute("SELECT * FROM users WHERE email = '$user' AND password = '$password'");
        if($query->rowCount()){
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['status'] = true;

        }

    }
}

?>