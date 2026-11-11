<?php

$response = array();

session_start();
if(isset($_SESSION["id"])) {
    $response["success"] = true;
    $response["id"] = $_SESSION["id"];
    $response["user"] = $_SESSION["user"];
}else{
    $response["success"] = false;
}

echo json_encode($response);

?>