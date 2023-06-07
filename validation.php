<?php
$host = "localhost";
$dbname = "boss_db";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password, $dbname) or die("Connection Failed");
if(!empty($_POST['save']))
{
$email = $_POST["email"];
$phone = $_POST["phone"];
$query="select * from login where email='$email' and phone='$phone'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count>0)
{
echo "Login Successful";

}
else 
{
echo "Not Successful";
}
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="qrstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <header>
        
        <p>Please Enter Your Room Number</p>
      </header>
      <div class="form">
        <input type="text" spellcheck="false" placeholder="Enter Room Number">
        
        <button>Generate QR Code</button>
        <a href="C:\xampp\htdocs\Frontend\ui\uiindex.html"><button>Grant Access</button></a>
        
      </div>
      <div class="qr-code">
        <img src="" alt="qr-code">
      </div>
    </div>

    <script src="qrscript.js"></script>

  </body>
</html>