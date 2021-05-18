<?php

$con=mysqli_connect('localhost','root','','testing1');

if(mysqli_connect_error()){
    echo"<script>alert('Cannot connect to database');</script>";
    exit();
}


?>
