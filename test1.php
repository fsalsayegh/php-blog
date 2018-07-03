<?php require_once'Connections/pays.php';?>

<?php 

	$date=$_POST['datepicker'];
	$newdate = str_replace('/', '-', $date);
	$insertedDate = date('Y-m-d', strtotime($newdate));

	echo $date;
		if (isset($_POST['checkbox'])){
			$checkbox = 1;
			mysql_query("INSERT INTO test (calender, checkbox) VALUES ('$insertedDate', '$checkbox')");
		}else{
			$checkbox = 0;
			mysql_query("INSERT INTO test (calender, checkbox) VALUES ('$insertedDate', '$checkbox')");
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