<?php include('_header.php');?>
<?php include('_top_menu.php');?>
<?php include('_side_nav.php');?>
<?php 
    $date = date("Y-m-d");
    $query ="SELECT * FROM `worksheet` WHERE `date_of_insertion` = '".$date."' AND `user_id` = '".$_SESSION['username']."'  ";
    $con = mysqli_connect('localhost','root','','task_management');
    $result =  mysqli_query($con,$query);
    while ($row = mysqli_fetch_array($result)) {
    $s_no = $row["s_no"];
	echo '<div class="container-fluid">
        <div class="row" style="margin-top: 5%; height: 60vh;">
        	<div class="col-md-2"></div>
        	<form class="col-md-8 container" style="background:white ; color:rgb(0,0,51); padding-top:10px;">
                <div class="row" style="border-bottom: 2px solid rgb(0,0,51);;">
                    <div class="col-md-3"><h4> &#x270E; &nbsp;<b>Edit Task</b></h4></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                        <label>'.date("d-m-Y").'</label>
                    </div>
                    <div class="col-md-3">
                        <label>'.date("H:i:s a").'</label>    
                    </div>      
                </div><br/><br/>
                <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" >
                            <lable> Work Title</lable><br/>
                            <input type="text" id="update_title" placeholder="Enter work Title" class="form-control" value="'.$row["title"].'"/> 
                            <input type="hidden" id="s_no" value="'.$s_no.'" name="s_no"/> 
                        </div>
                        <div class="col-md-2">  
                        </div>      
                </div><br/>
                <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" >
                            <label>Description</label><br/>
                            <textarea id="update_details" class="form-control" placeholder="Enter Work Description">'.$row["description"].'</textarea> 
                        </div><br/> 
                        <div class="col-md-2"></div>    
                </div><br/>
                <div class="row">
                    <div class="col-md-8"></div><br/>
                    <div class="col-md-3 btn-group">
                        <input type="reset"  class="btn" style="color:rgb(0,0,51);; border:1px solid rgb(0,0,51);" value="Reset" name="">&nbsp;
                        <input type="submit" class="btn" style="color:rgb(0,0,51);; border:1px solid rgb(0,0,51);" value="Submit" id="updatework" name="updatework">
                    </div>  
                    <div class="col-md-1"></div>
                </div><br/>
            </form>
        	<div class="col-md-2"></div>
      </div>

  </div>';
}
  ?>
 <?php include('_footer.php');?>