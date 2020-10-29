<?php
    include 'dbconnection.php';
    session_start();
    if($_SESSION['log_in']){
        $lemail=$_SESSION['email'];
        $lpassword=$_SESSION['password'];
        
    }
    else{
        echo "<script>location.href='login.php'</script>";
    }
    if(isset($_REQUEST['submit'])){
        if(($_REQUEST['fname']=="")||($_REQUEST['lname']=="")||($_REQUEST['phone']=="")||($_REQUEST['email']=="")||($_REQUEST['password']=="")||($_REQUEST['npassword']=="")){
            $msg = '<div class="msg" style="color:red;"><b>Please Fill All Fields</b></div>';
        }
       
           elseif($_REQUEST['password']!=$lpassword){
            $pmsg = '<div class="msg" style="color:red;"><b>Please Enter Valid Password</b></div>';
           }
           else{
            $fname=$_REQUEST['fname'];
            $lname=$_REQUEST['lname'];
            $phone=$_REQUEST['phone'];
            $npassword=$_REQUEST['npassword'];
            
            $sql="UPDATE tutor_signup SET fname='".$fname."',lname='".$lname."',phone='".$phone."',password='".$npassword."'
            WHERE email='".$lemail."'";
            if($result=mysqli_query($conn,$sql)){
                $msg = '<div class="msg" style="color:green;"><b>Accounted Updated Successfully</b></div>';
            }
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
    <link rel="stylesheet" href="css/student.css">
    <script src='main.js'></script>
</head>
<body>
    <!--  -------------------student navbar ----------------------- -->

    <?php  include 'snavbar.php' ?>
    

    <!-- --------------------end student navbar----------------- -->
    <div class="spcontainer">
        <form action="" method="POST">
            <label for="fname">First Name</label><br>
            <input type="text" name="fname" value=""><br>
            <label for="lname">Last Name</label><br>
            <input type="text" name="lname" value=""><br>
            <label for="phone">Phone</label><br>
            <input type="text" name="phone" value=""><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" value="<?php echo $lemail; ?>" readonly><br>
            <label for="password">Last Password</label><br>
            
            <input type="password" name="password" value=""><br>
            <?php if(isset($pmsg)){echo $pmsg;} ?>
            <label for="npassword">New Password </label><br>
            <input type="password" name="npassword" value=""><br>
            <?php if(isset($msg)){echo $msg;} ?>
            <button type="submit" name='submit'>Save</button>
        </form>
    </div>

 <script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>   
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/all.min.js"></script>    
</body>
</html> 