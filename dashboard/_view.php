<?php include('_header.php');?>
 <?php include('_top_menu.php');?>
 <?php include('_side_nav.php');?>

 <div class="container-fluid" style="margin-top: 4%; height: 60vh;">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10" style="background: #fff; color:rgb(0,0,51); min-height:70vh; padding-top:10px;" >
     <!--<div class="row">
        <div class="col-md-8 input-group "  style="margin-top: 20px;">
          <label>From</label>&nbsp;
          <input type="date" placeholder="dd/mm/yyyy" class="form-control" style=" border: 1px solid rgb(0,0,51);">
          <label>to</label>&nbsp;
         <input type="date" placeholder="dd/mm/yyyy" class="form-control"  style="border: 1px solid rgb(0,0,51);" >  
               <div class="input-group-append">

                    <button class="btn btn-xs btn-info ">&#x1F50D;</button>
         </div>
          
        </div>
            <div class="input-group col-md-4" style="margin-top: 20px;">
              <input type="text" class="form-control" placeholder="Search Title.." style="border: 1px solid rgb(0,0,51);">
               <div class="input-group-append">
                <button class="btn btn-xs btn-info">&#x1F50D;</button>
              </div>
          </div>
      </div><br/> -->
      <div class="row" style="border-bottom: 2px solid rgb(0,0,51);">
              <div class="col-md-3"> &#x1F4C1; &nbsp;<b style="font-size: 20px;">Add Task </b></div>
              <div class="col-md-4"></div>
              <div class="col-md-2">
                <label><?php echo date('d-m-Y');?></label>
              </div>
              <div class="col-md-3">
                <label><?php echo date('H:i:s a');?></label>  
              </div>    
              </div>
              <br/>
      <div class="row">
        <div class="col-md-12 table-responsive" style="background:#fff;">
          <table class="table table-bordered" id="dataTable" cellspacing="0" cellpadding="0"  width="100%">
            <thead>
            <tr>
              <th>S.no</th>
              <th>Date</th> 
              <th>User ID</th>
              <th>Title</th>
              <th>Description</th>
            </tr>
            </thead>
            <tbody>
<?php
      $query ="SELECT * FROM `worksheet` WHERE `user_id` = '".$_SESSION['username']."'  ORDER BY `date_of_insertion` desc ";
      $con = mysqli_connect('localhost','root','','task_management');
      $result =  mysqli_query($con,$query);
      $s_no=1;
      while ($row = mysqli_fetch_array($result)) {
       echo'<tr>
              <td>'.$s_no.'</td>
              <td>'.$row["date_of_insertion"].'</td>
              <td>'.$row["user_id"].'</td>
              <td>'.$row["title"].'</td>
              <td>'.$row["description"].'</td>
            </tr>'  ;
            $s_no++;
      }     
?>
            </tbody>
          </table>
        </div>
      </div><br/>

    </div>
    <div class="col-md-1"></div>
  </div>
 </div>
 <?php include('_footer.php');?> 