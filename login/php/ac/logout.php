<?php

session_start();
session_destroy();

$response = array();
$response["success"] = true;

echo json_encode($response);

?>