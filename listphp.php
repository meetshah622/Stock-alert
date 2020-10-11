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
            margin-top: 30px;



            border: grey solid 0px;

            overflow-x:hidden;
            border-radius: 25px;
            box-shadow: 6px 12px 25px 2px rgba(0, 0, 0, 0.6);
            overflow:scroll;
        }
table {
  width:98%;
  border-radius:25px;
  
}
table, th, td {
  border: 3px solid black;
  
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: center;
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
                margin-left: 735px;
                margin-top: 3px;
                position:absolute;
                border:solid 0px #316064;
                box-shadow: 8px 8px 26px 0px rgba(0, 0, 0, 0.4)
                    }</style>
</head>
<body>
  <script>
    function onclick()
    {
      window.location("")
    }  
    </script>
<?php 
// $username = "root"; 
// $password = "root123"; 
// $database = "signin"; 
$mysqli = new mysqli('sql111.epizy.com','epiz_26253831','ZmKbr2rtpEsci','epiz_26253831_signin'); 
$query = "SELECT * FROM productdetails";
 
 
echo '
<script>
function validate()
{
  location.href="http://topicaldesign.epizy.com/homepage1.php";
}  
</script>
<input type="submit" value="Close" id="s3" onclick="validate()">
<div id="p1">
        <br>
        <br>
        <br>
        
        <table border="0" cellspacing="1" align="center" cellpadding="1"> 
      <tr> 
         
      <td> <font face="Arial"><b>Product Name</b></font> </td> 
          <td> <font face="Arial"><b>Qty</b></font> </td> 
          <td> <font face="Arial"><b>Price</b></font> </td> 
      </tr> </div>  ';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $pname = $row["pname"];
        $qty = $row["qty"];
        $price = $row["price"];
 
        echo '<tr> 
                  <td>'.$pname.'</td> 
                  <td>'.$qty.'</td> 
                  <td>'.$price.'</td> 
           
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>