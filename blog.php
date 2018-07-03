<?php require_once'Connections/pays.php';?>

<?php 
	$title=$_POST["title"];
	$content=$_POST["content"];
	$date = $_POST['datepicker'];

	$newdate = str_replace('/', '-', $date);
	$insertedDate = date('Y-m-d', strtotime($newdate));


	$target = "pics/";
	$target = $target . basename( $_FILES['Filename']['name']);

	//This gets all the other information from the form
	$Filename=basename( $_FILES['Filename']['name']);
	

	mysql_query("INSERT INTO post (title,content,image,date) VALUES ('$title','$content','$Filename','$insertedDate')" );
	?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
<body>
	<?php
	if(isset($_POST['submit'])) {
    // redirect if login was successful
    echo header('Location: /fatma/list.php');
	} ?>
	
</body>
</html>



