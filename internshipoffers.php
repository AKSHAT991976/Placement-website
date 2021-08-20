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
		
		<div class="col-sm-9 mt-5">
		<p class="bg-dark text-white p-2">Internship_offers</p>
	    <?php
	    $sql = "SELECT * FROM internship_offers";
        $result=$conn->query($sql);
        if($result->num_rows > 0 ){
		?>
		<table class="table">
			
			<thead>
			<tr>
			<th scope="col">Internship offer id</th>
			<th scope="col">reg_no</th>
			<th scope="col">comp_id</th>
			<th scope="col">duration</th>
			<th scope="col">stipend</th>
			
			</tr>
			
			</thead>
			<tbody>
				<?php while($row=$result->fetch_assoc()){ 
				echo '<tr>';
				echo '<th scope="row">'.$row['i_offer_id'].'</th>';
				echo '<td>'.$row['reg_no'].'</td>';
				echo '<td>'.$row['comp_id'].'</td>';
				echo '<td>'.$row['duration'].'</td>';
			    echo '<td>'.$row['stipend'].'</td>';
			    
			    
			    
					 
				
				'</tr>';
			
			 } ?>
			
			</tbody>
			</table>
<?php }else{
			echo "0 Result";
		} 
			
			
			
			?>
	</div>
		</div>
		<a class="btn btn-danger box" href="#"><i class="fas fa-plus fa-2x"></i></a>
		</div>
	</div>
</body>
</html>