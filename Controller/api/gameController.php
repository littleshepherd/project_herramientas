<?php
include_once __DIR__.'/../../Model/db.php';
include_once __DIR__.'/../../Model/game.php';
class gameController{

    public function index(){
        $array = array();
        $db = new dataBase();
        $db =  $db->connect()->query("SELECT * FROM games");

        
        while ($row = $db->fetch(PDO::FETCH_ASSOC)){

            $item =[
                'id' =>$row['id'],
                'name' =>$row['name'],
                'description' =>$row['description'],
                'price' =>$row['price'],
                'category' =>$row['category'],
                'total' =>$row['total'],
                'image' =>$row['image']
            ];
           
            array_push($array,$item);
        }
        
        echo json_encode($array);
        
    }
    public function create($data){
        $db = new dataBase();
        $exist  = $db->connect()->query("SELECT * FROM games WHERE name = '$data->name'");
        $exist = $exist->rowCount();
        if($exist){

        }else{
            
            $query = "INSERT INTO games (name, price, total, description, category, image) VALUES ('$data->name', '$data->price', '$data->total', '$data->description', '$data->category', '$data->image')";
            $db->execute($query);
        }
    }
    public function update($data){
        $db = new dataBase();
        $query = "SELECT id FROM games WHERE id = '$data->id'";
        $exist = $db->execute($query);
        if($exist->rowCount()){
            $queryUpdate = "UPDATE games SET 
            name = '$data->name', 
            description = '$data->description', 
            price = '$data->price', 
            total = '$data->total'  ,
            category = '$data->category',
            image = '$data->image'
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