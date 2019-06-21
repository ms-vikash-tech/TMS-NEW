</div>
</div>
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
    <div class="modal-dialog">

        <div class="modal-content" style="background: #fff; color:rgb(0,0,51);">
            <div class="modal-body">
                <p>
                    <br/>
                    <b> Do you really want to Log-out?</b> </p>
                <br/>
                <p style="float: left;">
                    <button class="btn btn-md" style="border:1px solid rgb(0,0,51); color:rgb(0,0,51);">Yes</button>
                </p>
                <p style="float: right;">
                    <button class="btn btn-md" style="border:1px solid rgb(0,0,51); color:rgb(0,0,51);" data-dismiss="modal">No</button>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="color:rgb(0,0,51);">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="more" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" style="background: #fff; color:rgb(0,0,51);">
            <div class="modal-body">

                <div class="container col-md-12" style="background: #fff; color:rgb(0,0,51);"> 
                    <div class="row" style="border-bottom: 2px solid rgb(0,0,51);">
                        <div class="col-md-3"> &#x270E; &nbsp;<b>View User</b></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            <label >
                                <?php echo date('d-m-Y');?>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <?php echo date('H:i:s a');?>
                            </label>
                        </div>
                    </div>      
                    <div id="view_profile"></div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-1"></div>  
                        <div class="col-md-5 card" >
                            <h3 class="card-header">Personal Detail...</h3>
                            <p class="list-group list-group-item">
                            <label><b>Father Name:</b></label>
                            <label>Uday Kumar Singh</label></p>
                            
                            <p class="list-group list-group-item">
                            <label ><b>DOB:</b></label>
                            <label >03/12/1996</label>
                            
                            <p class="list-group list-group-item">
                            <label ><b>Address:</b></label>
                            <label >Goshala Road, Sonaili, Katihar
                                    dis:katihar, pot:sonaili
                                Goshala Road, Sonaili, Katihar
                                    </label>
                            <p class="list-group list-group-item">
                            <label><b>Aadhar.No:</b></label>
                            <label>12345678925671</label>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4 card" >
                            <h3 class="card-header">Educational Detail...</h3>
                            <p class="list-group list-group-item">
                            <label><b>Highest Qualification:</b></label>
                            <label>Graduate</label></p>
                            <br/>
                            <p class="list-group list-group-item">
                            <label><b>CGPA/Percent:</b></label>
                            <label>75%</label></p>
                            <br/>
                            <p class="list-group list-group-item">
                            <label><b>School/College:</b></label>
                            <label>CIMAGE College, boring riad, Patna</label>
                            <br/></p>
                            <p class="list-group list-group-item" >
                            <label><b>University/Board:</b></label>
                            <label>Magadh University</label></p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>     
                 </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="color:rgb(0,0,51);">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="changepassword" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content" style="background: #fff; color:rgb(0,0,51);">
            <div class="modal-body">
                <label>Current password</label>
                <br/>
                <input type="password" placeholder="Current password" class="form-control">
                <br/>
                <label>New password</label>
                <input type="password" placeholder="New password" class="form-control">
                <br/>
                <label>Confirm password</label>
                <input type="password" placeholder="Confirm password" class="form-control">
                <br/>

                <p style="float: right;">
                    <button class="btn btn-md" style="border:1px solid rgb(0,0,51); color:rgb(0,0,51);">Change Password</button>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="color:rgb(0,0,51);">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background: #fff; color:rgb(0,0,51);">
            <div class="modal-body">
                <?php include('add_user_commn.php');?>
            </div>

            <div class="modal-footer" style="margin-top: 10px;">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="color:rgb(0,0,51);">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edittask" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" style="background: #fff; color:rgb(0,0,51);">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row" style="margin-top: 0%; height: 70vh;">

                        <form class="col-md-12 container" style="background:white ; color:rgb(0,0,51);">
                            <div class="row" style="border-bottom: 2px solid rgb(0,0,51);">
                                <div class="col-md-3"> &#x270E; &nbsp;<b>Edit Task</b></div>
                                <div class="col-md-4"></div>
                                <div class="col-md-2">
                                    <label >
                                        <?php echo date('d-m-Y');?>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label>
                                        <?php echo date('H:i:s a');?>
                                    </label>
                                </div>
                            </div>
                            <div id="user_profile"></div>
                            
                            <br/>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <lable> Work Title</lable>
                                    <br/>
                                    <input type="text" placeholder="Enter work Title" class="form-control"  id="title"/>
                                </div>
                                <div class="col-md-2"></div>
                            </div><br/>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <label>Description</label>
                                    <br/>
                                    <textarea class="form-control" placeholder="Enter Work Description" id="details"></textarea>
                                </div>
                                <br/>
                                <div class="col-md-2 "></div>
                            </div><br/><br/>
                            <div class="row">
                                <div class="col-md-8"></div>
                                <br/>
                                <div class="col-md-3 btn-group">
                                    <input type="hidden" id="sno" name="">
                                    <input type="reset" class="btn" style="color:rgb(0,0,51);; border:1px solid rgb(0,0,51);">&nbsp;
                                    <input type="submit" class="btn" id="ad_workupdate" style="color:rgb(0,0,51);; border:1px solid rgb(0,0,51);" value="Update" >
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <br/>

                        </form>

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
    $('#pageOneNextButton').click(function() {
        $('#a').css('display', 'none');
        $('#b').css('display', 'block');

    });

    $('#TwoNext1Button').click(function() {
        $('#a').css('display', 'none');
        $('#b').css('display', 'none');
        $('#c').css('display', 'block');
    });
    $('#TwoNext2Button').click(function() {
        $('#b').css('display', 'none');
        $('#a').css('display', 'block');

    });
    $('#btn3').click(function() {
        $('#c').css('display', 'none');
        $('#b').css('display', 'block');

    });

    $('#Next').click(function() {
        $('#c').css('display', 'none');
        $('#d').css('display', 'block');

    });

    $('#btn4').click(function() {
        $('#c').css('display', 'block');
        $('#d').css('display', 'none');

    });
</script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="vendor/datatables/datatables-demo.js"></script>
<script src="custom.js"></script>
<script src="register.js"></script>
<script src="vendor/jquery/sweetalert2.js"></script>

</body>

</html>