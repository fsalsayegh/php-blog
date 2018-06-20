<?php require_once'Connections/pays.php';?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
	

<body>
	<?php
			// check if the form has been submitted then save it to the database

		if (isset($_POST['submit']))

		{

		// confirm that the 'id' value is a valid integer before getting the form data

			if (is_numeric($_POST['id']))

			{

			// get form data, making sure it is valid

			$id = $_POST['id'];
			$title =$_POST['title'];
			$content =$_POST['content'];
				
			$target = "pics/";
			$target = $target . basename( $_FILES['Filename']['name']);

			//This gets all the other information from the form
			$Filename=basename( $_FILES['Filename']['name']);

			// save the data to the database

			mysql_query("UPDATE post SET title='$title', content='$content', image='$Filename' WHERE id='$id'")

			or die(mysql_error());

			header('Location: /fatma/list.php');

			}

		}

		else

		{
			echo 'Error!'; // if the 'id' isn't valid, display an error

		}
	?>

</body>
</html>