<?php

require "config/Conexion.php";

class users {
    public $cnx;

    function __construct(){
        $this->cnx = Conexion::ConnectDB();
    }

    function AddUser($document_num, $name, $last_name, $email, $key){
        $query = "INSERT INTO users(document_num, name_u, last_name, email, key_u) VALUES (?, ?, ?, ?, ?)";
        $result = $this->cnx->prepare($query);
        $result->bindParam(1, $document_num);
        $result->bindParam(2, $name);
        $result->bindParam(3, $last_name);
        $result->bindParam(4, $email);
        $key_hash = password_hash($key, PASSWORD_DEFAULT);
        $result->bindParam(5, $key_hash);

        if ($result->execute()) {
            return true;
        }

        return false;
    }
}


?>