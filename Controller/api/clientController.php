<?php
include_once __DIR__.'/../../Model/db.php';

class clientController {
    public function contact($data) {
        $db = new dataBase();
        $query = "INSERT INTO contacts (name, email,phone, message) VALUES ($data->name, $data->email, $data->phone, $data->message)";
        $db->execute($query);
    }
}
?>