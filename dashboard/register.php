<?php
if(isset($_POST['submit']) && $_POST['submit']=='submit'){
	$name = $_POST['namekey'];
	$fname = $_POST['fnameKey'];
	$email= $_POST['emailkey'];
	$dob = $_POST['dobkey'];
	$aadhar = $_POST['aadharkey'];
	$mobileno = $_POST['mobilenokey'];
	$cgpa = $_POST['cgpakey'];
	$sch = $_POST['schkey'];
	$board = $_POST['boardkey'];
	$interntype = $_POST['interntypekey'];
	$DOB = date("Y-m-d",strtotime($dob));

	$query="INSERT INTO `user_details`(`email`, `name`, `father_name`, `dob`, `percentage_cgpa`, `college_school`, `university_board`, `aadhar`, `mobile_no`, `internship_type`, `status`) VALUES ('".$email."', '".$name."', '".$fname."', '".$DOB."', '".$cgpa."', '".$sch."', '".$board."', '".$aadhar."', '".$mobileno."', '".$interntype."','1')";
	$con = mysqli_connect('localhost', 'root', '', 'task_management');
	$result = mysqli_query($con, $query);
	if($result) {
		echo "You Registered Successfully";
	}
	else {
		echo mysqli_error($con);
	}
}
if(isset($_POST['email']) && $_POST['required'] =='emailValidation'){
	$email = $_POST['email'];
	$query="SELECT * FROM `user_details` WHERE `email` ='".$email."'";
	//echo $query;
	$con = mysqli_connect('localhost', 'root', '', 'task_management');
	$result = mysqli_query($con, $query);	
	if(mysqli_num_rows($result) > 0){
		echo "already";
	}
	else{
		echo "true";

	}
}
?>