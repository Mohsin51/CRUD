<?php
$server="localhost";
$user="root";
$pass="";
$db="college";
$conn=mysqli_connect($server, $user, $pass, $db);
//$sql="CREATE DATABASE college";
// $sql="CREATE TABLE courses (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     cName VARCHAR(10))";
// $sql="INSERT INTO courses (cName) VALUES ('IT')";
// if(mysqli_query($conn,$sql)){
//     echo "Record added";
// } else{
//     echo "Error Record adding:". mysqli_connect_error();
// }
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h1>CRUD</h1>
<?php require_once 'links.php'; ?>

    <form action="create-handler.php" method="post">
    Name: <input type="text" name="sname" Placeholder="Enter Name" /><br/><br/>
    Address: <input type="text" name="saddress" Placeholder="Enter Address" /><br/><br/>
    Phone: <input type="tel" name="sphone" placeholder="Enter Valid Phone"/><br/><br/>
    <input type="submit" name="submit" />
    </form>
</body>
</html>