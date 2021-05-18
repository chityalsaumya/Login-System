<?php
session_start();
header('locatin:login.php'); 
 
$con = mysqli_connect("localhost","root","");

mysqli_select_db($con,'testing1');

$username = $_POST['username'];
$email =$_POST['email'];
$password=$_POST['password'];


$s="SELECT  * FROM test WHERE username = '$username' ";

$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);

if($num==1){
    echo "<script>
    alert('Username already taken');
    window.location.href='register.php';
    </script>";
}else{
    $reg= "insert into test (username , email , password) values('$username','$email','$password')";
    mysqli_query($con,$reg);
    echo "<script>
    alert('Registration done.');
    window.location.href='login.php';
    </script>";
}


 

?>