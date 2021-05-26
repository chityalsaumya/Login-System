<?php
require('connection.php');
session_start();
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$sid=$_GET['id'];

$sql = "SELECT action from registered WHERE id=$sid";
$result = $con-> query($sql);

if($result-> num_rows > 0){
    while($row = $result->fetch_assoc()){
        if($row['action'] == 1){
            
            $sql = "UPDATE registered SET action='0' WHERE id=$sid";

            if ($con->query($sql) === TRUE) {
                echo " <script>alert('Disabled Successfully');
                window.location.href='dashboard.php';
                </script>";
            
            } else {
              echo "Error updating record: " . $con->error;
            }
        }else{
            $sql = "UPDATE registered SET action='1' WHERE id=$sid";

            if ($con->query($sql) === TRUE) {
                echo " <script>alert('Enabled Successfully');
                window.location.href='dashboard.php';
                </script>";
              
            } else {
              echo "Error updating record: " . $con->error;
            }
        }
    }

}
$con->close();
?>