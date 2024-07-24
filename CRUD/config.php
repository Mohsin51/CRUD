<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "college";
// Create Connection
$conn = mysqli_connect($server, $user, $pass, $db);
// Check Connection
if($conn){
    //echo "Connection Created Successfully";
    // $sql = "CREATE TABLE car (
    // id INT PRIMARY KEY AUTO_INCREMENT,
    // cName VARCHAR(20),
    // cProduct VARCHAR(20),
    // cAddress VARCHAR(30),
    // cServices VARCHAR(30))";
    // $sql = "INSERT INTO car (cName, cProduct, cAddress, cServices) VALUES (
    // 'cultus','mehran','china','full services')";
    // $sql = "DELETE FROM car WHERE cName='cultus'";
    // if(mysqli_query($conn, $sql)){
    //     //echo "Record Added  Successfully";
    // } else{
    //     echo "Error Adding Record: ". mysqli_error($conn);
    // }
} else{
    die("Connection Failed");
}

?>