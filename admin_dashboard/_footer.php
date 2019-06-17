
    
    </div></div>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" >
    
     
      <div class="modal-content" style="background: #fff; color:rgb(0,0,51);">
      	<div class="modal-body">
         <p><br/>
           <b> Do you really want to Log-out?</b> </p><br/>
           <p style="float: left;">	
      		<button  class="btn btn-md" style="border:1px solid rgb(0,0,51); color:rgb(0,0,51);" >Yes</button></p>
      		<p style="float: right;">		
     		 <button  class="btn btn-md" style="border:1px solid rgb(0,0,51); color:rgb(0,0,51);" data-dismiss="modal" >No</button>
   		 </p>	 
		  </div>       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="color:rgb(0,0,51);">Close</button>
        </div>
      </div>
     </div>
     </div>
     <div class="modal fade" id="more" role="dialog" >
    <div class="modal-dialog modal-xl" >
      <div class="modal-content" style="background: #fff; color:rgb(0,0,51);">
      	<div class="modal-body">
      	  
            <?php include('profile_details_common.php');?></div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="color:rgb(0,0,51);">Close</button>
        </div>
      </div>
     </div>
     </div>

       


   <div class="modal fade" id="changepassword" role="dialog">
    <div class="modal-dialog "  >
      <div class="modal-content" style="background: #fff; color:rgb(0,0,51);">
        <div class="modal-body">
          <label>Current password</label><br/>
          <input type="password" placeholder="Current password" class="form-control"><br/>
          <label>New password</label>
          <input type="password" placeholder="New password" class="form-control"><br/>
          <label>Confirm password</label>
          <input type="password" placeholder="Confirm password" class="form-control"><br/>
      
      <p style="float: right;"> 
          <button  class="btn btn-md" style="border:1px solid rgb(0,0,51); color:rgb(0,0,51);" >Change Password</button></p>
          </div>       
           <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="color:rgb(0,0,51);">Close</button>
        </div>
      </div>
     </div>
     </div>

     <div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog modal-lg" >
    
     
      <div class="modal-content" style="background: #fff; color:rgb(0,0,51);">
        <div class="modal-body">
         <?php include('add_user_commn.php');?>  
      </div>

        <div class="modal-footer" style="margin-top: 60px;">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="color:rgb(0,0,51);">Close</button>
        </div>
      </div>
     </div>
     </div>

      <div class="modal fade" id="edittask" role="dialog">
    <div class="modal-dialog modal-xl" >
    
     
      <div class="modal-content" style="background: #fff; color:rgb(0,0,51);">
        <div class="modal-body">
         <div class="container-fluid" >
        <div class="row" style="margin-top: 5%; height: 80vh;">
          
          <div class="col-md-12 container" style="background:white ; color:rgb(0,0,51);">
            <div class="row" style="border-bottom: 2px solid rgb(0,0,51);">
              <div class="col-md-3"> &#x270E; &nbsp;<b>Edit Task</b></div>
              <div class="col-md-4"></div>
              <div class="col-md-2">
                <label><?php echo date('d-m-Y');?></label>
              </div>
              <div class="col-md-3">
                <label><?php echo date('H:i:s a');?></label>  
              </div>    
          </div><br/>
          <div class="row jumbotron"  style="padding: 10px; border-bottom: 2px solid rgb(0,0,51);">
        
       <div class="col-md-2" >
        <img src="picture.png" style="height: 85px; border-radius: 600px; border:1px solid rgb(0,0,51);">
       </div>
       <div class="col-md-2">
        <label><b>Name:</b></label>
        <label>Saurabh kumar</label>
        <label><b>Registration Date:</b></label>
        <label>13/06/19</label>
       </div>
       <div class="col-md-2">
        <label><b>User Id:</b></label>
        <label>123456</label>
        <label><b>Ref.No:</b></label>
        <label>684032</label>
       </div>
       <div class="col-md-2">
        <label><b>Email:</b></label>
        <label>thepostmaster7@gmail.com</label>
       </div>
       <div class="col-md-2"></div>
       <div class="col-md-2">
        <label><b>Moblie.No:</b></label>
        <label>+918210652266</label>
       </div>
       
    </div><br/>
          <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" >
              <lable> Work Title</lable><br/>
                <input type="text" placeholder="Enter work Title" class="form-control"/> 
              </div>
              <div class="col-md-2">  
              </div>    
          </div>
          <br/>

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
          
      </div>

  </div> 
      </div>       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="color:rgb(0,0,51);">Close</button>
        </div>
      </div>
     </div>
     </div>
      <script type="text/javascript">
    $('#pageOneNextButton').click(function(){
      $('#a').css('display','none');
      $('#b').css('display','block');
      
    });

    $('#TwoNext1Button').click(function(){
      $('#a').css('display','none');
      $('#b').css('display','none');
      $('#c').css('display','block');
    });
    $('#TwoNext2Button').click(function(){
      $('#b').css('display','none');
      $('#a').css('display','block');
      
    });
    $('#btn3').click(function(){
      $('#c').css('display','none');
      $('#b').css('display','block');
      
    });
    
    $('#Next').click(function(){
      $('#c').css('display','none');
      $('#d').css('display','block');
      
    });
    
    $('#btn4').click(function(){
      $('#c').css('display','block');
      $('#d').css('display','none');
      
    });
    
   </script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="vendor/datatables/datatables-demo.js"></script>
 
</body>

</html>