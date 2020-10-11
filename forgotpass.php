<?php session_start(); ?>


<?php

			
//database connection

$conn = mysqli_connect('localhost','root','root123','signin');
	
if($conn->connect_error) {
    die('connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into signin(email,pass,rpass,mno,address,gst,sname,dscp)     
    values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssissss",$email,$pass,$rpass,$mno,$address,$gst,$sname,$dscp);
    $stmt->execute();
  
    $stmt->close();
  
}


?>
<html>

<head>


    <style>
        body {
            background-color: #E5E5E9;
        }

        #f1 {
            width: 500px;
            height: 250px;
            border: grey 0px solid;
            border-radius: 25px;
            margin-left: 512px;
            margin-top: 120px;
            box-shadow: 1px 8px 46px 0px rgba(0, 0, 0, 0.6);
        }

        #f2 {
            width: 500px;
            font-size: 30px;
            margin-left: 10px;
            margin-top: 10px;
            font-family: arial;
            font-size: 35px;
            color: #316064;
            text-align: center;
            font-weight: bold;
            letter-spacing: 1px;
            opacity: 0.98;
            padding-top: 10px
        }

        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: 2em;
            margin-right: 2em;
            border-style: inset;
            border-width: 1px;

            border-style: inset;
            border-width: 1px;
            border-color: white;
        }

        .text1 {

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
            border-color: #4B908E;
            padding: 3px 10px;
            margin-top: -30px;
            margin-left: 63px;
            padding-left: 0px;
            padding-top: 3px
        }

        #i1 {
            width: 50px;
            height: 50px;
            padding-left: 5px;
            padding-top: 1px;
            opacity: 0.4;
        }

        #lock1 {
            width: 50px;
            height: 50px;
            margin-top: 20px;
            margin-right: 0px;
            margin-left: 70px;

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
            box-shadow: 0px 12px 30px 0px #316064;
            z-index: 1;
            border-radius: 25px;
            margin-left: 60px;
            margin-top: -5.5px;
            border-right-color: #000102;
            width: 200px;
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

        #s3 {
            width: 275px;
            height: 50px;
            font-size: 22px;
            letter-spacing: 2px;
            border-radius: 25px;
            color: white;
            background-color: #4B908E;


            border: solid 0px #316064;
            box-shadow: 8px 8px 26px 0px rgba(0, 0, 0, 0.4);
            margin-left: 120px;
            width: 132px;
            height: 42px;
            margin-top: 40px;
        }

        .padding1 {
            padding-left: 18px;
            letter-spacing: 2px;
        }

        .padding2 {
            padding-left: 0px;
        }
    </style>

</head>

<body>
    <div class="dropdown">
        <button class="dropbtn">
            <img style="width: 40px; height: 40px; padding-left:0px" src="gst.png"></img>
        </button>
        <div class="dropdown-content">
            <a href="http://localhost/index1.php"><span class="padding1">Index</span></a>
            <a href="http://localhost/login.php"><span class="padding1">Login</span></a>
            <a href="http://localhost/signup.php"><span class="padding1">SignUp</span></a>
            <a href="http://localhost/contactus.php"><span class="padding2">Contact Us</span></a>
        </div>
    </div>
    <div id="f1">
        <div id="f2">
            Forgot Password
        </div>
        <hr>
        <form action="forgotpass.php" method="post">
        <div id="lock1">
            <img src="emailicon.png" id="i1">



            <input type="text" class="text1" name="uname" placeholder="Enter your registered mail id" maxlength="30"
                size="30">
            <input type="submit" value="Get mail" id="s3" name="submit" onclick="validate()">


        </div>
    </form>
        <?php
				
				      if(isset($_POST["submit"]))
		{
			
			
			$uname=$_POST['uname'];
			
            $sql="SELECT * FROM `signin` WHERE email='".$uname."'";
            
			$result=mysqli_query($conn,$sql);
			$row=$result->fetch_assoc();
			//$row=mysql_fetch_array($result);
			$_SESSION['password']=$row['pass'];
			
			/*$sql2="SELECT mobile FROM `registration1` WHERE email=$uname";
			$resultm=mysqli_query($conn,$sql2);
			$row2=$resultm->fetch_assoc();
			//$row2=mysql_fetch_array($resultm);*/
			
		
			
			/*
			$sql1="SELECT email FROM `registration1` WHERE email=$uname";
			$resulte=mysqli_query($conn,$sql1);
			$row1=$resulte->fetch_assoc();
			//$row1=mysql_fetch_array($resulte);*/
			$_SESSION['eemail']=$row['email'];
		
			
			if($row)
			{
				echo "<script> window.location='mail1.php'; </script>";
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