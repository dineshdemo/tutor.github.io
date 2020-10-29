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
    <link rel="stylesheet" href="css/style.css">
    <script src='main.js'></script>
</head>
<body>
<!-- ---------------------------------start navigation----------------------------------- -->
 <?php include 'navbar.php' ?>   
<!-- -------------------------------end navigation------------- -->
    <div class="header">
        <div class="container1">
            <h1><b><span>T</span>u<span>T</span>or</b></h1>
            <h3>Management Service Provider</h3>
            <a href="login.php" style="text-decoration:none;"> Login </a>
            <a href="signup.php" style="text-decoration:none;"> Sign Up </a>
        </div>
       
    </div>
    <!-- -----------------------------service container ------------------------------->
    <div class="service">
        <div class="container1">
            <h1><span>S</span>erv<span>i</span>ces</h1>
            <p>Tutor services is for to manage records. For faculty purpose teacher
                can manage there record on our website they can update there student
                record and can acess from anywhere through our site.Teacher update 
                fee structure ,student report can share with there student and can also create 
                there profile for home tutor etc.  
            </p>
        </div>
    </div>
    <!-- --------------------------------creating account section------------------ -->
    <?php include 'signup.php'  ?>
    <!-- ------------------------------end account section ------------------ -->
    <!-- ------------------------------------------customer feedback---------------- -->
    <div class="feedback">
        <h1>Customer Feedback</h1>
        <div class="container1">
            <div class="card" id="#">
                <img src="\elearning\image\img2.jpg" alt="img">
                <h4>Riya</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, aut?</p>
            </div>
            <div class="card" id="#">
                <img src="\elearning\image\img3.jpg" alt="img">
                <h4>Aditya</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, aut?</p>
            </div>
            <div class="card" id="#">
                <img src="\elearning\image\img4.jpg" alt="img">
                <h4>Rahul</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, aut?</p>
            </div>
            <div class="card" id="#">
                <img src="\elearning\image\img5.jpg" alt="img">
                <h4>Priyanshi</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, aut?</p>
            </div>
            
        </div>
    </div>
    <!-- -----------------------------contact us----------------------------------- -->
    <?php include 'contactus.php'; ?>
    <!-- --------------------------------end contact us-------------------------- -->
    <!-- --------------------------------------footer------------------------------- -->

    <div class="footer">
        <small>www.tutor.com &copy; 2020</small>
    </div>



 <script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>   
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/all.min.js"></script>    
</body>
</html>