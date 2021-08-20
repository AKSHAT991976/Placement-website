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
		<div class="jumbotron">

<section class="my-5">
	<div class="py-5">
	   <h2 class="text-center">Company details</h2>
	   </div>
	  <div class="w-200 m-auto">
	     <form action="userinfo.php" method="POST">
			 <div class="form-group">
			 <label>COMPANY ID</label>
			 <input type="text" name="comp_id" required autocomplete="on" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>COMPANY NAME</label>
			 <input type="text" name="name" required autocomplete="on" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>COMPANY ADDRESS</label>
			 <input type="text" name="address" 
			 required autocomplete="on" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>CONTACT NO.</label>
			 <input type="text" name="contact_no" 
			 required
			 autocomplete="on" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>COMPANY EMAIL</label>
			 <input type="text" name="email_id" 
			 required autocomplete="on" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>MONTH OF VISITING</label>
			 <input type="text" name="month_of_visiting" required
			 autocomplete="on" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>AGE CRITERIA</label>
			 <input type="text" name="age_criteria" required
			 autocomplete="on" class="form-control">
			 </div>
			 <div class="form-group">
			 <label>CGPA CRITERIA</label>
			 <input type="text" name="cgpa_criteria" required
			 autocomplete="on" class="form-control">
			 </div>
			 

			 
			 <button type="submit" class="btn btn-success">Submit
			 </button>
		  
		  
		  
		  
		 </form>
	
	
	  </div>
	</section>
	</div>
		</div>
	</div>
</body>
</html>