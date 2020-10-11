<?php
        session_start();
?>
<html>

<head>
    <style>
        body {
            background-color: #E5E5E9;
        }

        #p1 {
            width: 1475px;
            height: 685px;
            background-color: #E5E5E9;
            margin-left: 22px;
            margin-top: 115px;



            border: grey solid 0px;


            border-radius: 25px;
            box-shadow: 6px 12px 25px 2px rgba(0, 0, 0, 0.6);
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%;
            margin-top: 0px;

        }

        #p2 {
            width: 100px;
            height: 100px;
            background-color: #E5E5E9;
        }

        #b {
            font-size: 30px;
            letter-spacing: 4px;
            font-family: sans-serif;
            width: 1090px;
            height: 220px;
            margin-top:-100px
        }

        img {
            opacity: 0.93;
            border: 0px solid black;
            width: 150px;
            height: 150px;
            padding-left: 35.5%;
            border-radius: 25%;
            width: 220px;
            height: 220px;

        }

        hr {
            display: block;
            margin-top: 0px;


            border-style: inset;
            border-width: 1px;

            border-style: inset;
            border-width: 1px;
            border-color: white;
        }

        #p2 {
            margin-top: 30px;
            width: 600px;
            height: 10px;
            background-color: black;
        }
        #lock1
		{
			margin-left: -60px;
			width: 50px;
			height: 50px;
			opacity: 0.4;
			
        }
        #i1
        {   width: 50px;
            height:50px;
            margin-left: 125px;
            margin-top: -5px;
        }    
        .text1
        {
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
			margin-top: -33px;
            margin-left: 140px;
            padding-left: 0px;
        }
        .text2
        {
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
			margin-top: -20px;
            margin-left: 140px;
            padding-left: 0px;
        }
        #i2
        {   width: 50px;
            height:50px;
            padding-top:10px;
            margin-top: 25px;
            margin-left: 118px;

        }          
        #lock2
		{
			margin-left: -60px;
			width: 50px;
			height: 50px;
			opacity: 0.4;
			
        }
        
        #lock3
		{
			margin-left: -60px;
			width: 50px;
			height: 50px;
			opacity: 0.4;
			
        }
        #i3
        {   width: 50px;
            height:50px;
            
            margin-top: 30px;
            margin-left: 125px;
            padding-top:30px

        }    .text4
        {
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
			margin-top: 0px;
            margin-left: 140px;
            padding-left: 0px;
        }   
        .text8
        {
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
			margin-top: -15px;
            margin-left: 140px;
            padding-left: 0px;
        }  
        #s2 {
            height: 65px;
            width: 450px;
            font-family: arial;
            font-size: 35px;
            color: #316064;
            text-align: center;
            font-weight: bold;
            letter-spacing: 2px;
            opacity: 0.98;
            padding-left: 517px;
            padding-top: 0px;
            padding-right: 0px;
        } 
        .text21
        {
            background-color: transparent;
			color: #eeeeee;
			outline: none;
			outline-style: none;
			outline-offset: 0;
            width: 300px;
			border-radius: 10px;
			color: black;
			font-family: verdana;
			font-size: 1.3vw;
			border:solid white 1.5px;
			border-color : #4B908E ;
			padding : 3px 10px;
			margin-top: -200px;
            margin-left: 590px;
            padding-left: 0px;
            height: 200px;
            padding-left: 10px;
            border-right-width: 2px;
    border-top-width: 2px;
    border-left-width: 1px;
    border-bottom-width: 1px;
        }   
        #lock4
		{
			margin-left: -60px;
			width: 50px;
			height: 50px;
			opacity: 0.4;
			
		}
        #lock5
		{
			margin-left: -60px;
			width: 50px;
			height: 50px;
			opacity: 0.4;
			
		}
        #lock6
		{
			margin-left: -60px;
			width: 50px;
			height: 50px;
			opacity: 0.4;
			
        } 
        #i4
        {   width: 50px;
            height:50px;
            
            margin-top: 30px;
            margin-left: 125px;

        }     
        #i5
        {   width: 50px;
            height:50px;
            padding-top:22px;
           
            margin-top: 25px;
            margin-left: 125px;

        }      
        #i6
        {   width: 50px;
            height:50px;
            margin-top: 25px;
             padding-top: 27px;
            
            margin-left: 125px;

        }     
        .text5
        {
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
			margin-top: -50px;
            margin-left: 140px;
            padding-left: 0px;

            width:287px;
        }
        .text6
        {
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
			margin-top: -10px;
            margin-left: 140px;
            padding-left: 0px;
        }
        .text7
        {
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
			margin-top: 0px;
            margin-left: 140px;
            padding-left: 0px;
        }  
        #pf
        {
            background-color: transparent;
            width: 500px;
            margin-top: -280;
            margin-left: 940px; 
        }
        #s31
		{
			width:150px; 
 			height:50px;
			font-size:23px;
            letter-spacing:5px;
			border-radius:25px;
			color:white;
			background-color: #4B908E;
			margin-top: 20px;
			margin-left: 135px;
			border:solid 0px #316064;
            box-shadow: 8px 8px 26px 0px rgba(0, 0, 0, 0.4)
                }
                #s32
		{
			width:150px; 
 			height:50px;
			font-size:23px;
            letter-spacing:5px;
			border-radius:25px;
			color:white;
			background-color: #4B908E;
			margin-top: 0px;
			margin-left: 100px;
			border:solid 0px #316064;
            box-shadow: 8px 8px 26px 0px rgba(0, 0, 0, 0.4)
                }
            #s33

            {
                background-color: transparent;
                margin-top:10px;
                WIDTH:500px;
                width: 300px;
    margin-left: 400px;
    margin-top: 50px;
            }
            #s34 
            {
                background-color: transparent;
                margin-top:50px;
                WIDTH:500px;
                margin-top: -70;
    margin-left: 625px;
            
            }   
    </style>
</head>


<body>
    
    <div id="p1">


        <div id="b" class="center">
            <img alt="login" src="login.png" class="center"></img>
        </div>
        
        
        <div id="s2">
            ----- Profile -----

            <!--<hr size="0">-->
        </div>
      
        
                <form action="http://topicaldesign.epizy.com/update_details.php" method="POST">
            <div id="lock1">
                <img src="emailicon.png" id="i1">
            </div>
                    <input type="email" class="text1" placeholder="Enter your Email" size="30" maxlength="30" name="email"
            value= "<?php echo $_SESSION['email']; ?>" required > 
            <br>
            <br>

            <div id="lock2">
                    <img src="lock1.png" id="i2">
            </div>
                     <input name="pass" type="password" class="text2" placeholder="Enter Password" size="30" maxlength="10" required value="<?php echo $_SESSION['pass'];?>">
           
            <div id="lock3">
                    <img src="mobile.png" id="i3">
            </div>
          
                     <input name="mno" type="tel" class="text4" placeholder="Enter Mobile-Number" size="30" maxlength="10" required value="<?php echo $_SESSION['mno'];?>">
           <div id="pf"> <div id="lock4">
                    <img src="address.png" id="i4">
            </div>
                     <textarea  name="address" class="text5" placeholder="Enter Address of your shop (in 30 letters)" maxlength="30" size="30" required value="<?php echo $_SESSION['address'];?>"></textarea>
            <div id="lock5">
                    <img src="gst.png" id="i5">
            </div>
                     <input name="gst" type="text" class="text6" placeholder="Enter GST ID" size="30" maxlength="15" required value="<?php echo $_SESSION['gst'];?>">
            <div id="lock6">
                    <img src="shop.png" id="i6">
            </div>
                     <input name="sname"  type="text" class="text7" placeholder="Enter Shop name" maxlength="30" size="30" required value="<?php echo $_SESSION['sname']; ?>"> </div>
                     <textarea placeholder="Description" class="text21" value="<?php echo $_SESSION['dscp'];?>" ></textarea>
          <div id="s33"><input type="submit" value="Update" id="s31" onclick="validate()"></div>
          
           </form>
           <div id="s34"> <a href="http://topicaldesign.epizy.com/homepage1.php"><button  value="Cancel" id="s32" onclick="validate()">Cancel</button></a></div>
          
    
    </div>
</body>

</html>