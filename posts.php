
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
<div class="container">
	<br/>
	<form action="blog.php" method="post" enctype="multipart/form-data">
		<label>Title</label>
		<input name="title" id="title" type="text" /><br/><br/>
		
		<label>Content</label>
		<input name="content" id="content" type="text" /><br/><br/>
		
		<label>Upload an image</label>
		<input type="file" name="Filename" /><br/><br/>
		
	
		<input  class="btn btn-danger" type="submit" name="submit" value="submit"/>		
	</form>
</div>
</body>
</html>