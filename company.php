<!DOCTYPE HTML>
<html>
<head>
<title>VIT PLACEMENT</title>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
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
        <a class="nav-link" href="#">Companies</a>
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
	   <h2 class="text-center">Company details</h2>
	   </div>
	  <div class="w-50 m-auto">
	     <form action="userinfo.php" method="POST">
			 <div class="form-group">
			 <label>COMPANY ID</label>
			 <input type="text" name="ID" autocomplete="off" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>COMPANY NAME</label>
			 <input type="text" name="name" autocomplete="off" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>COMPANY ADDRESS</label>
			 <input type="text" name="address" autocomplete="off" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>CONTACT NO.</label>
			 <input type="text" name="phone" autocomplete="off" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>COMPANY EMAIL</label>
			 <input type="text" name="email" autocomplete="off" class="form-control">
			 </div>
			 <div class="form-group">
			 <label></label>
			 <textarea class="form-control" name="comments">
				 
				 
			 </textarea>
			 
			 </div>
			 <button type="submit" class="btn btn-success">Submit
			 </button>
		  
		  
		  
		  
		 </form>
	
	
	  </div>
	</section>
	</div>
	</body>
</html>