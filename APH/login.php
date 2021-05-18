
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form</title>
</head>
<body>
<div>


</div>
	<div class="container">
		<form action="loginreg.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Here</p>
		
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" required >
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
            </div>
           
			<div class="input-group">
				<button type="submit" name="login" class="btn">LOGIN</button>
			</div>
			<div class="input-group"><a href="register.php">Register now</a> </div>
 	
			
		</form>
	</div>

	
</body>
</html>