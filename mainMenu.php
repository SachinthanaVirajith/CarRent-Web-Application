<?php
setcookie("Vehicle", "Rent Vehicles", time() + 86400);
$_SESSION['name'] = "John";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Main Menu</title>
	<link href="bootstrap.min.css" rel="stylesheet">
	<style>
		.box {
			width:80%;
			padding: 20px;
			background-color: #8ff;
			margin-top: 200px;  
		}
	</style>
</head>
<body>
  <center><h2>Rent a Vehicle</h2></center>
  <hr lengh = 80%>

	<div class="container box">   
		<div class="row">
  			<div class="col-sm-6">
    				<div class="card">
      						<div class="card-body">
        						<h5 class="card-title">Select Your Vehicle</h5>
        						<p class="card-text">Click this button to select your vehicle as you wish. You can select according to your strength</p>
        						<a href="userRequirement.html" class="btn btn-primary">Rent</a>
      						</div>
    				</div>
  			</div>

  			<div class="col-sm-6">
    				<div class="card">
      						<div class="card-body">
        						<h5 class="card-title">Upload Your Licean</h5>
        						<p class="card-text">Click this button to upload soft copy of licean of your driver.</p>
        						<a href="FileUploading.html" class="btn btn-primary">Upload</a>
      						</div>
    				</div>
  			</div>
  		</div>

  	</div>
</body>
</html>