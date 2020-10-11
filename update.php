<?php
$username = "root";
$password = "root123";
$database = "signin";
 
$mysqli = new mysqli("localhost", $username, $password, $database);
 
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.
 
$field1 = $mysqli->real_escape_string($_POST['pname']);
$field2 = $mysqli->real_escape_string($_POST['qty']);


 
$query = "UPDATE productdetails SET pname=$_POST[field1] WHERE 
 
$mysqli->query($query);
$mysqli->close();
?>