<?php
session_start();

 
$con = mysqli_connect("localhost","root","");

mysqli_select_db($con,'testing1');

$username = $_POST['username'];
$email =$_POST['email'];
$password=$_POST['password'];


$s="SELECT  * FROM test WHERE username = '$username'&& password='$password' && email='$email'";

$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']=$username;
   header('location:Welcome.php');
}else{
	echo "<script>
		alert('User not found. Please try again.');
		window.location.href='login.php';
		</script>";
 
}

 

?>