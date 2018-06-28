<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
</head>

<body>
	<form action="submit_signup.php" method="post" enctype="multipart/form-data">
		<label>Username:</label>
		<input type="text" name="username" placeholder="Enter username" id="username" required/>

		<br/><br/>

		<label>Password:</label>
		<input type="password" name="pass" placeholder="Enter password" id="pass" required/>
	
		<br/><br/>
	
		<input type="submit" value="submit"/>
	</form>
</body>
</html>