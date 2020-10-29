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

if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM student_request WHERE rid='".$_REQUEST['hvd']."'";
    $result=mysqli_query($conn,$sql);
}
if(isset($_REQUEST['rplybtn'])){
    
    $reply=$_REQUEST['reply'];
    $assigndate=$_REQUEST['assigndate'];
    $rd=$_REQUEST['rplybtn'];
    echo $rd;
    
    $sql="UPDATE student_request SET reply= '$reply', assigndate= '$assigndate'
    WHERE rid = ".$rd." ";
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
    <link rel="stylesheet" href="css/requestriecieve.css">
    <script src='main.js'></script>
</head>
<body>
        
        <?php include 'adminnavbar.php' ?>
            
            
        

        <div class="maincontainer">
            <div class="col-sm-6">
        
            <table class="table">
                 <thead class="thead-dark">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
            <?php
            $sql="SELECT * FROM student_request";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    
                 echo '<tbody>
                            <tr>
                                <th scope="row">'.$row['rid'].'</th>
                                <td>'.$row['fname'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td><form method="POST"><input type="hidden" name="hvd" value="'.$row['rid'].'">
                                <button name="view" >view</button>
                                <button name="delete">dele</button>
                                </form></td> 
                            </tr>
                        
                       </tbody>';
            
                }
            }
            else{
                echo "no record found";
            }
            ?>      
                </table>

               
            </div>

            <div class="col-sm-6 rightbar">
                

            <?php
            if(isset($_REQUEST['view'])){
            $sql = "SELECT * FROM student_request WHERE rid='".$_REQUEST['hvd']."'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)){
                while($row=mysqli_fetch_assoc($result)){

            
                
            echo '<div class="rightbarbody">
                <form action="" method="POST">
                    
                    <div class="t1">
                    <table>
                        <tr>
                            <th>First Name :</th>
                            <th>Last Name :</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="fname" value="'.$row['fname'].'" style="width:17vw" readonly></td>
                            <td><input type="text" name="lname" value="'.$row['lname'].'" style="width:17vw" readonly></td>
                        </tr>
                        </table>
                
                    </div>
                    <div class="t2">
                    <table>
                        <tr>
                            <th>Email :</th>
                           
                        </tr>
                        <tr>
                            <td><input type="text" name="email" value="'.$row['email'].'" style=width:34vw readonly></td>
                            
                        </tr>
                        </table>
                
                    </div>
                    <div class="t3">
                    <table>
                        <tr>
                            <th>Address 1 :</th>
                           
                        </tr>
                        <tr>
                            <td><input type="text" name="adr1" value="'.$row['adr1'].'" style=width:34vw readonly></td>
                            
                        </tr>
                        </table>
                
                    </div>
                    <div class="t4">
                    <table>
                        <tr>
                            <th>Address 2 :</th>
                           
                        </tr>
                        <tr>
                            <td><input type="text" name="adr2" value="'.$row['adr2'].'" style=width:34vw readonly></td>
                            
                        </tr>
                        </table>
                
                    </div>
                    <div class="t5">
                    <table>
                        <tr>
                            <th>Phone :</th>
                            <th>Date :</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="phone" value="'.$row['phone'].'" readonly></td>
                            <td><input type="date" name="date" value="'.$row['date'].'" style="width:18vw" readonly></td>
                        </tr>
                        </table>
                
                    </div>
                    <div class="t6">
                    <table>
                        <tr>
                            <th>Applied Course :</th>
                           
                        </tr>
                        <tr>
                            <td><input type="text" name="course" value="'.$row['course'].'" style=width:34vw readonly></td>
                            
                        </tr>
                        </table>
                
                    </div>
                    <div class="t7">
                    <table>
                        <tr>
                            <th>Description :</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="desc" value="'.$row['description'].'" style=width:34vw;height:70px readonly></td>
                        </tr>
                    </table>
                   
                    </div>
                    <div class="t8">
                    <table>
                        <tr>
                            <th>Reply For Student :</th>
                        </tr>
                        <tr>
                            <td><textarea name="reply" id="" cols="49" rows="3" value=""></textarea></td>
                        </tr>
                    </table>
                   
                    </div>
                    <div class="t5">
                    <table>
                        <tr>
                            
                            <th>Assign Date :</th>
                        </tr>
                        <tr>
                            
                            <td><input type="date" name="assigndate" value="" style="width:200px"></td>
                            <td><form method="POST"><input type="hidden" name="rplybtn" value="'.$row['rid'].'"><button type="submit"  value="" style="margin-left:100px;">submit</button></form></td>
                            
                        </tr>
                    </table>
                    </form>
                
                    </div>';
                     }
                 }

            }
            
                ?>

            </div>
        </div>





<script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>   
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/all.min.js"></script>    
</body>
</html> 