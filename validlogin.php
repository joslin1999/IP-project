<?php
global $con;

$con=mysqli_connect("localhost","root","","logindata");

if($con === false){ 
	die("ERROR: Could not connect. " 
				. mysqli_connect_error()); 
} 
if(isset($_POST['submit'])) {
		$Name = $_POST['Name'];
		$password= $_POST['password'];
$sql = "SELECT Name FROM logindatacontent WHERE Name='$Name' AND password='$password'"; 
$res = mysqli_query($con, $sql);

if($res !=null) {
	session_start();
	
	$_SESSION['Name'] = $Name;
		header("location: newindex (1).html");
}else{
	echo "NO";
}}


?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts1/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css1/util.css">
  <link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  
  <div class="container-login100" style="background-image: url('images1/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
      <form class="login100-form validate-form" action="payment.html">
        <span class="login100-form-title p-b-37">
          Sign In
        </span>

        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username ">
          <input class="input100" type="text" name="Name" placeholder="username ">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
          <input class="input100" type="password" name="password" placeholder="password">
          <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn" name="submit"><a href="payment.html">
            Sign In</a>
          </button>
        </div>

        <div class="text-center p-t-57 p-b-20">
          <span class="txt1">
            Or login with
          </span>
        </div>

        <div class="flex-c p-b-112">
          <a href="#" class="login100-social-item">
            <i class="fa fa-facebook-f"></i>
          </a>

          <a href="#" class="login100-social-item">
            <img src="images1/icons/icon-google.png" alt="GOOGLE">
          </a>
        </div>

        <div class="text-center">
          <a href="signup.php" class="txt2 hov1">
            Sign Up
          </a>
        </div>
      </form>

      
    </div>
  </div>
  
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js1/main.js"></script>

</body>
</html>