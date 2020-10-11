<?php
error_reporting(0); 
	$servername = "localhost";
	$username = "root";
	$password = " ";
	$dbname = "project_wt";
	$con=mysqli_connect("localhost","root","","project_wt");
	$connect=mysqli_connect("localhost", "root", "");
	if(!$connect)
	{
		die("Connection Failed");
		echo("Connection Failed");
	}
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="SELECT * FROM user WHERE email='".$email."' AND password='".$password."' ";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		if($count == 1)
		{
			echo '<script> alert("Welcome..!!");window.location="phome_page_2.html";</script>';
		}
		else
		{
			echo '<script> alert("Username Password Combination Not Match");window.location="plogin.php"; </script>';
		}
	}
	
?>
<html>
<head> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
ul 
{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  font-size:18px;
  text-transform:uppercase;
  background-color:#ffffff00;
}

li
{
  float: right;
}

li a
 {
	display: inline-block;
	color: white;
	text-align: center;
	margin:3px;
	padding: 16px 18px;
	text-decoration: none;
	transition:0.6s ease;

}

 li a:hover 
{
  background-color: #7a991a;
  height:59px;
  cursor:pointer;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: green;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
text-decoration:none;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/**/
body
{
	margin:0;
	padding:o;
	font-family: sans-serif;
	background-size: cover;
	background-repeat: no repeat;
	background-image: no repeat;
	background:url(images/p6.jpg);
	background-size: cover;
	position: relative;
}
/*body:before
{
	content: '';
	position: absolute;
	top:0;
	left: 0;
	width
	: 50%;
	height: 100%;
	opacity:0.8;	
}*/

.loginpic
{
	position: absolute;
	margin-top:20px;
	top: 60%;
	left:50%;
	width: 420px;
	height:480px;
	transform: translate(-50%,-50%);
	background:#000;
	color:#fff;
	padding:50px; 
	box-sizing: border-box;
	
}
/* */.form
{
	position: absolute;
	box-sizing: border-box;
}
h1
{
	text-align:center;
	font-size:22px;
	font-weight:bold;
	margin: 0;
	padding: 0 0 20px;
}

.form .input-box
{
	width:100%;
	position: relative;
	margin: 10px 0;
} 
.form .input-box input
{
	width:90%;
	margin-bottom: 20px;
	font-size:16x;
	border: none;
	border-bottom: 2px solid #777;
	outline: none;
	padding:10px;
	padding-left:25px;
	box-sizing: boder-box;
	font-size: bold;
	color: #777;
}
.form .input-box input:focus,
.form .input-box input:valid
{
	border-bottom: 2 px solid #03a9f4;
}

/*.form .input-box .fa
{
	position: absolute;
	top: 8px;
	left: 0;
	font-size: 18px;
	color: #777;
}*/
.form .input-box input[type="text"],input[type="password"]
{
	border:none;
	border-bottom: 2px solid #fff;
	background: transparent;
	outline:none;
	height:40px;
	color:#fff;
	font-size:16px;
}

.form .input-box input[type="submit"]
{
	border:none;
	outline:none;
	width:200px;
	margin-left:50px;
	cursor: pointer;
	background:#fb2525;
	color: #fff;
	font-weight: bold;
	transition: 0.5s;
	font-size:18px;
	border-radius:30px;
}
.form  .input-box input[type="submit"]:hover
{
	cursor:pointer;
	background:#ffc107;
	color:#000;
}
.form a
{
	text-decoration:none;
	color:#777;
	margin-top: 20px;
	color: bold;
	display: inline-block;
	transition: 0.5s;
}
.form a:hover
{
	color:#ff4987;
}
</style>
<title> login </title>

<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css/font-awesome.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css/font-awesome.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<body>
</head>
	<ul>
<div class="navbar">
  <div class="dropdown">
      <button class="dropbtn">Drinks 
		<i class="fa fa-caret-down"></i>
		</button>
	    <div class="dropdown-content">
			<li><a href="#">Cocktails</a></li>
			<li><a href="#">Wedding Cocktails</a></li>  
		</div>
  </div> 
	<li><a href="simple-php-shopping-cart/index.php">Cart</a></li>
	<li><a href="pcontanctus.php">Contanct Us</a></li>
	<li><a href="pabout_us.html">About Us</a></li>
	<li><a href="pgallery.html">Gallery</a></li>
	<li><a href="precipe.html">Recipe</a></li>
	<li><a href="cocktail_video1.html">videos</a></li>
  
</div>
</ul>

<div class="outerpic" style="margin-top:100px;margin-left:80px;">
	<div class="loginpic"> 
		<div class="form">
			<form action="plogin.php" method="post" onsubmit="return confirm('Are you sure you want to Submit?');" id="form1">
				<div style="top:5px;"><h1><center> LOGIN  </center></h1></div>
				<div class="input-box">
					<i class="fa fa-user" aria-hidden="true"></i>
					<label>USERNAME</label>
					<input type="email" name="email" placeholder="USERNAME(email)">
				</div>
				
				<div class="input-box">
				<i class="fa fa-unlock-alt" aria-hidden="true"></i>
					<label>PASSWORD</label>
					<input type="password" name="password" placeholder="PASSWORD">
				</div>
				
				<div class="input-box">
					<input type="submit" name="submit" value="LOGIN">
				</div>
				<a href="change_password.php"> Forget Password? </a>
			</form>
		</div>
	</div>
</div>
</body>
</html>