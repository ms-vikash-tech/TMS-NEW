
<?php include('_header.php');?>
 <?php include('_top_menu.php');?>
 <?php include('_side_nav.php');?>

 <div class="container-fluid" style="margin-top: 5%; height: 60vh;">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 "style="background: #fff; color:rgb(0,0,51); min-height:70vh;" >
      <div class="row" style="border-bottom: 2px solid rgb(0,0,51);">
        <div class="col-md-3" style="background: #fff; color:rgb(0,0,51); border:0px;">&#x270E; &nbsp;<b style="font-size: 25px;">Edit User</b></div>
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label><?php echo date('d-m-Y');?></label>
        </div>
        <div class="col-md-3">
          <label><?php echo date('H:i:s a');?></label>  
        </div>    
      </div>
  <!--<div class="row">
        <div class="col-md-6  "  style="margin-top: 20px;">
          <div class="row">
            <div class="col-md-12" style="background: #fff;color:rgb(0,0,51);">
              <label>Date of Registration...</label><br/>
              
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
        </div> -->
        <br/>
      <div class="row">
        <div class="col-md-12 table-responsive" style="background:#fff;">
          <table  class="table table-bordered"  id="dataTable" style=" width:100%;  ">
          <thead>
            <tr>
              <th>S.no</th>
              <th>User Id</th>
              <th>Name</th> 
              <th>Email</th>
              <th>Mobile.no</th>
              <th>Edit</th>
            </tr>
          </thead>
            <tbody>
    <?php      $query ="SELECT * FROM `user_details` ";
               $con = mysqli_connect('localhost','root','','task_management');
               $result =  mysqli_query($con,$query);
               $s_no=1;
               while ($row = mysqli_fetch_array($result)) {
           echo'<tr>
                    <td align="center">'.$s_no.'</td>
                    <td>'.$row["user_id"].'</td>
                    <td align="center">'.$row["name"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["mobile_no"].'</td>
                    <td align="center"><a href="#" data-toggle="modal" data-target="#edit" style="color:rgb(0,0,51);">Edit</a></td>
                </tr>';
                $s_no++;} 
    ?>
            </tbody>
          </table><br/>
        </div>
      </div>

    </div>
    
    <div class="col-md-1"></div>
  </div>
 </div>
 <?php include('_footer.php');?> 