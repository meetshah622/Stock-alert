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

if($_SERVER["REQUEST_METHOD"] =="POST")
  {
	$con=mysqli_connect("localhost","root","","project_wt");
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$bool=true;
	mysqli_connect("localhost","root","")or die(mysqli_error());
	mysqli_select_db($con,"project_wt") or die("Cannot connect to database");
	$query = mysqli_query($con,"select * from user");
	while($row=mysqli_fetch_array($query))
		$table_users=$row['name'];
		if($username==$table_users)
		{
			$bool=false;
			print '<script>alert("Username has been taken!");</script>';
			print '<script>window.location.assign("psignup.php");</script>';
		}
	
	if($bool)
	{
		mysqli_query($con,"insert into user(name,email,password)values('$name','$email','$password')");
		print'<script>alert("Successfully Registered!");</script>';
		print'<script>window.location.assign("plogin.php");</script>';
	}
  
  }
	
?>
<html>
<head> 
<title> SIGN UP </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  float: right;
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

/**/
body
{
	margin:0;
	padding:o;
	font-family: sans-serif;
	background-size: cover;
	background-repeat: no repeat;
}

.table
{
	border-style: solid;
	border-top-style: groove;
	border-top-color: cornfloewrBlue;
	border-top-width: 5px;
	border-bottom-width:3px;
}
		
body:before
{
	content: '';
	position: absolute;
	top:0;
	left: 0; 
	width: 50%;
	height: 100%;
	background:#5E1224; /*#03a9f4;*/
	opacity:0.8;	
}

.form
{
	position: absolute;
	margin-top:40px;
	top: 50%;
	left: 50%; 
	transform: translate(-50%,-50%);
	width: 550px;
	min-height:300px;
	background:#fff;
	box-shadow: 0 15px 50px rgba(0,0,0.5);
	padding:15px;
	box-sizing: border-box;
}

.form h2
{
	color: #777; 
	margin: 0 0 40px;
	padding: 0;
}

.form .input-box
{
	position: relative;
	margin: 20px 0;
	left: 7px;
} 

.form .input-box input
{
	width:100%;
	font-size:9x;
	border: none;
	border-bottom: 2px solid #777;
	outline: none;
	padding:4px; 
	padding-left:30px;
	box-sizing: boder-box;
	font-size: bold;
}

.form .input-box input:focus,
.form .input-box input:valid
{
	border-bottom: 2 px solid #03a9f4;
}

.form .input-box .fa
{
	position: absolute;
	top: 8px;
	left: 0;
	font-size: 18px;
	color: #777;
}

.form .input-box input[type="submit"]
{
	border:none;
	cursor: pointer;	
	background:#5E1224; /*#03a9f4;*/
	color: #fff;
	line-height:20px;
	width:200px;
	height:45px;
	border-radius:30px;
	font-weight: bold;
	transition: 0.5s;
	text-align:center;
}

.form  .input-box input[type="submit"]:hover
{
	background:#ff4987;
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

<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
	
</head>
	<style>
		.k{line-height:2.5;width:500px;margin:4px;;border-radius:9px;color:#333;}
		label
		{
			    position: absolute;
				left: 52px;
		}
		.l2
		{
			left:240px;
		}
	</style>
<body>
<script>
function confirmPass() {
    var pass = document.getElementById("psw").value
    var confPass = document.getElementById("c_pass").value
    if(pass != confPass) {
        //alert('Wrong confirm password !');
        document.getElementById('error').innerHTML='wrong confirm password';
    }
    else
    {
        document.getElementById('error').innerHTML='';
    }
}
</script>

<!--
<div>
	<div class="fontsize w3-bar w3-black w3-hide-medium">
	  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-facebook-official"></i></a>
	  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-instagram"></i></a>
	  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-snapchat"></i></a>
	  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-twitter"></i></a>
	  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-linkedin"></i></a>
	</div>	
</div>
-->
<!--navigation bar -->
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
	<li><a href="home">Cart</a></li>
	<li><a href="pcontanctus">Contanct Us</a></li>
	<li><a href="pabout_us.html">About Us</a></li>
	<li><a href="">Gallery</a></li>
	<li><a href="precipe.html">Recipe</a></li>
	<li><a href="">Blog</a></li>
  
</div>
</ul>


	<div  style="align:center;" class="form">
	
	<div style="font-family:'Permanent Marker', cursive; text-shadow: 3px 3px #93ccea">
	<h1><center> SIGN UP </center></h1></div>
	<div class="input-box">
	<form method="post" onsubmit="return confirm('congrats you are signed in...!');" id="form1">
	 <table> 
				
		<tr>
			<td>
				<div class="table k">
					<input type="text" placeholder="full Name" name="name" required>
				</div>
     		</td>
		</tr>
				
		<tr>
			<td>
				<div class="table k">
					<input type="password"  placeholder="password" name="password" />
				</div>
     		</td>
		</tr>
		
		<tr>
			<td>
				<div class="table k">
					<input type="password"  placeholder="confirm_pass" name="c_pass" />
					<span id="error" style="color:#F00;"> </span>
				</div>
     		</td>
		</tr>
		
		<tr>
			<td>
				<div class="table k">
					<input type="text" placeholder="Enter Email" name="email" required>
				</div>
			</td>
		<tr>
	  </table>
      <div class="clearfix">
               <button type="submit" name="submit" value="Sign Up">Sign Up</button>
        </form>
			<a href="pindex.html" style="color:red"> Click Here To Go Back </a>
		</div>
</body>
</html>