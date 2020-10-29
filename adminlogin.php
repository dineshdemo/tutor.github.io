<?php   
    include 'dbconnection.php';
    session_start();
    if(!isset($_SESSION['adminlog_in'])){
        if(isset($_REQUEST['lsubmit'])){
            $lemail = $_REQUEST['lemail'];
            $lpassword=$_REQUEST['lpassword'];
            $sql= "SELECT a_email,a_password FROM admin_login WHERE a_email = '".$lemail."' AND a_password='".$lpassword."' ";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                $_SESSION['adminlog_in']=true;
                $_SESSION['aemail']=$lemail;
                $_SESSION['apassword']=$lpassword;
                echo "<script>location.href='adminstudentinfo.php'</script>";

            }
            else{
                $msg = '<div class="msg" style="color:red; "><b>Invalid Email or Password</b></div>';
            }
            
        }
}
else{
    echo "<script>location.href='adminstudentinfo.php'</script>";
}

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>profile</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src='main.js'></script>
</head>
<body>
    
    <?php include 'navbar.php' ?>
    <div class="login">
        <div class="container1">
            <div class="container2">
                <form action="" method="POST">
                
                    <h1><span>L</span>og<span>I</span>n</h1>
                    <h4>Admin</h4>
                    <input type="email" name="lemail" placeholder="Email"><br>
                    <input type="password" name="lpassword" placeholder="Password"><br>
                    <?php if(isset($msg)){echo $msg;}  ?>
                    <button type="submit" name="lsubmit">Log In</button>
                </form>
            </div>
        </div>
    </div>

    
<script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>   
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/all.min.js"></script>    
</body>
</html>