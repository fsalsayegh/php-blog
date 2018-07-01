<?php require_once 'Connections/pays.php';?> 

<?php 
	session_start();
	$user = $_POST["user"];
	$pass = $_POST['pass'];
	
	$datarow = mysql_query("SELECT * FROM firsttable");
	while($row=mysql_fetch_array($datarow)){
		if ($row['username'] == $user && $row['password'] == $pass){
			$_SESSION['username'] = $user;
			$_SESSION['logged'] = true;
			header('Location: /fatma/list.php');
			break;
		}else{
			$_SESSION['logged'] = false;
			
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>