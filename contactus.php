<?php
include 'dbconnection.php';

// inserting data into data base
if(isset($_REQUEST['ctsubmit'])){
    if(($_REQUEST['ctfname']=="")||($_REQUEST['ctphone']=="")||($_REQUEST['ctemail']=="")||($_REQUEST['txtarea']=="")){
        $msg = '<div class="msg" style="color:white; ">Please Fill All Fields</div>';
    }
    else{
        $name=$_REQUEST['ctfname'];
        $phone=$_REQUEST['ctphone'];
        $email=$_REQUEST['ctemail'];
        $concern=$_REQUEST['txtarea'];
        $sql="INSERT INTO tutor_contactus(name,number,email,concern) VALUES ('$name','$phone','$email','$concern')";
        if($result=mysqli_query($conn,$sql)){
            $msg = '<div class="msg" style="color:white; ">Thank You We Will ....Contact You Soon</div>';
        }
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contact Us</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src='main.js'></script>
</head>
<body>
    <div class="contactus" id="contact">
            <div class="container1">
            <h1><b><span>C</span>ontact <span>U</span>s</b></h1>
                <form action="" method="POST">
                    <input type="text" name="ctfname" value="" placeholder="Enter Your Name"><br>
                    
                    <input type="text" name="ctphone" value="" placeholder="Phone Number"><br>
                    <input type="email" name="ctemail" value="" placeholder="Enter Your Email"><br>
                    <textarea name="txtarea" id="#" cols="20" rows="5" placeholder="Please Enter Your Concern"></textarea><br>
                    <?php if(isset($msg)){ echo $msg;} ?>
                    <button type="submit" name="ctsubmit" id="#contact" >Submit</button><br>
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