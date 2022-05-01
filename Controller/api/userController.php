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
    public function login($data){
        
        $password = md5($data->password);
        $db = new dataBase();
        $query = $db->execute("SELECT * FROM users WHERE (email = '$data->user' AND password = '$password')");
       
        if($query->rowCount()){
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            print_r($data);
            $_SESSION['status'] = true;
            $_SESSION['user_id'] = $data[0]['id'];
          http_response_code(201);
            
        }else{
            $_SESSION['status'] = false;

            http_response_code(401);
        }

    }
}

?>