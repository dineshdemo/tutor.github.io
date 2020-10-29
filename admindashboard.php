<?php 
 include 'dbconnection.php';

//  checking admin log in or not
session_start();

if(isset($_SESSION['adminlog_in'])){
    $lemail=$_SESSION['aemail'];
    $lpassword=$_SESSION['apassword'];
    
    
}
else{
     echo "<script>location.href='adminlogin.php'</script>";
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
    <!-- ----navbar------------------------start -->
     <?php include 'adminnavbar.php' ?>
    
    
    <!-- ------------------------------------end -->

    <div class="admincontainer">
        <!-- ----------------------------sidebar----------------------------------- -->
        
        <!-- -------------------------------end sidebar--------------------------- -->
        <div class="body">
            <div class="cardcontainer">
                <div class="card">
                    <h3>Request Riecieved</h3>
                    <h1>50</h1>
                    <a href="#">View</a>
                </div>

                <div class="card">
                    <h3>Attend Student</h3>
                    <h1>50</h1>
                    <a href="#">View</a>
                </div>
                <div class="card">
                    <h3>Faculty</h3>
                    <h1>50</h1>
                    <a href="#">View</a>
                </div>
            </div>
            <div class="listcontainer">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col" style="background-color:crimson;color:white;font-weight:bolder">ID</th>
                    <th scope="col" style="background-color:crimson;color:white;font-weight:bolder">Name</th>
                    <th scope="col" style="background-color:crimson;color:white;font-weight:bolder">Email</th>
                    <th scope="col" style="background-color:crimson;color:white;font-weight:bolder">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>88888</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>77777</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>99999999</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

 <script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>   
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/all.min.js"></script>    
</body>
</html>