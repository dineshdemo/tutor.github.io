<?php
    include 'dbconnection.php';
    session_start();
    if(isset($_SESSION['log_in'])){
        $lemail=$_SESSION['email'];

    }
    else{
        echo "<script>location.href='login.php'</script>";
    }

    if(isset($_REQUEST['vrfy'])){
        $sql="UPDATE tutor_signup SET status='verified' WHERE email='$lemail' ";
        $result=mysqli_query($conn,$sql);
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

<?php include 'snavbar.php'; ?>

    <div class="maincontainer">
        
            <div class="container1">
                <form action="" method="POST">
                    <input type="text" name="fname" placeholder="Enter Your Name">
                    <input type="email" name="email" placeholder="Enter Your Name">
                    <input type="submit" name="search" value="search" style="width:13vw; background-color:black;color:white;font-weight:bolder;">

                    <div class="tablecontainer">
                <?php
                     if(isset($_REQUEST['search'])){
                         if(($_REQUEST['fname']=="")||($_REQUEST['email']=="")){
                             echo "<h6 style='color:red'>Enter Name And Email</h6>";
                         }
                         else{
                         $fname=$_REQUEST['fname'];
                         $email=$_REQUEST['email'];   
                         $sql="SELECT * FROM student_request WHERE fname='$fname' AND email='$email'";
                         $result=mysqli_query($conn,$sql);
                         if(mysqli_num_rows($result)>0){
                             while($row=mysqli_fetch_assoc($result)){
                                echo '<table>
                                <tr>
                                    <th>Name :</th>
                                    <th>'.$row['fname']." ".$row['lname'].'</th>
                                    
                                </tr>
                                <tr>
                                    <th>Email :</th>
                                    <th>'.$row['email'].'</th>
                                </tr>
                                <tr>
                                    <th>Address :</th>
                                    <th>'.$row['adr1'].'</th>
                                </tr>
                                <tr>
                                    <th>Phone :</th>
                                    <th>'.$row['phone'].'</th>
                                </tr>
                                <tr>
                                    <th>Applied Course :</th>
                                    <th>'.$row['course'].'</th>
                                </tr>
                                <tr>
                                    <th style="color:red;">Reply From Tutor :</th>
                                    <th style="color:green;">'.$row['reply'].'</th>
                                </tr>
                                <tr>
                                    <th style="color:red;">Assign Date by Tutor :</th>
                                    <th style="color:green;">'.$row['assigndate'].'</th>
                                </tr>
                                <tr>
                                    <th style="color:blue; font-size:15px">Please click on verify to become an student :</th>
                                    <th style="color:green;"><form><input type="submit" name="vrfy" value="verify" style="background-color:green;color:white;border:none;"></form method="POST"></th>
                                </tr>

                            </table>';
                             }
                         } 
                         else{
                            echo "<h6 style='color:red'>Unable To Find Enter Valid Name And Email</h6>";
                         }
                         
                           
                         }
                     }
                
                ?>    
                    </div>
                </form>  
                
            </div>
            
    
    </div>
            





<script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>   
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/all.min.js"></script>    
</body>
</html> 