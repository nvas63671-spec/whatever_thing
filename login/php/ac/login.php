<?php 

include_once "../core/connections.php";

$user = $_POST["username"];
$pwd = $_POST["password"];

$pwd = md5($pwd);

$sql = "SELECT * FROM user WHERE 
username = '$user' AND 
password = '$pwd' AND
status = 1";

$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0) {
    
    session_start();
    $row = mysqli_fetch_assoc($query);
    
    $_SESSION["id"] = $row["user_id"];
    $_SESSION["user"] = $row["username"];
    
    $response["success"] = true;
}else {
    $response["success"] = false;
}

echo json_encode($response);
?>