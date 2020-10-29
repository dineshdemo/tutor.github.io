<?php
include 'dbconnection.php';
session_start();
if(isset($_SESSION['adminlog_in'])){

}
else{
    echo '<script>location.href="adminlogin.php"</script>';
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
    <link rel="stylesheet" href="css/srstatus.css">
    <script src='main.js'></script>
</head>
<body>
 <?php include 'adminnavbar.php'; ?>

    <div class="maincontainer" >
    <table class="table table-hover" style="margin:0px 30px 0px 30px;">
                <thead>
                    <tr>
                    <th scope="col" style="background-color:crimson;color:white;font-weight:bolder">ID</th>
                    <th scope="col" style="background-color:crimson;color:white;font-weight:bolder">Name</th>
                    <th scope="col" style="background-color:crimson;color:white;font-weight:bolder">Email</th>
                    <th scope="col" style="background-color:crimson;color:white;font-weight:bolder">Phone</th>
                    
                    <th scope="col" style="background-color:crimson;color:white;font-weight:bolder">Status</th>
                    </tr>
                </thead>
                <?php 
                
                $sql="SELECT * FROM tutor_signup";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                    
                    
               echo '<tbody>
                    <tr>
                    <th scope="row">'.$row['id'].'</th>
                    <td>'.$row['fname'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['phone'].'</td>
                    <td style="color:green;font-size:20px;">'.$row['status'].'</td>
                    </tr>
                    </tbody>';
                    }
                }
                
                
                ?>
                
            </div>    


<script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>   
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/all.min.js"></script>    
</body>
</html> 