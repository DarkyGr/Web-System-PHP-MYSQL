<?php

require "../config/Conexion.php";

class Category{
    public $cnx;
    
    function __construct(){
        $this->cnx = Conexion::ConnectDB();
    }

    // Function to Get the list of categories
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

    // Function to Create category
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

    // Function to Get category by ID
    function GetCategoryById($id_category){
        $query = "SELECT * FROM category where id_category = ?";
        $result = $this->cnx->prepare($query);
        $result->bindParam(1, $id_category);

        if ($result->execute()) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return false;
    }

    // Function to Update Category
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

    // Function to logically remove a category
    function DisableCategory($id_category){
        $query = "UPDATE category SET status_c = 0 WHERE id_category = ?";
        $result = $this->cnx->prepare($query);
        $result->bindParam(1, $id_category);

        if ($result->execute()) {
            return true;
        }

        return false;
    }

    // Function to Enable category
    function EnableCategory($id_category){
        $query = "UPDATE category SET status_c = 1 WHERE id_category = ?";
        $result = $this->cnx->prepare($query);
        $result->bindParam(1, $id_category);

        if ($result->execute()) {
            return true;
        }

        return false;
    }

    // Function to Get the list of categories with select status
    function GetListCategoriesSelect(){
        $query = "SELECT * FROM category WHERE status_c = 1";
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

    // Function to Get the list of categories with select status
    // function GetListCategoriesSelectEdit($id_subcategory){
    //     $query = "SELECT cat.id_category, cat.name_c FROM category cat
    //     INNER JOIN subcategory sub ON cat.id_category = sub.id_category WHERE sub.id_subcategory = ?
    //     UNION SELECT id_category, name_c FROM category WHERE status_c = 1;";
    //     $result = $this->cnx->prepare($query);
    //     $result->bindParam(1, $id_subcategory);

    //     if ($result->execute()) {
    //         if ($result->rowCount() > 0) {
    //             while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    //                 $data[] = $row;
    //             }
    //             return $data;
    //         }
    //     }

    //     return false;
    // }
}

?>