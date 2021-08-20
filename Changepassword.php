<?php session_start();?>
<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "demo";

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);
if($conn->connect_error){
	die("connection failed");
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
	<?php
	if(isset($_POST['Submit'])){
		
		$username = $_POST['username'];
		$oldpwd=$_POST['oldpwd'];
		$newpwd = $_POST['newpwd'];
		$cpwd = $_POST['cpwd'];
		
		$query = mysqli_query($conn,"SELECT name,password from login where name='$username' AND password = '$oldpwd'");
		$num = mysqli_fetch_array($query);
		
		if($num>0){
			$con = mysqli_query($conn,"UPDATE login set password = '$newpwd' where username = '$username'");
			$_SESSION['msg1'] = "Password change successfully";
		}
		else{
			$_SESSION['msg1'] = "Password does not match";
		}
		
		
	}
	
	
	
	
	
	
	
	
	?>
	<p>Thank you</p>
	
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
		<form name="chngpwd" action="" method="post" on submit="return valid();">
		<table align="center">
			<tr height="50">
			<td>Username</td>
			<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr height="50">
			<td>Old password</td>
			<td><input type="text" name="oldpwd" id="oldpwd"></td>
			</tr>
			<tr height="50">
			<td>New Password</td>
			<td><input type="text" name="newpwd" id="newpwd"></td>
			</tr>
			<tr height="50">
			<td>Conform Password</td>
			<td><input type="text" name="cpwd" id="cpwd"></td>
			</tr>
			<tr height="50">
			<td></td>
			<td><input type="Submit" name="cpwd" id="cpwd"></td>
			</tr>
			
			
			
			
			
			
			</table>
		
		
		
		</form>
		
		
		
		
		</div>
	</div>
</body>
</html>