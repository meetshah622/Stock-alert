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

$conn = new mysqli('localhost','root','root123','signin');
if($conn->connect_error) {
    die('connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into signin(email,pass,rpass,mno,address,gst,sname,dscp)     
    values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssissss",$email,$pass,$rpass,$mno,$address,$gst,$sname,$dscp);
    $stmt->execute();
    echo"YOU ARE  SUCESSFULLY REGISTERED";
    $stmt->close();
    $conn->close();
}


?>