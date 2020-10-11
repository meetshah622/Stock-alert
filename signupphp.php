<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];
$mno = $_POST['mno'];
$address = $_POST['address'];
$gst = $_POST['gst'];
$sname = $_POST['sname'];
$dscp = $_POST['dscp'];

//database connection

$conn = new mysqli('sql111.epizy.com','epiz_26253831','ZmKbr2rtpEsci','epiz_26253831_signin');
if($conn->connect_error) {
    die('connection Failed : '.$conn->connect_error);

}else{
 

    $stmt = $conn->prepare("insert into signin(email,pass,rpass,mno,address,gst,sname,dscp)     
    values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssissss",$email,$pass,$rpass,$mno,$address,$gst,$sname,$dscp);
    $stmt->execute();

    session_start();
    $_SESSION["email"]=$email;
    $_SESSION["pass"]=$pass;
    $_SESSION["mno"]=$mno;
    $_SESSION["address"]=$address;
    $_SESSION["gst"]=$gst;
    $_SESSION["sname"]=$sname;
    $_SESSION["dscp"]=$dscp;


    
   header("Location:http://topicaldesign.epizy.com/homepage1.php");
    $stmt->close();
    $conn->close();
}


?>