<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read data</title>
</head>
<body>
<h1>CRUD</h1>
    <?php 
    require_once 'links.php';
    require_once 'config.php';
    $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql) or die("Query Unseccessfull");
        if(mysqli_num_rows($result)>0){
    ?>
    <table border="1px solid black">
        <thead>
            <th>Id</th>
            <th>Student Name</th>
            <th>Student Address</th>
            <th>Student Phone</th>
            <th>Edit Data</th>

        </thead> 
        <tbody>
            <?php   while($row = mysqli_fetch_assoc($result)){  ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['sName'] ?></td>
            <td><?php echo $row['sAddress'] ?></td>
            <td><?php echo $row['sPhone'] ?></td>
            <td><a href="edit.php?sid=<?php echo $row['id'] ?>">Edit</a>
            <a href="delete.php?sid=<?php echo $row['id'] ?>">Delete</a> </td>
        </tr> 
        <?php } ?>
        </tbody> 
    </table>
    <?php } ?>
</body>
</html>