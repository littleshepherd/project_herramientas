<?php
include_once __DIR__.'/../../Model/db.php';
include_once __DIR__.'/../../Model/game.php';
class gameController{

    public function index(){
        $array = array();
        $db = new dataBase();
        $db =  $db->connect()->query("SELECT * FROM game");

        
        while ($row = $db->fetch(PDO::FETCH_ASSOC)){

            $item =[
                'id' =>$row['id'],
                'name' =>$row['name'],
                'description' =>$row['description'],
                'price' =>$row['price'],
                'category' =>$row['category'],
                'total' =>$row['total'],
            ];
           
            array_push($array,$item);
        }
        header("content-type: application/json");
        echo json_encode($array);
        
    }
    public function create($name,$description,$price,$total,$category){
        $db = new dataBase();
        $exist  = $db->connect()->query("SELECT * FROM game WHERE name = '$name'");
        $exist = $exist->rowCount();
        if($exist){

        }else{
            
            $query = "INSERT INTO game (name, price, total, description, category) VALUES ('$name', '$price', '$total','$description', '$category')";
            $db->execute($query);
        }
    }
    public function update($data){
        $db = new dataBase();
        $query = "SELECT id FROM game WHERE id = '$data->id'";
        $exist = $db->execute($query);
        if($exist->rowCount()){
            $queryUpdate = "UPDATE game SET name = '$data->name', 
            description='$data->description', 
            price='$data->price', 
            total='$data->total,
            category='$data->category'
            WHERE id = '$data->id'";
            $db->execute($queryUpdate);
        }else{
            
        }
    }
    public function delete($id){
        $db = new dataBase();
        $query = "SELECT id FROM game WHERE id = '$data->id'";
        $exist = $db->execute($query);
        if($exist->rowCount()){
            $queryDelete = "DELETE FROM game WHERE id = '$id'";
            $db->execute($queryUpdate);
        }else{
            
        }
    }
}
?>