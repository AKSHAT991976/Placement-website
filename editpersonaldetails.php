<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "demo";

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);
if($conn->connect_error){
	die("connection failed");
}
if(isset($_REQUEST['SubmitBtn']))
{
	if(($_REQUEST['Regno']=="")||($_REQUEST['Name']=="")||($_REQUEST['mobileno']=="")||($_REQUEST['Email']=="")||($_REQUEST['Address']=="")||
	($_REQUEST['Age']==""))
	 {
	 $msg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2">fill all fields</div>';
		
		
	}
else{
	$st_regno=$_REQUEST['Regno'];
	$st_name=$_REQUEST['Name'];
	$st_mobile=$_REQUEST['mobileno'];
	$st_email=$_REQUEST['Email'];
	$st_address=$_REQUEST[ 'Address']; 
	$st_age=$_REQUEST['Age'];
	
	$sql = "INSERT INTO studentpersonaldetails(Regno,Name,mobileno,Email,address,Age) VALUES ('$st_regno','$st_name','$st_mobile','$st_email','$st_address','$st_age')";
	
	if($conn->query($sql)== TRUE){
			$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Details Changed Successfully</div>';
			
		}
		else{
			$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">unable to add</div>';
		}
}
}

?>

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
		<div class="col-sm-6 mt-5 mx-3 jumbotron">
		<h3>Edit Personal Details</h3>
		<form action="editpersonaldetails.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		<label for="Regno">Regno</label>
		<input type="text" class="form-control" id="Regno" name="Regno">
		</div>
		<div class="form-group">
		<label for="Name">Name</label>
		<input type="text" class="form-control" id="Name" name="Name">
		</div>
		<div class="form-group">
		<label for="Mobileno">Mobileno</label>
		<input type="text" class="form-control" id="mobileno" name="mobileno">
		</div>
		<div class="form-group">
		<label for="Email">Email</label>
		<input type="text" class="form-control" id="Email" name="Email">
		</div>
		<div class="form-group">
		<label for="Address">Address</label>
		<input type="text" class="form-control" id="Address" name="Address">
		</div>
		<div class="form-group">
		<label for="Age">Age</label>
		<input type="text" class="form-control" id="Age" name="Age">
		</div>
		<div class="text-center">
		<button type="submit" class="btn btn-danger"
		id="SubmitBtn" name="SubmitBtn">Submit</button>
		<a href="studentpersonaldetails.php" class="btn btn-secondary">Close</a>
			
			</div>
			
			<?php if(isset($msg)){echo $msg;}?>

		</form>
		
		</div>
		
		</div>
	</div>
</body>
</html>