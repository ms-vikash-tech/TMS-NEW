<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: login_view.php');
	}
	date_default_timezone_set('Asia/Kolkata');
	require('learning.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title><?php echo TOOLNAME.' - ';
			echo rtrim( str_replace('_', '&ensp;', basename($_SERVER['REQUEST_URI'])),'.php');
		?> </title>
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
		<!-- Custom styles for this template -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Stylish&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/simple-sidebar.css" rel="stylesheet">
		<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
		  <style type="text/css">
        table tr td{
          height: 2px;
        }
      </style>
	</head>
	<body>