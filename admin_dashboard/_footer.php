
    
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
     <div class="modal fade" id="changepassword" role="dialog">
    <div class="modal-dialog" >
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
      		</div>        <div class="modal-footer">
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


</body>

</html>