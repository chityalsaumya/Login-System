<?php
session_start();
include('connection.php');
?>

<html>
<body>
<table>
<tr>
<th>Id</th>
<th>Username</th>

<th>Email</th>
<th>Action</th>
</tr>

<?php
$sql = "SELECT id,username,email,action from registered ";
$result = $con-> query($sql);
$sql = "SELECT action from registered ";
if($result-> num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo"<tr><td>".$row['id']."</td>
        <td>".$row["username"]."</td>  
        <td>".$row['email']."</td>
        <td><div><form name='enable'  action='enable.php?id=".$row['id']."' method='POST' ><input type='submit' value='Enable/Disable' id=".$row['id']." ></form></div></td>
        </tr>";
    }echo"</table>";
}else{
    echo " 0 records";
}
$con-> close ();
?>
</table>
</body>
</html>
