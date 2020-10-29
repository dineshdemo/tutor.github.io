<?php
include 'dbconnection.php';
session_start();
if(isset($_SESSION['adminlog_in'])){
    $lemail=$_SESSION['aemail'];
    $lpassword=$_SESSION['apassword'];
    
    
}
else{
     echo "<script>location.href='adminlogin.php'</script>";
}

if(isset($_REQUEST['update'])){
    if(($_REQUEST['password']=="")||($_REQUEST['cpassword']=="")){
        $msg = '<div class="msg" style="color:red; "><b>Please Fill Required fields</b></div>';
    }
    elseif($_REQUEST['password']!= $lpassword){
        $msg = '<div class="msg" style="color:red; "><b>please enter valid last password</b></div>';
        
    }
    else{
        $newpass=$_REQUEST['cpassword'];
        $sql="UPDATE admin_login SET a_password ='$newpass' WHERE a_email='$lemail'";
        $result=mysqli_query($conn,$sql);
        $msg = '<div class="msg" style="color:green; "><b>Your Password Updated Successfull</b></div>';

    }
    
}




?>





<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tutor</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src='main.js'></script>
</head>
<body>
    <?php include 'adminnavbar.php';?>


    <div class="maincontainer">
    <form method="POST">
  <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" value="<?php echo $lemail; ?>"id="exampleInputEmail1" aria-describedby="emailHelp" style="width:50vw;" readonly>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" style="width:50vw;">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" style="width:50vw;">
  </div>
  
  <button type="submit" class="btn btn-primary" name="update" value="">Submit</button>
  <?php if(isset($msg)){ echo $msg;} ?>
</form>
    </div>




<script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>   
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/all.min.js"></script>    
</body>
</html>