<?php

require "../model/Users.php";

$user = new Users();

switch ($_REQUEST["operator"]) {

    case "validate_user":
        if (isset($_POST["email"], $_POST["key_u"]) && !empty($_POST["email"]) && !empty($_POST["key_u"])) {
            
            if ($user->ValidateUser($_POST["email"], $_POST["key_u"])) {
                $response = "success";
            }else {
                $response = "not found";
            }
        }else {
            $response = "required";
        }

        echo $response;
        break;
}

?>