<?php

require('connection.php');
session_start();

if(isset($_POST['register'])){
    $user_exist_query="SELECT * FROM `registered` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);

    if($result){
        if ($_POST["password"] === $_POST["cpassword"]) {
        
        
        if(mysqli_num_rows($result)>0){
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username']){
                echo " <script>alert('$result_fetch[username]- Username already taken ');
        window.location.href='index.php';
        </script>";
            }else{
                echo " <script>alert('$result_fetch[email]- Email already registered ');
                window.location.href='index.php';
                </script>";
            }
        }else{
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $query="INSERT INTO `registered`(`fullname`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";

            if(mysqli_query($con,$query)){
                echo " <script>alert('Registered successfully');
                window.location.href='login.php';
                </script>";
            }else{
                echo " <script>
                alert('Cannot Run Query');
       
        </script>"; }


        }
    }else{
        echo " <script>alert('Confirm password is not matched');
                window.location.href='index.php';
                </script>";
    }
    }else{
        echo " <script>alert('Cannot Run');
        window.location.href='index.php';
        </script>";
    }

}

// ---------------------------------------------



if(isset($_POST['login']))
{
    $query="SELECT * FROM `registered` WHERE `username`='$_POST[email_username]' OR `email`='$_POST[email_username]'";
    $result=mysqli_query($con,$query);
    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$result_fetch['password'])){
              
               $_SESSION['username']=$result_fetch['username'];
               header('location:welcome.php');
            }else{
                echo " <script>alert('Incorrect Password');
                window.location.href='index.php';
                </script>";

            }

        }else{
            echo " <script>alert('Email or username not Register ');
            window.location.href='index.php';
            </script>";
        }

    }else{
        echo " <script>alert('Cannot run..');
        window.location.href='index.php';
        </script>"; 
    }

}

?>