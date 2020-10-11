<html>

<head>
    <style>
        body {
            background-color: #E5E5E9;
        }

        #c1 {
            width: 1350px;
            height: 555px;
            background-color: #E5E5E9;
            margin-left: 130px;
            margin-top: -20px;



            border: grey solid 0px;


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
            width: 200px;
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

        #c2 {
            height: 65px;
            width: 450px;
            font-family: arial;
            font-size: 35px;
            color: #316064;
            text-align: center;
            font-weight: bold;
            letter-spacing: 2px;
            opacity: 0.98;
            padding-left: 450px;
            padding-top: 20px;
            padding-right: 0px;
            padding-bottom: 0;

        }

        hr {
            display: block;
            margin-top: 0.2em;
            margin-bottom: 0.5em;
            margin-left: 2em;
            margin-right: 2em;
            border-style: inset;
            border-width: 1px;

            border-style: inset;
            border-width: 1px;
            border-color: white;
        }

        #c3 {
            width: 635px;
            height: 450px;
            background-color: #E5E5E9;
            margin-left: 685px;
            margin-top: -450px;
        }

        #c4 {
            width: 635px;
            height: 450px;
            background-color: #E5E5E9;
            margin-left: 30px;

        }

        .text1 {
            background-color: transparent;
            color: #eeeeee;
            outline: none;
            outline-style: none;
            outline-offset: 0;

            border-radius: 10px;
            color: black;
            font-family: verdana;
            font-size: 1.3vw;
            border: solid white 1px;
            border-color: grey;
            padding: 3px 10px;
            margin-top: 25px;
            margin-left: 140px;
            padding-left: 0px;
            padding-left: 10px;
        }

        .text2 {
            background-color: transparent;
            color: #eeeeee;
            outline: none;
            outline-style: none;
            outline-offset: 0;
            width: 400px;
            border-radius: 10px;
            color: black;
            font-family: verdana;
            font-size: 1.3vw;
            border: solid white 1px;
            border-color: grey;
            padding: 3px 10px;
            margin-top: 35px;
            margin-left: 140px;
            padding-left: 0px;
            height: 200px;
            padding-left: 10px
        }

        #c5 {
            width: 175px;
            height: 50px;
            font-size: 30px;
            letter-spacing: 5px;
            border-radius: 25px;
            color: white;
            background-color: #4B908E;
            margin-top: 40px;
            margin-left: 250px;
            border: solid 0px #316064;
            box-shadow: 8px 8px 26px 0px rgba(0, 0, 0, 0.4)
        }

        #c6 {
            opacity: 0.4;
            height: 400px;
            width: 500px;
            margin-left: 120px;
            margin-top: 0px;
        }

        #i3 {
            margin-left: 340px;
            width: 30px;
            height: 30px;
            opacity: 0.4;

        }

        #lock3 {
            margin-left: -60px;
            width: 30px;
            height: 30px;
            opacity: 0.8
        }

        #c7 {
            margin-left: 325px;
            margin-top: -20px;
            letter-spacing: 2px;
            color: #4B908E;
            opacity: 1;
        }

        .padding1 {
            padding-left: 20px;
            letter-spacing: 2px;
        }

        .padding2 {
            padding-left: 0px;
        }
    </style>
</head>

<body onload="validate1()">
    <script>
        function validate1() {
            var emailc1 = document.forms["contactus"]["emailc"];
            var msg1 = document.forms["contactus"]["msg"];

            emailc1.focus();

        }

        function validate() {
            var emailc1 = document.forms["contactus"]["emailc"];
            var msg1 = document.forms["contactus"]["msg"];

            if (emailc1.value == "") {
                window.alert("Please enter a valid e-mail address.");
                emailc1.focus();
                return false;
            }

            if (emailc1.value.indexOf("@", 0) < 0) {
                window.alert("Please enter a valid e @ mail address.");
                emailc1.focus();
                return false;
            }

            if (emailc1.value.indexOf(".", 0) < 0) {
                window.alert("Please enter a valid e . mail address.");
                emailc1.focus();
                return false;
            }
            if (msg1.value == "") {
                window.alert("Please enter a Message address.");
                msg1.focus();
                return false;
            }
        }
    </script>

    <div class="dropdown">
        <button class="dropbtn">
            <img style="width: 40px; height: 40px; padding-left:0px" src="gst.png"></img>
        </button>
        <div class="dropdown-content">
            <a href="http://topicaldesign.epizy.com/index.php"><span class="padding1">Index</span></a>
            <a href="http://topicaldesign.epizy.com/login.php"><span class="padding1">Login</span></a>
            <a href="http://topicaldesign.epizy.com/signup.php"><span class="padding1">SignUp</span></a>

        </div>
    </div>
    <div id="c1">
        <div id="c2">
            ----- Contact Us -----
            <!--<hr size="0">-->
        </div>
        <hr>
        <div id="c4">
            <img src="billco.png" id="c6" alt="bill">
            <div id="lock3">
                <img src="mobile.png" id="i3">
            </div>
            <div id="c7">
                9773005250
            </div>


        </div>
        <div id="c3">
            <form action="contactusphp.php" method="POST" name="contactus">

                <input type="email" class="text1" placeholder="Enter your Email" size="30" maxlength="30" required
                    name="emailc">
                <textarea placeholder="Message" class="text2" name="msg" maxlength="100" required></textarea>
                <input type="submit" value="Submit" id="c5" onclick="validate()">
            </form>
        </div>
    </div>
</body>