<?php include('_header.php');?>
 <?php include('_top_menu.php');?>
 <?php include('_side_nav.php');?>


	<div class="container-fluid" >
        <div class="row" style="margin-top: 5%; height: 60vh;">
        	<div class="col-md-2"></div>
        	<div class="col-md-8 container" style="background:white ; color:rgb(0,0,51);">
        		<div class="row" style="border-bottom: 2px solid rgb(0,0,51);">
        			<div class="col-md-3"><h4> &#x270E; &nbsp;<b>Edit Task</b></h4></div>
        			<div class="col-md-4"></div>
        			<div class="col-md-2">
        				<label><?php echo date('d-m-Y');?></label>
        			</div>
        			<div class="col-md-3">
        				<label><?php echo date('H:i:s a');?></label>	
        			</div>		
        	</div><br/><br/>
        	<div class="row">
        		    <div class="col-md-2"></div>
        		    <div class="col-md-8" >
        			<lable> Work Title</lable><br/>
        				<input type="text" placeholder="Enter work Title" class="form-control"/> 
        			</div>
        			<div class="col-md-2">	
        			</div>		
        	</div>
        	<br/><br/>

        	<div class="row">
        			<div class="col-md-2"></div>
        			<div class="col-md-8" ><label>Description</label>
        			<br/>
        			<textarea class="form-control" placeholder="Enter Work Description"></textarea>	
        			</div><br/>	
        			<div class="col-md-2 ">
        				
        			</div>	
        	</div><br/>

        	<div class="row">
        			<div class="col-md-8"></div>
        			<br/>	
        			<div class="col-md-3 btn-group">
        				<button class="btn" style="color:rgb(0,0,51);; border:1px solid rgb(0,0,51);">Reset</button>&nbsp;
        				<button class="btn " style="color:rgb(0,0,51);; border:1px solid rgb(0,0,51);">Update</button>
        			</div>	
        			<div class="col-md-1"></div>
        	</div>
        	<br/>
        	
        </div>
        	<div class="col-md-2"></div>
      </div>

  </div>



 

   
  
 <?php include('_footer.php');?>