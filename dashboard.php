
<!DOCTYPE html>
<head>
<title>Dashboard</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">VIT PLACEMENT</a></nav>
	<div class="container-fluid" style="margin-top:40px;">
	<div class="row">
	<nav class="col-sm-2 bg-light sidebar py-5">
	<div class="sidebar-sticky">
    <ul class="nav flex-column">
		<li class="nav-item"><a class="nav-link <?php if(PAGE=='dashboard'){echo 'active';}?>"href="dashboard.php"><i class="fas fa-user"></i>Dashboard</a></li>
		<li class="nav-item"><a class="nav-link <?ph p if(PAGE=='studentpersonaldetails'){ echo 'active';}?>"href = "studentpersonaldetails.php"><i class="fab fa-accessible-icon"></i>Student Personal Details</a></li>
		
		<li class="nav-item"><a class="nav-link <?php if(PAGE=='studentpaymentdetails'){ echo 'active';}?>"href = "studentpaymentdetails.php"><i class="fas fa-align-center"></i>Student Payment Details</a></li>
		
		<li class="nav-item"><a class="nav-link <?php if(PAGE=='companydetails'){ echo 'active';}?>"href = "companydetails.php"><i class="fas fa-key"></i>Company Details</a></li>
		
		<li class="nav-item"><a class="nav-link <?php if(PAGE=='placementoffers'){ echo 'active';}?>"href = "placementoffers.php"><i class="fas fa-sign-out-alt"></i>Placement Offers</a></li>
		
		<li class="nav-item"><a class="nav-link <?php if(PAGE=='internshipoffers'){ echo 'active';}?>"href = "internshipoffers.php"><i class="fas fa-sign-out-alt"></i>Internship Offers</a></li>
		
		<li class="nav-item"><a class="nav-link <?php if(PAGE=='Notificationmessages'){ echo 'active';}?>"href = "Notificationmessages.php"><i class="fas fa-sign-out-alt"></i>Notification Messages</a></li>
		
		<li class="nav-item"><a class="nav-link <?php if(PAGE=='Changepassword'){ echo 'active';}?>"href = "Changepassword.php"><i class="fas fa-sign-out-alt"></i>Change Password</a></li>
		
		<li class="nav-item"><a class="nav-link <?php if(PAGE=='editpersonaldetails'){ echo 'active';}?>"href = "editpersonaldetails.php"><i class="fas fa-sign-out-alt"></i>Edit personal details</a></li>
		
		<li class="nav-item"><a class="nav-link <?php if(PAGE=='interviewdetails'){ echo 'active';}?>"href = "interviewdetails.php"><i class="fas fa-sign-out-alt"></i>Interview details</a></li>
		
		
		
		
		
		
		
		
		
		</ul>		
		
		
		
		</div>	
		
		
	</nav>	
		<div class="col-sm-9 md-10">
			<div class="row text-center mx-5">
				<div  class="col-sm-4 mt-5">
				<div class="card text-white bg-danger mb-3" style="max-width:18rem;">
				<div class="card-header">Total offers</div>
				<div class="card-body">
				<h4 class="card-title">3500</h4>
				<a class="btn text-white" href="#">View</a>
					</div>
					
					
					
				</div>
				
				
				</div>
				<div  class="col-sm-4 mt-5">
				<div class="card text-white bg-success mb-3" style="max-width:18rem;">
				<div class="card-header">Internship offers</div>
				<div class="card-body">
				<h4 class="card-title">300</h4>
				<a class="btn text-white" href="#">View</a>
					</div>
					
					
					
				</div>
				
				
				</div>
				<div  class="col-sm-4 mt-5">
				<div class="card text-white bg-info mb-3" style="max-width:18rem;">
				<div class="card-header">Companies visited</div>
				<div class="card-body">
				<h4 class="card-title">250</h4>
				<a class="btn text-white" href="#">View</a>
					</div>
					
					
					
				</div>
				
				
				</div>
		    	
			
			</div>
		
		
		 </div>
		
		
		
	</div>
	
	
	
	
	
	
	</div>
	<script src="/js/jquery.min.js"></script>
	<script src = "/js/pooper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/all.min.js"></script>
		 




</body>
</html>