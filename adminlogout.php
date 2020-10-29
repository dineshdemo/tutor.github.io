<?php
    include 'dbconnection.php';
    session_start();
    session_destroy();
    echo "<script>location.href='adminlogin.php'</script>";

?>