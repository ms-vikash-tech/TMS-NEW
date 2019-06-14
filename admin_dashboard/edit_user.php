
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
      <div class="row">
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
        </div><br/>

      <div class="row">
        <div class="col-md-12 table-responsive" style="background:#fff;">
          <table  class="table table-bordered"  id="dataTable" style=" width:100%;  ">
          <thead>
            <tr>
              <th>S.no</th>
              <th>Name</th> 
              <th>Date of Registration</th>
              <th>User Id</th>
               <th>Mobile.no</th>
                <th>Email</th>
                 <th><a href="#" data-toggle="modal" data-target="#more" style="color:#fff;">Edit</a></th>
            </tr></thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Today</td>
              <td>Task management System</td>
              <td><p>Lorem ipsum is .</p></td>
              <td> print, and publishing  </td>
              <td>the graphic,layouts </td>
              <td><a href="#" data-toggle="modal" data-target="#edit" style="color:rgb(0,0,51);">Edit</a>  </td>
            </tr>

            <tr>
              <td>1</td>
              <td>Today</td>
              <td>Task management System</td>
              <td><p>Lorem ipsum is placeholder text commonly used </p></td>
              <td> print, and publishing industries for previewing </td>
              <td>the graphic,layouts and visual mockups</td>
              <td><a href="#" data-toggle="modal" data-target="#edit" style="color:rgb(0,0,51);">Edit</a></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Today</td>
              <td>Task management System</td>
              <td><p>Lorem ipsum is placeholder text commonly used in</p></td>
              <td> print, and publishing  </td>
              <td>the graphic,layouts </td>
              <td><a href="#" data-toggle="modal" data-target="#edit" style="color:rgb(0,0,51);">Edit</a> </td>

            </tr></tbody>
            
          </table>
        </div>
      </div>

    </div>
    
    <div class="col-md-1"></div>
  </div>
 </div>
 <?php include('_footer.php');?> 