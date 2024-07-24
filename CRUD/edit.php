<?php
echo "<h1>CRUD</h1>";
require_once 'config.php';
$sid=$_REQUEST['sid'];
$sql="SELECT * FROM students WHERE id='$sid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($record = mysqli_fetch_assoc($result)){
?>
<br/>
<form action="upd-data.php" method="post">
    <input type="text" hidden name="id" value=<?php echo $record['id']; ?> />
    Name: <input type="text" name="sname" value="<?php echo $record['sName'];?>"/>
    <br/><br/>
    Address: <input type="text" name="saddress"  value="<?php echo $record['sAddress'];?>"/>
    <br/><br/>
    Phone: <input type="text" name="sphone" value="<?php echo $record['sPhone']; ?>" />
    <br/><br/>
    <button type="submit" name="upd-data">Update</button>
    </form>
    <?php }} ?>