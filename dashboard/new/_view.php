<?php include('_header.php');?>
 <?php include('_top_menu.php');?>
 <?php include('_side_nav.php');?>

 <div class="container-fluid" style="margin-top: 5%; height: 60vh;">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 "style="background: #fff; color:rgb(0,0,51); min-height:70vh;" >
      <div class="row">
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

      </div><br/>
      <div class="row">
        <div class="col-md-12 table-responsive" style="background:#fff;">
          <table style=" width:100%;  ">
            <tr>
              <th>S.no</th>
              <th>Date</th> 
              <th>Title</th>
              <th>Description</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Today</td>
              <td>Task management System</td>
              <td><p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p></td>
            </tr>

            <tr>
              <td>1</td>
              <td>Today</td>
              <td>Task management System</td>
              <td><p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Today</td>
              <td>Task management System</td>
              <td><p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p></td>
            </tr>
            
          </table>
        </div>
      </div>

    </div>
    <div class="col-md-1"></div>
  </div>
 </div>
 <?php include('_footer.php');?> 