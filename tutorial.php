<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "api";
$con = mysqli_connect($servername, $username, $password, $db_name);
$response = array();
if($con){
$sql = "SELECT * from users";
$result = mysqli_query($con, $sql);
if($result){
    $x = 0;
    while ($row = mysqli_fetch_assoc($result)){
        $response[$x]['id'] = $row['id'];
        $response[$x]['username'] = $row['username'];
        $response[$x]['password'] = $row['password'];
        $response[$x]['email'] = $row['email'];
        $response[$x]['age'] = $row['age'];
        $x++;
    }
    echo json_encode ($response, JSON_PRETTY_PRINT);
}
} else {
    echo "Database Connection failed";
}
?>