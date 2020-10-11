


<html>


<?php 
		include('conn.php');
?>
	<head>
		<link href= "navigation.css" rel="stylesheet" type = "text/css">
		
	<script>
function yo() {
  alert("enter your email registered with us");
}
</script>
	</head>
	<body onload="yo()">
			<!-- Code for Navigation Bar -->
				<div class = "topnav" >
					        <a href = 'home.php' >HOME</a>
					        <a href = 'aboutus.php' >ABOUT US</a>
					        <a href = 'contactus.php' >CONTACT US</a>
					        <a href = 'stores.php' >CENTERS</a>
                            <a href = 'registration.php'>SIGNUP</a>
                            <a href = 'login.php'>LOGIN</a>
                            <b class = "heading"> Brand Treasurer </b>
                            <img src = "search.png" alt ="search">
					        <textarea rows="1" cols = "25" id = 'text' class = "dir">	</textarea>
					        
				        </div>
			<!-- ------------------------------------------------------------- -->
			
			
			<form method="post" action= "forget.php">
    

<input type="text"  name="uname">
    <input type="submit" value="submit"    name="submit" >
	</form>
			 	<?php
				
				      if(isset($_POST["submit"]))
		{
			SESSION_START();
			
			$uname=$_POST['uname'];
			echo $uname;
			$sql="SELECT * FROM `registration1` WHERE email='".$uname."'";
			$result=mysqli_query($conn,$sql);
			$row=$result->fetch_assoc();
			//$row=mysql_fetch_array($result);
			$_SESSION['password']=$row['pass'];
			echo $_SESSION['password'];
			/*$sql2="SELECT mobile FROM `registration1` WHERE email=$uname";
			$resultm=mysqli_query($conn,$sql2);
			$row2=$resultm->fetch_assoc();
			//$row2=mysql_fetch_array($resultm);*/
			$_SESSION['mob']=$row['mobile'];
			echo $_SESSION['mob'];
			
			/*
			$sql1="SELECT email FROM `registration1` WHERE email=$uname";
			$resulte=mysqli_query($conn,$sql1);
			$row1=$resulte->fetch_assoc();
			//$row1=mysql_fetch_array($resulte);*/
			$_SESSION['eemail']=$row['email'];
			echo $_SESSION['eemail'];
			
			
			if($row)
			{
				echo "<script> alert('password will Send to your mobile number and email');window.location='mail1.php'; </script>";
			}
			else
			{
				echo "<script> alert('user not exist');
						</script>";
			}
		}
		?>
		
	</body>

</html>