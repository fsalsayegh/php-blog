<?php require_once'Connections/pays.php';?>
	


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		
		if (isset($_GET['id']) && is_numeric($_GET['id'])){

			$id = $_GET['id']; //get id value

			$result = mysql_query("DELETE FROM post WHERE id=$id") // delete the entry

			or die(mysql_error());

			 header('Location: /fatma/list.php'); //redirect back to the view page

			}

			else

			{

			header('Location: /fatma/list.php'); // if id isn't set, or isn't valid, redirect back to view page

			}
		?>
</body>
</html>