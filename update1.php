<?php
$servername = "localhost";
$username = "root";
$password = "root123";
$dbname = "signin";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$field1 = $conn->real_escape_string($_POST['pname']);
$field2 = $conn->real_escape_string($_POST['qty']);


$sql = "UPDATE productdetails SET qty='$field2' WHERE pname='$field1';

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>