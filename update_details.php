<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$mno = $_POST['mno'];
$address = $_POST['address'];
$gst = $_POST['gst'];
$sname = $_POST['sname'];
$dscp = $_POST['dscp'];
//database connection

$conn = new mysqli('sql111.epizy.com','epiz_26253831','ZmKbr2rtpEsci','epiz_26253831_signin');
 if($conn->connect_error) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
 }else{
    $sql="UPDATE signin SET mno = $mno, gst = $gst, sname = $sname, dscp = $dscp WHERE email = $email AND pass = $pass";
    
    $result=mysqli_query($conn,$sql);

    if($result)
    {
        echo"<script> alert('Details updated')
        location.href='http://topicaldesign.epizy.com/homepage1.php';
    </script>";
    
    }
    else
    {
        echo"<script> alert('Error')
        location.href='http://topicaldesign.epizy.com/profile.php';
    </script>";
    
    }
 }


?>