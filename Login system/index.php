<?php
require('connection.php');
session_start();
$message = '';
$message2 = '';
$message3 = '';
//-----------------------------------------Register-------------------------
if(isset($_POST['register'])){
    $user_exist_query="SELECT * FROM `registered` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);

    if($result){
        if ($_POST["password"] === $_POST["cpassword"]) {
        
        
        if(mysqli_num_rows($result)>0){
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username']){
        
        $message = "<div class='alert alert-danger'>Username already taken</div>";
            }else{
               
                $message = "<div class='alert alert-danger'>$result_fetch[email]-Email already registered</div>";
            }
        }else{
            // $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $query="INSERT INTO `registered`(`fullname`, `username`, `email`, `password`,`action`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]','$_POST[action]')";

            if(mysqli_query($con,$query)){
              $message = "<div class='alert alert-success'>Registration Successfull!!1</div>";
            }else{
              $message = "<div class='alert alert-danger'>Cannot Run Query</div>"; }}
    }else{
      $message = "<div class='alert alert-danger'>Confirm passworrd is not matched</div>";
    }
    }else{
      $message = "<div class='alert alert-danger'>Cannot run</div>";
    }

}

// ------------------------------------------Login-------------------------

if(isset($_POST['login'])){
    $query="SELECT * FROM `registered` WHERE `username`='$_POST[email_username]' OR `email`='$_POST[email_username]' ";
    $result=mysqli_query($con,$query);
    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['password']==$_POST['password']){
              
               
               if($result_fetch['action'] == 1){
                
                $_SESSION['username']=$result_fetch['username'];
                header("location:index.php");
                
               }else{
               
                $message2 = "<div class='alert alert-danger'>You are Disabled. Cannot Login till admin enables you</div>";
               }
            }else{
              $message2 = "<div class='alert alert-danger'>Incorrect Password</div>";
 }  }else{
           
            $message2 = "<div class='alert alert-danger'>Email or username not Register</div>";
        }
    }else{
      $message2 = "<div class='alert alert-danger'>Cannot run</div>";

    }

}
//------------------------------------Forgot Password--------------------------

if(isset($_POST['submitt'])){
    $check_email="SELECT * FROM `registered` WHERE `username`='$_POST[email_username]' OR `email`='$_POST[email_username]' ";
    $result=mysqli_query($con,$check_email);
    if($result){
        if(mysqli_num_rows($result)==1){
            $sql="UPDATE registered SET password='$_POST[resetpassword]' WHERE `username`='$_POST[email_username]' OR `email`='$_POST[email_username]' ";
            mysqli_query($con,$sql);
            
            $message3 = "<div class='alert alert-danger'>Done reset. Login with new password</div>";

       
        }
        else{
          $message3 = "<div class='alert alert-danger'>Email not found in the database</div>";

        }
    }
}
    

?>

<!-- -------------------------------------HTML----------------------- -->
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
    <style>
 #btn
 {
     position: inherit;
     color:#999;
     font-size: 12px;
 }
 #btn2,
 #btn3{
    position: inherit;
    color: #fff;
    font-size: 12px;
 }
 #submit{
  position: inherit;
  color:#fff;
  border: 1px solid #fff; 
  font-size: 12px;
 }
 #btn:hover
 {
     background: #fff;
     color: #0066ff;
     border: 1px solid #0066ff;
     cursor: pointer;
 }
 #btn2:hover,
 #btn3:hover{
  cursor: pointer;
 }
 
 #modal,
 #modal2,
 #modal3 {
     position: absolute;
     left: 0;
     top: 0px;
     display: none;
     padding: 30px;
     margin-top: 100px;
     margin-left: 25px;
     /* height: 380px; */
     max-width: 480px;
     background: #0066ff;
     color: #fff;
     border: 3px solid #000;
 }
 
 #close, #close2, #close3 {
     padding: 2px;
     position: absolute;
     top: 5px;
     right: 6px;
     /* height: 30px; */
     background: #fff;
     color: #0066ff;
     cursor: pointer;
 }
 
 #close:hover {
     background: #005540;
     color: #fff;
     border: 1px solid #fff;
     cursor: pointer;
 }
 </style>
    <title>Hello, world!</title>
   
  </head>
  <body>
  <!-- -------------------Nav bar---------------------- -->
  <nav class="navbar navbar-expand-lg "> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form>
      <?php
      if(isset($_SESSION['username'])){
        echo "<div ><button type='button'> <a href='logout.php'>LOGOUT</a></button></div>";
      }
      else{
        echo"<div id='btn'><button type='button' >Login/Register</button></div>";
      }
   ?>
  
      </form>
      </div>
  </div>
</nav>
<p>Hello</p><div class="container" >
<!-- ----------------------------------------------Cards-------------------------------- -->
<div class="cards">
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_1.jpg" class="card-img-top" >
        <h5 class="card-title">HTML</h5>
        
        <p class="card-text">HTML stands for Hyper Text Markup Language
HTML is the standard markup language for creating Web pages
HTML describes the structure of a Web page
HTML consists of a series of elements
HTML elements tell the browser how to display the content
HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.
</p><?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
  </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_2.jpg" class="card-img-top" >
        <h5 class="card-title">CSS</h5>

        <p class="card-text">CSS stands for Cascading Style Sheets
CSS describes how HTML elements are to be displayed on screen, paper, or in other media
CSS saves a lot of work. It can control the layout of multiple web pages all at once
External stylesheets are stored in CSS files. It can control the layout of multiple web pages all at once
External stylesheets are stored in CSS files.</p>

<?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_4.jpg" class="card-img-top" >
        <h5 class="card-title">Javascript</h5>

        <p class="card-text">JavaScript, often abbreviated as JS, is an interpreted programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientationprototype-based object-orientation, and first-class functionsand first-class functions</p>
        <?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
  

      </div>
    </div>
  </div>
  
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_6.jpg" class="card-img-top" >
        <h5 class="card-title">PHP</h5>
        
        <p class="card-text">PHP is a server-side language that can be used in conjunction with a database to create dynamic web pages. By the word "dynamic" it allows you to input or query data  from a web page.from a web page. These aren't the only things PHP allows you to do interaction with databases are a key feature of server-side languages.</p>
        <?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_7.jpg" class="card-img-top" >
        <h5 class="card-title">Python</h5>

        <p class="card-text">Python is an interpreted, high-level and general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant indentation. Its language constructs and object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.</p>
        <?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_8.jpg" class="card-img-top" >
        <h5 class="card-title">C++</h5>

        <p class="card-text">C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes". The language has expanded significantly over time, and modern C++ now has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation.</p>
        <?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
      </div>
    </div>
  </div>
  
</div>
</div>
</div>
<!-- ------------------------------------------------Registration Form----------------------------------- -->
      <div class="container" id="modal">
      <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register Here</p>
            <span class="text-danger"><?php echo $message; ?></span>
			<div class="input-group">
				<input type="text" placeholder="Fullname" name="fullname" required >
			</div>
            <div class="input-group">
				<input type="text" placeholder="Username" name="username" required >
			</div>
			<div class="input-group">
				<input type="email" placeholder="E-mail" name="email" required >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
           
				<input type="text" id='action' name="action" value="0" hidden>
         <div class="input-group">
				<button id="submit" type="submit" name="register" class="btn">Register</button>
			</div><p>Already have an account?</p>
			<p id='btn2' class="input-group">Login</p>
			
		</form><div id="close">X</div>

</div>
<!-- --------------------------------------------------Login Form---------------------------------------- -->
<div class="container" id="modal2">

<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Here</p>
            <span class="text-danger"><?php echo $message2; ?></span>
			<div class="input-group">
				<input type="text" placeholder="Email or Username" name="email_username" required >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
            </div>
            <input type="text" id='action' name="action" value="0" hidden>
			<div class="input-group">
			<button  id="submit" type="submit" name="login" class="btn">Login</button>
			</div>
			<div id="btn3" class="input-group"> Forgot your password?</div>
 	
			
		</form><div id="close2">X</div>

</div>
<!-- ------------------------------------------------Reset password Form------------------------- -->
<div class="container" id="modal3">
<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Reset Password</p>
            <span class="text-danger"><?php echo $message3; ?></span>
			<div class="input-group">
				<input type="text" placeholder="Email or Username" name="email_username" required >
			</div>
			<div class="input-group">
				<input type="password" placeholder="New Password" name="resetpassword" required>
			<div class="input-group">
				<button id="submit" type="submit" name="submitt" class="btn">Reset</button>
        </form><div id="close3">X</div>
       
</div>
<!-- -----------------------------------------------Script for modal popup--------------------------- -->
<script>
$(document).ready(function(){
    $('#btn').click(function(){
        $('#modal').css('display','block');
        $('#modal2').css('display','none');
        $('#modal3').css('display','none');
    })
    $('#btn2').click(function(){
        $('#modal2').css('display','block');
        $('#modal').css('display','none');
        $('#modal3').css('display','none');
    })
    $('#btn3').click(function(){
        $('#modal3').css('display','block');
        $('#modal2').css('display','none');
        $('#modal').css('display','none');
    })
    $('#close').click(function(){
        $('#modal').css('display','none');
    })
    $('#close2').click(function(){
        $('#modal2').css('display','none');
    })
    $('#close3').click(function(){
        $('#modal3').css('display','none');
    })
});
</script>
  </body>
</html>







