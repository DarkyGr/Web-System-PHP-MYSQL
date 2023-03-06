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

    // Function for Create category
    function NewCategory($name, $description){
        $query = "INSERT INTO category(name_c, description_c) VALUES (?, ?)";
        $result = $this->cnx->prepare($query);
        $result->bindParam(1, $name);
        $result->bindParam(2, $description);

        if ($result->execute()) {
            return true;
        }
        
        return false;
    }

    // Function for Edit category
    function GetCategoryById($id_category){
        $query = "SELECT * FROM category where id_category = ?";
        $result = $this->cnx->prepare($query);
        $result->bindParam(1, $id_category);

        if ($result->execute()) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return false;
    }

    // Function for Update Category
    function UpdateCategory($id_category, $name, $description){
        $query = "UPDATE category SET name_c = ?, description_c = ? WHERE id_category = ?";
        $result = $this->cnx->prepare($query);
        $result->bindParam(1, $name);
        $result->bindParam(2, $description);
        $result->bindParam(3, $id_category);

        if ($result->execute()) {
            return true;
        }

        return false;
    }
}

?>