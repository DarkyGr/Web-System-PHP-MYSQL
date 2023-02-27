<?php
session_start();    // Save the session of the user

require "../model/Users.php";

$use = new Users();

switch ($_REQUEST["operator"]) {

    case "log_in":
        if (isset($_POST["email"], $_POST["key_u"]) && !empty($_POST["email"]) && !empty($_POST["key_u"])) {
            
            if ($user = $use->ValidateUser($_POST["email"], $_POST["key_u"])) {
                foreach ($user as $fields => $value) {
                    $_SESSION["user"][$fields] = $value;
                }
                $response = "success";
            }else {
                $response = "notfound";
            }
        }else {
            $response = "required";
        }

        echo $response;
        break;

        case "log_out":
            unset($_SESSION["user"]);
            header("location:../");
            break;
}

?>