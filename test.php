<?php

require "../model/Users.php";

$user = new Users();

$document_num = "00001";
$name = "James";
$last_name = "Smith";
$email = "freedom@example.com";
$key = "tupack";


// if ($user->AddUser($document_num, $name, $last_name, $email, $key)) {
//     echo "Successfully Registered!";
// } else {
//     echo "Error 404";
// }


if ($user->ValidateUser($email, $key)) {
    echo "User found.";
}else {
    echo "The user doesn't exist.";
}

?>