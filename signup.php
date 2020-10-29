<?php
    include 'dbconnection.php';
    if(isset($_REQUEST['submit'])){
        if(($_REQUEST['fname']=="")||($_REQUEST['lname']=="")||($_REQUEST['phone']=="")||($_REQUEST['email']=="")||($_REQUEST['password']=="")||($_REQUEST['cpassword']=="")){
            $msg = '<div class="msg" style="color:red; "><b>Please Fill All Fields</b></div>';
        }
        elseif(($_REQUEST['password'])!=($_REQUEST['cpassword'])){
            $msg = '<div class="msg" style="color:red; "><b>Your Password Not Matched</b></div>';
        }
        else{
            $esql="SELECT email FROM tutor_signup WHERE email = '".$_REQUEST['email']."'";
            $result=mysqli_query($conn,$esql);
            if(mysqli_num_rows($result)>0){
                $msg = '<div class="msg" style="color:skyblue;"><b>Account Already Registered</b></div>';
                }
                else{
                    $fname=$_REQUEST['fname'];
                    $lname=$_REQUEST['lname'];
                    $phone=$_REQUEST['phone'];
                    $email=$_REQUEST['email'];
                    $password=$_REQUEST['password'];
                    $sql="INSERT INTO tutor_signup(fname,lname,phone,email,password) VALUES('$fname','$lname','$phone','$email','$password')";
                    if($result=mysqli_query($conn,$sql)){
                        $msg = '<div class="msg" style="color:green; "><b>Account Created Sucessfully</b></div>';
                         }
                }
                    
        }
        
        
    }
        
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>sign Up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src='main.js'></script>
</head>
<body>
    
    <div class="account">
            <div class="container1">
                <h1><b>Create Account</b></h1>
                <form action="" method="POST">
                    <input type="text" name="fname" value="" placeholder="First Name"><br>
                    <input type="text" name="lname" value="" placeholder="Last Name"><br>
                    <input type="text" name="phone" value="" placeholder="Phone Number"><br>
                    <input type="email" name="email" value="" placeholder="Email"><br>
                    <input type="password" name="password" value="" placeholder="password"><br>
                    <input type="password" name="cpassword" value="" placeholder="Confirm Password"><br>
                    <?php if(isset($msg)){ echo $msg;} ?>
                    <button type="submit" name="submit" >Sign Up</button>
                   <a href="index.php" style="text-decoration :none;color:white;"> Back To Home</a>
                </form>
            </div>
        </div>
        <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>   
    <script src="js/bootstrap.min.js"></script>  
    <script src="js/all.min.js"></script>    
</body>
</html>        