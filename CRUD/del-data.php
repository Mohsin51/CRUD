<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD </h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    ID: <input type="text" name="id" placeholder="Enter Id" />
    <br/><br/>
    <input type="submit" name="show-data" value="show data"/>
    <br/><br/>
    </form>
    <?php 
    require 'config.php';
    if(isset($_POST['show-data']))
    $id=$_POST['id'];
    $sql="SELECT id from students";
    $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            if($row['id']==$id){
    $sql1="SELECT * FROM students WHERE id='$id'";
    $result=mysqli_query($conn,$sql1);
        while($row=mysqli_fetch_assoc($result)){
    
    ?>
    <table border="1px solid black">
        <thead>
            <th>Student Id</th>
            <th>Student Name</th>
            <th>Student Address</th>
            <th>Student Phone</th>
            <th>Delete Record</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['sName']; ?></td>
                <td><?php echo $row['sAddress']; ?></td>
                <td><?php echo $row['sPhone']; ?></td>
                <td><a href="delete.php?sid=<?php echo $row['id'] ?>">Delete</a> </td>
            </tr>
<?php  } ?>
</tbody>
<?php } ?>
</table>
<?php } ?>
</body>
</html>








