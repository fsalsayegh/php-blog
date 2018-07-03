<!--<?php require_once'Connections/pays.php';?>-->

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Detail</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>	
	
	
</head>
<body>
	<br/>
<div class="container">
	<div class="card text-center">
  <div class="card-header">
    <img   style="max-width: 70px; border-radius: 50%;  margin-top: -50px;" src="http://delo.bg/wp-content/uploads/2016/02/facebook-1.jpg" >
	  <p><?php session_start();
		  if($_SESSION['logged'] == true){
					echo $_SESSION['username'];
				}
		  ?></p>
  </div>
  <div class="card-body">
    <h5 class="card-title">Coding</h5>
    <p class="card-text">Programing languages: PHP, Javascript, python">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</body>
</html>