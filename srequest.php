<?php include 'dbconnection.php' ;
session_start();
if(!isset($_SESSION['log_in'])){
    $_SESSION['email']=$lemail;
    echo '<script>location.href="login.php"</script>';
}
else{
    if(isset($_REQUEST['srequestsubmit'])){
        if(($_REQUEST['fname']=="")||($_REQUEST['lname']=="")||($_REQUEST['email']=="")||
        ($_REQUEST['phone']=="")||($_REQUEST['date']=="")||($_REQUEST['course']=="")){
            $msg = '<div class="msg" style="color:red; "><b>Please Fill Required Fields</b></div>';
        }
        else{
            $fname=$_REQUEST['fname'];
            $lname=$_REQUEST['lname'];
            $adr1=$_REQUEST['address1'];
            $adr2=$_REQUEST['address2'];
            $email=$_REQUEST['email'];
            $phone=$_REQUEST['phone'];
            $date=$_REQUEST['date'];
            $course=$_REQUEST['course'];
            $desc=$_REQUEST['description'];
            
            echo $fname . $lname .$adr1 . $adr2 .$email . $phone . $date . $course . $desc;
            $sql="INSERT INTO student_request(fname,lname,adr1,adr2,email,phone,date,course,description) 
            VALUES('$fname','$lname','$adr1','$adr2','$email','$phone','$date','$course','$desc')";
            if(mysqli_query($conn,$sql)){
                $genid=mysqli_insert_id($conn);
                $msg = '<div class="msg" style="color:green; "><b>Your request submitted successfully</b></div>';
                $_SESSION['lastid']=$genid;
                echo '<script>location.href="srecipt.php"</script>';
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
    <title>Tutor</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/student.css">
    <script src='main.js'></script>
</head>
<body>
    <div class="srequest-maincontainer">
        <?php  include 'snavbar.php';   ?>  
        <!-- -----------------srequest second div--------------- -->
        <div class="container">
            
            <form action="" method="POST">
            <div class="tablecontainer">
            <div class="t1">
            <table>
                <tr>
                    <th>First Name :</th>
                    <th>Last Name :</th>
                </tr>
                <tr>
                    <td><input type="text" name="fname" value=""></td>
                    <td><input type="text" name="lname" value=""></td>
                </tr>
                
            </table>
            <div class="t2">
                <table>
                    <tr>
                        <th>Address Line 1 :</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="address1" value=""></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Address Line 2 :</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="address2" value=""></td>
                    </tr>
                </table>
                <div class="t3">
                <table>
                <tr>
                    <th>Email : :</th>
                    <th>Phone :</th>
                    <th>Date :</th>
                </tr>
                <tr>
                    <td><input type="email" name="email" value=""></td>
                    <td><input type="tel" pattern="[0-9{3}-[0-9]{2}-[0-9]{3}]" name="phone" value=""></td>
                    <td><input type="date" name="date" value=""></td>
                </tr>
                
            </table>
                </div>
                
                <div class="t4">
                    <table>
                        <tr>
                            <th>Select Course</th>
                        </tr>
                        <tr>
                            <td>
                                <select name="course" id="course">
                                    <option>------------------------------------------------------Select Course---------------------------------------------</option>
                                    <option value="defence">DEFENCE</option>
                                    <option value="railway">RAILWAY</option>
                                    <option value="upsc">UPSC</option>
                                    <option value="ssc/cgl">SSC/CGL</option>
                                    <option value="other">Other</option>
                                </select>   
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="t5">
                    <table>
                        <tr>
                            <th>Description :</th>
                        </tr>
                        <tr>
                            <td><textarea name="description" id="" cols="10" rows="15"></textarea></td>
                        </tr>
                    </table>
                    <button type="submit" name="srequestsubmit">submit</button>
                    <?php if(isset($msg)){ echo $msg;}  ?>
                    
                </div>
                
            </div>
            </div>
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