<?php

// $host = "sql111.epizy.com";  
// $user = "epiz_26253831";  
// $password = 'ZmKbr2rtpEsci';  
// $db_name = "epiz_26253831_signin";  
  
// $con = mysqli_connect($host, $user, $password, $db_name);  
// if(mysqli_connect_errno()) {  
//     die("Failed to connect with MySQL: ". mysqli_connect_error()); 

// else{
//         $email = $_POST['email'];  
//         $pass = $_POST['pass'];  
      
//         //to prevent from mysqli injection  
//         $email = stripcslashes($email);  
//         $pass = stripcslashes($pass);  
//         $email = mysqli_real_escape_string($con, $email);  
//         $pass = mysqli_real_escape_string($con, $pass);  
      
//         $sql = "select * from signin where email = '$email' and pass = '$pass'";  
//         $result = mysqli_query($con, $sql);  
//         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
//         $count = mysqli_num_rows($result);  
          
//         if($count == 1){  
//             echo "<h1><center> Login successful </center></h1>";  
//         }  
//         else{  
//             echo "<h1> Login failed. Invalid username or password.</h1>";  
//         }     
//     }






session_start(); 
if(isset($_POST['login'])) {
    $email = $_POST['email'];  
    $pass = $_POST['pass'];  
$con = mysqli_connect('sql111.epizy.com','epiz_26253831','ZmKbr2rtpEsci','epiz_26253831_signin');// localhost,root,root123,signin


$sql = "SELECT * FROM signin WHERE email = '$email' and pass = '$pass'";
 $query = mysqli_query($con, $sql);
if(mysqli_num_rows($query) > 0)
{
  //Records matched process further
  $_SESSION['email'] = $email;
  $_SESSION['pass'] = $pass;
  header("Location: http://topicaldesign.epizy.com/homepage1.php");
  exit();
 } else {
   //Record not found throw error
   echo "Error: the information is not correct.";
 }


}















// if($_SERVER["REQUEST_METHOD"] == "POST") {
//     // username and password sent from form 
    
//     $email = mysqli_real_escape_string($con,$_POST['email']);
//     $pass = mysqli_real_escape_string($con,$_POST['pass']); 
    
//     $sql = "SELECT id FROM signin WHERE email = '$email' and pass = '$pass'";
//     $result = mysqli_query($con,$sql);
//     $row = mysqli_fetch_array($result,MYSQLI_ASSOC  );
//     $active = $row['active'];
    
//     $count = mysqli_num_rows($result);

// // $sql="SELECT * FROM `signin` WHERE `email`='$email' AND `pass`='$pass'";



// $email="SELECT 'email' FROM `signin` WHERE `email`='$email' AND `pass`='$pass'";
// $pass="SELECT 'pass' FROM `signin` WHERE `email`='$email' AND `pass`='$pass'";
// $mno="SELECT 'mno' FROM `signin` WHERE `email`='$email' AND `pass`='$pass'";
// $address="SELECT 'address' FROM `signin` WHERE `email`='$email' AND `pass`='$pass'";
// $gst="SELECT 'gst' FROM `signin` WHERE `email`='$email' AND `pass`='$pass'";
// $sname="SELECT 'sname' FROM `signin` WHERE `email`='$email' AND `pass`='$pass'";
// $dscp="SELECT 'dscp' FROM `signin` WHERE `email`='$email' AND `pass`='$pass'";
    

// if($count == 1) {
    
//     $_SESSION['email'] = $email;
//     $_SESSION["pass"]=$pass;
//     $_SESSION["mno"]=$mno;
//     $_SESSION["address"]=$address;
//     $_SESSION["gst"]=$gst;
//     $_SESSION["sname"]=$sname;
//     $_SESSION["dscp"]=$dscp;
//     header("location: http://topicaldesign.epizy.com/homepage1.php'");
//  }
// else{
//     echo " <html>
//      <body>
    
//      <h1> Invalid username or password</h1>";
// }
// }

// if(mysqli_num_rows($run)<1)
// {
    
//     echo " <html>
//     <body>
    
//     <h1> Invalid username or password</h1>";

// }
// else
// {   
	
    
// 	session_start();
//     $_SESSION["email"]=$email;
//     $_SESSION["pass"]=$pass;
//     $_SESSION["mno"]=$mno;
//     $_SESSION["address"]=$address;
//     $_SESSION["gst"]=$gst;
//     $_SESSION["sname"]=$sname;
//     $_SESSION["dscp"]=$dscp;
    
//     header('location:http://topicaldesign.epizy.com/homepage1.php');
// }	
//}
?>