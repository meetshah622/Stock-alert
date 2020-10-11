<?php
$pname = $_POST['pname'];
$qty = $_POST['qty'];
$price = $_POST['price'];

//database connection

$conn = new mysqli('sql111.epizy.com','epiz_26253831','ZmKbr2rtpEsci','epiz_26253831_signin');
 if($conn->connect_error) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
 }else{
    $sql="INSERT INTO productdetails (pname,qty,price) VALUES ('".$pname."','".$qty."','".$price."')";

    
    $result=mysqli_query($conn,$sql);

    if($result)
    {
        echo"<script> alert('Details Submitted');
        location.href='http://topicaldesign.epizy.com/productdetails.php';
    </script>";
    
    }
    else
    {
        echo"<script> alert('Error')
        location.href='http://topicaldesign.epizy.com/productdetails.php';
    </script>";
    
    }
 }


?>