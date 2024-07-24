<?php
require_once 'config.php'; 
if(isset($_POST['upd-data'])){
    $upd_id=$_POST['id'];
    $upd_name=$_POST['sname'];
    $upd_address=$_POST['saddress'];
    $upd_phone=$_POST['sphone'];
    $sql="UPDATE students SET sName='$upd_name',
    sAddress='$upd_address', sPhone='$upd_phone' WHERE id=$upd_id";
    $result=mysqli_query($conn, $sql);
    if($result){
        header('Location: read.php');
    } else{
        echo "Error: " . $sql . mysqli_error($conn);
    }

}
?>