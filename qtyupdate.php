<html>

<head>
    <style>
        body {
            background-color: #E5E5E9;
        }

        #a {

            border: 0px solid gray;
            width: 550px;
            height: 420px;
            margin-left: 33%;
            margin-right: 40%;
            margin-top: 50px;
            border-radius: 25px;
            box-shadow: 6px 12px 46px 0px rgba(0, 0, 0, 0.6);
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

        #b {
            font-size: 30px;
            letter-spacing: 4px;
            font-family: sans-serif;
        }

        img {
            opacity: 0.73;
            border: 0px solid black;
            width: 125px;
            height: 125px;
            padding-left: 35.5%;
            border-radius: 25%;
            margin-top: 0px;

        }

        #c {
            margin-top: 5px;
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
            margin-left: 0.2em;
            padding-right: 0.5em;
            padding-left: 0.2em;
            /* padding-top: */
        }

        #d {
            padding-left: 25%;
            size: 5px;
            width: 10px;
            margin-left:40px;
        }

        #i1 {
            width: 40px;
            height: 40px;
            padding-left: 0px;
            padding-top: 0px;
            margin-top: 3.5px;

        }

        #i2 {
            width: 40px;
            height: 40px;
            padding-left: 0px;
            padding-top: 25px;
            margin-top: 1px;
            padding-left: 0px;
        }
        #i3 {
            width: 40px;
            height: 40px;
            padding-left: 0px;
            padding-top: 25px;
            margin-top: 10px;
            padding-left: 0px;
        }

        #lock {
            margin-left: -60px;
            width: 50px;
            height: 50px;
            opacity: 1;

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
            border-color: #4B908E;
            padding: 3px 10px;
            margin-top: -35px;

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
            margin-top: -35px;
            padding-top: 25px;
        }
        #i11
    {   width:120px;
        height:120px;
        margin-top:10px;
        padding-left:210px;
 
    }
                .text2{

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
margin-top: -35px;
padding-top: 35px;
}
#s3
            {
                width:200px; 
                height:50px;
                font-size:24px;
                letter-spacing:2px;
                border-radius:25px;
                color:white;
                background-color: #4B908E;
                margin-top: 27px;
                margin-left: 0px;
                border:solid 0px #316064;
                box-shadow: 8px 8px 26px 0px rgba(0, 0, 0, 0.4)
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
    <div class="dropdown">
        <button class="dropbtn">
            <img style="width: 40px; height: 40px; padding-left:0px" src="gst.png"></img>
        </button>
        <div class="dropdown-content">
        <a href="http://localhost/index1.php"><span class="padding1">Index</span></a>
            <a href="http://localhost/homepage.php"><span class="padding1">Home</span></a>
            <a href="http://localhost/contactus.php"><span class="padding2" >Contact Us</span></a>
            
        </div>
    </div>
    <div id="a">
        <div id="b">
            <img  id="i11" alt="qtyupdate" src="qty.png" class="center"></img>
        </div>
        <div id="c">
            <span id="c">----- Stock Update -----
            </span>
            <!--<hr size="0">-->
        </div>
        <div id="d">
            <div id="lock">
                <img src="box.png" id="i1">
            </div>

            <form>

                <input type="text" class="text" placeholder="Enter Product Name" ; size="20" maxlength="30"></input>
                <br>


                <div id="lock">
                    <img src="cart.png" id="i2">
                </div>
                <input type="number" class="text1" placeholder="Sold Qty" ; size="25" maxlength="30">
               
              
                <br>
                <input type="submit" value="Update" id="s3" onclick="validate()"></div>
        </div>