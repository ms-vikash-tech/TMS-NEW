<?php
function profile($user_id){
        $query = "SELECT * FROM `user_details` WHERE `email`= '".$user_id."' ";
        $con = mysqli_connect('localhost','root','','task_management');
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);
        echo '<div class="row " style="padding: 10px; border-bottom: 2px solid rgb(0,0,51);">
                <div class="col-sm-3" align="center">
                    <img src="Picture.png" style="height: 85px; border-radius: 600px; border:1px solid rgb(0,0,51);">
                </div>
                <div class="col-sm-3">
                    <label><b>Name:</b></label>
                    <label>'.$row['name'].'</label><br/>
                    <label><b>User Id:</b></label>
                    <label>'.$row['user_id'].'</label>
                </div>
                <div class="col-sm-3">
                    <label><b>Email:</b></label>
                    <label>'.$row['email'].'</label><br/>
                    <label><b>Moblie.No:</b></label>
                    <label>'.$row['mobile_no'].'</label>
                </div>
                <div class="col-sm-3">
                    <label><b>Registration Date:</b></label>
                    <label>'.$row['registration_date'].'</label><br/>
                    <label><b>Ref.No:</b></label>
                    <label>684032</label>
                </div>
             </div>';
    }
if(isset($_POST['user']) && $_POST['user'] == 'details'){
    $id = $_POST['id'];
    profile($id);
}
 
if(isset($_POST['key']) && $_POST['key'] == 'updatework' ){
    $title = $_POST['titlekey']; 
    $details = $_POST['detailskey']; 
    $s_no = $_POST['s_nokey']; 
   // $query = "INSERT INTO `worksheet`(`s_no`,`user_id`, `date_of_insertion`, `title`, `description`) VALUES ('".$s_no."','".$_SESSION['username']."','".$date."', '".$title."', '".$details."') 
   // ON DUPLICATE KEY UPDATE  
   //  `title`= '".$title."' ,
   //  `description` = '".$details."'  "; 
    $query = "UPDATE `worksheet` SET `title`= '".$title."',`description`= '".$details."' WHERE `s_no` = '".$s_no."' ";
    $con = mysqli_connect('localhost','root','','task_management');

    //$query = "INSERT INTO `worksheet`(`s_no`, `user_id`, `date_of_insertion`, `title`, `description`) VALUES ('".$_SESSION['username']."','".$date."', '".$title."', '".$details."')"

    $result =  mysqli_query($con,$query);
    if ($result) {
        echo "your Worksheet is Saved Successfully";
    }
    else echo "Error";
}
?>