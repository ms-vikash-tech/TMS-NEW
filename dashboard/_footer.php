
      
    </div>
    </div>
   
  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog"> 
      <div class="modal-content" style="background:#fff; color:rgb(0,0,51);">
      	<div class="modal-body">
         <p><br/>
           <b> Do you really want to Log-out?</b> </p><br/>
           <p style="float: left;">	
      		<a href="logout.php" class="btn btn-md" style="border:1px solid rgb(0,0,51); color:rgb(0,0,51);" >Yes</a></p>
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
  <div class="modal fade" id="changepassword" role="dialog">
    <div class="modal-dialog" >
      <div class="modal-content" style="background:#fff; color:rgb(0,0,51);">
      	<div class="modal-body">
      	  <label>Current password</label><br/>
          <input type="password" placeholder="Current password" class="form-control"><br/>
          <label>New password</label>
          <input type="password" placeholder="New password" class="form-control"><br/>
          <label>Confirm password</label>
          <input type="password" placeholder="Confirm password" class="form-control"><br/>		  
		      <p style="float: right;">	
      		<button  class="btn btn-md" style="border:1px solid rgb(0,0,51); color:rgb(0,0,51);">Change Password</button></p>
      	</div>        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="color:rgb(0,0,51);">Close</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/sweetalert2.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="worksheet.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/datatables-demo.js"></script>
  <script src="js/clock.js"></script>
 
</body>

</html>