<?php

class Conexion {

    static function ConectarDB()
    {
        require_once "Global.php";
        
        try {            

            $cnx = new PDO(DSN,USERNAME,PASSWORD);

            return $cnx;

        } catch (PDOException $ex){

            die($ex->getMessage());

        }


    }


}

?>