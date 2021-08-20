<?php
$comp_id=$_POST['comp_id'];
$name =$_POST['name'];
$address =$_POST['address'];
$contact_no = $_POST['contact_no'];
$email_id = $_POST['email_id'];
$month_of_visiting = $_POST['month_of_visiting'];
$age_criteria = $_POST['age_criteria'];
$cgpa_criteria = $_POST['cgpa_criteria'];

if(!empty($comp_id) || !empty($name) || !empty($address)|| !empty($contact_no)|| !empty($email_id)|| !empty($month_of_visiting)|| !empty($age_criteria)|| !empty($cgpa_criteria)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "demo";
	
	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
	
	if(mysqli_connect_error()){
		die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
		
	}
	else{
		$INSERT="insert into company(comp_id,name,address,contact_no,email_id,month_of_visiting,age_criteria,cgpa_criteria) values ('$comp_id','$name','$address','$contact_no','$email_id','$month_of_visiting','$age_criteria','$cgpa_criteria')";
		if ($conn->query($INSERT)){
			echo "new record is inserted succesfully";
		}
		else{
			echo "Error: ".$INSERT . "<br>". $conn->error;
		}
		$conn->close();
	}
}
else{
	echo "all fields are required";
	die();
}

?>