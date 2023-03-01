<?php

require "../config/Conexion.php";

class Category{
    public $cnx;
    
    function __construct(){
        $this->cnx = Conexion::ConnectDB();
    }

    // Function for Get the list of categories
    function GetListCategories(){
        $query = "SELECT * FROM category";
        $result = $this->cnx->prepare($query);

        if ($result->execute()) {
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }
                return $data;
            }
        }

        return false;
    }
}

?>