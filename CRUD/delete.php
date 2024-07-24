<?php
require_once 'config.php';
     $upd_id=$_REQUEST['sid'];
    $sql="DELETE FROM students WHERE id='$upd_id'";
    $result=mysqli_query($conn,$sql);
        header("Location: read.php");
?>