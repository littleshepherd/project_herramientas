<?php

class Game {

    protected $name;
    protected $price;
    protected $total;
    protected $description;
    protected $category;
    public function __construct($name, $price, $total, $description, $category){
        setName($name);
        setPrice($price);
        setTotal($total);
        setDescription($description);
        setCategory($category);
    }

    public function setName($name){
        $this->name = $name;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setTotal($total){
        $this->total = $total;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setCategory($category){
        $this->category = $category;
    }

    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getTotal(){
        return $this->total;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getCategory(){
        return $this->category;
    }


    //mysql
   
}
?>