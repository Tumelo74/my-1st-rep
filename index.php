<?php
session_start();

    include("database/connection.php");
    include("include/functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
   <!----Title---->
<title>Balance Nutrition</title>
<!----External Css---->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="icon" href="./images/logo.jpg">


<div class="topnav">
   <a class="active" href="Home.php">Home</a>
   <a href="authorisation/Login.php">Login</a>
   <a href="authorisation/Sign Up.php">Sign up</a>
   <a href="About Us.php">About Us</a>
   <a href="authorisation/logout.php">Logout</a>
 </div>

</head>
<!--Close the Head---->

<body>
<!----------Nav------------>
<ul>
<a><a><img style="float:left;" id="logo" src="./images/logo.jpg"></img></a></a>

<center><h1>Balance Nutrition</h1><p id="slogan"><font size="+1"><u><b>Eat healthy and have a happy, healthy life</b></u></font></p></center>
</ul>
</li><!-----Suggestion :login on the center with a larger fontSize------>
</div>
</body>

<!---PopUp Script for Welcoming the user
<script>alert('Hello php echo $user_data['user_name']; Welcome to Balance Nutrition')</script>-->

<footer>
    <?php include('include/Footer.php'); ?> 
</footer>



</html>