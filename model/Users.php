<?php

require "../config/Conexion.php";

class users {
    public $cnx;

    function __construct(){
        $this->cnx = Conexion::ConnectDB();
    }

    //============================ LOGIN ================================
    // Function for Add user
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

    // Function foo Validate user with the emial and password
    function ValidateUser($email, $key){
        $query = "SELECT * FROM users WHERE email = ?";
        $result = $this->cnx->prepare($query);
        $result->bindParam(1, $email);
        $result->execute();
        $row = $result->fetch();

        if (password_verify($key, $row["key_u"])) {
            return $row;
        }

        return false;
    }
    //=================================================================   
}


?>