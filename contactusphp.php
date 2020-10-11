<?php
$email = $_POST['emailc'];
$message = $_POST['msg'];


//database connection

$conn = new mysqli('sql111.epizy.com','epiz_26253831','ZmKbr2rtpEsci','epiz_26253831_signin');
if($conn->connect_error) {
    die('connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into contactus(emailc,msg)     
    values(?,?)");
    $stmt->bind_param("ss",$email,$message);
    $stmt->execute();
    echo"<script> ;alert('we will gladly get back to you within 24 hours');window.location='index.php';
    </script>";
    $stmt->close();
    $conn->close();
}


?>