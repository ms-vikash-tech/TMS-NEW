<?php
	session_start();
	if(isset($_SESSION['username'])){
		header('Location: login_view.php');
	}
?>
<html>
   <head>
      <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstrap.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="register.js"></script>
	  <link href="https://fonts.googleapis.com/css?family=Stylish&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
	<style>
	  	label{
	  		font-size: 20px;
	  	}
	    body{	   
	 	background-color:rgb(0, 0, 51);  /* For browsers that do not support gradients */
	 // background-image: linear-gradient(45deg,rgb(128, 128, 255) , rgb(0,0,128)); /* Standard syntax (must be last) */
		}
		p{
		   text-align:justify;
	        color:#37,37,37;
		}
		h1{
		   text-align:center;
		   color:white;
		   font-family: 'Lobster', cursive;
		}
		input{
			text-align:center;
			border-bottom: 1px solid black;
		}
		.p1{
		   text-align:justify;
		}

		#a{
			display:block;
		}
		#b{
			display:none;
		}
		#c{
			display:none;
		}
		#d{
			display:none;
		}
	  h4{ 
	  	text-align: center; 
	    color:rgb(0,0,102); 
	   	font-family: 'Bree Serif', serif;
		margin-top: 5px;
		background-color:#fff;//rgb(0, 0, 102);  /* For browsers that do not support gradients */
		//background-image: linear-gradient(0deg,rgb(128, 128, 255) , rgb(0,0,128)); 
		padding: 7px;
		font-size: 30px;
		position:absolute;
		top:-30px;
		//width: 90%;
		border-radius:10px;
		border:2px solid rgb(0,0,102);
		padding-left: 20px;
		padding-right: 20px; 
	  }
	  #ss{
	  	text-align: right;
	  }
	  #loerm{
	  	 margin-top:20px;
	  	 color:rgb(0,0,51);
	  	 padding:10px;
	  	 font-size: 15px;
	  }  
  	</style>
   </head>
   <body>
    <div class="container-fluid">
	<form method="POST" action="" id="register_form">
	    <div class="row" style="margin-top:50px;">
		   <div class="col-sm-2"></div>
		   <div class="col-md-8">
		      <div class="row" style="margin-top:2%;  ">
			     <div class="col-sm-4" style="background:rgb(0, 0, 51); color:#fff; min-height: 470px; padding:20px; ">
				    <h1>Welcome</h1><br/>
					<div>
						<p style="text-align: center;"><img src="nm.png" style="height:100px ;  background: white; " class="img-circle" ></p>
					</div><br/><br/>
					  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br/><br/><br/>	
				 </div>
				 <div class="col-md-1"></div>
			     <div class="col-sm-7" style="background:white; min-height: 470px; border:2px solid green; border-radius:0px 10px 10px 0">
			     	<div id='a'>
				     	<h4 > Basic Detail</h4>
				     	<br/><br/>
					    <label style="margin-top:10px; margin-bottom:0px;">Name</label><br/> 
					    <input type="text" placeholder=" Enter Your Name.." class="form-control"  required="true" id="name" ><br/>
					    <label style="margin-top:10px; margin-bottom:0px;">Mobile-no</label><br/>
					    <input type="number" placeholder="  Your Mobile-no.." class="form-control" required="true" id="mobileno"><br/>
						<label style="margin-top:10px; margin-bottom:0px;">Email</label><br/>
					    <input type="email" placeholder=" Enter Your Email.." class="form-control" required="true" id="email"><br/>
					    <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="next_1" value="Next"><br/><br/>
						<p id="ss"><a href="login_view.php"><u><b>login</b></u></a></p>
					</div>
					<div id='b'>
						<h4 > Personal Detail </h4><br/><br/>
					    <label style="margin-top:10px; margin-bottom:0px;">Father Name</label><br/> 
					    <input type="text" placeholder="Father name.." class="form-control" required="true" id="fname"><br/>
					    <label style="margin-top:10px; margin-bottom:0px;">DOB</label><br/>
					    <input type="date" placeholder="Date of birth.." class="form-control" required="true" id="dob"><br/>
						<label style="margin-top:10px; margin-bottom:0px;">Aadhar Number</label><br/>
					    <input type="number" placeholder="Aadhar number.." class="form-control" required="true" id="aadhar"><br/>
					    <label style="margin-top:10px; margin-bottom:0px;">Address</label><br/>
				    	<input type="text" placeholder="Enter Your Address.." class="form-control" required="true" id="address" /><br/><br/>
					    <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="previous_1" value="Previous">
					    <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="next_2" value="Next"><br/><br/>
					</div>
					<div id='c'>
						<h4 > Qualification</h4><br/><br/>
					    <label style="margin-top:10px; margin-bottom:0px;">Percent/CGPA</label><br/>  
					    <input type="number" placeholder="Enter Your CGPA" class="form-control" required="true" id="cgpa"><br/>
					    <label style="margin-top:10px; margin-bottom:0px;">School/College</label><br/>
					    <input type="text" placeholder="Enter Your School/College" class="form-control" required="true" id="sch"><br/>
					    <label style="margin-top:10px; margin-bottom:0px;">University/Board</label><br/>
					    <input type="text" placeholder="Enter Your Board/University" class="form-control" required="true" id="board"><br/>
					    <label style="margin-top:10px; margin-bottom:0px;">Intership type</label><br/>
					    <select class="form-control" id="interntype">
					    	<option value="0">--Select--</option>
					    	<option value="1">Type 1</option>
					    	<option value="2">Type 2</option>
					    </select><br/>
					    <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="previous_2" value="Previous">
					    <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="next_3" value="Next">
					</div>
					<div id='d'>
			     	 	<p id="loerm">Lorem ipsum was popularized in the 1960s with Letraset's dry-transfer sheets, and later entered the digital world via Aldus PageMaker.Lorem ipsum was popularized in the 1960s with Letraset's dry-transfer sheets, and later entered the digital world via Aldus PageMaker.</p><br/>
			     	 	<p><input type="checkbox" id="agree" required="true"><a href="#">I agree terms and condition</a></p><br/>
						<br/><br/>
					    <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="previous_3" value="Previous">
			     		<input type="submit" id="register" name="register" value="Register" class="btn" style="background: rgb(0, 77, 0); color:#fff;"/>
					</div>
				 </div>
			  </div> 
		   </div>
		   <div class="col-sm-2"></div>
		</div>
	</form>
	
	 </div>
	 <script type="text/javascript">
	 	$('#next_1').click(function(){
	 		$('#a').css('display','none');
	 		$('#b').css('display','block');	 		
	 	});
	 	$('#next_2').click(function(){
	 		$('#a').css('display','none');
	 		$('#b').css('display','none');
	 		$('#c').css('display','block');
	 	});
	 	$('#previous_1').click(function(){
	 		$('#b').css('display','none');
	 		$('#a').css('display','block');	 		
	 	});
	 	$('#next_3').click(function(){
	 		$('#c').css('display','none');
	 		$('#d').css('display','block');
	 	});	 	
	 	$('#previous_2').click(function(){
	 		$('#c').css('display','none');
	 		$('#b').css('display','block');	 		
	 	});	 	
	 	$('#previous_3').click(function(){
	 		$('#c').css('display','block');
	 		$('#d').css('display','none');
	 	});	 	
	 </script>
	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </body>
</html>