<?php
	session_start();
	if(isset($_SESSION['username'])){
	
	$title = $_POST['titlekey']; 
	$details = $_POST['detailskey']; 
	$s_no = $_POST['s_nokey']; 
	$date = date("Y-m-d");

	$query = "INSERT INTO `worksheet`(`s_no`,`user_id`, `date_of_insertion`, `title`, `description`) VALUES ('".$s_no."','".$_SESSION['username']."','".$date."', '".$title."', '".$details."') 
	ON DUPLICATE KEY UPDATE  
	 `title`= '".$title."' ,
	 `description` = '".$details."'  ";
	$con = mysqli_connect('localhost','root','','task_management');

	//$query = "INSERT INTO `worksheet`(`s_no`, `user_id`, `date_of_insertion`, `title`, `description`) VALUES ('".$_SESSION['username']."','".$date."', '".$title."', '".$details."')"

	$result =  mysqli_query($con,$query);
	if ($result) {
		echo "your Worksheet is Saved Successfully";
	}
}
 ?>