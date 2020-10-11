<html>

<head>



	<style>
		body {
			background-color: #E5E5E9;
		}

		#a {

			border: 0px solid gray;
			width: 496px;
			height: 496px;
			margin-left: 33%;
			margin-right: 40%;
			margin-top:10px;
			border-radius: 25px;
			box-shadow: 6px 12px 46px 0px rgba(0, 0, 0, 0.6);
		}
		#b{
			font-size: 30px;
			letter-spacing: 4px;
			font-family: sans-serif;
		}

		img {
			opacity: 0.93;
			border: 0px solid black;
			width: 150px;
			height: 150px;
			padding-left: 35.5%;
			border-radius: 25%;

		}

		#c {
			height: 65px;
			font-family: arial;
			font-size: 35px;
			color: #316064;
			text-align: center;
			font-weight: bold;
			letter-spacing: 2px;
			opacity: 0.98;
		}

		hr {
			margin-left : 0.2em;
			padding-right: 0.5em;
			padding-left: 0.2em;
			/* padding-top: */
		}

		#d {
			padding-left: 25%;
			size: 5px;
			width: 10px;
		}
		#f1{
		
			width: 200px;
			color: black;
			margin-top: -11px;
			margin-left: 69px;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			font-size: 13px;
			color:grey;
		}

		.text {

			background-color: transparent;
			color: #eeeeee;
			outline: none;
			outline-style: none;
			outline-offset: 0;
			border-top: none;
			border-left: none;
			border-right: none;
			color: black;
			font-family: verdana;
			font-size: 1vw;
			border-bottom: solid #0C235B 2px;
			border-color : #4B908E;
			padding : 3px 10px;
			margin-top: -35px;

		}
		
		#i1 {
			width: 40px;
			height: 40px;
			padding-left: 15px;
			padding-top: 0px;
			margin-top: 3.5px;

		}
		#i2
		{
			width: 40px;
			height: 40px;
			padding-left: 15px;
			padding-top: 0px;
			margin-top: 1px;
			padding-left: 10px;
		}
		#lock
		{
			margin-left: -60px;
			width: 50px;
			height: 50px;
			opacity: 0.4;
			
		}
		#l1
		{
			width:275px; 
 			height:50px;
			font-size:30px;
			border-radius:25px;
			color:white;
			letter-spacing:5px;
			background-color:#4B908E;
			margin-top: -40px;
			margin-left: -10px;
			border:solid 0px #316064;
			box-shadow: 8px 6px 26px 0px rgba(0, 0, 0, 0.4)
		}
		#f2
		{	width:200px;
			margin-top: 20px;
			margin-left: 69px;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
			color:grey;	
		}
		#ft2
		{
			margin-left: 15px;;
		}
		#f3
		{
			width:300px;
			font-size: 15px;
			margin-left: 20px;
			margin-top: -10px;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			color: grey;
			word-spacing: 2px;
			letter-spacing: 1px;
		}
		a
		{
			color:#316064 ;
		}
		.dropbtn {
			background-color: #4B908E;
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
			border-radius: 100px;
			margin-top: 30px;
			width: 72px;
			height: 72px;
			margin-left: 25px;
			box-shadow: 6px 12px 46px 0px rgba(0, 0, 0, 0.4);
		}

	
		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: rgb(151, 206, 204);
			min-width: 160px;
			box-shadow: 0px 12px 30px 0px  #316064 ;
			z-index: 1;
			border-radius: 25px;
			margin-left: 60px;
			margin-top: -5.5px;
			border-right-color: #000102;
			width:200px;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			border-radius: 25px;
			padding-left: 50px;
			font-size: 19px;
			font-family: Arial, Helvetica, sans-serif;
			color: #316064;
			font-weight: bold;
			letter-spacing: 2px;

		}

		.dropdown-content a:hover {
			background-color: #f1f1f1
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #316064;
		}
		.padding1
{
  padding-left:20px;
  letter-spacing:2px;
}
.padding2
{
  padding-left:0px;
}
	</style>
</head>

<body>

<!--  
	<script> 
function validate()                                    
{ 
    var email1 = document.forms["logintemp"]["email"];               
    var pass1 = document.forms["logintemp"]["pass"];  

	if (email1.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    if (email1.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    if (email1.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
	if (pass1.value == "")                        
    { 
        window.alert("Please enter your password"); 
        pass1.focus(); 
        return false; 
    } 
}
	</script> --> 
<div class="dropdown">
		<button class="dropbtn">
			<img  style="width: 40px; height: 40px; padding-left:0px" src="gst.png"></img>
		</button>
		<div class="dropdown-content">
			<a href="http://topicaldesign.epizy.com/index.php"><span class="padding1">Index</span></a>
			
			<a href="http://topicaldesign.epizy.com/signup.php"><span class="padding1">SignUp</span></a>
			<a href="http://topicaldesign.epizy.com/contactus.php"><span class="padding2" >Contact Us</span></a>
			
		</div>
	</div>
	<div id="a">

		<div id="b">
			<img alt="login" src="login.png" class="center"></img>
		</div>
		<div id="c">
			<span id="c">----- LogIn -----
			</span>
			<!--<hr size="0">-->
		</div>
		

		

		<div id="d">
			<div id="lock">
					<img src="emailicon.png" id="i1">
			</div>
	
			<form name="logintemp" action="http://topicaldesign.epizy.com/loginphp.php" method="POST">
				
				<input  required type="email" name="email" class="text" placeholder="Enter Email Address" ; size="25" maxlength="30"></input>
				<br>
				
				
				<div id="lock">
						<img src="lock1.png" id="i2">
				</div>
				<input  required type="password" name="pass" class="text" placeholder="Enter password"  size="25" maxlength="30">
					<br>
					<br>
					<br>
					<br>


				<input id="l1" name="login" value="Login" padding-left="20%" align="center" type="submit" onclick="validate()" >
			
				<br>
				<br>
				<div id="f1">
					<a href="http://topicaldesign.epizy.com/forgotpass.php">Forgot password?</a>
				</div>
				<br>
				<div id="f2">
						<span id="ft2">Not a Member?
						</span>
				</div>
						<br>	
				<div id="f3">
						<a href="http://topicaldesign.epizy.com/signup.php"><u>CREATE ACCOUNT HERE</u></a>
				</div>


			</form>
		</div>
	</div>
</body>

</html>
