<?php
class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private $create = [
        'created_at' => '',
        'updated_at' => '',
    ];
    public function __construct($name, $email, $password, $create){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->create = $create;
        
    }
    private function setName($name){
        $this->name = $name;
    }
    private function setEmail($email){
        $THIS->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setCreate($create){
        $this->create = $create;
    }
    public function getId($id){
       return $this->id = $id;
    }
    public function getName($name){
       return $this->name = $name; 
    }
    public function getEmail($email){
        return $this->email = $email;
    }
    public function getPassword($password){
        return $this->password = $password;
    }
    

}
?>