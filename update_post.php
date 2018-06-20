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
			$id = $_GET['id']; // get id value
		
			$sql = "SELECT * FROM post WHERE id=$id ";
			$result= mysql_query($sql);
			$list=mysql_fetch_array($result);
	?>
	
	<form action="update_submit.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $list['id']; ?>"/>
		<label>title</label>
		<input name="title" id="title" type="text" value="<?php echo $list['title']; ?>"/><br/><br/>
		
		<label>content</label>
		<input name="content" id="content" type="text"  value="<?php echo $list['content']; ?>"/><br/><br/>
		
		<label>Upload an image</label>
		<input type="file" name="Filename" /><br/><br/>
		
		<input class="btn btn-primary" name="submit" type="submit" />
	</form>
	<?php }?>
	
</body>
</html>
