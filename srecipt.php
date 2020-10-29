<?php 

include 'dbconnection.php' ;


session_start();
if(!isset($_SESSION['log_in'])){
    $_SESSION['email']=$lemail;
    
    echo '<script>location.href="login.php"</script>';
}   
$sql = "SELECT * FROM student_request WHERE rid = {$_SESSION['lastid']}";
$result = mysqli_query($conn,$sql);
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
     <?php include 'snavbar.php' ?> 
    <div class="recipt" >
        
        <div class="container1">
            <h1>Print Priview</h1>
            <div class="print">
            <?php 
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<div class='table' >
                                <table >
                                <tr >
                                    <th>Name :</th>
                                    <td>".$row['fname']." ".$row['lname']."</td>
                                </tr>
                                <tr>
                                    <th>Address :</th>
                                    <td>".$row['adr1']." ".$row['adr2']."</td>
                                </tr>
                                <tr>
                                    <th>Email :</th>
                                    <td>".$row['email']."</td>

                                </tr>
                                <tr>
                                    <th>Phone :</th>
                                    <td>".$row['phone']."</td>
                                </tr>
                                <tr>
                                    <th>Submit Date :</th>
                                    <td>".$row['date']."</td>
                                </tr>
                                <tr>
                                    <th>Course :</th>
                                    <td>".$row['course']."</td>
                                </tr>
                                
                        </table>
                    </div>";
                }
            }
            
            ?>
            <input type="submit" value="PRINT" onclick="window.print()">
            </div>
        </div>
    </div>

 <script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>   
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/all.min.js"></script>    
</body>
</html>