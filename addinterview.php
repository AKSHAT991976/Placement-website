<!DOCTYPE HTML>
<html>
<head>
<title>VIT PLACEMENT</title>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<?php
	$con=mysqli_connect("localhost","root","","demo");
	if(isset($_POST['submit'])){
		$username=mysqli_real_escape_string($con,$_POST['name']);
		$passwd=mysqli_real_escape_string($con,$_POST['password']);
		
		if($username!="" && $passwd!=""){
			$sql= "SELECT * from login where name='$username' and password='$passwd'";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			$count = mysqli_num_rows($result);
			if($count==1){
				header("location:dashboard.php");
			}
		}
		
	}
	?>
	
	</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">VIT PLACEMENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addinterview.php">LOGIN</a>
      </li>
		
		<li class="nav-item">
        <a class="nav-link" href="index2.php">placement Statistics</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<div class="jumbotron">
  <section class="my-5">
	<div class="py-5">
       <h1 class="text-center">Administrator login</h1>	
	</div>
	<div class="container-fluid">
	<div class="row">
	   <div class="col-lg-6 col-md-6 col-12">
		   <img src="interview.png" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
		<form action="#" method="POST">
		<input type="text" name="name" id="name" placeholder="Username"><br>
		<input type="password" name="password" id="password" placeholder="Password">
		
			
		<input type="submit" name="submit" id="submit">
		
			
			
		</form>
		</div>
		
	</div>
</div>
	
	
</section>
	</div>
	</body>
</html>