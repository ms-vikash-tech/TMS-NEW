<?php include('_header.php');?>
    <?php include('_top_menu.php');?>
        <?php include('_side_nav.php');?>
            <div class="container-fluid">
                <form class="row" method="POST" id="register_form" style="margin-top: 5%; height: 60vh;">
                    <div class="col-md-2"></div>
                    <div class="col-sm-8" style="background:white; min-height: 470px; border:2px solid green; border-radius:0px 10px 10px 0">
                        <div id='a'>
                            <h4> Basic Detail</h4>
                            <br/>
                            <br/>
                            <label style="margin-top:10px; margin-bottom:0px;">Name</label>
                            <br/>
                            <input type="text" placeholder=" Enter Your Name.." class="form-control" required="true" id="name">
                            <br/>
                            <label style="margin-top:10px; margin-bottom:0px;">Mobile-no</label>
                            <br/>
                            <input type="number" placeholder="  Your Mobile-no.." class="form-control" required="true" id="mobileno">
                            <br/>
                            <label style="margin-top:10px; margin-bottom:0px;">Email</label>
                            <br/>
                            <input type="email" placeholder=" Enter Your Email.." class="form-control" required="true" id="email">
                            <br/>
                            <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="pageOneNextButton" value="Next">
                            <br/>
                            <br/>
                        </div>

                        <div id='b'>
                            <h4> Personal Detail </h4>
                            <br/>
                            <br/>
                            <label style="margin-top:10px; margin-bottom:0px;">Father Name</label>
                            <br/>

                            <input type="text" placeholder="father name.." class="form-control" required="true" id="fname">
                            <br/>
                            <label style="margin-top:10px; margin-bottom:0px;">DOB</label>
                            <br/>
                            <input type="date" placeholder="date of birth.." class="form-control" required="true" id="dob">
                            <br/>

                            <label style="margin-top:10px; margin-bottom:0px;">Aadhar Number</label>
                            <br/>
                            <input type="number" placeholder="aadhar number.." class="form-control" required="true" id="aadhar" />
                            <br/>

                            <label style="margin-top:10px; margin-bottom:0px;">Address</label>
                            <br/>
                            <input type="text" placeholder="Enter Your Address.." class="form-control" required="true" id="address" />
                            <br/>
                            <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="TwoNext2Button" value="Previous">
                            <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="TwoNext1Button" value="Next">
                            <br/>
                            <br/>
                        </div>

                        <div id='c'>
                            <h4>Educational Details</h4>
                            <br/>
                            <br/>
                            <label style="margin-top:10px; margin-bottom:0px;">Highest Qualification </label>
                            <br/>
                            <input type="text" placeholder="Enter Your Highest Qualification" class="form-control" required="true" id="quali">
                            <br/>
                            <label style="margin-top:10px; margin-bottom:0px;">Percent/CGPA</label>
                            <br/>
                            <input type="number" placeholder="Enter Your CGPA/Percent" class="form-control" required="true" id="cgpa">
                            <br/>
                            <label style="margin-top:10px; margin-bottom:0px;">School/College</label>
                            <br/>
                            <input type="text" placeholder="Enter Your School/College" class="form-control" required="true" id="sch">
                            <br/>
                            <label style="margin-top:10px; margin-bottom:0px;">University/Board</label>
                            <br/>
                            <input type="text" placeholder="Enter Your Board/University" class="form-control" required="true" id="board">
                            <br/>
                            <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="btn3" value="Previous">
                            <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="Next" value="Next">
                            <br/>
                        </div>

                        <div id='d'>
                            <p id="loerm">Lorem ipsum was popularized in the 1960s with Letraset's dry-transfer sheets, and later entered the digital world via Aldus PageMaker. Lorem ipsum was popularized in the 1960s with Letraset's dry-transfer sheets, and later entered the digital world via Aldus PageMaker.</p><br/>

                            <label style="margin-top:10px; margin-bottom:0px;">Intership type</label>
                            <br/>
                            <select class="form-control" id="interntype">
                                <option value="0">--Select--</option>
                                <option value="1">Type 1</option>
                                <option value="2">Type 2</option>
                            </select>
                            <br/>

                            <input type="file" name="myfile" id="file">
                            <br/>
                            <br/>
                            <p>
                                <input type="checkbox"><a href="#">&nbsp;I agree terms and condition</a></p>
                            <br/>
                            <br/>
                            <br/>
                            <input type="button" class="btn btn-primary" style="background:rgb(0, 0,51); color:#fff;" id="btn4" value="Previous">
                            <input type="submit" id="register" name="register" value="Register" class="btn" style="background: rgb(0, 77, 0); color:#fff;" />
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </form>
            </div>
            <?php include('_footer.php');?>