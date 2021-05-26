<?php

$con=mysqli_connect('localhost','root','','testing3');

if(mysqli_connect_error()){
    echo"<script>alert('Cannot connect to database');</script>";
    exit();
}

?>
