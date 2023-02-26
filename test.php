<?php

require "model/Users.php";

$usuario = new Users();

$document_num = "00001";
$name = "James";
$last_name = "Smith";
$email = "freedom@example.com";
$key = "tupack";

if ($usuario->AddUser($document_num, $name, $last_name, $email, $key)) {
    echo "Successfully Registered!";
} else {
    echo "Error 404";
}

?>