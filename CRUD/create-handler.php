<?php
$server="localhost";
$user="root";
$pass="";
$db="college";
$conn=mysqli_connect($server, $user, $pass, $db);
$name=$_POST['sname'];
$addr=$_POST['saddress'];
$phone=$_POST['sphone'];
$course=$_POST['scourse'];

if(isset($_POST['submit'])){
$sql="INSERT INTO students (sName, sAddress, sPhone) VALUES(
    '$name','$addr','$phone')";
    if(mysqli_query($conn, $sql)){
        //echo "record added";
    }
}
header("Location: read.php");





?>