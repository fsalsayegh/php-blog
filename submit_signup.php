<?php require_once 'Connections/pays.php'; //to connect to database very important ?> 
<?php 
	session_start();
	$user_name = $_POST["username"];
	$password = $_POST["pass"];

	$sql = "SELECT * FROM firsttable "; //take all data from the database
	$result = mysql_query($sql); 
	while($row=mysql_fetch_array($result)){ 
	
		 if($row['username'] == $user_name && $row['password'] == $password){
			 echo "sorry already exists";
			 $_SESSION["logged"] = false;
			 //header("Location: /fatma/signup.php");
			 break;
		 }else{
			mysql_query("INSERT INTO firsttable (username,password) VALUES ('$user_name','$password')");
		//to insert data into database //we should follow the same order in database 
			 $_SESSION["username"] = $user_name; //save the username in the session
			 $_SESSION["logged"] = true;
			 header('Location: /fatma/list.php'); //redirect back to the list page
			 break;
		 } }?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

</body>
	
</html>