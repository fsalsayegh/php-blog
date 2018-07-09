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
  <?php $sql = "SELECT * FROM post "; 
			$result= mysql_query($sql);
			while($list=mysql_fetch_array($result)){
			?>	
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div style="position: relative; left: 330px;" class="thumbnail">
<!--						<img src="pics/<?php echo $list['image'];?>">-->
						<div class="caption">
							<h3>Title:<?php echo $list['title']?></h3>
							<p>content:<?php echo $list['content']?></p>
							
							<!-- object oreinted PHP	-->
							<?php
							$Date = $list['date'];
							$now  = date('Y-m-d'); //current date
							$datetime1 = new DateTime($Date);
							$datetime2 = new DateTime($now);
							$interval = $datetime1->diff($datetime2); //subtruct the new date from old date
							if ($interval->format('%a') == 0){ //if the post was posted today
								echo $interval->format('today'); // the arrow -> like the dot .
							}else{
							echo $interval->format('%a days ago');
							}
							?>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
  <div class="card-footer text-muted">
	  <?php
		
	  ?>
  </div>
</div>
</body>
</html>


