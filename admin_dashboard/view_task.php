
<?php include('_header.php');?>
 <?php include('_top_menu.php');?>
 <?php include('_side_nav.php');?>

 <div class="container-fluid" style="margin-top: 5%;">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 "style="background: #fff; color:rgb(0,0,51); height:88vh; overflow: scroll;" >

       <div class="row" style="border-bottom: 2px solid rgb(0,0,51); vertical-align: middle;">
              <div class="col-md-3" style="background: #fff; color:rgb(0,0,51); border:0px;">&#x1f441; &nbsp;<b style="font-size: 25px;">View Task</b></div>
              <div class="col-md-4"></div>
              <div class="col-md-2">
                <b><?php echo date('d-m-Y');?></b>
              </div>
              <div class="col-md-3">
                <b><?php echo date('H:i:s a');?></b>  
              </div>    
          </div>
<<<<<<< HEAD
<!-- <div class="row">
        <div class="col-md-6  "  style="margin-top: 20px;">
          <div class="row">
            <div class="col-md-12" style="background: #fff;color:rgb(0,0,51);">
              <label>Date....</label><br/>
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 input-group" style="backgroud:#fff;color:rgb(0,0,51);">
              <label>&nbsp;From</label>&nbsp;
                  <input type="date" placeholder="dd/mm/yyyy" class="form-control" style=" border: 1px solid rgb(0,0,51);">
                  <label>&nbsp;to</label>&nbsp;
                 <input type="date" placeholder="dd/mm/yyyy" class="form-control"  style="border: 1px solid rgb(0,0,51);" >  
                       <div class="input-group-append">
                            <button class="btn btn-xs btn-info ">&#x1F50D;</button>
                 </div>
            </div>
          </div>
         </div>
         <div class="col-md-2"></div>
            <div class=" col-md-4" style="margin-top: 20px;">
              <div class="row">
                <div class="col-md-12" style="background:#fff;color:rgb(0,0,51);"><label>Search</label></div>
              </div>
              <div class="row">
               <div class="col-md-12 input-group "> 
                <input type="text" class="form-control" placeholder="Enter Name.." style="border: 1px solid rgb(0,0,51);">
               <div class="input-group-append">
                <button class="btn btn-xs btn-info">&#x1F50D;</button>
              </div>
              </div>
              
          </div>
          </div>
        </div>--><br/>
=======
      <br/>
>>>>>>> afec4f4d998a956de35f4ae1bc2e4bde15f6bda7

      <div class="row" >
        <div class="col-md-12 table-responsive" style="background:#fff; ">
          <?php
          $datequery = "SELECT DISTINCT(`date_of_insertion`) FROM `worksheet` ";
          $con = mysqli_connect('localhost','root','','task_management');
          if($res1 = mysqli_query($con,$datequery)){
          while ($date_res = mysqli_fetch_array($res1)) {
            $date = $date_res["date_of_insertion"];
            echo'<table  class="table table-bordered dataTable"  id="" style=" width:100%;">
                   <label style="font-size:18px;"><u>'.$date.'</u></label>
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>User ID</th>
                        <th>Title</th>
                        <th>Description</th>   
                      </tr>
                    </thead><tbody>';
                   $detail_query = "SELECT * FROM `worksheet` WHERE `date_of_insertion`='".$date."' ";
                   if($res = mysqli_query($con,$detail_query)){
                    $s_no=1;
                   while ($detail_res = mysqli_fetch_array($res)) {
             echo ' 
                      <tr>
                        <td>'.$s_no.'</td>
                        <td>'.$detail_res["user_id"].'</td>
                        <td>'.$detail_res["title"].'</td>
                        <td>'.$detail_res["description"].'</td>
                      </tr>';
                      $s_no++;
                   }   
                  echo '</tbody>
                  </table>';  
                 }echo'<br/><hr/><br/>';
                }
              }
           ?>
          <br/>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
 </div>
 <?php include('_footer.php');?> 