
<?php include('_header.php');?>
 <?php include('_top_menu.php');?>
 <?php include('_side_nav.php');?>

 <div class="container-fluid" style="margin-top: 5%; height: 60vh;">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 "style="background: #fff; color:rgb(0,0,51); min-height:70vh;" >

       <div class="row" style="border-bottom: 2px solid rgb(0,0,51);">
              <div class="col-md-3" style="background: #fff; color:rgb(0,0,51); border:0px;">&#x270E; &nbsp;<b style="font-size: 25px;">Edit Task</b></div>
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
        </div><br/>

      <div class="row">
        <div class="col-md-12 table-responsive" style="background:#fff; ">
          <table style=" width:100%;  ">
            <tr>
              <th>S.no</th>
              <th>Date</th> 
              <th>Name</th>
              <th>Title</th>
               <th>Description</th>
                 <th>Edit</th>
            </tr>
            <tr>
              <td>1</td>
              <td>13/06/19</td>
              <td>Nidhi</td>
              <td>Task Management</td>
                  <td><p>Lorem ipsum is .
                   print, and publishing 
                  the graphic,layouts 
                 the graphic,layouts  s</p></td>
                 <td><a href="#" data-toggle="modal" data-target="#edittask" style="color:rgb(0,0,51);">Edit</a></td>
            </tr>

            <tr>
               <td>2</td>
              <td>14/06/19</td>
              <td>Nidhi</td>
              <td>Task Management</td>
                  <td><p>Lorem ipsum is .
                   print, and publishing 
                  the graphic,layouts 
                 the graphic,layouts  s</p></td>
                 <td><a href="#" data-toggle="modal" data-target="#edittask" style="color:rgb(0,0,51);">Edit</a></td>
            </tr>
            <tr>
               <td>3</td>
              <td>15/06/19</td>
              <td>Nidhi</td>
              <td>Task Management</td>
                  <td><p>Lorem ipsum is .
                   print, and publishing 
                  the graphic,layouts 
                 the graphic,layouts  s</p></td>
                 <td><a href="#" data-toggle="modal" data-target="#edittask" style="color:rgb(0,0,51);">Edit</a></td>

            </tr>
            
          </table>
        </div>
      </div>

    </div>
    
    <div class="col-md-1"></div>
  </div>
 </div>
 <?php include('_footer.php');?> 