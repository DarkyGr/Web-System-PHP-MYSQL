<?php

class Conexion {

    static function ConnectDB()
    {
        try {            

            require "Global.php";

            $cnx = new PDO(DSN,USERNAME,PASSWORD);

            return $cnx;

        } catch (PDOException $ex){

            die($ex->getMessage());
            
        }
    }
}
?>