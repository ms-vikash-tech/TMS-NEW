<?php
	session_start();
	if(isset($_SESSION['username'])){
		header('Location: index_view.php');
	}

	if(isset($_POST['submit'])){
		$userName = $_POST['username'];
		$password = $_POST['password'];
		if(!empty($userName)){
			$con = mysqli_connect('localhost', 'root', '', 'task_management');
			$query = "SELECT * FROM `user_details` WHERE `email` = '".$userName."' AND `password` = '".$password."'";
			$result = mysqli_query($con, $query);
			if (mysqli_num_rows($result)==1) {
				echo"Data is correct";
				$_SESSION['username'] = $userName;
				header('Location: index_view.php');
			}
			else
			{
				echo("<script>
					setInterval(function({
						alert('Invalid ID');
						},2000));
					</script>");
				header('Location:login_view.php');
			}
		}
		else{
			echo("Invalid ID");
				header('Location:login_view.php');
		}
	}
?>