
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create Post</title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	
	<!-- To convort date into day/month/year -->
<script>
	$(document).ready(function() {
		$("#datepicker").datepicker({dateFormat: "dd/mm/yy"}); 
	  });
</script>
	

	
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
		
		<label>Date</label>
		<input  name="datepicker" id="datepicker"  placeholder="dd/mm/yyyy" type="text"/><br/><br/>
		
		<input  class="btn btn-danger" type="submit" name="submit" value="submit"/>		
	</form>
</div>
</body>
</html>