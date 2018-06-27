<?php require_once'Connections/pays.php';?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>List</title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
<script>

//	function myFunction(){
//	 var x = document.getElementById("search").value;
//		document.getElementById("demo").innerHTML = x;
//	}

</script>
</head>

<body>
<nav class="navbar navbar-inverse ">
	<div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Home</a>
		  <p class="navbar-brand"><?php session_start();
			  	if($_SESSION['logged'] == true){
					echo $_SESSION['username'];
				}
			  ?></p>
		</div>
  	</div>
</nav>
<div class="container">
	<div class="jumbotron">
	<h1>Welcome,coders!</h1>
	<p>Hello World!!</p>
	<p><a class="btn btn-success btn-lg" href="/fatma/posts.php" role="button">Create a post</a></p>
</div>
	
	<div class="Search-bar">
		<form method="get">
			<label>Search:</label>
			<input type="text"  name="search" id="search" placeholder="Search for.." />
			<input type="submit" name="submitsearch" value="search" id="submitsearch"/><br/><br/>
		</form>
		<p id="demo"></p>	
	</div>
	
	<?php
	if (isset($_GET["submitsearch"])){
		$input = $_GET["search"];
		$input = preg_replace("#[^0-9a-z]#i","",$input);
		
		$sql = "SELECT * FROM post WHERE title LIKE '%$input%' OR content LIKE '%$input%' "; 
		$result= mysql_query($sql);
		while($list=mysql_fetch_array($result)){
			
			if($input){
				?>
				<div class="row">
				<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				<img src="pics/<?php echo $list['image'];?>">
				<div class="caption">
				<h3>Title:<?php echo $list['title']?></h3>
				<p>content:<?php echo $list['content']?></p>
				<p>
				<?php
					echo '<a class="btn btn-danger" href="/fatma/delete_post.php?id=' . $list['id']. '">Delete</a>';
				?>
				<?php
					echo '<a class="btn btn-primary" href="/fatma/update_post.php?id=' . $list['id']. '">Update</a>';
				?>
				</p>	
				</div>
			</div>
		</div>
	</div>


<?php }else{
				
		$sql = "SELECT * FROM post "; 
		$result= mysql_query($sql);
		while($list=mysql_fetch_array($result)){
			?>	
	
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="pics/<?php echo $list['image'];?>">
					<div class="caption">
					<h3>Title:<?php echo $list['title']?></h3>
					<p>content:<?php echo $list['content']?></p>
					<p>
						<?php
							echo '<a class="btn btn-danger" href="/fatma/delete_post.php?id=' . $list['id']. '">Delete</a>';
						?>
						<?php
							echo '<a class="btn btn-primary" href="/fatma/update_post.php?id=' . $list['id']. '">Update</a>';
						?>
					</p>	
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php } ?>
	<?php }?>
	<?php } else{
			$sql = "SELECT * FROM post "; 
			$result= mysql_query($sql);
			while($list=mysql_fetch_array($result)){
			?>	
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="pics/<?php echo $list['image'];?>">
						<div class="caption">
							<h3>Title:<?php echo $list['title']?></h3>
							<p>content:<?php echo $list['content']?></p>
							<p>
								<?php echo '<a class="btn btn-danger" href="/fatma/delete_post.php?id=' . $list['id']. '">Delete</a>';?>
								<?php echo '<a class="btn btn-primary" href="/fatma/update_post.php?id=' . $list['id']. '">Update</a>'; ?>
							</p>	
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<?php } ?>
</div>
</body>
</html>