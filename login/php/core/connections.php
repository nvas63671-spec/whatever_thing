<?php 

$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DB = "user_info";

$conn = mysqli_connect($SERVER, $USER, $PASSWORD, $DB);
$response = array();

if(mysqli_connect_errno()) {
    
    $response["success"] = false;
    $response["message"] = mysqli_connect_error();
    echo json_encode($response);
    
    exit();
}

?>