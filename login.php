<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>
	<form method="post" action="login_submit.php" enctype="multipart/form-data">
		<p>Login Page!!!!</p>
		<lable>Username:</lable>
		<input type="text" name="user" id="user"/>
		<br/><br/>
		<label>Password:</label>
		<input type="password" name="pass" id="pass"/>
		
		<input type="submit" value="submit"/>
	</form>
	<a href="/fatma/signup.php" ><button value="signup" name="signup">signup</button> </a>
</body>
</html>